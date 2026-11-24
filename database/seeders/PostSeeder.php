<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Ensure Admin User exists
        User::updateOrCreate(
            ['email' => 'admin@srchems.com'],
            [
                'name' => 'S R Chemicals Admin',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Load extracted blogs
        $jsonPath = base_path('extracted_blogs.json');
        if (!file_exists($jsonPath)) {
            $this->command->warn('extracted_blogs.json not found, skipping post seed.');
            return;
        }

        $blogs = json_decode(file_get_contents($jsonPath), true);
        if (!is_array($blogs)) {
            $this->command->warn('Invalid extracted_blogs.json format.');
            return;
        }

        foreach ($blogs as $blog) {
            Post::updateOrCreate(
                ['slug' => $blog['slug']],
                [
                    'title' => $blog['title'] ?? Str::headline($blog['slug']),
                    'category' => $blog['category'] ?? 'Industry Insight',
                    'author' => $blog['author'] ?? 'S R Chemicals',
                    'read_time' => $blog['read_time'] ?? '5 min read',
                    'published_date' => !empty($blog['published_date']) ? $blog['published_date'] : now()->toDateString(),
                    'featured_image' => $blog['featured_image'] ?? 'assets/images/blog/inorganic-chemicals-manufacturer.png',
                    'image_alt' => $blog['image_alt'] ?? $blog['title'],
                    'excerpt' => $blog['excerpt'] ?? '',
                    'content' => $blog['body_content'] ?? '',
                    'blade_view' => $blog['blade_view'] ?? null,
                    'status' => 'published',
                    'meta_title' => $blog['meta_title'] ?? $blog['title'],
                    'meta_description' => $blog['meta_description'] ?? $blog['excerpt'],
                    'meta_keywords' => $blog['meta_keywords'] ?? '',
                    'canonical_url' => $blog['canonical_url'] ?? ('https://srchems.com/blog/' . $blog['slug']),
                    'og_title' => $blog['og_title'] ?? $blog['title'],
                    'og_description' => $blog['og_description'] ?? $blog['meta_description'],
                    'og_image' => $blog['og_image'] ?? '',
                ]
            );
        }

        $this->command->info('Successfully seeded ' . count($blogs) . ' posts and verified admin user.');
    }
}
