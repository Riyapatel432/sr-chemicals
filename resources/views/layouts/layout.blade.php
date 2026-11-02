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
    @hasSection('seo')
        @yield('seo')
    @else
        <meta name="description" content="S R Chemicals - Sodium Acid Pyrophosphate Manufacturer, Di Ammonium Phosphate Supplier, Exporter">
        <title>S R Chemicals - Sodium Acid Pyrophosphate Manufacturer, Di Ammonium Phosphate Supplier, Exporter</title>
    @endif
    <link href="assets/images/favicon/favicon_1.jpg" rel="icon">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9DZ25FL7YS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-9DZ25FL7YS');
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/libraries.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Organization & WebSite Schema -->
    <script type="application/ld+json">
    {"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://srchems.com/#organization","name":"SR Chems","url":"https://srchems.com/","logo":{"@type":"ImageObject","url":"https://srchems.com/assets/img/added/blue-logo.png"},"description":"SR Chems is a trusted manufacturer and bulk supplier of high-purity phosphate chemicals and industrial inorganic salts.","address":{"@type":"PostalAddress","streetAddress":"GF-10, Bhavani Shopping Complex, Nr. Hotel NyayMandir, Zadeshwar","addressLocality":"Bharuch","addressRegion":"Gujarat","postalCode":"392015","addressCountry":"IN"},"contactPoint":{"@type":"ContactPoint","telephone":"+91-9913645555","contactType":"sales","email":"info@srchems.com"}},{"@type":"WebSite","@id":"https://srchems.com/#website","url":"https://srchems.com/","name":"SR Chems","description":"SR Chems is a trusted manufacturer and bulk supplier of high-purity phosphate chemicals and industrial inorganic salts.","publisher":{"@id":"https://srchems.com/#organization"}}]}
    </script>
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <div class="page-wrapper">
        @include('layouts.header')
        @yield('content')
    </div>
  @include('layouts.footer')