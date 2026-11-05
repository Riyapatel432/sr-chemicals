<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$baseline = json_decode(file_get_contents(__DIR__ . '/baseline_seo.json'), true);
$targetPath = $argv[1] ?? null;

$pathsToCheck = $targetPath ? [$targetPath => $baseline[$targetPath] ?? null] : $baseline;

$allPassed = true;

foreach ($pathsToCheck as $path => $expected) {
    if (!$expected) {
        echo "No baseline for $path\n";
        continue;
    }
    
    $response = $kernel->handle(Illuminate\Http\Request::create($path, 'GET'));
    $html = $response->getContent();
    
    // 1. Title
    preg_match('/<title>(.*?)<\/title>/is', $html, $m);
    $actualTitle = isset($m[1]) ? trim(html_entity_decode($m[1], ENT_QUOTES | ENT_HTML5, 'UTF-8')) : '';
    $expectedTitle = trim($expected['title']);
    
    // 2. Canonical
    preg_match('/<link rel="canonical" href="([^"]+)"/is', $html, $m);
    $actualCanonical = $m[0] ?? '';
    
    // 3. Headings
    preg_match_all('/<(h[1-6])[^>]*>(.*?)<\/\1>/is', $html, $matches, PREG_SET_ORDER);
    $actualHeadings = [];
    foreach ($matches as $match) {
        $tag = strtolower($match[1]);
        $text = trim(strip_tags($match[2]));
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace('/\s+/', ' ', $text);
        $actualHeadings[] = "[$tag] $text";
    }
    
    $diffs = [];
    if ($actualTitle !== $expectedTitle) {
        $diffs['title'] = ['expected' => $expectedTitle, 'actual' => $actualTitle];
    }
    
    if ($actualHeadings !== $expected['headings']) {
        $diffs['headings'] = [
            'expected_count' => count($expected['headings']),
            'actual_count' => count($actualHeadings),
            'expected' => $expected['headings'],
            'actual' => $actualHeadings
        ];
    }
    
    if (empty($diffs)) {
        echo "[$path] PASS\n";
    } else {
        $allPassed = false;
        echo "[$path] FAIL\n";
        if (isset($diffs['title'])) {
            echo "  Title mismatch:\n    Exp: {$diffs['title']['expected']}\n    Act: {$diffs['title']['actual']}\n";
        }
        if (isset($diffs['headings'])) {
            echo "  Headings mismatch (Exp: {$diffs['headings']['expected_count']}, Act: {$diffs['headings']['actual_count']}):\n";
            $max = max(count($expected['headings']), count($actualHeadings));
            for ($i = 0; $i < $max; $i++) {
                $exp = $expected['headings'][$i] ?? '--- MISSING ---';
                $act = $actualHeadings[$i] ?? '--- EXTRA ---';
                if ($exp !== $act) {
                    echo "    #" . ($i+1) . "\n      Exp: $exp\n      Act: $act\n";
                }
            }
        }
    }
}

