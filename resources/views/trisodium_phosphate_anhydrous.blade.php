@extends('layouts.app')

@section('seo')
<title>Trisodium Phosphate Anhydrous Supplier | SR Chems</title>
    <meta name="description" content="Commercial-grade Trisodium Phosphate Anhydrous with optimal flowability. Widely utilized in water treatment systems and stain-removing detergent formulas.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Trisodium Phosphate Anhydrous Supplier | SR Chems">
    <meta property="og:description" content="Commercial-grade Trisodium Phosphate Anhydrous with optimal flowability. Widely utilized in water treatment systems and stain-removing detergent formulas.">
    <meta property="og:url" content="https://www.srchems.com/trisodium-phosphate-anhydrous">
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
            <span class="active">Tri Sodium Phosphate Anhydrous</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <div class="src-hero-tag mb-3">
                    <i class="bi bi-shield-check"></i> Pure Grade Inorganic Salts • Na3PO4
                </div>
                <h1 class="src-page-title">Tri Sodium Phosphate Anhydrous</h1>
                <p class="text-white-50 mt-3 mb-0 fs-5" style="max-width: 720px;">
                    Manufacturer and bulk exporter of high-purity Tri Sodium Phosphate Anhydrous for industrial processing, pharmaceutical buffers, and specialty manufacturing.
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
                    <h3 class="src-section-title">Tri sodium Phosphate Anhydrous</h3>
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
                        <li><span> Storage</span><span>Room Temperature </span></li>
              <li><span> Solubility</span><span>Clear</span></li>
              <li><span> Form </span><span>Powder</span></li>
              <li><span> Purity</span><span>98%</span></li>
              <li><span> Classification</span><span>Inorganic Chemicals </span></li>              
              <li><span> Chemical Name</span><span>Tri Sodium Phosphate</span></li>
              <li><span> CAS No</span><span>CAS No 7601-54-9</span></li>
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
            <ul class="nav nav-tabs src-spec-nav-tabs" id="trisodium-phosphate-anhydrousSpecsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-trisodium-phosphate-anhydrous-spec-0-btn" data-bs-toggle="tab" data-bs-target="#tab-trisodium-phosphate-anhydrous-spec-0" type="button" role="tab" aria-controls="tab-trisodium-phosphate-anhydrous-spec-0" aria-selected="true">
                        <i class="bi bi-tag-fill"></i> Price And Quantity
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-trisodium-phosphate-anhydrous-spec-1-btn" data-bs-toggle="tab" data-bs-target="#tab-trisodium-phosphate-anhydrous-spec-1" type="button" role="tab" aria-controls="tab-trisodium-phosphate-anhydrous-spec-1" aria-selected="false">
                        <i class="bi bi-card-checklist"></i> Product Specifications
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-trisodium-phosphate-anhydrous-spec-2-btn" data-bs-toggle="tab" data-bs-target="#tab-trisodium-phosphate-anhydrous-spec-2" type="button" role="tab" aria-controls="tab-trisodium-phosphate-anhydrous-spec-2" aria-selected="false">
                        <i class="bi bi-truck"></i> Product Description
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-trisodium-phosphate-anhydrous-spec-3-btn" data-bs-toggle="tab" data-bs-target="#tab-trisodium-phosphate-anhydrous-spec-3" type="button" role="tab" aria-controls="tab-trisodium-phosphate-anhydrous-spec-3" aria-selected="false">
                        <i class="bi bi-file-text-fill"></i> Product Specification
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-trisodium-phosphate-anhydrous-spec-4-btn" data-bs-toggle="tab" data-bs-target="#tab-trisodium-phosphate-anhydrous-spec-4" type="button" role="tab" aria-controls="tab-trisodium-phosphate-anhydrous-spec-4" aria-selected="false">
                        <i class="bi bi-shield-check"></i> Specification
                    </button>
                </li>
            </ul>

            <!-- Tab Content Panes (Exact H6 heading order strictly preserved for SEO) -->
            <div class="tab-content src-spec-tab-content" id="trisodium-phosphate-anhydrousSpecsTabsContent">
                <div class="tab-pane fade show active src-spec-block-tab" id="tab-trisodium-phosphate-anhydrous-spec-0" role="tabpanel" aria-labelledby="tab-trisodium-phosphate-anhydrous-spec-0-btn">
                    <h6 class="heading-title">Price And Quantity</h6>
                    <div class="table-responsive">
                        <table>
                            <tr>
            <td>Minimum Order Quantity</td>
            <td>500 Kilograms</td>
          </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-trisodium-phosphate-anhydrous-spec-1" role="tabpanel" aria-labelledby="tab-trisodium-phosphate-anhydrous-spec-1-btn">
                    <h6 class="heading-title">Product Specifications</h6>
                    <div class="table-responsive">
                        <table>
                            <tr>
            <td>Storage</td>
            <td>Room Temperature</td>
            <td>Chemical Name</td>
            <td>Tri Sodium Phosphate</td>
          </tr>
          <tr>
            <td>Solubility</td>
            <td>Clear</td>
            <td>CAS No</td>
            <td>7601-54-9</td>
          </tr>
          <tr>
            <td>Grade</td>
            <td>Industrial Grade</td>
            <td>Classification</td>
            <td>Inorganic Chemicals%</td>
          </tr>
          <tr>
            <td>Form</td>
            <td>Powder</td>
            <td>Purity</td>
            <td>98%</td>
          </tr>
          <tr>
            <td>Application </td>
            <td> Industrial, food, medicine, Organic Synthesis, <br> Plastic, Fertilizer, Pharmaceutical,<br> Water Treatment, Toothpastes, <br> Nuclear, Paper, Oil Industry, Paints,<br> Printing Industry, Textile Industry, <br> Explosive, Lubricants, Metal</td>
          </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-trisodium-phosphate-anhydrous-spec-2" role="tabpanel" aria-labelledby="tab-trisodium-phosphate-anhydrous-spec-2-btn">
                    <h6 class="heading-title">Product Description</h6>
                    <div class="table-responsive">
                        <table>
                            <tr class="color-white">
            <td>
            <p> 
              The offered chemical compound, Trisodium Phosphate Anhydrous falls under the category of inorganic compound, therefore, finds usage for the industrial purpose. Available in different forms crystalline solid and granules, this chemical compound shows amazing solubility in water. It works as a cleaning agent, food additive, degreaser, lubricant and stain remover. Moreover, this Trisodium Phosphate Anhydrous is available in a sealed packaging material for preventing any spoilage to the compound due to extreme weather. The reasonable price structure of our chemical compound makes it perfect product to buy.
            </p>
          </td> 
          </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-trisodium-phosphate-anhydrous-spec-3" role="tabpanel" aria-labelledby="tab-trisodium-phosphate-anhydrous-spec-3-btn">
                    <h6 class="heading-title">Product Specification</h6>
                    <div class="table-responsive">
                        <table>
                            <tr>
            <td>Product Name: </td>
            <td>Grade: </td>
            <td>Packaging:</td>
            <td>Make: </td>                  
          </tr>
          <tr>
            <td>Tri Sodium Phosphate,Anhydrous.</td>
            <td>Technical.</td>
            <td>50 Kgs HDPE Bags.</td>    
            <td>S.R.Chemicals </td>                           
          </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-trisodium-phosphate-anhydrous-spec-4" role="tabpanel" aria-labelledby="tab-trisodium-phosphate-anhydrous-spec-4-btn">
                    <h6 class="heading-title">Specification</h6>
                    <div class="table-responsive">
                        <table>
                            <tr>
            <td>Appearance </td>
            <td>Matter insoluble in water,  percent by mass.</td>
            <td>Phosphate (as P2O5) percent by mass.</td>
            <td>Carbonate(as Na2CO3) percent by mass.</td>
            <td>Free Sodium Hydroxide (as NaOH) percent by mass.</td>
            <td>Soluble Iron Compounds (as Fe), percent by mass.</td>
            
          </tr>
          <tr>
            <td>White Powder </td>        
            <td>0.50 Max.</td>
            <td>41.00 Min.</td>
            <td>2.00 Max.</td>
            <td>3.2 Max.</td>     
            <td>0.02 Max. </td> 
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
            <ul class="nav nav-tabs src-rel-nav-tabs" id="trisodium-phosphate-anhydrousRelTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-trisodium-phosphate-anhydrous-rel-0-btn" data-bs-toggle="tab" data-bs-target="#tab-trisodium-phosphate-anhydrous-rel-0" type="button" role="tab" aria-controls="tab-trisodium-phosphate-anhydrous-rel-0" aria-selected="true">
                        <span class="rel-tab-badge">Anhydrous</span>
                        <span>Mono Sodium Phosphate Anhydrous</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-trisodium-phosphate-anhydrous-rel-1-btn" data-bs-toggle="tab" data-bs-target="#tab-trisodium-phosphate-anhydrous-rel-1" type="button" role="tab" aria-controls="tab-trisodium-phosphate-anhydrous-rel-1" aria-selected="false">
                        <span class="rel-tab-badge">Pyro</span>
                        <span>Tetra Sodium Pyro Phosphate</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-trisodium-phosphate-anhydrous-rel-2-btn" data-bs-toggle="tab" data-bs-target="#tab-trisodium-phosphate-anhydrous-rel-2" type="button" role="tab" aria-controls="tab-trisodium-phosphate-anhydrous-rel-2" aria-selected="false">
                        <span class="rel-tab-badge">Anhydrous</span>
                        <span>Di Sodium Phosphate Anhydrous</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-trisodium-phosphate-anhydrous-rel-3-btn" data-bs-toggle="tab" data-bs-target="#tab-trisodium-phosphate-anhydrous-rel-3" type="button" role="tab" aria-controls="tab-trisodium-phosphate-anhydrous-rel-3" aria-selected="false">
                        <span class="rel-tab-badge">Crystal</span>
                        <span>Mono Sodium Phosphate Crystal</span>
                    </button>
                </li>
            </ul>

            <!-- Tab Panes (Exact H5 headings strictly preserved for SEO) -->
            <div class="tab-content src-rel-tab-content" id="trisodium-phosphate-anhydrousRelTabsContent">
                <div class="tab-pane fade show active src-rel-showcase-card" id="tab-trisodium-phosphate-anhydrous-rel-0" role="tabpanel" aria-labelledby="tab-trisodium-phosphate-anhydrous-rel-0-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Mono Sodium Phosphate Anhydrous</h5>
                        <a href="{{ route('contact_us') }}" class="src-btn-cta py-2 px-3 fs-6">
                            <span>Request Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-lg-4">
                            <div class="src-rel-img-box">
                                <img src="{{ asset('assets/images/product/mono_sodium_phosphate_Anhydrous.png') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Grade :</b><span>Technical Grade</span></li>
                                <li><b>Storage :</b><span>Room Temperature</span></li>
                                <li><b>Minimum Order Quantity  :</b><span>500</span></li>
                                <li><b>Form :</b><span>Powder</span></li>
                                <li><b>Application :</b><span>Industrial</span></li>
                                <li><b>Purity :</b><span>98% Min</span></li>
                                <li><b>Other Names :</b><span>Sodium Dihydrogen Phosphate</span></li>
                                <li><b>Chemical Name :</b><span>Mono Sodium Phosphate Anhydrous</span></li>
                                <li><b>Ph Level :</b><span>4.05.0</span></li>
                                <li><b>Shape :</b><span>other</span></li>
                                <li><b>Appearance :</b><span>White Powder</span></li>
                                <li><b>Product Type :</b><span>Powder</span></li>
                                <li><b>Poisonous :</b><span>NO</span></li>
                                <li><b>Physical Form  :</b><span>Powder</span></li>
                                <li><b>Shelf Life :</b><span>24 Months Months</span></li>
                                <li><b>Usage :</b><span>Food, dyes etc</span></li>
                                <li><b>Taste :</b><span>Odorless</span></li>
                                <li><b>HS Code :</b><span>28352200</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade src-rel-showcase-card" id="tab-trisodium-phosphate-anhydrous-rel-1" role="tabpanel" aria-labelledby="tab-trisodium-phosphate-anhydrous-rel-1-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Tetra Sodium Pyro Phosphate</h5>
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
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Grade :</b><span>Technical Grade</span></li>
                                <li><b>Storage :</b><span>Room Temperature</span></li>
                                <li><b>Minimum Order Quantity :</b><span>1000</span></li>
                                <li><b>Form :</b><span>Powder</span></li>
                                <li><b>Application :</b><span>Industrial</span></li>
                                <li><b>Purity :</b><span>95% Min.</span></li>
                                <li><b>Other Names :</b><span>TSPP</span></li>
                                <li><b>CAS No  :</b><span>7722885</span></li>
                                <li><b>Ph Level :</b><span>10.0 10.6</span></li>
                                <li><b>Appearance :</b><span>White Powder</span></li>
                                <li><b>Product Type :</b><span>Powder</span></li>
                                <li><b>Poisonous :</b><span>NO</span></li>
                                <li><b>Physical Form :</b><span>Powder</span></li>
                                <li><b>Shelf Life :</b><span>24 Months Months</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade src-rel-showcase-card" id="tab-trisodium-phosphate-anhydrous-rel-2" role="tabpanel" aria-labelledby="tab-trisodium-phosphate-anhydrous-rel-2-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Di Sodium Phosphate Anhydrous</h5>
                        <a href="{{ route('contact_us') }}" class="src-btn-cta py-2 px-3 fs-6">
                            <span>Request Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-lg-4">
                            <div class="src-rel-img-box">
                                <img src="{{ asset('assets/images/product/di_ sodium_phosphate_anhydrous.png') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Classification  :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Grade :</b><span>Technical Grade</span></li>
                                <li><b>Storage :</b><span>Room Temperature</span></li>
                                <li><b>Minimum Order Quantity :</b><span>5000</span></li>
                                <li><b>Form :</b><span>Powder</span></li>
                                <li><b>Application :</b><span>Industrial</span></li>
                                <li><b>Purity :</b><span>98% min.</span></li>
                                <li><b>Chemical Name :</b><span>Di Sodium Phosphate</span></li>
                                <li><b>Ph Level :</b><span>9 9.5</span></li>
                                <li><b>Appearance :</b><span>White Powder</span></li>
                                <li><b>Product Type :</b><span>Powder</span></li>
                                <li><b>Poisonous :</b><span>NO</span></li>
                                <li><b>Physical Form :</b><span>Powder</span></li>
                                <li><b>Shelf Life : 2</b><span>4 Months Months</span></li>
                                <li><b>Usage :</b><span>Dyes , Food, Etc.</span></li>
                                <li><b>Taste :</b><span>Odorless</span></li>
                                <li><b>HS Code :</b><span>28352200</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade src-rel-showcase-card" id="tab-trisodium-phosphate-anhydrous-rel-3" role="tabpanel" aria-labelledby="tab-trisodium-phosphate-anhydrous-rel-3-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Mono Sodium Phosphate Crystal</h5>
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
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Grade :</b><span>Industrial Grade</span></li>
                                <li><b>Storage :</b><span>Room Temperature</span></li>
                                <li><b>Minimum Order Quantity :</b><span>5000</span></li>
                                <li><b>Form :</b><span>Other</span></li>
                                <li><b>Application :</b><span>Industrial, food, medicine, Organic Synthesis, Plastic, Fertilizer, Rubber, Pharmaceutical, Water Treatment, Toothpastes, Nuclear, Paper, Oil Industry, Paints, Printing Industry, Textile Industry, Explosive, Lubricants, Metal</span></li>
                                <li><b>Purity :</b><span>99%</span></li>
                                <li><b>Other Names :</b><span>Sodium Dihydrogen Phosphate</span></li>
                                <li><b>Chemical Name :</b><span>Mono Sodium Phosphate Crystals</span></li>
                                <li><b>CAS No :</b><span>7558807</span></li>
                                <li><b>Ph Level :</b><span>4.3 to 4.7</span></li>
                                <li><b>Usage :</b><span>Food and water treatment, Dyes industries</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
