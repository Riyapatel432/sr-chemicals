@extends('layouts.app')

@section('seo')
<title>Di-Sodium Phosphate Anhydrous Bulk Supplier | SR Chems</title>
    <meta name="description" content="Buy high-purity Di-Sodium Phosphate Anhydrous in bulk. Perfect as an anti-caking agent, food emulsifier, and chemical buffer. Fast global shipping available.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Di-Sodium Phosphate Anhydrous Bulk Supplier | SR Chems">
    <meta property="og:description" content="Buy high-purity Di-Sodium Phosphate Anhydrous in bulk. Perfect as an anti-caking agent, food emulsifier, and chemical buffer. Fast global shipping available.">
    <meta property="og:url" content="https://www.srchems.com/di-sodium-phosphate-anhydrous">
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
            <span class="active">Di Sodium Phosphate Anhydrous</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <div class="src-hero-tag mb-3">
                    <i class="bi bi-shield-check"></i> Pure Grade Inorganic Salts • CAS 7558-79-4
                </div>
                <h1 class="src-page-title">Di Sodium Phosphate Anhydrous</h1>
                <p class="text-white-50 mt-3 mb-0 fs-5" style="max-width: 720px;">
                    Manufacturer and bulk exporter of high-purity Di Sodium Phosphate Anhydrous for industrial processing, pharmaceutical buffers, and specialty manufacturing.
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
                    <h3 class="src-section-title">Di Sodium Phosphate - Anhydrous</h3>
                </div>
                <div class="src-product-img-card">
                    <span class="src-prod-pill">Pure Grade • Panoli GIDC</span>
                    <img src="{{ asset('assets/images/product/di_ sodium_phosphate_anhydrous.png') }}" alt="about" loading="lazy">
                </div>
            </div>

            <div class="col-12 col-xl-5">
                <div class="src-quick-details-card">
                    <h5 class="pricing-title">Product Details:</h5>
                    <ul class="pricing-list">
                        <li><span>Solubility</span><span>Soluble</span></li>
                        <li><span>Ph Level</span><span>9.1 - 9.5</span></li>
                        <li><span>Other Names</span><span>1. Disodium hydrogen ortho phosphate.<br>2. Sodium hydrogen phosphate.<br>3. Sodium phosphate Dibasic.<br>4. Di Sodium phosphate</span></li>
                        <li><span>Form</span><span>Powder</span></li>
                        <li><span>Classification</span><span>Inorganic Chemicals</span></li>
                        <li><span>Chemical Name</span><span>Sodium Acid Pyro Phosphate</span></li>
                        <li><span>CAS No</span><span>7558794</span></li>
                        <li><span>Supply Ability :</span><span>50 Kilograms Per Month</span></li>
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
            <ul class="nav nav-tabs src-spec-nav-tabs" id="di-sodium-phosphate-anhydrousSpecsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-di-sodium-phosphate-anhydrous-spec-0-btn" data-bs-toggle="tab" data-bs-target="#tab-di-sodium-phosphate-anhydrous-spec-0" type="button" role="tab" aria-controls="tab-di-sodium-phosphate-anhydrous-spec-0" aria-selected="true">
                        <i class="bi bi-tag-fill"></i> Price And Quantity
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-sodium-phosphate-anhydrous-spec-1-btn" data-bs-toggle="tab" data-bs-target="#tab-di-sodium-phosphate-anhydrous-spec-1" type="button" role="tab" aria-controls="tab-di-sodium-phosphate-anhydrous-spec-1" aria-selected="false">
                        <i class="bi bi-card-checklist"></i> Product Specifications
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-sodium-phosphate-anhydrous-spec-2-btn" data-bs-toggle="tab" data-bs-target="#tab-di-sodium-phosphate-anhydrous-spec-2" type="button" role="tab" aria-controls="tab-di-sodium-phosphate-anhydrous-spec-2" aria-selected="false">
                        <i class="bi bi-truck"></i> Trade Information
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-sodium-phosphate-anhydrous-spec-3-btn" data-bs-toggle="tab" data-bs-target="#tab-di-sodium-phosphate-anhydrous-spec-3" type="button" role="tab" aria-controls="tab-di-sodium-phosphate-anhydrous-spec-3" aria-selected="false">
                        <i class="bi bi-file-text-fill"></i> Product Description
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-sodium-phosphate-anhydrous-spec-4-btn" data-bs-toggle="tab" data-bs-target="#tab-di-sodium-phosphate-anhydrous-spec-4" type="button" role="tab" aria-controls="tab-di-sodium-phosphate-anhydrous-spec-4" aria-selected="false">
                        <i class="bi bi-shield-check"></i> Product Specification
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-sodium-phosphate-anhydrous-spec-5-btn" data-bs-toggle="tab" data-bs-target="#tab-di-sodium-phosphate-anhydrous-spec-5" type="button" role="tab" aria-controls="tab-di-sodium-phosphate-anhydrous-spec-5" aria-selected="false">
                        <i class="bi bi-clipboard2-pulse-fill"></i> Specification
                    </button>
                </li>
            </ul>

            <!-- Tab Content Panes (Exact H6 heading order strictly preserved for SEO) -->
            <div class="tab-content src-spec-tab-content" id="di-sodium-phosphate-anhydrousSpecsTabsContent">
                <div class="tab-pane fade show active src-spec-block-tab" id="tab-di-sodium-phosphate-anhydrous-spec-0" role="tabpanel" aria-labelledby="tab-di-sodium-phosphate-anhydrous-spec-0-btn">
                    <h6 class="heading-title">Price And Quantity</h6>
                    <div class="table-responsive">
                        <table>
                            <tbody>
                        <tr>
                            <td class="fw-bold" style="width: 250px;">Price Range</td>
                            <td>64.00 - 66.00 INR/Kilograms</td>
                        </tr>
                    </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-di-sodium-phosphate-anhydrous-spec-1" role="tabpanel" aria-labelledby="tab-di-sodium-phosphate-anhydrous-spec-1-btn">
                    <h6 class="heading-title">Product Specifications</h6>
                    <div class="table-responsive">
                        <table>
                            <tbody>
                        <tr>
                            <td class="fw-bold text-white-50" style="width: 20%;">Chemical Name</td>
                            <td style="width: 30%;">Di Sodium Hydrogen Phosphate</td>
                            <td class="fw-bold text-white-50" style="width: 20%;">Form</td>
                            <td style="width: 30%;">Powder</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-white-50">Solubility</td>
                            <td>Soluble</td>
                            <td class="fw-bold text-white-50">Ph Level</td>
                            <td>9.1 - 9.5</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-white-50">Grade</td>
                            <td>Industrial Grade</td>
                            <td class="fw-bold text-white-50">Classification</td>
                            <td>Inorganic Chemicals</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-white-50">CAS No</td>
                            <td>7558794</td>
                            <td class="fw-bold text-white-50">Usage</td>
                            <td>It is used in conjunction with trisodium phosphate in foods and water softening treatment. In foods, it is used to adjust pH. Its presence prevents coagulation in the preparation of condensed milk. Similarly, it is used as an anti-caking additive in powdered products.[3] It is used in desserts and puddings, e.g. Cream of Wheat to quicken cook time, and Jell-O Instant Pudding for thickening. In water treatment, it retards calcium scale formation. It is also found in some detergents and cleaning agents.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-white-50">Other Names</td>
                            <td>1. Disodium hydrogen ortho phosphate.<br>2. Sodium hydrogen phosphate.<br>3. Sodium phosphate Dibasic.<br>4. Di Sodium phosphate</td>
                            <td class="fw-bold text-white-50">Application</td>
                            <td>Industrial, food, medicine, Pharmaceutical, Water Treatment, Toothpastes, Oil Industry, Paints, Textile Industry</td>
                        </tr>
                    </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-di-sodium-phosphate-anhydrous-spec-2" role="tabpanel" aria-labelledby="tab-di-sodium-phosphate-anhydrous-spec-2-btn">
                    <h6 class="heading-title">Trade Information</h6>
                    <div class="table-responsive">
                        <table>
                            <tbody>
                        <tr>
                            <td class="fw-bold text-white-50" style="width: 20%;">Supply Ability</td>
                            <td style="width: 30%;">50 Kilograms Per Month</td>
                            <td class="fw-bold text-white-50" style="width: 20%;">Delivery Time</td>
                            <td style="width: 30%;">10 Days</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-white-50">Sample Available</td>
                            <td>Yes</td>
                            <td class="fw-bold text-white-50">Sample Policy</td>
                            <td>Free samples are available</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-white-50">Packaging Details</td>
                            <td>50 Kg &amp; 25 Kg HDPE Bags or as per requirement</td>
                            <td class="fw-bold text-white-50">Main Domestic Market</td>
                            <td>All India</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-white-50">Certifications</td>
                            <td colspan="3">iso 9001: 2008</td>
                        </tr>
                    </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-di-sodium-phosphate-anhydrous-spec-3" role="tabpanel" aria-labelledby="tab-di-sodium-phosphate-anhydrous-spec-3-btn">
                    <h6 class="heading-title">Product Description</h6>
                    <div class="table-responsive">
                        <table>
                            <tbody>
                        <tr>
                            <td>
                                <p>
                                    We offer Di Sodium Phosphate-Anhydrous of the highest efficacy. The mentioned compound finds usage in the conjunction with its family member trisodium phosphatae in different foods for adjusting the pH value. Apart from this, the mentioned compound finds usage in the water treatment for retarding the formation of Calcium scale. Moreover, this compound is highly demanded in bakery shops to be used in puddings and desserts. Another major usage of Di Sodium Phosphate-Anhydrous is in the production of detergents and many cleaning agents.
                                </p>
                                <p>
                                    We are a leading company , involved in manufacturing and supplying a high quality array of Di-sodium Phosphate. This product is water soluble and highly hygroscope. It is mainly used in powdered products as an anti-cake agent. This is a white powder which is also known as sodium hydrogen phosphate , sodium phosphate dibasic and disodium hydrogen outho phosphate. This Disodium Phosphate can be provided from us at reasonable prices in quality packing.
                                </p>
                            </td>
                        </tr>
                    </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-di-sodium-phosphate-anhydrous-spec-4" role="tabpanel" aria-labelledby="tab-di-sodium-phosphate-anhydrous-spec-4-btn">
                    <h6 class="heading-title">Product Specification</h6>
                    <div class="table-responsive">
                        <table>
                            <thead>
                        <tr class="text-white-50">
                            <th>Product Name:</th>
                            <th>Grade:</th>
                            <th>Chemical Formula:</th>
                            <th>Packaging:</th>
                            <th>Make :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Di Sodium Phosphate, Anhydrous.</td>
                            <td>Technical.</td>
                            <td>Na2HPO4</td>
                            <td>50 Kgs or 25 kgs HDPE Bag</td>
                            <td>S.R.Chemicals.</td>
                        </tr>
                    </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade src-spec-block-tab" id="tab-di-sodium-phosphate-anhydrous-spec-5" role="tabpanel" aria-labelledby="tab-di-sodium-phosphate-anhydrous-spec-5-btn">
                    <h6 class="heading-title">Specification</h6>
                    <div class="table-responsive">
                        <table>
                            <thead>
                        <tr class="text-white-50">
                            <th>Description</th>
                            <th>Loss on drying, percent by mass</th>
                            <th>Matter insoluble in water</th>
                            <th>pH of 2 % Sol.</th>
                            <th>Iron as Fe percent by mass</th>
                            <th>P2O5</th>
                            <th>Assay :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>White Powder</td>
                            <td>0.02 % Max..</td>
                            <td>0.50 Max.</td>
                            <td>9.1 - 9.3.</td>
                            <td>0.01% Max.</td>
                            <td>48.00% Min.</td>
                            <td>98.00 % Min.</td>
                        </tr>
                    </tbody>
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
            <ul class="nav nav-tabs src-rel-nav-tabs" id="di-sodium-phosphate-anhydrousRelTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-di-sodium-phosphate-anhydrous-rel-0-btn" data-bs-toggle="tab" data-bs-target="#tab-di-sodium-phosphate-anhydrous-rel-0" type="button" role="tab" aria-controls="tab-di-sodium-phosphate-anhydrous-rel-0" aria-selected="true">
                        <span class="rel-tab-badge">Anhydrous</span>
                        <span>Mono Sodium Phosphate Anhydrous - SR</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-sodium-phosphate-anhydrous-rel-1-btn" data-bs-toggle="tab" data-bs-target="#tab-di-sodium-phosphate-anhydrous-rel-1" type="button" role="tab" aria-controls="tab-di-sodium-phosphate-anhydrous-rel-1" aria-selected="false">
                        <span class="rel-tab-badge">Pyro</span>
                        <span>Tetra Sodium Pyro Phosphate</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-sodium-phosphate-anhydrous-rel-2-btn" data-bs-toggle="tab" data-bs-target="#tab-di-sodium-phosphate-anhydrous-rel-2" type="button" role="tab" aria-controls="tab-di-sodium-phosphate-anhydrous-rel-2" aria-selected="false">
                        <span class="rel-tab-badge">Anhydrous</span>
                        <span>Di Sodium Phosphate Anhydrous - SR</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-di-sodium-phosphate-anhydrous-rel-3-btn" data-bs-toggle="tab" data-bs-target="#tab-di-sodium-phosphate-anhydrous-rel-3" type="button" role="tab" aria-controls="tab-di-sodium-phosphate-anhydrous-rel-3" aria-selected="false">
                        <span class="rel-tab-badge">Crystal</span>
                        <span>Mono Sodium Phosphate Crystal</span>
                    </button>
                </li>
            </ul>

            <!-- Tab Panes (Exact H5 headings strictly preserved for SEO) -->
            <div class="tab-content src-rel-tab-content" id="di-sodium-phosphate-anhydrousRelTabsContent">
                <div class="tab-pane fade show active src-rel-showcase-card" id="tab-di-sodium-phosphate-anhydrous-rel-0" role="tabpanel" aria-labelledby="tab-di-sodium-phosphate-anhydrous-rel-0-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Mono Sodium Phosphate Anhydrous - SR</h5>
                        <a href="{{ route('contact_us') }}" class="src-btn-cta py-2 px-3 fs-6">
                            <span>Request Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-lg-4">
                            <div class="src-rel-img-box">
                                <img src="{{ asset('assets/images/product/mono_sodium_phosphate_anhydrous.png') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Storage :</b><span>Room Temperature</span></li>
                                <li><b>Minimum Order Quantity :</b><span>500</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Grade :</b><span>Technical Grade</span></li>
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Chemical Name :</b><span>Mono Sodium Phosphate Anhydrous</span></li>
                                <li><b>Form :</b><span>Powder</span></li>
                                <li><b>Purity :</b><span>98% Min</span></li>
                                <li><b>Application :</b><span>Industrial</span></li>
                                <li><b>Other Names :</b><span>Sodium Dihydrogen Phosphate</span></li>
                                <li><b>Poisonous :</b><span>NO</span></li>
                                <li><b>Product Type :</b><span>Powder</span></li>
                                <li><b>Physical Form :</b><span>Powder</span></li>
                                <li><b>Shape :</b><span>other</span></li>
                                <li><b>Appearance :</b><span>White Powder</span></li>
                                <li><b>Shelf Life :</b><span>24 Months Months</span></li>
                                <li><b>Usage :</b><span>Food, dyes etc</span></li>
                                <li><b>Taste :</b><span>Odorless</span></li>
                                <li><b>HS Code :</b><span>28352200</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade src-rel-showcase-card" id="tab-di-sodium-phosphate-anhydrous-rel-1" role="tabpanel" aria-labelledby="tab-di-sodium-phosphate-anhydrous-rel-1-btn">
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
                                <img src="{{ asset('assets/images/product/tetra_sodium_pyro_phoshpate.jpeg') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Storage :</b><span>Room Temperature</span></li>
                                <li><b>Minimum Order Quantity :</b><span>1000</span></li>
                                <li><b>Classification :</b><span>Clear</span></li>
                                <li><b>Grade :</b><span>Technical Grade</span></li>
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Form :</b><span>Powder</span></li>
                                <li><b>Purity :</b><span>95% min.</span></li>
                                <li><b>Application :</b><span>Industrial</span></li>
                                <li><b>CAS No :</b><span>7722885</span></li>
                                <li><b>Other Names :</b><span>TSPP</span></li>
                                <li><b>Ph Level :</b><span>10.0 10.6</span></li>
                                <li><b>Poisonous :</b><span>NO</span></li>
                                <li><b>Product Type :</b><span>Powder</span></li>
                                <li><b>Physical Form :</b><span>Powder</span></li>
                                <li><b>Shape :</b><span>other</span></li>
                                <li><b>Appearance :</b><span>White Powder</span></li>
                                <li><b>Shelf Life :</b><span>24 Months Months</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade src-rel-showcase-card" id="tab-di-sodium-phosphate-anhydrous-rel-2" role="tabpanel" aria-labelledby="tab-di-sodium-phosphate-anhydrous-rel-2-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Di Sodium Phosphate Anhydrous - SR</h5>
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
                                <li><b>Storage :</b><span>Room Temperature</span></li>
                                <li><b>Minimum Order Quantity :</b><span>5000</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Grade :</b><span>Technical Grade</span></li>
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Chemical :</b><span>Di Sodium Phosphate</span></li>
                                <li><b>Form :</b><span>Powder</span></li>
                                <li><b>Purity :</b><span>98% Min.</span></li>
                                <li><b>Application :</b><span>Industrial</span></li>
                                <li><b>Ph Level :</b><span>9 9.5</span></li>
                                <li><b>Poisonous :</b><span>NO</span></li>
                                <li><b>Product Type :</b><span>Powder</span></li>
                                <li><b>Physical Form :</b><span>Powder</span></li>
                                <li><b>Appearance :</b><span>White Powder</span></li>
                                <li><b>Shelf Life :</b><span>24 Months Months</span></li>
                                <li><b>Usage :</b><span>Dyes , Food, Etc</span></li>
                                <li><b>Taste :</b><span>Odorless</span></li>
                                <li><b>HS Code :</b><span>28352200</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade src-rel-showcase-card" id="tab-di-sodium-phosphate-anhydrous-rel-3" role="tabpanel" aria-labelledby="tab-di-sodium-phosphate-anhydrous-rel-3-btn">
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
                                <img src="{{ asset('assets/images/Product/mono_sodium_phosphate_crystal.png') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Storage :</b><span>Room Temperature</span></li>
                                <li><b>Minimum Order Quantity :</b><span>5000</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Grade :</b><span>Technical Grade</span></li>
                                <li><b>Solubility :</b><span>Soluble</span></li>
                                <li><b>Chemical Name :</b><span>Mono Sodium Phosphate Crystals</span></li>
                                <li><b>Form :</b><span>Other</span></li>
                                <li><b>Purity :</b><span>99%</span></li>
                                <li><b>Application :</b><span>Industrial, food, medicine, Organic Synthesis, Plastic, Fertilizer, Rubber, Pharmaceutical, Water Treatment, Toothpastes, Nuclear, Paper, Oil Industry, Paints, Printing Industry, Textile Industry, Explosive, Lubricants, Metal</span></li>
                                <li><b>CAS No :</b><span>7558807</span></li>
                                <li><b>Other Names :</b><span>Sodium Dihydrogen Phosphate</span></li>
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
