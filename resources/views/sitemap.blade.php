@extends('layouts.app')

@section('seo')
    <title>Sitemap | S R Chemicals</title>
    <meta name="description" content="HTML Sitemap for S R Chemicals - Browse all pages including products, blog, and contact information.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Sitemap | S R Chemicals">
    <meta property="og:description" content="HTML Sitemap for S R Chemicals - Browse all pages including products, blog, and contact information.">
    <meta property="og:url" content="https://www.srchems.com/sitemap">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/logo/logo.1.jpg') }}">
@endsection

@section('content')

<!-- ========================
    Page Hero Section
=========================== -->
<section class="src-page-hero position-relative">
    <div class="src-page-hero-bg" aria-hidden="true">
        <img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="background" loading="eager">
    </div>
    <div class="container-fluid px-lg-5 position-relative" style="z-index: 2;">
        <div class="src-breadcrumb">
            <a href="{{ route('home') }}"><i class="bi bi-house-door-fill me-1"></i> Home</a>
            <i class="bi bi-chevron-right small text-white-50"></i>
            <span class="active">Sitemap</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <span class="badge bg-primary text-white text-uppercase px-3 py-1 fw-bold small mb-2">
                    <i class="bi bi-diagram-3-fill me-1"></i> Complete Website Index
                </span>
                <h1 class="src-page-title">Site Map</h1>
                <p class="text-white-50 mt-2 mb-0 fs-5" style="max-width: 680px;">
                    Fast navigation directory to all inorganic phosphate chemical product pages, export portals, and technical documentation.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('our_products') }}" class="src-btn-cta">
                    <span>Explore Products</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /.page-hero -->

<!-- ========================
    Sitemap Directory Section
=========================== -->
<section class="py-5 py-lg-6 bg-light">
    <div class="container-fluid px-lg-5">
        <div class="src-section-header">
            <span class="src-subheading">Navigation Directory</span>
            <h2 class="src-title">All Pages</h2>
            <p class="src-desc mb-0">A complete structured directory of all pages on S R Chemicals website to help you navigate quickly.</p>
        </div>

        <div class="row g-4">
            <!-- 1. Main Pages & Locations Column -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="src-sitemap-card">
                    <div class="src-sitemap-header">
                        <i class="bi bi-house-door-fill"></i>
                        <h4>Main Pages</h4>
                    </div>
                    <ul class="src-sitemap-list mb-4">
                        <li><a href="{{ route('home') }}"><i class="bi bi-chevron-right"></i> Home</a></li>
                        <li><a href="{{ route('about') }}"><i class="bi bi-chevron-right"></i> About Us</a></li>
                        <li><a href="{{ route('our_products') }}"><i class="bi bi-chevron-right"></i> Our Products</a></li>
                        <li><a href="{{ route('blog') }}"><i class="bi bi-chevron-right"></i> Blog</a></li>
                        <li><a href="{{ route('contact_us') }}"><i class="bi bi-chevron-right"></i> Contact Us</a></li>
                    </ul>

                    <div class="src-sitemap-header">
                        <i class="bi bi-globe-americas"></i>
                        <h4>Locations</h4>
                    </div>
                    <ul class="src-sitemap-list">
                        <li><a href="{{ route('chemical_exporter_supplier_vietnam') }}"><i class="bi bi-chevron-right"></i> Vietnam Chemical Export Services</a></li>
                        <li><a href="{{ route('chemical_exporter_supplier_thailand') }}"><i class="bi bi-chevron-right"></i> Thailand Chemical Export Services</a></li>
                    </ul>
                </div>
            </div>

            <!-- 2. Sodium Phosphate Products Column -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="src-sitemap-card">
                    <div class="src-sitemap-header">
                        <i class="bi bi-hexagon-fill"></i>
                        <h4>Sodium Phosphate</h4>
                    </div>
                    <ul class="src-sitemap-list">
                        <li><a href="{{ route('sodium_phosphate') }}"><i class="bi bi-chevron-right"></i> Sodium Phosphate (Overview)</a></li>
                        <li><a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}"><i class="bi bi-chevron-right"></i> Mono Sodium Phosphate Anhydrous</a></li>
                        <li><a href="{{ route('mono_sodium_phosphate_crystal') }}"><i class="bi bi-chevron-right"></i> Mono Sodium Phosphate Crystal</a></li>
                        <li><a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}"><i class="bi bi-chevron-right"></i> Di Sodium Phosphate Anhydrous</a></li>
                        <li><a href="{{ route('di_sodium_phosphate_crystal') }}"><i class="bi bi-chevron-right"></i> Di Sodium Phosphate Crystal</a></li>
                        <li><a href="{{ route('trisodium_phosphate_anhydrous') }}"><i class="bi bi-chevron-right"></i> Tri Sodium Phosphate Anhydrous</a></li>
                        <li><a href="{{ route('tri_sodium_phosphate_crystals') }}"><i class="bi bi-chevron-right"></i> Tri Sodium Phosphate Crystals</a></li>
                        <li><a href="{{ route('sodium_hexameta_phosphate') }}"><i class="bi bi-chevron-right"></i> Sodium Hexameta Phosphate</a></li>
                        <li><a href="{{ route('tetra_sodium_pyro_phosphate') }}"><i class="bi bi-chevron-right"></i> Tetra Sodium Pyro Phosphate</a></li>
                        <li><a href="{{ route('sodium_acid_pyrophosphate') }}"><i class="bi bi-chevron-right"></i> Sodium Acid Pyrophosphate</a></li>
                    </ul>
                </div>
            </div>

            <!-- 3. Potassium & Ammonium Products Column -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="src-sitemap-card">
                    <div class="src-sitemap-header">
                        <i class="bi bi-gem"></i>
                        <h4>Potassium Phosphate</h4>
                    </div>
                    <ul class="src-sitemap-list mb-4">
                        <li><a href="{{ route('potassium_phosphate') }}"><i class="bi bi-chevron-right"></i> Potassium Phosphate (Overview)</a></li>
                        <li><a href="{{ route('mono_potassium_phosphate') }}"><i class="bi bi-chevron-right"></i> Mono Potassium Phosphate</a></li>
                        <li><a href="{{ route('di_potassium_phosphate') }}"><i class="bi bi-chevron-right"></i> Di Potassium Phosphate</a></li>
                        <li><a href="{{ route('tetra_potassium_pyro_phosphate') }}"><i class="bi bi-chevron-right"></i> Tetra Potassium Pyro Phosphate</a></li>
                    </ul>

                    <div class="src-sitemap-header">
                        <i class="bi bi-droplet-fill"></i>
                        <h4>Ammonium Phosphate</h4>
                    </div>
                    <ul class="src-sitemap-list">
                        <li><a href="{{ route('ammonium_phosphate') }}"><i class="bi bi-chevron-right"></i> Ammonium Phosphate (Overview)</a></li>
                        <li><a href="{{ route('monoammonium_phosphate') }}"><i class="bi bi-chevron-right"></i> Monoammonium Phosphate</a></li>
                        <li><a href="{{ route('di_ammonium_phosphate') }}"><i class="bi bi-chevron-right"></i> Di Ammonium Phosphate</a></li>
                    </ul>
                </div>
            </div>

            <!-- 4. Blog & Industry Guides Column -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="src-sitemap-card">
                    <div class="src-sitemap-header">
                        <i class="bi bi-journal-text"></i>
                        <h4>Blog</h4>
                    </div>
                    <ul class="src-sitemap-list" style="max-height: 480px; overflow-y: auto;">
                        <li><a href="{{ route('blog') }}"><i class="bi bi-chevron-right"></i> Blog — Latest News &amp; Updates</a></li>
                        <li><a href="{{ route('blog_pharma_grade_phosphate') }}"><i class="bi bi-chevron-right"></i> Pharma &amp; Analytical Grade Phosphate Salts</a></li>
                        <li><a href="{{ route('blog_inorganic_chemicals') }}"><i class="bi bi-chevron-right"></i> High-Purity Inorganic Chemicals Panoli</a></li>
                        <li><a href="{{ route('blog_msp_anhydrous_vs_crystal') }}"><i class="bi bi-chevron-right"></i> Mono Sodium Phosphate Anhydrous vs Crystal</a></li>
                        <li><a href="{{ route('blog_dipotassium_phosphate_water_treatment') }}"><i class="bi bi-chevron-right"></i> Dipotassium Phosphate for Water Treatment</a></li>
                        <li><a href="{{ route('blog_potassium_phosphate_guide') }}"><i class="bi bi-chevron-right"></i> Industrial Buyer's Guide to Potassium Phosphate</a></li>
                        <li><a href="{{ route('blog_ammonium_phosphate_guide') }}"><i class="bi bi-chevron-right"></i> Bulk Ammonium Phosphate Supplier</a></li>
                        <li><a href="{{ route('blog_sodium_phosphates_guide') }}"><i class="bi bi-chevron-right"></i> Buy Industrial SAPP Powder</a></li>
                        <li><a href="{{ route('blog_understanding_potassium_phosphate') }}"><i class="bi bi-chevron-right"></i> Potassium Phosphate Forms &amp; Uses</a></li>
                        <li><a href="{{ route('blog_potassium_dihydrogen_phosphate') }}"><i class="bi bi-chevron-right"></i> Potassium Dihydrogen Phosphate (MKP)</a></li>
                        <li><a href="{{ route('blog_di_potassium_phosphate_dkp') }}"><i class="bi bi-chevron-right"></i> Di Potassium Phosphate (DKP) 99% Pure</a></li>
                        <li><a href="{{ route('blog_tetra_potassium_pyrophosphate_tkpp') }}"><i class="bi bi-chevron-right"></i> Tetra Potassium Pyrophosphate (TKPP)</a></li>
                        <li><a href="{{ route('blog_shmp_water_treatment_guide') }}"><i class="bi bi-chevron-right"></i> Guide to SHMP in Water Treatment</a></li>
                        <li><a href="{{ route('blog_food_grade_vs_industrial_phosphates') }}"><i class="bi bi-chevron-right"></i> Food Grade vs Industrial Grade Phosphates</a></li>
                        <li><a href="{{ route('blog_tsp_dsp_metal_phosphating') }}"><i class="bi bi-chevron-right"></i> Role of TSP &amp; DSP in Metal Phosphating</a></li>
                        <li><a href="{{ route('blog_prevent_caking_phosphate_powder') }}"><i class="bi bi-chevron-right"></i> Prevent Caking in Bulk Phosphate Powder</a></li>
                        <li><a href="{{ route('blog_srchems_sodium_phosphates_vietnam') }}"><i class="bi bi-chevron-right"></i> Phosphates for Vietnam Textile &amp; Water</a></li>
                        <li><a href="{{ route('blog_bulk_srchems_phosphates_sourcing_vietnam') }}"><i class="bi bi-chevron-right"></i> Bulk Sourcing Guide: India to Vietnam</a></li>
                        <li><a href="{{ route('blog_srchems_phosphates_thailand') }}"><i class="bi bi-chevron-right"></i> Phosphates for Scale Control in Thailand</a></li>
                        <li><a href="{{ route('blog_bulk_srchems_phosphates_sourcing_thailand') }}"><i class="bi bi-chevron-right"></i> Bulk Sourcing Guide: India to Thailand</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
