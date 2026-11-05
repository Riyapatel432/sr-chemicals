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
                <span class="badge bg-primary text-white text-uppercase px-3 py-1 fw-bold small mb-2">
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
        <div class="src-section-header">
            <span class="src-subheading">Comprehensive Product Portfolio</span>
            <h2 class="src-title">Products Offered By Us</h2>
            <p class="src-desc mb-0">
                Our company is engaged offering a wide variety of Inorganic Chemicals that are appreciated for their high melting and specific electrical conductivity properties. Our offered range comes in various quantities as per the desires of the customers. Chemicals we deal in includes the following:
            </p>
        </div>

        <div class="row g-4">
            <!-- Classification 1: Sodium Phosphate -->
            <div class="col-lg-6">
                <div class="card h-100 p-4 border-0 rounded-4 shadow-sm bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center gap-3">
                            <div class="p-2 bg-primary-subtle text-primary rounded-3 fs-4">
                                <i class="bi bi-hexagon-fill"></i>
                            </div>
                            <div>
                                <h4 class="fs-5 fw-bold text-dark mb-0">Sodium Phosphate</h4>
                                <span class="small text-muted">Primary Inorganic Phosphate Series</span>
                            </div>
                        </div>
                        <a href="{{ route('sodium_phosphate') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                            View All <i class="bi bi-arrow-right"></i>
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
            <div class="col-lg-6">
                <div class="card h-100 p-4 border-0 rounded-4 shadow-sm bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center gap-3">
                            <div class="p-2 bg-success-subtle text-success rounded-3 fs-4">
                                <i class="bi bi-gem"></i>
                            </div>
                            <div>
                                <h4 class="fs-5 fw-bold text-dark mb-0">Potassium Phosphate</h4>
                                <span class="small text-muted">High Purity Technical &amp; Pure Grade</span>
                            </div>
                        </div>
                        <a href="{{ route('potassium_phosphate') }}" class="btn btn-sm btn-outline-success rounded-pill px-3">
                            View All <i class="bi bi-arrow-right"></i>
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
            <div class="col-lg-4">
                <div class="card h-100 p-4 border-0 rounded-4 shadow-sm bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center gap-3">
                            <div class="p-2 bg-warning-subtle text-warning rounded-3 fs-4">
                                <i class="bi bi-droplet-fill"></i>
                            </div>
                            <div>
                                <h4 class="fs-5 fw-bold text-dark mb-0">Ammonium Phosphate</h4>
                                <span class="small text-muted">Fertilizer &amp; Technical</span>
                            </div>
                        </div>
                        <a href="{{ route('ammonium_phosphate') }}" class="btn btn-sm btn-outline-warning rounded-pill px-2">
                            <i class="bi bi-arrow-right"></i>
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
            <div class="col-lg-4">
                <div class="card h-100 p-4 border-0 rounded-4 shadow-sm bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center gap-3">
                            <div class="p-2 bg-info-subtle text-info rounded-3 fs-4">
                                <i class="bi bi-shield-plus"></i>
                            </div>
                            <div>
                                <h4 class="fs-5 fw-bold text-dark mb-0">TPP Chemical</h4>
                                <span class="small text-muted">Specialty Potassium</span>
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
            <div class="col-lg-4">
                <div class="card h-100 p-4 border-0 rounded-4 shadow-sm bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center gap-3">
                            <div class="p-2 bg-danger-subtle text-danger rounded-3 fs-4">
                                <i class="bi bi-diagram-3-fill"></i>
                            </div>
                            <div>
                                <h4 class="fs-5 fw-bold text-dark mb-0">Pyro Phosphate</h4>
                                <span class="small text-muted">Industrial Buffering</span>
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
