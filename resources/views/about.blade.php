@extends('layouts.app')

@section('seo')
    <title>About SR Chems | Trusted Industrial Chemical Manufacturer</title>
    <meta name="description" content="Discover SR Chems' commitment to manufacturing high-purity phosphate compounds. Learn about our quality standards, global supply chain, and chemical expertise.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="About SR Chems | Trusted Industrial Chemical Manufacturer">
    <meta property="og:description" content="Discover SR Chems' commitment to manufacturing high-purity phosphate compounds. Learn about our quality standards, global supply chain, and chemical expertise.">
    <meta property="og:url" content="https://www.srchems.com/about">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.srchems.com/assets/images/logo/logo.1.jpg">
@endsection

@section('content')

<!-- ========================
    Page Title & Breadcrumb Hero
=========================== -->
<section class="src-page-hero position-relative">
    <div class="src-page-hero-bg" aria-hidden="true">
        <img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="background" loading="eager">
    </div>
    <div class="container-fluid px-lg-5 position-relative" style="z-index: 2;">
        <div class="src-breadcrumb">
            <a href="{{ route('home') }}"><i class="bi bi-house-door-fill me-1"></i> Home</a>
            <i class="bi bi-chevron-right small text-white-50"></i>
            <span class="active">About Us</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <span class="badge bg-primary text-white text-uppercase px-3 py-1 fw-bold small mb-2 text-wrap">
                    <i class="bi bi-patch-check-fill me-1"></i> ISO 9001:2008 Certified Manufacturer &amp; Exporter
                </span>
                <h1 class="src-page-title">About Us</h1>
                <p class="text-white-50 fs-5 mt-2 mb-0" style="max-width: 680px;">
                    Over two decades of precision inorganic chemical synthesis, ambient-pressure technology, and certified global distribution from Panoli GIDC, Bharuch.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-inline-flex flex-column align-items-lg-end p-3 rounded-4" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px);">
                    <span class="small text-warning fw-bold text-uppercase"><i class="bi bi-geo-alt-fill"></i> Manufacturing Facility</span>
                    <span class="fw-bold text-white fs-5">Panoli GIDC • Bharuch, Gujarat</span>
                    <span class="small text-white-50">Established in 2000 • Global Export Delivery</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.page-title -->

<!-- ========================
    Company Profile Section
=========================== -->
<section class="py-5 py-lg-6 bg-white">
    <div class="container-fluid px-lg-5">
        <div class="row g-5 align-items-start">
            <div class="col-lg-7">
                <div class="src-section-header text-start mb-4">
                    <span class="src-subheading">Manufacturing Excellence &amp; Corporate Legacy</span>
                    <h2 class="src-title">Company Profile</h2>
                </div>
                <p class="heading-desc mb-4 text-muted" style="line-height: 1.85; font-size: 1rem;">
                    Chemicals undeniably possess a large impact on human life because of their existence in almost every product from medicines, fertilizers to building material. Being the mainstay and strength of every industry, these are essential for smooth running of industrial process from developing products to using it. The global need for Inorganic Chemicals is increasing day by day because of its non- carbon and hydrogen existent properties, high solubility in water and chemical stability. To deal in an ample assortment of inorganic salts like Sodium Phosphate, Potassium Phosphate, Ammonium Phosphate, Pyro Phosphate, with a host of various others, our company S. R. Chemicals came into establishment. The products we deal in are accessible in various packaging options. We also offer customized packing of our produced range. Based in Bharuch, Gujarat (India), our technocrats are well experient in formulating only superior grade chemicals.
                </p>

                <!-- Credential Anchor Cards -->
                <div class="row g-3 pt-2">
                    <div class="col-sm-6">
                        <div class="p-3 rounded-4 border bg-light h-100">
                            <div class="d-flex align-items-center gap-2 mb-2 text-primary fw-bold">
                                <i class="bi bi-shield-check fs-4"></i>
                                <span>ISO 9001:2008 Certified</span>
                            </div>
                            <p class="small text-muted mb-0">Rigorous chemical formulation and continuous testing by diligent in-house quality auditors.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded-4 border bg-light h-100">
                            <div class="d-flex align-items-center gap-2 mb-2 text-success fw-bold">
                                <i class="bi bi-box-seam-fill fs-4"></i>
                                <span>Custom Export Packaging</span>
                            </div>
                            <p class="small text-muted mb-0">Multi-layer moisture-barrier HDPE bags with palletized container loading for safe international transit.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="position-relative">
                    <div class="rounded-4 overflow-hidden shadow border">
                        <img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="backgrounds" class="img-fluid w-100" style="max-height: 420px; object-fit: cover;" loading="lazy">
                    </div>
                    <div class="position-absolute bottom-0 start-0 end-0 p-3 m-3 rounded-3 bg-dark bg-opacity-90 text-white shadow" style="backdrop-filter: blur(8px);">
                        <div class="d-flex align-items-center gap-3">
                            <div class="p-2 bg-primary text-white rounded-3 fs-3">
                                <i class="bi bi-buildings"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Panoli Industrial Plant</div>
                                <div class="small text-white-50">Plot No. 1917 &amp; C-1/1918, G.I.D.C., Panoli, Bharuch, Gujarat</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================
    Products Offered By Us Section
=========================== -->
<section class="py-5 py-lg-6 bg-light border-top border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div>
                <span class="src-subheading">Comprehensive Product Portfolio</span>
                <h2 class="src-title">Products Offered By Us</h2>
                <p class="src-desc mb-0">
                    Our company is engaged offering a wide variety of Inorganic Chemicals that are appreciated for their high melting and specific electrical conductivity properties. Our offered range comes in various quantities as per the desires of the customers. Chemicals we deal in includes the following:
                </p>
            </div>
        </div>

        <div class="swiper src-category-swiper pb-4">
            <div class="swiper-wrapper align-items-stretch">
                <!-- Classification 1: Sodium Phosphate -->
                <div class="swiper-slide h-auto">
                <div class="card h-100 p-3 p-sm-4 border-0 rounded-4 shadow-sm bg-white">
                    <div class="src-cat-card-header mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center gap-2 gap-sm-3 min-w-0">
                            <div class="p-2 bg-primary-subtle text-primary rounded-3 fs-4 flex-shrink-0">
                                <i class="bi bi-hexagon-fill"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="fs-5 fw-bold text-dark mb-0 text-truncate">Sodium Phosphate</h4>
                                <span class="small text-muted d-block text-truncate">Primary Inorganic Phosphate Series</span>
                            </div>
                        </div>
                        <a href="{{ route('sodium_phosphate') }}" class="btn btn-sm btn-outline-primary rounded-pill src-card-view-btn">
                            <span>View All</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="row g-2">
                        <div class="col-sm-6">
                            <div class="p-2 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('di_sodium_phosphate') }}" class="text-dark text-decoration-none hover-primary">Di Sodium Phosphate</a>
                                </h4>
                                <span class="small text-muted">Anhydrous &amp; Crystals</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-2 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="text-dark text-decoration-none hover-primary">Di Sodium Phosphate Anhydrous Pure</a>
                                </h4>
                                <span class="small text-muted">Pure Chemical Grade</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-2 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="text-dark text-decoration-none hover-primary">Tri Sodium Phosphate Anhydrous</a>
                                </h4>
                                <span class="small text-muted">Industrial Grade</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-2 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('tri_sodium_phosphate_crystals') }}" class="text-dark text-decoration-none hover-primary">Tri Sodium Phosphate 12H2O Dodeca</a>
                                </h4>
                                <span class="small text-muted">High Purity Crystals</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-2 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('mono_sodium_phosphate_crystal') }}" class="text-dark text-decoration-none hover-primary">NaH2PO4 2 H2O Crystal Pure</a>
                                </h4>
                                <span class="small text-muted">Mono Sodium Dihydrate</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-2 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('tri_sodium_phosphate_crystals') }}" class="text-dark text-decoration-none hover-primary">Tri Sodium Phosphate (Dodeca) Pure</a>
                                </h4>
                                <span class="small text-muted">Dodecahydrate Pure</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-2 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('di_sodium_phosphate_crystal') }}" class="text-dark text-decoration-none hover-primary">Na2HPO4 12 H2O Dodeca Pure</a>
                                </h4>
                                <span class="small text-muted">Di Sodium Dodecahydrate</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-2 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('mono_sodium_phosphate_crystal') }}" class="text-dark text-decoration-none hover-primary">Mono Sodium Phosphate (Anhydrous/Crystals)</a>
                                </h4>
                                <span class="small text-muted">Technical Formulation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Classification 2: Potassium Phosphate -->
            <div class="swiper-slide h-auto">
                <div class="card h-100 p-3 p-sm-4 border-0 rounded-4 shadow-sm bg-white">
                    <div class="src-cat-card-header mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center gap-2 gap-sm-3 min-w-0">
                            <div class="p-2 bg-success-subtle text-success rounded-3 fs-4 flex-shrink-0">
                                <i class="bi bi-gem"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="fs-5 fw-bold text-dark mb-0 text-truncate">Potassium Phosphate</h4>
                                <span class="small text-muted d-block text-truncate">High Purity Technical &amp; Pure Grade</span>
                            </div>
                        </div>
                        <a href="{{ route('potassium_phosphate') }}" class="btn btn-sm btn-outline-success rounded-pill src-card-view-btn">
                            <span>View All</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="row g-2">
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('di_potassium_phosphate') }}" class="text-dark text-decoration-none hover-primary">Di Potassium Phosphate (Anhydrous/Crystals)</a>
                                </h4>
                                <span class="small text-muted">DKP Formula • High Solubility</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('mono_potassium_phosphate') }}" class="text-dark text-decoration-none hover-primary">Mono Potassium Phosphate</a>
                                </h4>
                                <span class="small text-muted">MKP Formula • Pure Buffer Grade</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Classification 3: Ammonium Phosphate -->
            <div class="swiper-slide h-auto">
                <div class="card h-100 p-3 p-sm-4 border-0 rounded-4 shadow-sm bg-white">
                    <div class="src-cat-card-header mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center gap-2 gap-sm-3 min-w-0">
                            <div class="p-2 bg-warning-subtle text-warning rounded-3 fs-4 flex-shrink-0">
                                <i class="bi bi-droplet-fill"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="fs-5 fw-bold text-dark mb-0 text-truncate">Ammonium Phosphate</h4>
                                <span class="small text-muted d-block text-truncate">Fertilizer &amp; Technical</span>
                            </div>
                        </div>
                        <a href="{{ route('ammonium_phosphate') }}" class="btn btn-sm btn-outline-warning rounded-pill src-card-view-btn">
                            <span>View All</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="row g-2">
                        <div class="col-12">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('di_ammonium_phosphate') }}" class="text-dark text-decoration-none hover-primary">Di Ammonium Phosphate</a>
                                </h4>
                                <span class="small text-muted">DAP • High Nitrogen &amp; Phosphorus</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('monoammonium_phosphate') }}" class="text-dark text-decoration-none hover-primary">Mono Ammonium Phosphate</a>
                                </h4>
                                <span class="small text-muted">MAP • Flame Retardant &amp; Nutrient</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Classification 4: TPP Chemical -->
            <div class="swiper-slide h-auto">
                <div class="card h-100 p-3 p-sm-4 border-0 rounded-4 shadow-sm bg-white">
                    <div class="src-cat-card-header mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center gap-2 gap-sm-3 min-w-0">
                            <div class="p-2 bg-info-subtle text-info rounded-3 fs-4 flex-shrink-0">
                                <i class="bi bi-shield-plus"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="fs-5 fw-bold text-dark mb-0 text-truncate">TPP Chemical</h4>
                                <span class="small text-muted d-block text-truncate">Specialty Potassium</span>
                            </div>
                        </div>
                        <span class="badge bg-info-subtle text-info rounded-pill px-3 py-2 fw-semibold">Pure Grade</span>
                    </div>

                    <div class="p-3 rounded-3 border bg-light h-100">
                        <h4 class="fs-6 fw-semibold mb-2">
                            <span class="text-dark">K3PO4 Chemical ( Potassium Phosphate Tribasic Trihydrate)</span>
                        </h4>
                        <span class="small text-muted">Tribasic Trihydrate formulation for industrial synthesis and biochemical research.</span>
                    </div>
                </div>
            </div>

            <!-- Classification 5: Pyro Phosphate -->
            <div class="swiper-slide h-auto">
                <div class="card h-100 p-3 p-sm-4 border-0 rounded-4 shadow-sm bg-white">
                    <div class="src-cat-card-header mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center gap-2 gap-sm-3 min-w-0">
                            <div class="p-2 bg-danger-subtle text-danger rounded-3 fs-4 flex-shrink-0">
                                <i class="bi bi-diagram-3-fill"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="fs-5 fw-bold text-dark mb-0 text-truncate">Pyro Phosphate</h4>
                                <span class="small text-muted d-block text-truncate">Industrial Buffering</span>
                            </div>
                        </div>
                        <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill fw-semibold">Specialty Line</span>
                    </div>

                    <div class="row g-2">
                        <div class="col-12">
                            <div class="p-2 rounded-3 border bg-light">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('tetra_sodium_pyro_phosphate') }}" class="text-dark text-decoration-none hover-primary">Tetra Sodium Pyro Phosphate</a>
                                </h4>
                                <span class="small text-muted">TSPP Formula</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-2 rounded-3 border bg-light">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('tetra_potassium_pyro_phosphate') }}" class="text-dark text-decoration-none hover-primary">Tetra Potassium Pyro Phosphate</a>
                                </h4>
                                <span class="small text-muted">TKPP Formula</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-2 rounded-3 border bg-light">
                                <h4 class="fs-6 fw-semibold mb-1">
                                    <a href="{{ route('sodium_acid_pyrophosphate') }}" class="text-dark text-decoration-none hover-primary">Sodium Acid Pyro Phosphate</a>
                                </h4>
                                <span class="small text-muted">SAPP Formula</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <div class="d-flex justify-content-between align-items-center mt-4 src-slider-controls src-category-controls">
            <div class="swiper-pagination src-category-pagination position-static w-auto"></div>
            <div class="src-slider-arrows d-flex gap-2">
                <button class="src-slider-btn src-category-prev" type="button" aria-label="Previous Category"><i class="bi bi-chevron-left"></i></button>
                <button class="src-slider-btn src-category-next" type="button" aria-label="Next Category"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </div>
</div>
</section>

<!-- ========================
    Infrastructure & Facilities Showcase Section (Modern Swiper Slider)
=========================== -->
<section class="py-5 py-lg-6 bg-white border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div>
                <span class="src-subheading">Plant Capacity &amp; Technology</span>
                <div class="src-title fs-2 fw-bold text-navy-900">Infrastructure &amp; Manufacturing Facilities</div>
                <p class="src-desc mb-0">Our state-of-the-art chemical synthesis facility at Panoli GIDC, Bharuch is engineered for high throughput, strict purity control, and rapid export staging.</p>
            </div>
        </div>

        <div class="swiper src-facility-swiper pb-4">
            <div class="swiper-wrapper align-items-stretch">
                <!-- Facility 1: Synthesis Plant -->
                <div class="swiper-slide h-auto">
                    <div class="src-facility-card">
                        <div class="src-facility-img-wrap">
                            <span class="src-facility-badge">Panoli GIDC</span>
                            <img src="{{ asset('assets/images/banners/2.jpg') }}" alt="Chemical Synthesis Reactor Facility" loading="lazy">
                        </div>
                        <div class="src-facility-body">
                            <div class="src-facility-title">Synthesis &amp; Reaction Vessels</div>
                            <p class="src-facility-desc">High-temperature, glass-lined and SS-316 reaction vessels engineered for precise inorganic neutralization, synthesis, and phosphorylation.</p>
                            <div class="src-facility-tags">
                                <span>SS-316 Reactors</span>
                                <span>Neutralization</span>
                                <span>25 MT/Day</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facility 2: Filtration & Crystallization -->
                <div class="swiper-slide h-auto">
                    <div class="src-facility-card">
                        <div class="src-facility-img-wrap">
                            <span class="src-facility-badge">High Clarity</span>
                            <img src="{{ asset('assets/images/gallery/1.jpg') }}" alt="Separation and Distillation Plant" loading="lazy">
                        </div>
                        <div class="src-facility-body">
                            <div class="src-facility-title">Filtration &amp; Distillation Units</div>
                            <p class="src-facility-desc">Ambient-pressure and vacuum distillation systems, separating units, and multi-stage filter presses removing all insoluble particulates.</p>
                            <div class="src-facility-tags">
                                <span>Vacuum Distillation</span>
                                <span>Osmosis</span>
                                <span>0.01% Insolubles</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facility 3: Crystallization & Drying -->
                <div class="swiper-slide h-auto">
                    <div class="src-facility-card">
                        <div class="src-facility-img-wrap">
                            <span class="src-facility-badge">Particle Precision</span>
                            <img src="{{ asset('assets/images/gallery/2.jpg') }}" alt="Crystallization & Drying Yard" loading="lazy">
                        </div>
                        <div class="src-facility-body">
                            <div class="src-facility-title">Crystallizers &amp; Flash Dryers</div>
                            <p class="src-facility-desc">Continuous fluid-bed dryers and rotary crystallizers delivering ultra-pure crystal lattices and free-flowing anhydrous powders.</p>
                            <div class="src-facility-tags">
                                <span>Rotary Dryers</span>
                                <span>Crystal Lattice</span>
                                <span>Anti-Caking</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facility 4: Modern Warehousing -->
                <div class="swiper-slide h-auto">
                    <div class="src-facility-card">
                        <div class="src-facility-img-wrap">
                            <span class="src-facility-badge">5,000 MT Staging</span>
                            <img src="{{ asset('assets/images/gallery/4.jpg') }}" alt="Commodious Warehouse & Palletized Staging" loading="lazy">
                        </div>
                        <div class="src-facility-body">
                            <div class="src-facility-title">Commodious Panoli Warehouse</div>
                            <p class="src-facility-desc">Moisture-controlled covered warehousing with heavy pallet racking, automated shrink wrapping, and direct container stuffing docks.</p>
                            <div class="src-facility-tags">
                                <span>Container Stuffing</span>
                                <span>HDPE Pallets</span>
                                <span>Fast Dispatch</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facility 5: QC Analytical Laboratory -->
                <div class="swiper-slide h-auto">
                    <div class="src-facility-card">
                        <div class="src-facility-img-wrap">
                            <span class="src-facility-badge">ISO 9001:2008</span>
                            <img src="{{ asset('assets/images/blog/scientists-microscope.jpg') }}" alt="Analytical Quality Control Lab" loading="lazy">
                        </div>
                        <div class="src-facility-body">
                            <div class="src-facility-title">In-House Analytical QC Lab</div>
                            <p class="src-facility-desc">Calibrated spectrophotometers, potentiometric titrators, and gravimetric moisture analyzers conducting stringent batch-wise checks.</p>
                            <div class="src-facility-tags">
                                <span>Assay &ge; 98%</span>
                                <span>COA Generation</span>
                                <span>Trace Metals</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <div class="d-flex justify-content-between align-items-center mt-3 src-slider-controls src-facility-controls">
                <div class="swiper-pagination src-facility-pagination position-static w-auto"></div>
                <div class="src-slider-arrows d-flex gap-2">
                    <button class="src-slider-btn src-facility-prev" type="button" aria-label="Previous Facility"><i class="bi bi-chevron-left"></i></button>
                    <button class="src-slider-btn src-facility-next" type="button" aria-label="Next Facility"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================
    Quality Standards & Testing Section
=========================== -->
<section class="py-5 py-lg-6 bg-light border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div>
                <span class="src-subheading">Stringent Process Control</span>
                <div class="src-title fs-2 fw-bold text-navy-900">4-Stage Quality Assurance Protocol</div>
                <p class="src-desc mb-0">Quality has always been and will be the foremost pillar of S R Chemicals. Every metric ton manufactured passes through 4 verified gate checkpoints.</p>
            </div>
        </div>

        <div class="swiper src-quality-swiper pb-4">
            <div class="swiper-wrapper align-items-stretch">
                <!-- Stage 1 -->
                <div class="swiper-slide h-auto">
                    <div class="src-quality-step-card h-100">
                        <span class="src-q-step-badge">STEP 01</span>
                        <div class="src-q-icon"><i class="bi bi-funnel-fill"></i></div>
                        <div class="src-q-title">Raw Material Assay</div>
                        <p class="src-q-desc">Verification of pure thermal phosphoric acid and food/technical alkalis before entering the synthesis stream.</p>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="swiper-slide h-auto">
                    <div class="src-quality-step-card h-100">
                        <span class="src-q-step-badge">STEP 02</span>
                        <div class="src-q-icon"><i class="bi bi-sliders2-vertical"></i></div>
                        <div class="src-q-title">Reaction Monitoring</div>
                        <p class="src-q-desc">Continuous telemetry of temperature, pH titration curves, and molar ratios for 100% conversion efficiency.</p>
                    </div>
                </div>

                <!-- Stage 3 -->
                <div class="swiper-slide h-auto">
                    <div class="src-quality-step-card h-100">
                        <span class="src-q-step-badge">STEP 03</span>
                        <div class="src-q-icon"><i class="bi bi-snow2"></i></div>
                        <div class="src-q-title">Lattice &amp; Mesh Grading</div>
                        <p class="src-q-desc">Controlled cooling crystallizers guarantee clear needle crystal formation or uniform powder mesh without lumps.</p>
                    </div>
                </div>

                <!-- Stage 4 -->
                <div class="swiper-slide h-auto">
                    <div class="src-quality-step-card h-100">
                        <span class="src-q-step-badge">STEP 04</span>
                        <div class="src-q-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <div class="src-q-title">Batch COA Issuance</div>
                        <p class="src-q-desc">Final moisture, loss on drying, heavy metals (Pb/Fe/As), and P2O5 assays logged into verified Certificates of Analysis.</p>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="d-flex justify-content-between align-items-center mt-4 src-slider-controls src-quality-controls">
                <div class="swiper-pagination src-quality-pagination position-static w-auto"></div>
                <div class="src-slider-arrows d-flex gap-2">
                    <button class="src-slider-btn src-quality-prev" type="button" aria-label="Previous Step"><i class="bi bi-chevron-left"></i></button>
                    <button class="src-slider-btn src-quality-next" type="button" aria-label="Next Step"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================
    Industries & Applications Matrix Section
=========================== -->
<section class="py-5 py-lg-6 bg-white border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div>
                <span class="src-subheading">Versatile Industrial Utility</span>
                <div class="src-title fs-2 fw-bold text-navy-900">Key Industries &amp; Applications Served</div>
                <p class="src-desc mb-0">Essential chemical building blocks supporting critical global manufacturing processes across diverse commercial sectors.</p>
            </div>
        </div>

        <div class="swiper src-industry-swiper pb-4">
            <div class="swiper-wrapper align-items-stretch">
                <!-- Industry 1: Water Treatment -->
                <div class="swiper-slide h-auto">
                    <div class="src-industry-card h-100">
                        <div class="src-ind-icon"><i class="bi bi-water"></i></div>
                        <div class="src-ind-title">Water &amp; Boiler Treatment</div>
                        <p class="src-ind-desc">Scale inhibition, boiler corrosion prevention, and water softening in thermal power plants and municipal facilities.</p>
                        <div class="src-ind-pills">
                            <span>SHMP</span>
                            <span>DSP Anhydrous</span>
                            <span>TSP Crystals</span>
                        </div>
                    </div>
                </div>

                <!-- Industry 2: Metal Phosphating -->
                <div class="swiper-slide h-auto">
                    <div class="src-industry-card h-100">
                        <div class="src-ind-icon"><i class="bi bi-gear-fill"></i></div>
                        <div class="src-ind-title">Metal Surface Phosphating</div>
                        <p class="src-ind-desc">Pre-treatment conversion coatings, rust prevention, paint adhesion primers, and heavy-duty industrial degreasing.</p>
                        <div class="src-ind-pills">
                            <span>MSP Crystals</span>
                            <span>TSP Anhydrous</span>
                            <span>TSPP</span>
                        </div>
                    </div>
                </div>

                <!-- Industry 3: Pharmaceuticals & Buffers -->
                <div class="swiper-slide h-auto">
                    <div class="src-industry-card h-100">
                        <div class="src-ind-icon"><i class="bi bi-capsule"></i></div>
                        <div class="src-ind-title">Pharmaceutical Buffers</div>
                        <p class="src-ind-desc">Precision physiological pH regulators, fermentation media nutrients, and diagnostic buffer reagents.</p>
                        <div class="src-ind-pills">
                            <span>DKP Pure</span>
                            <span>MKP Buffer</span>
                            <span>DSP Dodeca</span>
                        </div>
                    </div>
                </div>

                <!-- Industry 4: Food & Dairy Processing -->
                <div class="swiper-slide h-auto">
                    <div class="src-industry-card h-100">
                        <div class="src-ind-icon"><i class="bi bi-cup-hot-fill"></i></div>
                        <div class="src-ind-title">Food &amp; Dairy Processing</div>
                        <p class="src-ind-desc">Emulsifying salts for processed cheese, leavening acidulants for bakery, and moisture retainers for seafood.</p>
                        <div class="src-ind-pills">
                            <span>SAPP 28</span>
                            <span>DSP Pure</span>
                            <span>TSPP Food</span>
                        </div>
                    </div>
                </div>

                <!-- Industry 5: Agriculture & Fertilizers -->
                <div class="swiper-slide h-auto">
                    <div class="src-industry-card h-100">
                        <div class="src-ind-icon"><i class="bi bi-tree-fill"></i></div>
                        <div class="src-ind-title">Agriculture &amp; Fertilizers</div>
                        <p class="src-ind-desc">100% water-soluble foliar feed, hydroponic nutrient salts, and soil conditioning with zero chloride/sodium.</p>
                        <div class="src-ind-pills">
                            <span>MKP (0-52-34)</span>
                            <span>MAP (12-61-0)</span>
                            <span>DAP</span>
                        </div>
                    </div>
                </div>

                <!-- Industry 6: Detergents & Textiles -->
                <div class="swiper-slide h-auto">
                    <div class="src-industry-card h-100">
                        <div class="src-ind-icon"><i class="bi bi-droplet-half"></i></div>
                        <div class="src-ind-title">Textiles &amp; Detergents</div>
                        <p class="src-ind-desc">Sequestrants and builders for industrial laundry, dye bath dispersing agents, and flame retardant fabric treatments.</p>
                        <div class="src-ind-pills">
                            <span>SHMP Glass</span>
                            <span>TSPP Technical</span>
                            <span>MAP Fire Safe</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="d-flex justify-content-between align-items-center mt-4 src-slider-controls src-industry-controls">
                <div class="swiper-pagination src-industry-pagination position-static w-auto"></div>
                <div class="src-slider-arrows d-flex gap-2">
                    <button class="src-slider-btn src-industry-prev" type="button" aria-label="Previous Industry"><i class="bi bi-chevron-left"></i></button>
                    <button class="src-slider-btn src-industry-next" type="button" aria-label="Next Industry"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</section>

<!-- ========================
    Client Trust & Testimonials Slider
=========================== -->
<section class="py-5 py-lg-6 bg-light border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div>
                <span class="src-subheading">Trusted Globally</span>
                <div class="src-title fs-2 fw-bold text-navy-900">What Our Chemical Procurement Partners Say</div>
                <p class="src-desc mb-0">Delivering reliable bulk consistency, prompt shipping documentation, and certified laboratory analysis worldwide.</p>
            </div>
        </div>

        <div class="swiper src-testimonial-swiper pb-4">
            <div class="swiper-wrapper align-items-stretch">
                <!-- Testimonial 1 -->
                <div class="swiper-slide h-auto">
                    <div class="src-testimonial-card">
                        <div class="src-testi-rating">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="src-testi-quote">
                            "We source 40+ MT monthly of Di-Sodium Phosphate Anhydrous from S R Chemicals for our boiler water treatment operations. The clarity of solution and batch assay consistency are exceptional."
                        </p>
                        <div class="src-testi-author">
                            <div class="src-testi-avatar">RP</div>
                            <div>
                                <div class="src-testi-name">Rajesh Patel</div>
                                <div class="src-testi-role">Procurement Head • Gujarat Industrial Zone</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="swiper-slide h-auto">
                    <div class="src-testimonial-card">
                        <div class="src-testi-rating">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="src-testi-quote">
                            "Direct container dispatches to Hai Phong port have been completely seamless. The poly-lined HDPE export bags ensure zero moisture clumping even through tropical sea transit."
                        </p>
                        <div class="src-testi-author">
                            <div class="src-testi-avatar">NV</div>
                            <div>
                                <div class="src-testi-name">Nguyen Van Minh</div>
                                <div class="src-testi-role">Import Director • Textile Auxiliaries, Vietnam</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="swiper-slide h-auto">
                    <div class="src-testimonial-card">
                        <div class="src-testi-rating">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="src-testi-quote">
                            "Their Monopotassium Phosphate (MKP 0-52-34) has the lowest heavy metal impurities among Indian producers. Every dispatch comes with an accurate, signed Certificate of Analysis."
                        </p>
                        <div class="src-testi-author">
                            <div class="src-testi-avatar">SS</div>
                            <div>
                                <div class="src-testi-name">Somchai Sukprasert</div>
                                <div class="src-testi-role">Technical Sourcing • Bangkok, Thailand</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <div class="d-flex justify-content-between align-items-center mt-3 src-slider-controls src-testimonial-controls">
                <div class="swiper-pagination src-testimonial-pagination position-static w-auto"></div>
                <div class="src-slider-arrows d-flex gap-2">
                    <button class="src-slider-btn src-testimonial-prev" type="button" aria-label="Previous Testimonial"><i class="bi bi-chevron-left"></i></button>
                    <button class="src-slider-btn src-testimonial-next" type="button" aria-label="Next Testimonial"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================
    Vietnam Export Service Section
=========================== -->
<section class="py-5 bg-white border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="p-4 p-lg-5 rounded-4 border shadow-sm" style="background: linear-gradient(135deg, #f8fafc 0%, #edf4fc 100%);">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="badge bg-primary text-white text-uppercase px-3 py-2 fw-bold small mb-2">
                        <i class="bi bi-globe-asia-australia me-1"></i> Global Export Division
                    </span>
                    <h3 class="fs-3 fw-bold text-dark mb-3">Bulk Chemical Export &amp; Supply to Vietnam</h3>
                    <p class="text-muted mb-3" style="line-height: 1.8; font-size: 1rem;">
                        S R Chemicals operates dedicated export corridors supplying high-purity inorganic phosphate salts direct from our Panoli, Gujarat plant to major industrial regions in Vietnam. We cater to industrial processing, water treatment, and textile dyeing hubs across <strong>Ho Chi Minh City</strong> (Binh Duong, Dong Nai), <strong>Hai Phong</strong>, and <strong>Da Nang</strong> with custom moisture-proof packaging and fast port transit.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-white text-dark border px-3 py-2 fw-semibold">
                            <i class="bi bi-geo-alt-fill text-primary me-1"></i> Ho Chi Minh City
                        </span>
                        <span class="badge bg-white text-dark border px-3 py-2 fw-semibold">
                            <i class="bi bi-geo-alt-fill text-primary me-1"></i> Hai Phong
                        </span>
                        <span class="badge bg-white text-dark border px-3 py-2 fw-semibold">
                            <i class="bi bi-geo-alt-fill text-primary me-1"></i> Da Nang
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('chemical_exporter_supplier_vietnam') }}" class="src-btn-primary">
                        <span>Explore Our Vietnam Export Services</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================
    Blog CTA Section
=========================== -->
<section class="py-4 py-lg-5 bg-light">
    <div class="container-fluid px-lg-5">
        <div class="p-4 rounded-4 bg-white border shadow-sm d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div>
                <h4 class="fs-4 fw-bold text-dark mb-1">Stay Informed — Read Our Latest Industry Insights</h4>
                <p class="text-muted mb-0">Explore technical articles, product guides, and chemical industry news written by our experts at S R Chemicals.</p>
            </div>
            <div>
                <a href="{{ route('blog') }}" class="src-btn-cta">
                    <i class="bi bi-journal-text me-2"></i>
                    <span>Visit Our Blog</span>
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
