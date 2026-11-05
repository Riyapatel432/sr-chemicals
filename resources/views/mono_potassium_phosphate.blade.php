@extends('layouts.app')

@section('seo')
<title>Mono-Potassium Phosphate (MKP) Manufacturer | SR Chems</title>
    <meta name="description" content="Water-soluble Mono-Potassium Phosphate optimized for agricultural fertigation and advanced food processing applications. Get a technical data sheet.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Mono-Potassium Phosphate (MKP) Manufacturer | SR Chems">
    <meta property="og:description" content="Water-soluble Mono-Potassium Phosphate optimized for agricultural fertigation and advanced food processing applications. Get a technical data sheet.">
    <meta property="og:url" content="https://www.srchems.com/mono-potassium-phosphate">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.srchems.com/assets/images/logo/logo.1.jpg">
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
            <a href="{{ route('our_products') }}">Our Products</a>
            <i class="bi bi-chevron-right small text-white-50"></i>
            <a href="{{ route('potassium_phosphate') }}">Potassium Phosphate</a>
            <i class="bi bi-chevron-right small text-white-50"></i>
            <span class="active">Mono Potassium Phosphate</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <div class="src-hero-tag mb-3">
                    <i class="bi bi-shield-check"></i> Pure Grade Fertilizer & Buffer • KH2PO4 • CAS 7778-77-0
                </div>
                <h1 class="src-page-title">Mono Potassium Phosphate</h1>
                <p class="text-white-50 mt-3 mb-0 fs-5" style="max-width: 720px;">
                    Manufacturer and bulk exporter of high-purity Mono Potassium Phosphate for industrial processing, pharmaceutical buffers, and specialty manufacturing.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact_us') }}" class="src-btn-cta">
                    <span>Send Inquiry</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /.page-hero -->

<!-- ========================
    Product Overview & Quick Details
=========================== -->
<section class="src-product-overview">
    <div class="container-fluid px-lg-5">
        <div class="row g-5">
            <div class="col-12 col-xl-7">
                <div class="mb-4">
                    <span class="src-section-badge mb-2">Compound Profile</span>
                    <h3 class="src-section-title">Mono Potassium Phosphate</h3>
                </div>
                <div class="src-product-img-card">
                    <span class="src-prod-pill">Pure Grade • Panoli GIDC</span>
                    <img src="{{ asset('assets/images/product/tetra_sodium_pyro_phoshpate.png') }}" alt="about" loading="lazy">
                </div>
            </div>

            <div class="col-12 col-xl-5">
                <div class="src-quick-details-card">
                    <h5 class="pricing-title">Product Details:</h5>
                    <ul class="pricing-list">
                        <li><span> Solubility </span><span>Clear </span></li>
              <li><span> Other Names </span><span>Potassium Phosphate Monobasic, Potassium
                Dihydrogen Phosphate.
              </span></li>
              <li><span>Formula:</span><span>KH2PO4</span></li>
              <li><span> Grade </span><span> Technical</span></li>
              <li><span> Packaging</span><span>  Inorganic Chemicals </span></li>
              <li><span> Chemical Name</span><span> 50Kg or 25 Kg HDPE Bags.</span></li>
              <li><span> Make </span><span> S.R.Chemicals </span></li>
                    </ul>
                    <a href="{{ route('contact_us') }}" class="btn-quick-inquire">
                        <i class="bi bi-envelope-fill"></i>
                        <span>Send Inquiry</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- ========================
            Tabbed Technical Specifications & Data Tables
        =========================== -->
        <div class="src-tabs-container mt-5">
            <!-- Tab Navigation Header -->
            <ul class="nav nav-tabs src-spec-nav-tabs" id="mono-potassium-phosphateSpecsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-mono-potassium-phosphate-spec-0-btn" data-bs-toggle="tab" data-bs-target="#tab-mono-potassium-phosphate-spec-0" type="button" role="tab" aria-controls="tab-mono-potassium-phosphate-spec-0" aria-selected="true">
                        <i class="bi bi-tag-fill"></i> Specification
                    </button>
                </li>
            </ul>

            <!-- Tab Content Panes (Exact H6 heading order strictly preserved for SEO) -->
            <div class="tab-content src-spec-tab-content" id="mono-potassium-phosphateSpecsTabsContent">
                <div class="tab-pane fade show active src-spec-block-tab" id="tab-mono-potassium-phosphate-spec-0" role="tabpanel" aria-labelledby="tab-mono-potassium-phosphate-spec-0-btn">
                    <h6 class="heading-title">Specification</h6>
                    <div class="table-responsive">
                        <table>
                            <tr>
            <td>Appearance </td>
            <td>pH of 5% soln.</td>
            <td>Solubility of 10% In
              water</td>
            <td>Loss on drying (at
              105oC)</td>
            <td>Assay :</td>                  
          </tr>
          <tr>
            <td>White Fine crystals</td>
            <td>4.0 – 5.0</td>
            <td>Clear</td>     
            <td>0.5%</td>       
            <td>98.0%min</td>
           
          </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
