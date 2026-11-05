@extends('layouts.app')

@section('seo')
    <title>Sitemap | S R Chemicals</title>
    <meta name="description" content="HTML Sitemap for S R Chemicals - Browse all pages including products, blog, and contact information.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Sitemap | S R Chemicals">
    <meta property="og:description" content="HTML Sitemap for S R Chemicals - Browse all pages including products, blog, and contact information.">
    <meta property="og:url" content="https://www.srchems.com/sitemap">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.srchems.com/assets/images/logo/logo.1.jpg">
@endsection

@section('content')

<!-- ========================
    page title
=========================== -->
<section class="page-title-layout2 page-title-light text-center pb-0 bg-overlay bg-parallax">
    <div class="bg-img"><img src="{{ asset('assets/images/') }}" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
                <h1 class="pagetitle-heading mt-50">Site Map</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area">
        <div class="container">
            <nav>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}"><i class="icon-home"></i> <span>Home</span></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Sitemap</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- /.page-title -->

<!-- ========================
    Sitemap Section
=========================== -->
<section class="pt-90 pb-80">
    <div class="container">
        <div class="row mb-50">
            <div class="col-12 text-center">
                <div class="heading-layout1">
                    <h2 class="heading-title">All Pages</h2>
                    <p class="heading-desc">A complete list of all pages on S R Chemicals website to help you navigate quickly.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Main Pages -->
            <div class="col-sm-12 col-md-6 col-lg-3 mb-40">
                <div style="background:#f7fbff; border-radius:10px; padding:30px; height:100%; box-shadow:0 2px 15px rgba(0,0,0,0.06);">
                    <h4 style="color:#1a2340; font-weight:700; margin-bottom:20px; padding-bottom:10px; border-bottom:2px solid #1a73e8;">
                        <i class="icon-home mr-8" style="color:#1a73e8;"></i> Main Pages
                    </h4>
                    <ul class="list-unstyled" style="line-height:2.2;">
                        <li><a href="{{ route('home') }}" style="color:#444;">Home</a></li>
                        <li><a href="{{ route('about') }}" style="color:#444;">About Us</a></li>
                        <li><a href="{{ route('our_products') }}" style="color:#444;">Our Products</a></li>
                        <li><a href="{{ route('blog') }}" style="color:#444;">Blog</a></li>
                        <li><a href="{{ route('contact_us') }}" style="color:#444;">Contact Us</a></li>
                    </ul>

                    <h4 style="color:#1a2340; font-weight:700; margin-top:25px; margin-bottom:15px; padding-bottom:10px; border-bottom:2px solid #1a73e8;">
                        <i class="icon-location mr-8" style="color:#1a73e8;"></i> Locations
                    </h4>
                    <ul class="list-unstyled" style="line-height:2.2;">
                        <li><a href="{{ route('chemical_exporter_supplier_vietnam') }}" style="color:#444;">Vietnam Chemical Export Services</a></li>
                        <li><a href="{{ route('chemical_exporter_supplier_thailand') }}" style="color:#444;">Thailand Chemical Export Services</a></li>
                    </ul>
                </div>
            </div>

            <!-- Sodium Phosphate Products -->
            <div class="col-sm-12 col-md-6 col-lg-3 mb-40">
                <div style="background:#f7fbff; border-radius:10px; padding:30px; height:100%; box-shadow:0 2px 15px rgba(0,0,0,0.06);">
                    <h4 style="color:#1a2340; font-weight:700; margin-bottom:20px; padding-bottom:10px; border-bottom:2px solid #1a73e8;">
                        <i class="fas fa-flask mr-8" style="color:#1a73e8;"></i> Sodium Phosphate
                    </h4>
                    <ul class="list-unstyled" style="line-height:2.2;">
                        <li><a href="{{ route('sodium_phosphate') }}" style="color:#444;">Sodium Phosphate (Overview)</a></li>
                        <li><a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" style="color:#444;">Mono Sodium Phosphate Anhydrous</a></li>
                        <li><a href="{{ route('mono_sodium_phosphate_crystal') }}" style="color:#444;">Mono Sodium Phosphate Crystal</a></li>
                        <li><a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" style="color:#444;">Di Sodium Phosphate Anhydrous</a></li>
                        <li><a href="{{ route('di_sodium_phosphate_crystal') }}" style="color:#444;">Di Sodium Phosphate Crystal</a></li>
                        <li><a href="{{ route('trisodium_phosphate_anhydrous') }}" style="color:#444;">Tri Sodium Phosphate Anhydrous</a></li>
                        <li><a href="{{ route('tri_sodium_phosphate_crystals') }}" style="color:#444;">Tri Sodium Phosphate Crystals</a></li>
                        <li><a href="{{ route('sodium_hexameta_phosphate') }}" style="color:#444;">Sodium Hexameta Phosphate</a></li>
                        <li><a href="{{ route('tetra_sodium_pyro_phosphate') }}" style="color:#444;">Tetra Sodium Pyro Phosphate</a></li>
                        <li><a href="{{ route('sodium_acid_pyrophosphate') }}" style="color:#444;">Sodium Acid Pyrophosphate</a></li>
                    </ul>
                </div>
            </div>

            <!-- Potassium & Ammonium Products -->
            <div class="col-sm-12 col-md-6 col-lg-3 mb-40">
                <div style="background:#f7fbff; border-radius:10px; padding:30px; height:100%; box-shadow:0 2px 15px rgba(0,0,0,0.06);">
                    <h4 style="color:#1a2340; font-weight:700; margin-bottom:20px; padding-bottom:10px; border-bottom:2px solid #e67e22;">
                        <i class="fas fa-flask mr-8" style="color:#e67e22;"></i> Potassium Phosphate
                    </h4>
                    <ul class="list-unstyled" style="line-height:2.2;">
                        <li><a href="{{ route('potassium_phosphate') }}" style="color:#444;">Potassium Phosphate (Overview)</a></li>
                        <li><a href="{{ route('mono_potassium_phosphate') }}" style="color:#444;">Mono Potassium Phosphate</a></li>
                        <li><a href="{{ route('di_potassium_phosphate') }}" style="color:#444;">Di Potassium Phosphate</a></li>
                        <li><a href="{{ route('tetra_potassium_pyro_phosphate') }}" style="color:#444;">Tetra Potassium Pyro Phosphate</a></li>
                    </ul>

                    <h4 style="color:#1a2340; font-weight:700; margin:30px 0 20px; padding-bottom:10px; border-bottom:2px solid #e67e22;">
                        <i class="fas fa-flask mr-8" style="color:#e67e22;"></i> Ammonium Phosphate
                    </h4>
                    <ul class="list-unstyled" style="line-height:2.2;">
                        <li><a href="{{ route('ammonium_phosphate') }}" style="color:#444;">Ammonium Phosphate (Overview)</a></li>
                        <li><a href="{{ route('monoammonium_phosphate') }}" style="color:#444;">Monoammonium Phosphate</a></li>
                        <li><a href="{{ route('di_ammonium_phosphate') }}" style="color:#444;">Di Ammonium Phosphate</a></li>
                    </ul>
                </div>
            </div>

            <!-- Blog -->
            <div class="col-sm-12 col-md-6 col-lg-3 mb-40">
                <div style="background:#f7fbff; border-radius:10px; padding:30px; height:100%; box-shadow:0 2px 15px rgba(0,0,0,0.06);">
                    <h4 style="color:#1a2340; font-weight:700; margin-bottom:20px; padding-bottom:10px; border-bottom:2px solid #1a73e8;">
                        <i class="fas fa-newspaper mr-8" style="color:#1a73e8;"></i> Blog
                    </h4>
                    <ul class="list-unstyled" style="line-height:2.2;">
                        <li><a href="{{ route('blog') }}" style="color:#444;">Blog — Latest News &amp; Updates</a></li>
                        <li><a href="{{ route('blog_pharma_grade_phosphate') }}" style="color:#444;">Pharma &amp; Analytical Grade Phosphate Salts Manufacturer</a></li>
                        <li><a href="{{ route('blog_inorganic_chemicals') }}" style="color:#444;">High-Purity Inorganic Chemicals Manufacturer GIDC Panoli</a></li>
                        <li><a href="{{ route('blog_msp_anhydrous_vs_crystal') }}" style="color:#444;">Mono Sodium Phosphate Anhydrous vs. Crystal</a></li>
                        <li><a href="{{ route('blog_dipotassium_phosphate_water_treatment') }}" style="color:#444;">Dipotassium Phosphate for Industrial Water Treatment</a></li>
                        <li><a href="{{ route('blog_potassium_phosphate_guide') }}" style="color:#444;">Industrial Buyer's Guide to Potassium Phosphate</a></li>
                        <li><a href="{{ route('blog_ammonium_phosphate_guide') }}" style="color:#444;">Bulk Ammonium Phosphate Supplier (MAP &amp; DAP)</a></li>
                        <li><a href="{{ route('blog_sodium_phosphates_guide') }}" style="color:#444;">Buy Industrial Sodium Acid Pyrophosphate Powder (Na2H2P2O7)</a></li>
                        <li><a href="{{ route('blog_understanding_potassium_phosphate') }}" style="color:#444;">Potassium Phosphate Manufacturer &amp; Supplier | Di, Mono &amp; Tetra Forms</a></li>
                        <li><a href="{{ route('blog_potassium_dihydrogen_phosphate') }}" style="color:#444;">Potassium Dihydrogen Phosphate (KH2PO4) | Technical Grade MKP</a></li>
                        <li><a href="{{ route('blog_di_potassium_phosphate_dkp') }}" style="color:#444;">Di Potassium Phosphate (DKP) 99% Pure | Food &amp; Industrial Grade</a></li>
                        <li><a href="{{ route('blog_tetra_potassium_pyrophosphate_tkpp') }}" style="color:#444;">Tetra Potassium Pyrophosphate (TKPP) | Industrial Supplier</a></li>
                        <li><a href="{{ route('blog_shmp_water_treatment_guide') }}" style="color:#444;">Guide to Sodium Hexametaphosphate (SHMP) in Water Treatment &amp; Cleaning</a></li>
                        <li><a href="{{ route('blog_food_grade_vs_industrial_phosphates') }}" style="color:#444;">Food Grade vs. Industrial Grade Phosphates: Technical Guide</a></li>
                        <li><a href="{{ route('blog_tsp_dsp_metal_phosphating') }}" style="color:#444;">Role of TSP &amp; DSP in Metal Phosphating &amp; Surface Treatment</a></li>
                        <li><a href="{{ route('blog_prevent_caking_phosphate_powder') }}" style="color:#444;">How to Prevent Caking in Bulk Phosphate Powder Storage</a></li>
                        <li><a href="{{ route('blog_srchems_sodium_phosphates_vietnam') }}" style="color:#444;">How SR Chems Sodium Phosphates Enhance Textile Dyeing &amp; Water Treatment in Vietnam</a></li>
                        <li><a href="{{ route('blog_bulk_srchems_phosphates_sourcing_vietnam') }}" style="color:#444;">Sourcing Bulk SR Chems Phosphates from India to Vietnam: Procurement Guide</a></li>
                        <li><a href="{{ route('blog_srchems_phosphates_thailand') }}" style="color:#444;">How SR Chems Phosphates Enhance Scale Control &amp; Metal Cleaning in Thailand</a></li>
                        <li><a href="{{ route('blog_bulk_srchems_phosphates_sourcing_thailand') }}" style="color:#444;">Sourcing Bulk SR Chems Phosphates from India to Thailand: Importer’s Guide</a></li>
                    </ul>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

@endsection
