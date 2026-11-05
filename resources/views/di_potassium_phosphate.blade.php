@extends('layouts.app')

@section('seo')
<title>Di-Potassium Phosphate (DKP) Bulk Supplier | SR Chems</title>
    <meta name="description" content="Source pure Di-Potassium Phosphate for food processing, buffering agents, and pharmaceutical synthesis. Secure competitive market pricing with SR Chems.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Di-Potassium Phosphate (DKP) Bulk Supplier | SR Chems">
    <meta property="og:description" content="Source pure Di-Potassium Phosphate for food processing, buffering agents, and pharmaceutical synthesis. Secure competitive market pricing with SR Chems.">
    <meta property="og:url" content="https://www.srchems.com/di-potassium-phosphate">
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
            <span class="active">Di Potassium Phosphate</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <div class="src-hero-tag mb-3">
                    <i class="bi bi-shield-check"></i> Pure & Technical Grade Buffer • K2HPO4 • CAS 7758-11-4
                </div>
                <h1 class="src-page-title">Di Potassium Phosphate</h1>
                <p class="text-white-50 mt-3 mb-0 fs-5" style="max-width: 720px;">
                    Manufacturer and bulk exporter of high-purity Di Potassium Phosphate for industrial processing, pharmaceutical buffers, and specialty manufacturing.
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
                    <h3 class="src-section-title">Di Potassium Phosphate</h3>
                </div>
                <div class="src-product-img-card">
                    <span class="src-prod-pill">Pure Grade • Panoli GIDC</span>
                    <img src="{{ asset('assets/images/product/di_potassium_phosphate.png') }}" alt="about" loading="lazy">
                </div>
            </div>

            <div class="col-12 col-xl-5">
                <div class="src-quick-details-card">
                    <h5 class="pricing-title">Product Details:</h5>
                    <ul class="pricing-list">
                        <li><span> Solubility</span><span>Clear</span></li>
              <li><span> Purity </span><span>99%</span></li>
              <li><span> Storage </span><span>  Keep away from moisture </span></li>
              <li><span> Other Names </span><span>  Di Potassium Phosphate</span></li>
              <li><span> Classification:</span><span> Inorganic Chemicals</span></li>
              <li><span> Chemical Name:</span><span>  Di Potassium Phosphate</span></li>
              <li><span> CAS No :</span><span>  7758-11-4</span></li>
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
            <ul class="nav nav-tabs src-spec-nav-tabs" id="di-potassium-phosphateSpecsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-di-potassium-phosphate-spec-0-btn" data-bs-toggle="tab" data-bs-target="#tab-di-potassium-phosphate-spec-0" type="button" role="tab" aria-controls="tab-di-potassium-phosphate-spec-0" aria-selected="true">
                        <i class="bi bi-tag-fill"></i> Price And Quantity
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-potassium-phosphate-spec-1-btn" data-bs-toggle="tab" data-bs-target="#tab-di-potassium-phosphate-spec-1" type="button" role="tab" aria-controls="tab-di-potassium-phosphate-spec-1" aria-selected="false">
                        <i class="bi bi-card-checklist"></i> Product Specifications
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-potassium-phosphate-spec-2-btn" data-bs-toggle="tab" data-bs-target="#tab-di-potassium-phosphate-spec-2" type="button" role="tab" aria-controls="tab-di-potassium-phosphate-spec-2" aria-selected="false">
                        <i class="bi bi-truck"></i> Product Description
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-potassium-phosphate-spec-3-btn" data-bs-toggle="tab" data-bs-target="#tab-di-potassium-phosphate-spec-3" type="button" role="tab" aria-controls="tab-di-potassium-phosphate-spec-3" aria-selected="false">
                        <i class="bi bi-file-text-fill"></i> Specifications
                    </button>
                </li>
            </ul>

            <!-- Tab Content Panes (Exact H6 heading order strictly preserved for SEO) -->
            <div class="tab-content src-spec-tab-content" id="di-potassium-phosphateSpecsTabsContent">
                <div class="tab-pane fade show active src-spec-block-tab" id="tab-di-potassium-phosphate-spec-0" role="tabpanel" aria-labelledby="tab-di-potassium-phosphate-spec-0-btn">
                    <h6 class="heading-title">Price And Quantity</h6>
                    <div class="table-responsive">
                        <table>
                            <tr>
            <td>Minimum Order Quantity</td>
            <td>10000 Kilograms</td>
          </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-di-potassium-phosphate-spec-1" role="tabpanel" aria-labelledby="tab-di-potassium-phosphate-spec-1-btn">
                    <h6 class="heading-title">Product Specifications</h6>
                    <div class="table-responsive">
                        <table>
                            <tr>
            <td>Other Names</td>
            <td>Di Potassium Phosphate</td>
            <td>Purity</td>
            <td>99%</td>
          </tr>
          <tr>
            <td>Storage </td>
            <td>Keep away from moisture</td>
            <td>Solubility</td>
            <td>Clear</td>
          </tr>
          <tr>
            <td>Grade</td>
            <td>Food Grade </td>
            <td>Chemical Name </td>
            <td>Di Potassium Phosphate</td>
          </tr>
          <tr>
            <td>Classification</td>
            <td>Inorganic Chemicals </td>
            <td>CAS No</td>
            <td>7758-11-4</td>
          </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-di-potassium-phosphate-spec-2" role="tabpanel" aria-labelledby="tab-di-potassium-phosphate-spec-2-btn">
                    <h6 class="heading-title">Product Description</h6>
                    <div class="table-responsive">
                        <table>
                            <tr class="color-white">
            <td>
            <p> 
              Di-Potassium Phosphate is produced when Phosphoric acid reacts with a couple of equivalents until the desired pH value of achieved. The mentioned chemical compound is available in white fine powder. As the name suggests, this compound is pure in its form and is ideal to be used for industrial purpose. Di Potassium Phosphate-Pure Grade is highly economical and can be easily bought by customers of all budgets without thinking twice. A thorough research is conducted before carrying out the chemical reaction to obtain this chemical compound.
            </p>
          </td> 
          </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-di-potassium-phosphate-spec-3" role="tabpanel" aria-labelledby="tab-di-potassium-phosphate-spec-3-btn">
                    <h6 class="heading-title">Specifications</h6>
                    <div class="table-responsive">
                        <table>
                            <tr>
            <td>Physical Appearance</td>
            <td>Assay</td>
            <td>Loss on Drying</td>
            <td>pH of 2% solution</td>
            <td>Insoluble matter in water</td>
            <td>Solubility of 10% w/v soln.</td>
            <td>Sulphate</td>
            <td>Chloride</td>
          </tr>    
          <tr>
            <td>White Fine Powder</td>
            <td>99.00 %</td>
            <td>1.01%</td>
            <td>9.3</td>
            <td>0.0014%</td>
            <td>Clear</td>
            <td>0.001%</td>
            <td>0.01%</td>
          </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================
    Related Chemical Compounds - Modern Interactive Tabbed Showcase
=========================== -->
<section class="src-related-products-section">
    <div class="container-fluid px-lg-5">
        <div class="text-center mb-5">
            <span class="src-section-badge mb-2">Related Products</span>
            <div class="fs-2 fw-bold text-navy-900 mb-2">Complementary Inorganic Formulations</div>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Explore complementary pure-grade and technical phosphate compounds manufactured at our Panoli plant.
            </p>
        </div>

        <div class="src-related-tabs-wrapper">
            <!-- Related Products Navigation Switcher -->
            <ul class="nav nav-tabs src-rel-nav-tabs" id="di-potassium-phosphateRelTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-di-potassium-phosphate-rel-0-btn" data-bs-toggle="tab" data-bs-target="#tab-di-potassium-phosphate-rel-0" type="button" role="tab" aria-controls="tab-di-potassium-phosphate-rel-0" aria-selected="true">
                        <span class="rel-tab-badge">Potassium</span>
                        <span>Mono Potassium Phosphate</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-potassium-phosphate-rel-1-btn" data-bs-toggle="tab" data-bs-target="#tab-di-potassium-phosphate-rel-1" type="button" role="tab" aria-controls="tab-di-potassium-phosphate-rel-1" aria-selected="false">
                        <span class="rel-tab-badge">Pyro</span>
                        <span>Tetra Potassium Pyro Phosphate</span>
                    </button>
                </li>
            </ul>

            <!-- Tab Panes (Exact H5 headings strictly preserved for SEO) -->
            <div class="tab-content src-rel-tab-content" id="di-potassium-phosphateRelTabsContent">
                <div class="tab-pane fade show active src-rel-showcase-card" id="tab-di-potassium-phosphate-rel-0" role="tabpanel" aria-labelledby="tab-di-potassium-phosphate-rel-0-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Mono Potassium Phosphate</h5>
                        <a href="{{ route('contact_us') }}" class="src-btn-cta py-2 px-3 fs-6">
                            <span>Request Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-lg-4">
                            <div class="src-rel-img-box">
                                <img src="{{ asset('assets/images/product/mono_sodium_phosphate_crystal.png') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Purity :</b><span>98% Min</span></li>
                                <li><b>Other Names :</b><span>Potassium Dihydrogen Phosphate</span></li>
                                <li><b>Classification  :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Storage :</b><span>Keep away from moisture/span</span></li>
                                <li><b>Minimum Order Quantity :</b><span>1000</span></li>
                                <li><b>CAS No :</b><span>7778770</span></li>
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Grade :</b><span>Industrial Grade</span></li>
                                <li><b>Chemical Name :</b><span>Potassium Dihydrogen Phosphate</span></li>
                                <li><b>Form :</b><span>Powder</span></li>
                                <li><b>Ph Level :</b><span>4.3 to 4.9</span></li>
                                <li><b>Application :</b><span>Industrial, food, medicine, Organic Synthesis, Plastic,
              Fertilizer, Rubber, Pharmaceutical, Water Treatment, Toothpastes, Nuclear, Paper,
              Oil Industry, Paints, Printing Industry, Textile Industry,
              Explosive, Lubricants, Metal</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade src-rel-showcase-card" id="tab-di-potassium-phosphate-rel-1" role="tabpanel" aria-labelledby="tab-di-potassium-phosphate-rel-1-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Tetra Potassium Pyro Phosphate</h5>
                        <a href="{{ route('contact_us') }}" class="src-btn-cta py-2 px-3 fs-6">
                            <span>Request Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-lg-4">
                            <div class="src-rel-img-box">
                                <img src="{{ asset('assets/images/product/tetra_sodium_pyro_phoshpate.png') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Purity :</b><span>99%</span></li>
                                <li><b>Other Names :</b><span>Di Potassium Phosphate</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Storage :</b><span>Keep away from moisture</span></li>
                                <li><b>CAS No  :</b><span>7758114</span></li>
                                <li><b>Minimum Order Quantity :</b><span>1000</span></li>
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Grade :</b><span>Food Grade</span></li>
                                <li><b>Chemical Name :</b><span>10039324</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
