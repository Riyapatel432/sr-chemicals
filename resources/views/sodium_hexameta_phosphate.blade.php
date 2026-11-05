@extends('layouts.app')

@section('seo')
<title>Sodium Hexametaphosphate (SHMP) Supplier | SR Chems</title>
    <meta name="description" content="Industrial-strength Sodium Hexametaphosphate (SHMP) perfect for water softening, detergents, and industrial tanning processes. Request wholesale pricing.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Sodium Hexametaphosphate (SHMP) Supplier | SR Chems">
    <meta property="og:description" content="Industrial-strength Sodium Hexametaphosphate (SHMP) perfect for water softening, detergents, and industrial tanning processes. Request wholesale pricing.">
    <meta property="og:url" content="https://www.srchems.com/sodium-hexameta-phosphate">
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
            <a href="{{ route('sodium_phosphate') }}">Sodium Phosphate</a>
            <i class="bi bi-chevron-right small text-white-50"></i>
            <span class="active">Sodium Hexamate Phosphate</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <div class="src-hero-tag mb-3">
                    <i class="bi bi-shield-check"></i> Technical Water Treatment Grade • (NaPO3)6 • CAS 10124-56-8
                </div>
                <h1 class="src-page-title">Sodium Hexamate Phosphate</h1>
                <p class="text-white-50 mt-3 mb-0 fs-5" style="max-width: 720px;">
                    Manufacturer and bulk exporter of high-purity Sodium Hexamate Phosphate for industrial processing, pharmaceutical buffers, and specialty manufacturing.
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
                    <h3 class="src-section-title">Sodium Hexameta Phosphate</h3>
                </div>
                <div class="src-product-img-card">
                    <span class="src-prod-pill">Pure Grade • Panoli GIDC</span>
                    <img src="{{ asset('assets/images/product/tri_sodium_phosphate_anhydrous.png') }}" alt="about" loading="lazy">
                </div>
            </div>

            <div class="col-12 col-xl-5">
                <div class="src-quick-details-card">
                    <h5 class="pricing-title">Product Details:</h5>
                    <ul class="pricing-list">
                        {{-- <li><span> Formula </span><span>(NaPO3)6</span></li>
              <li><span> Storage</span><span>  Room Temperature </span></li>
              <li><span> Ph Level</span><span>10.0 - 10.6</span></li>
              <li><span> Other Names </span><span> TSPP</span></li>
              <li><span> Purity </span><span>  95% Min </span></li>
              <li><span> Form </span><span>Powder</span></li>
              <li><span> Classification </span><span>   Inorganic Chemicals </span></li>              
              <li><span> Supply Ability : </span><span> 50 Kilograms<br> Per Month</span></li> --}}
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
            <ul class="nav nav-tabs src-spec-nav-tabs" id="sodium-hexameta-phosphateSpecsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-sodium-hexameta-phosphate-spec-0-btn" data-bs-toggle="tab" data-bs-target="#tab-sodium-hexameta-phosphate-spec-0" type="button" role="tab" aria-controls="tab-sodium-hexameta-phosphate-spec-0" aria-selected="true">
                        <i class="bi bi-tag-fill"></i> Specification
                    </button>
                </li>
            </ul>

            <!-- Tab Content Panes (Exact H6 heading order strictly preserved for SEO) -->
            <div class="tab-content src-spec-tab-content" id="sodium-hexameta-phosphateSpecsTabsContent">
                <div class="tab-pane fade show active src-spec-block-tab" id="tab-sodium-hexameta-phosphate-spec-0" role="tabpanel" aria-labelledby="tab-sodium-hexameta-phosphate-spec-0-btn">
                    <h6 class="heading-title">Specification</h6>
                    <div class="table-responsive">
                        <table>
                            <tr>  
            <td>Molecular Weight</td>
            <td>Matter insoluble in water % by mass Max.</td>
            <td>Soluble iron compound(as Fe) % by mass Max.</td>
            <td>Phosphate (as P205) % by mass Min.</td>
            <td>Loss in ignition % by mass Min.</td>                             
          </tr>
          <tr>
            <td>611.77</td>
            <td>0.20% </td>
            <td>0.03%</td>
            <td>67.00%</td>     
            <td>3.00 </td>
          </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
