<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="y-WPKFjPIFvjXHv9Dhmzmqlvqefi4Gq3SlBq94cEUlg" />

    <!-- Dynamic Canonical Tag (non-www) -->
    <link rel="canonical" href="https://srchems.com{{ request()->getPathInfo() === '/' ? '/' : request()->getPathInfo() }}">

    <!-- Open Graph Site Name & Twitter Card Integration -->
    <meta property="og:site_name" content="S R Chemicals">
    <meta name="twitter:card" content="summary_large_image">

    @hasSection('seo')
        @yield('seo')
    @else
        <meta name="description" content="S R Chemicals - Sodium Acid Pyrophosphate Manufacturer, Di Ammonium Phosphate Supplier, Exporter">
        <title>S R Chemicals - Sodium Acid Pyrophosphate Manufacturer, Di Ammonium Phosphate Supplier, Exporter</title>
    @endif

    <link href="{{ asset('assets/images/favicon/favicon_1.jpg') }}" rel="icon">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9DZ25FL7YS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-9DZ25FL7YS');
    </script>

    <!-- Preconnect & Modern Typography (Plus Jakarta Sans & Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Vite Compiled Modern SCSS & JS -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <!-- Organization & WebSite Schema (Exact Original Preserved) -->
    <script type="application/ld+json">
    {"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://srchems.com/#organization","name":"SR Chems","url":"https://srchems.com/","logo":{"@type":"ImageObject","url":"https://srchems.com/assets/img/added/blue-logo.png"},"description":"SR Chems is a trusted manufacturer and bulk supplier of high-purity phosphate chemicals and industrial inorganic salts.","address":{"@type":"PostalAddress","streetAddress":"GF-10, Bhavani Shopping Complex, Nr. Hotel NyayMandir, Zadeshwar","addressLocality":"Bharuch","addressRegion":"Gujarat","postalCode":"392015","addressCountry":"IN"},"contactPoint":{"@type":"ContactPoint","telephone":"+91-9913645555","contactType":"sales","email":"info@srchems.com"}},{"@type":"WebSite","@id":"https://srchems.com/#website","url":"https://srchems.com/","name":"SR Chems","description":"SR Chems is a trusted manufacturer and bulk supplier of high-purity phosphate chemicals and industrial inorganic salts.","publisher":{"@id":"https://srchems.com/#organization"}}]}
    </script>
</head>

<body>
    <!-- Skip to main content for WCAG AA Accessibility -->
    <a href="#mainContent" class="visually-hidden-focusable btn btn-primary position-absolute top-0 start-0 m-2 z-3">Skip to main content</a>

    @include('partials.header')

    <main id="mainContent">
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>

