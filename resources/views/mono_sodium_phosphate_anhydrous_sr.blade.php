@extends('layouts.app')

@section('seo')
<title>Mono-Sodium Phosphate Anhydrous SR Grade | SR Chems</title>
    <meta name="description" content="Premium moisture-free Mono-Sodium Phosphate Anhydrous SR. Excellent thermal stability and compound blending performance. Contact us for a custom quote.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Mono-Sodium Phosphate Anhydrous SR Grade | SR Chems">
    <meta property="og:description" content="Premium moisture-free Mono-Sodium Phosphate Anhydrous SR. Excellent thermal stability and compound blending performance. Contact us for a custom quote.">
    <meta property="og:url" content="https://www.srchems.com/mono-sodium-phosphate-anhydrous-sr">
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
            <span class="active">Mono Sodium Phosphate Anhydrous</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <div class="src-hero-tag mb-3">
                    <i class="bi bi-shield-check"></i> Pure Grade Inorganic Salts • NaH2PO4
                </div>
                <h1 class="src-page-title">Mono Sodium Phosphate Anhydrous</h1>
                <p class="text-white-50 mt-3 mb-0 fs-5" style="max-width: 720px;">
                    Manufacturer and bulk exporter of moisture-free Mono Sodium Phosphate Anhydrous SR for industrial synthesis, buffer chemistry, and food applications.
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
                    <h3 class="src-section-title">Mono Sodium Phosphate Anhydrous</h3>
                </div>
                <div class="src-product-img-card">
                    <span class="src-prod-pill">98% Min Purity • Panoli GIDC</span>
                    <img src="{{ asset('assets/images/product/mono_sodium_phosphate_Anhydrous.png') }}" alt="about" loading="lazy">
                </div>
            </div>

            <div class="col-12 col-xl-5">
                <div class="src-quick-details-card">
                    <h5 class="pricing-title">Product Details:</h5>
                    <ul class="pricing-list">
                        <li><span>Purity</span><span>98%</span></li>
                        <li><span>Form</span><span>Powder</span></li>
                        <li><span>Solubility</span><span>Clear</span></li>
                        <li><span>Other Names</span><span>Sodium Dihydrogen Phosphate</span></li>
                        <li><span>Storage</span><span>Room Temperature</span></li>
                        <li><span>Classification</span><span>Inorganic Chemicals</span></li>
                        <li><span>Chemical Name</span><span>Mono Sodium <br>Phosphate Anhydrous</span></li>
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
            <ul class="nav nav-tabs src-spec-nav-tabs" id="mspSpecsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-pricing-btn" data-bs-toggle="tab" data-bs-target="#tab-pricing" type="button" role="tab" aria-controls="tab-pricing" aria-selected="true">
                        <i class="bi bi-tag-fill"></i> Price &amp; Quantity
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-specs-btn" data-bs-toggle="tab" data-bs-target="#tab-specs" type="button" role="tab" aria-controls="tab-specs" aria-selected="false">
                        <i class="bi bi-card-checklist"></i> Product Specifications
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-desc-btn" data-bs-toggle="tab" data-bs-target="#tab-desc" type="button" role="tab" aria-controls="tab-desc" aria-selected="false">
                        <i class="bi bi-file-text-fill"></i> Product Description
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-standard-btn" data-bs-toggle="tab" data-bs-target="#tab-standard" type="button" role="tab" aria-controls="tab-standard" aria-selected="false">
                        <i class="bi bi-shield-check"></i> Product Specification
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-assay-btn" data-bs-toggle="tab" data-bs-target="#tab-assay" type="button" role="tab" aria-controls="tab-assay" aria-selected="false">
                        <i class="bi bi-clipboard2-pulse-fill"></i> Specification
                    </button>
                </li>
            </ul>

            <!-- Tab Content Panes (Exact H6 heading order strictly preserved for SEO) -->
            <div class="tab-content src-spec-tab-content" id="mspSpecsTabsContent">
                <!-- Tab Pane 1: Price And Quantity (Heading #6) -->
                <div class="tab-pane fade show active src-spec-block-tab" id="tab-pricing" role="tabpanel" aria-labelledby="tab-pricing-btn">
                    <h6 class="heading-title">Price And Quantity</h6>
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="table-label" style="width: 25%;">Minimum Order Quantity</td>
                                    <td>500 Kilograms</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tab Pane 2: Product Specifications (Heading #7) -->
                <div class="tab-pane fade src-spec-block-tab" id="tab-specs" role="tabpanel" aria-labelledby="tab-specs-btn">
                    <h6 class="heading-title">Product Specifications</h6>
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="table-label" style="width: 20%;">Chemical Name</td>
                                    <td style="width: 30%;">Mono Sodium <br>Phosphate Anhydrous</td>
                                    <td class="table-label" style="width: 20%;">Other Names</td>
                                    <td style="width: 30%;">Sodium Dihydrogen Phosphate</td>
                                </tr>
                                <tr>
                                    <td class="table-label">Storage</td>
                                    <td>Room Temperature</td>
                                    <td class="table-label">Form</td>
                                    <td>Powder</td>
                                </tr>
                                <tr>
                                    <td class="table-label">Solubility</td>
                                    <td>Clear</td>
                                    <td class="table-label">Grade</td>
                                    <td>Industrial Grade</td>
                                </tr>
                                <tr>
                                    <td class="table-label">Classification</td>
                                    <td>Inorganic Chemicals%</td>
                                    <td class="table-label">Purity</td>
                                    <td>98%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tab Pane 3: Product Description (Heading #8) -->
                <div class="tab-pane fade src-spec-block-tab" id="tab-desc" role="tabpanel" aria-labelledby="tab-desc-btn">
                    <h6 class="heading-title">Product Description</h6>
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="src-desc-text">
                                            Mono Sodium Phosphate Anhydrous-SR offered by us is highly demanded in the market due to its high efficacy. This chemical compound we provide comes in white powdery form that makes it ideal to use. The solubility of this compound falls under the category of Inorganic Chemicals. Thus, making it perfect to be used for industrial purposes. Moreover, we conduct a thorough research before producing Mono Sodium Phosphate Anhydrous-SR. Also, this compound is prepared in compliance with the industrial guidelines.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tab Pane 4: Product Specification (Heading #9) -->
                <div class="tab-pane fade src-spec-block-tab" id="tab-standard" role="tabpanel" aria-labelledby="tab-standard-btn">
                    <h6 class="heading-title">Product Specification</h6>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr class="table-light">
                                    <th>Product Name:</th>
                                    <th>Grade:</th>
                                    <th>Chemical Formula:</th>
                                    <th>Packaging:</th>
                                    <th>Make:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold text-navy-900">Mono Sodium Phosphate,Anhydrous.</td>
                                    <td>Pure.</td>
                                    <td><code>NaH2PO4.</code></td>
                                    <td>50 Kgs HDPE Bags.</td>
                                    <td>S.R.Chemicals</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tab Pane 5: Specification (Heading #10) -->
                <div class="tab-pane fade src-spec-block-tab" id="tab-assay" role="tabpanel" aria-labelledby="tab-assay-btn">
                    <h6 class="heading-title">Specification</h6>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr class="table-light">
                                    <th>Description</th>
                                    <th>pH of 2% Sol.</th>
                                    <th>Clarity of 10% Sol.</th>
                                    <th>Loss on drying</th>
                                    <th>P2O5</th>
                                    <th>Assay</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>White fine Powder</td>
                                    <td>4.3 to 4.7</td>
                                    <td>Clear</td>
                                    <td>0.5% max.</td>
                                    <td>58.0% Max.</td>
                                    <td><span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 fw-semibold">98.5% Max.</span></td>
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
            <ul class="nav nav-tabs src-rel-nav-tabs" id="relCompoundsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-rel-tspp-btn" data-bs-toggle="tab" data-bs-target="#tab-rel-tspp" type="button" role="tab" aria-controls="tab-rel-tspp" aria-selected="true">
                        <span class="rel-tab-badge">TSPP</span>
                        <span>Tetra Sodium Pyro Phosphate</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-rel-dsp-btn" data-bs-toggle="tab" data-bs-target="#tab-rel-dsp" type="button" role="tab" aria-controls="tab-rel-dsp" aria-selected="false">
                        <span class="rel-tab-badge">DSP</span>
                        <span>Di sodium Phosphate</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-rel-dspc-btn" data-bs-toggle="tab" data-bs-target="#tab-rel-dspc" type="button" role="tab" aria-controls="tab-rel-dspc" aria-selected="false">
                        <span class="rel-tab-badge">Crystal</span>
                        <span>Di Sodium Phosphate Crystal</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-rel-dspa-btn" data-bs-toggle="tab" data-bs-target="#tab-rel-dspa" type="button" role="tab" aria-controls="tab-rel-dspa" aria-selected="false">
                        <span class="rel-tab-badge">Anhydrous</span>
                        <span>Di Sodium Phosphate - Anhydrous</span>
                    </button>
                </li>
            </ul>

            <!-- Related Products Tab Panes (Exact H5 heading order strictly preserved for SEO) -->
            <div class="tab-content src-rel-tab-content" id="relCompoundsTabsContent">
                <!-- Related Product #1: Tetra Sodium Pyro Phosphate (Heading #11) -->
                <div class="tab-pane fade show active src-rel-showcase-card" id="tab-rel-tspp" role="tabpanel" aria-labelledby="tab-rel-tspp-btn">
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
                                <span class="badge bg-primary text-uppercase px-3 py-2 fw-semibold mb-3">Na4P2O7</span>
                                <img src="{{ asset('assets/images/product/tetra_sodium_pyro_phoshpate.png') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Minimum Order Quantity :</b><span>1000</span></li>
                                <li><b>CAS No :</b><span>7722885</span></li>
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Grade :</b><span>Technical Grade</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Storage :</b><span>Room Temperature</span></li>
                                <li><b>Form :</b><span>Powder</span></li>
                                <li><b>Other Names :</b><span>TSPP</span></li>
                                <li><b>Application :</b><span>Industrial</span></li>
                                <li><b>Purity :</b><span>95% min.</span></li>
                                <li><b>Ph Level :</b><span>0.0 10.6</span></li>
                                <li><b>Product Type :</b><span>Powder</span></li>
                                <li><b>Poisonous :</b><span>NO</span></li>
                                <li><b>Shape :</b><span>other</span></li>
                                <li><b>Appearance :</b><span>White Powder</span></li>
                                <li><b>Physical Form :</b><span>Powder</span></li>
                                <li><b>Shelf Life :</b><span>24 Months Months</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Related Product #2: Di sodium Phosphate (Heading #12) -->
                <div class="tab-pane fade src-rel-showcase-card" id="tab-rel-dsp" role="tabpanel" aria-labelledby="tab-rel-dsp-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Di sodium Phosphate</h5>
                        <a href="{{ route('contact_us') }}" class="src-btn-cta py-2 px-3 fs-6">
                            <span>Request Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-lg-4">
                            <div class="src-rel-img-box">
                                <span class="badge bg-primary text-uppercase px-3 py-2 fw-semibold mb-3">Na2HPO4</span>
                                <img src="{{ asset('assets/images/product/di_ sodium_phosphate.png') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Minimum Order Quantity :</b><span>5000 Kgs</span></li>
                                <li><b>CAS No :</b><span>7558794</span></li>
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Grade :</b><span>Technical Grade</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Storage :</b><span>Room Temperature</span></li>
                                <li><b>Form :</b><span>Powder</span></li>
                                <li><b>Other Names :</b><span>Di Sodium Hydrogen Phosphate Anhydrous</span></li>
                                <li><b>Chemical Name :</b><span>Di Sodium Hydrogen Phosphate Anhydrous</span></li>
                                <li><b>Application :</b><span>Industrial</span></li>
                                <li><b>Purity :</b><span>98% Min.</span></li>
                                <li><b>Ph Level :</b><span>9 9.5</span></li>
                                <li><b>Product Type :</b><span>Powder</span></li>
                                <li><b>Poisonous :</b><span>NO</span></li>
                                <li><b>Appearance :</b><span>White Powder</span></li>
                                <li><b>Physical Form :</b><span>Powder</span></li>
                                <li><b>Shelf Life :</b><span>24 Months Months</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Related Product #3: Di Sodium Phosphate Crystal (Heading #13) -->
                <div class="tab-pane fade src-rel-showcase-card" id="tab-rel-dspc" role="tabpanel" aria-labelledby="tab-rel-dspc-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Di Sodium Phosphate Crystal</h5>
                        <a href="{{ route('contact_us') }}" class="src-btn-cta py-2 px-3 fs-6">
                            <span>Request Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-lg-4">
                            <div class="src-rel-img-box">
                                <span class="badge bg-primary text-uppercase px-3 py-2 fw-semibold mb-3">Crystalline</span>
                                <img src="{{ asset('assets/images/product/di_sodium_ phosphate_crystal.png') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Minimum Order Quantity :</b><span>1000</span></li>
                                <li><b>CAS No :</b><span>10039324</span></li>
                                <li><b>Solubility :</b><span>Clear</span></li>
                                <li><b>Grade :</b><span>Industrial Grade</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Storage :</b><span>Keep away from moisture</span></li>
                                <li><b>Form :</b><span>Other</span></li>
                                <li><b>Other Names :</b><span>Di Sodium Phosphate Crystals</span></li>
                                <li><b>Chemical Name :</b><span>Di Sodium Phosphate Crystals</span></li>
                                <li><b>Application :</b><span>Industrial, food, medicine, Organic Synthesis, Plastic, Fertilizer, Rubber, Pharmaceutical, Water Treatment, Toothpastes, Nuclear, Paper, Oil Industry, Paints, Printing Industry, Textile Industry, Explosive, Lubricants, Metal</span></li>
                                <li><b>Purity :</b><span>98% Min.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Related Product #4: Di Sodium Phosphate - Anhydrous (Heading #14) -->
                <div class="tab-pane fade src-rel-showcase-card" id="tab-rel-dspa" role="tabpanel" aria-labelledby="tab-rel-dspa-btn">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <h5 class="heading-title mb-0">Di Sodium Phosphate - Anhydrous</h5>
                        <a href="{{ route('contact_us') }}" class="src-btn-cta py-2 px-3 fs-6">
                            <span>Request Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-lg-4">
                            <div class="src-rel-img-box">
                                <span class="badge bg-primary text-uppercase px-3 py-2 fw-semibold mb-3">Na2HPO4</span>
                                <img src="{{ asset('assets/images/product/di_ sodium_phosphate_anhydrous.png') }}" alt="about" loading="lazy">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <ul class="src-rel-specs-list">
                                <li><b>Minimum Order Quantity :</b><span>1000</span></li>
                                <li><b>CAS No :</b><span>7558794</span></li>
                                <li><b>Solubility :</b><span>Soluble</span></li>
                                <li><b>Grade :</b><span>Industrial Grade</span></li>
                                <li><b>Classification :</b><span>Inorganic Chemicals</span></li>
                                <li><b>Form :</b><span>Powder</span></li>
                                <li><b>Other Names :</b><span>1. Disodium hydrogen ortho phosphate. 2. Sodium hydrogen phosphate. 3. Sodium phosphate Dibasic. 4. Di Sodium phosphate</span></li>
                                <li><b>Chemical Name :</b><span>Di Sodium Hydrogen Phosphate</span></li>
                                <li><b>Application :</b><span>Industrial, food, medicine, Pharmaceutical, Water Treatment, Toothpastes, Oil Industry, Paints, Textile Industry</span></li>
                                <li><b>Ph Level :</b><span>9.1 9.5</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
