@extends('layouts.app')

@section('seo')
    <title>Phosphate Chemical Manufacturer & Bulk Supplier | Industrial Grade Inorganic Salts Exporter | SR Chems</title>
    <meta name="description" content="Leading manufacturer and global supplier of high-purity industrial and food-grade phosphate chemicals. Request a quote for premium bulk chemical orders today.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Phosphate Chemical Manufacturer & Bulk Supplier | SR Chems">
    <meta property="og:description" content="Leading manufacturer and global supplier of high-purity industrial and food-grade phosphate chemicals. Request a quote for premium bulk chemical orders today.">
    <meta property="og:url" content="https://www.srchems.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.srchems.com/assets/images/logo/logo.1.jpg">
@endsection

@section('content')

<!-- 1. Full-Width Hero Section with Trust Strip -->
@include('partials.hero')

<!-- 2. Product Category Cards (3 Major Pillars) -->
<section class="src-pattern-crystal py-5 py-lg-6">
    <div class="container-fluid px-lg-5">
        <div class="src-section-header">
            <span class="src-subheading">Our Specialty Chemical Lines</span>
            <h2 class="src-title">Core Chemical Classifications</h2>
            <p class="src-desc">High-clarity, precisely synthesized inorganic phosphate salts for industrial processing, agriculture, and pharmaceuticals.</p>
        </div>

        <div class="row g-4">
            <!-- Category 1: Sodium Phosphate -->
            <div class="col-md-4">
                <x-category-card
                    title="Sodium Phosphate"
                    description="Sodium Phosphate comes in different forms and we provide all of them under one roof at highly competitive prices. Moreover, all these compounds are unmatched in quality as these have been carefully prepared under the supervision of professionals to obtain the desired results."
                    image="assets/images/product/di_ sodium_phosphate.png"
                    alt="post image"
                    link="{{ route('di_sodium_phosphate') }}"
                    form="Anhydrous & Crystals"
                />
            </div>

            <!-- Category 2: Potassium Phosphate -->
            <div class="col-md-4">
                <x-category-card
                    title="Potassium Phosphate"
                    description="Are you afraid of buying chemical compounds online? If yes, then worry no more. Allying with S. R. Chemicals provide you the relief of buying Potassium Phosphate and its different forms of unmatched quality at the prices that fit within the budgets of all customers."
                    image="assets/images/product/di_potassium_phosphate.png"
                    alt="post image"
                    link="{{ route('potassium_phosphate') }}"
                    form="Technical & Pure Grade"
                />
            </div>

            <!-- Category 3: Ammonium Phosphate -->
            <div class="col-md-4">
                <x-category-card
                    title="Ammonium Phosphate"
                    description="If you are looking for a good quality Ammonium Phosphate, then buy the same at the best prices from us by exploring our range. The chemical compounds provided under this category have been prepared after conducting a rigorous research."
                    image="assets/images/product/di_ammonium_phosphate.png"
                    alt="post image"
                    link="{{ route('ammonium_phosphate') }}"
                    form="Crystal & Granular"
                />
            </div>
        </div>
    </div>
</section>

<!-- 3. DEALS Section (SEO Heading H3 + 4 Product Cards H5 & H4) -->
<section class="py-5 py-lg-6 bg-light border-top border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="src-section-header">
            <span class="src-subheading">Featured Bulk Formulations</span>
            <h3 class="heading-title src-title">DEALS</h3>
            <p class="src-desc">Direct factory pricing on our highest-demand industrial phosphate compounds with certified batch consistency.</p>
        </div>

        <div class="row g-4">
            <!-- Deal 1 -->
            <div class="col-sm-6 col-lg-3">
                <div class="src-product-card">
                    <span class="src-product-badge">Anhydrous Form</span>
                    <div class="src-product-img-wrap">
                        <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}">
                            <img src="{{ asset('assets/images/product/di_ sodium_phosphate_anhydrous.png') }}" alt="service" loading="lazy" width="220" height="180">
                        </a>
                    </div>
                    <h5> Di Sodium Phosphate Anhydrous - SR </h5>
                    <h4 class="service-title">
                        <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}">Di Sodium Phosphate <br>Anhydrous-SR</a>
                    </h4>
                    <div class="src-product-footer">
                        <span class="text-muted small"><i class="bi bi-patch-check text-primary me-1"></i> 98% Min.</span>
                        <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="src-view-link">
                            <span>View</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Deal 2 -->
            <div class="col-sm-6 col-lg-3">
                <div class="src-product-card">
                    <span class="src-product-badge">Technical Grade</span>
                    <div class="src-product-img-wrap">
                        <a href="{{ route('di_ammonium_phosphate') }}">
                            <img src="{{ asset('assets/images/product/di_ammonium_phosphate.png') }}" alt="service" loading="lazy" width="220" height="180">
                        </a>
                    </div>
                    <h5>Di Ammonium <br>Phosphate</h5>
                    <h4 class="service-title">
                        <a href="{{ route('di_ammonium_phosphate') }}">Di Ammonium <br> Phosphate</a>
                    </h4>
                    <div class="src-product-footer">
                        <span class="text-muted small"><i class="bi bi-patch-check text-primary me-1"></i> High Purity</span>
                        <a href="{{ route('di_ammonium_phosphate') }}" class="src-view-link">
                            <span>View</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Deal 3 -->
            <div class="col-sm-6 col-lg-3">
                <div class="src-product-card">
                    <span class="src-product-badge">Crystalline</span>
                    <div class="src-product-img-wrap">
                        <a href="{{ route('monoammonium_phosphate') }}">
                            <img src="{{ asset('assets/images/product/mono_ammonium_phosphate.png') }}" alt="service" loading="lazy" width="220" height="180">
                        </a>
                    </div>
                    <h5>Mono Ammonium Phosphate</h5>
                    <h4 class="service-title">
                        <a href="{{ route('monoammonium_phosphate') }}">Monoammonium <br> Phosphate</a>
                    </h4>
                    <div class="src-product-footer">
                        <span class="text-muted small"><i class="bi bi-patch-check text-primary me-1"></i> Water Soluble</span>
                        <a href="{{ route('monoammonium_phosphate') }}" class="src-view-link">
                            <span>View</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Deal 4 -->
            <div class="col-sm-6 col-lg-3">
                <div class="src-product-card">
                    <span class="src-product-badge">Crystal Pure</span>
                    <div class="src-product-img-wrap">
                        <a href="{{ route('tri_sodium_phosphate_crystals') }}">
                            <img src="{{ asset('assets/images/product/tri_sodium_phosphate_crystal.png') }}" alt="service" loading="lazy" width="220" height="180">
                        </a>
                    </div>
                    <h5>Tri Sodium Phosphate Crystals</h5>
                    <h4 class="service-title">
                        <a href="{{ route('tri_sodium_phosphate_crystals') }}">Tri Sodium <br>Phosphate Crystals</a>
                    </h4>
                    <div class="src-product-footer">
                        <span class="text-muted small"><i class="bi bi-patch-check text-primary me-1"></i> Dodeca Pure</span>
                        <a href="{{ route('tri_sodium_phosphate_crystals') }}" class="src-view-link">
                            <span>View</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. CTA Band -->
        @include('partials.cta-band')
    </div>
</section>

<!-- 5. About Intro Block + Quick Response Inquiry Form -->
<section class="py-5 py-lg-6">
    <div class="container-fluid px-lg-5">
        <div class="row g-5 align-items-center">
            <!-- Left: About Intro Text & Image -->
            <div class="col-lg-6">
                <div class="pe-lg-4">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 bg-light rounded-pill text-primary fw-bold small mb-3 border">
                        <i class="bi bi-flask"></i> Scientific Formulation Since 2000
                    </div>

                    <h3 class="heading-title pt-0 fs-2 fw-bold text-dark mb-4" style="line-height: 1.3;">
                        Inorganic Salts are indispensable chemicals that surrounds us everywhere, from what we eat to what we wear.
                    </h3>

                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm mb-4">
                        <img src="{{ asset('assets/images/about/t_1.jpg') }}" height="380" width="580" alt="about" class="w-100 object-fit-cover" loading="lazy">
                    </div>

                    <p class="mb-30 text-muted" style="line-height: 1.8;">
                        <b style="color:#0c1e3d;">Offering precisely formulated and highly soluble Inorganic Chemicals like Sodium Phosphate, Ammonium Phosphate, and Potassium Phosphate series like Mono / Di / Tri / Pyro,  that are accessible in crystalline as well as Powder form.</b>
                    </p>
                    <p class="mb-30 text-muted" style="line-height: 1.8;">
                        <b style="color:#0c1e3d;">Their existence is just not negligible because of their wide benefits and usage in Fertilizers, Pharmaceuticals, Petrochemicals, Dyes Industry & Construction chemical industry. These chemicals have become a great necessity that sustains the effective functioning of industrial goods, making it more certain to use.</b>
                    </p>
                </div>
            </div>

            <!-- Right: Quick Response Inquiry Form -->
            <div class="col-lg-6">
                @include('partials.inquiry-form')
            </div>
        </div>
    </div>
</section>

<!-- 6. MOST POPULAR PRODUCTS Section -->
<section class="py-5 py-lg-6 bg-light border-top border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="src-section-header">
            <span class="src-subheading">High Volume Industrial Inorganics</span>
            <h3 class="heading-title pt-0 src-title">MOST POPULAR PRODUCTS</h3>
            <p class="src-desc">Consistently supplied to India's major power plants, petrochemical complexes, and global importers.</p>
        </div>

        <div class="row g-4">
            <!-- Product 1: Di Sodium Phosphate -->
            <div class="col-sm-6 col-lg-3">
                <div class="src-product-card">
                    <span class="src-product-badge">Sodium Line</span>
                    <div class="src-product-img-wrap">
                        <a href="{{ route('di_sodium_phosphate') }}">
                            <img src="{{ asset('assets/images/product/di_ sodium_phosphate.png') }}" height="180" width="220" alt="post image" loading="lazy">
                        </a>
                    </div>
                    <div class="post-meta-cat small text-muted mb-1">
                        <a href="{{ route('di_sodium_phosphate') }}" class="text-primary fw-bold text-decoration-none">Di Sodium Phosphate</a>
                    </div>
                    <h4 class="src-product-title fs-6">
                        <a href="{{ route('di_sodium_phosphate') }}">Di Sodium Phosphate</a>
                    </h4>
                    <div class="src-product-footer">
                        <span class="text-muted small">Powder / Crystal</span>
                        <a href="{{ route('di_sodium_phosphate') }}" class="src-view-link">
                            <span>Read More</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 2: Mono Sodium Phosphate Crystal -->
            <div class="col-sm-6 col-lg-3">
                <div class="src-product-card">
                    <span class="src-product-badge">Crystalline</span>
                    <div class="src-product-img-wrap">
                        <a href="{{ route('mono_sodium_phosphate_crystal') }}">
                            <img src="{{ asset('assets/images/product/mono_sodium_phosphate_crystal.png') }}" height="180" width="220" alt="post image" loading="lazy">
                        </a>
                    </div>
                    <div class="post-meta-cat small text-muted mb-1">
                        <a href="{{ route('mono_sodium_phosphate_crystal') }}" class="text-primary fw-bold text-decoration-none">Mono Sodium Phosphate Crystal</a>
                    </div>
                    <h4 class="src-product-title fs-6">
                        <a href="{{ route('mono_sodium_phosphate_crystal') }}">Mono Sodium Phosphate Crystal</a>
                    </h4>
                    <div class="src-product-footer">
                        <span class="text-muted small">Clear Solubility</span>
                        <a href="{{ route('mono_sodium_phosphate_crystal') }}" class="src-view-link">
                            <span>Read More</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 3: Di Sodium Phosphate Crystal -->
            <div class="col-sm-6 col-lg-3">
                <div class="src-product-card">
                    <span class="src-product-badge">High Clarity</span>
                    <div class="src-product-img-wrap">
                        <a href="{{ route('di_sodium_phosphate_crystal') }}">
                            <img src="{{ asset('assets/images/product/di_sodium_ phosphate_crystal.png') }}" height="180" width="220" alt="post image" loading="lazy">
                        </a>
                    </div>
                    <div class="post-meta-cat small text-muted mb-1">
                        <a href="{{ route('di_sodium_phosphate_crystal') }}" class="text-primary fw-bold text-decoration-none">Di Sodium Phosphate Crystal</a>
                    </div>
                    <h4 class="src-product-title fs-6">
                        <a href="{{ route('di_sodium_phosphate_crystal') }}">Di Sodium Phosphate Crystal</a>
                    </h4>
                    <div class="src-product-footer">
                        <span class="text-muted small">Buffering Agent</span>
                        <a href="{{ route('di_sodium_phosphate_crystal') }}" class="src-view-link">
                            <span>Read More</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 4: Tetra Potassium Pyro Phosphate -->
            <div class="col-sm-6 col-lg-3">
                <div class="src-product-card">
                    <span class="src-product-badge">Pyrophosphate</span>
                    <div class="src-product-img-wrap">
                        <a href="{{ route('tetra_potassium_pyro_phosphate') }}">
                            <img src="{{ asset('assets/images/product/tetra_sodium_pyro_phoshpate.png') }}" height="180" width="220" alt="post image" loading="lazy">
                        </a>
                    </div>
                    <div class="post-meta-cat small text-muted mb-1">
                        <a href="{{ route('tetra_potassium_pyro_phosphate') }}" class="text-primary fw-bold text-decoration-none">Tetra Potassium Pyro Phosphate</a>
                    </div>
                    <h4 class="src-product-title fs-6">
                        <a href="{{ route('tetra_potassium_pyro_phosphate') }}">Tetra Potassium Pyro Phosphate</a>
                    </h4>
                    <div class="src-product-footer">
                        <span class="text-muted small">Technical Grade</span>
                        <a href="{{ route('tetra_potassium_pyro_phosphate') }}" class="src-view-link">
                            <span>Read More</span> <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('our_products') }}" class="src-btn-primary">
                <span>View All Products</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- 7. Company Story, Strengths, Infrastructure & Certifications Tabs -->
<section class="py-5 py-lg-6">
    <div class="container-fluid px-lg-5">
        <div class="src-section-header">
            <span class="src-subheading">Manufacturing Excellence</span>
            <h2 class="src-title">Company Profile &amp; Infrastructure</h2>
            <p class="src-desc">Over two decades of precision formulation, ambient-pressure technology, and rigorous ISO-certified quality auditing.</p>
        </div>

        @include('partials.strength-tabs')
    </div>
</section>

<!-- 8. What Do We Offer? (Structured 3-Column Product List) -->
<section class="py-5 py-lg-6 bg-light border-top border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="src-section-header">
            <span class="src-subheading">Complete Chemical Catalog</span>
            <h5 class="heading-title src-title fs-2">What Do We Offer?</h5>
            <p class="heading-desc justify-content-end text-muted">
                We have established a notable position in the industry by dealing a large assortment of Inorganic Chemicals that finds application in pigments, fuels, medicines, coatings, catalysts, and various other products. Our offered range includes the following:
            </p>
        </div>

        <div class="row g-4">
            <!-- Sodium Phosphate Column -->
            <div class="col-md-4">
                <div class="card h-100 p-4 border-0 rounded-4 shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="p-2 bg-primary-subtle text-primary rounded-3">
                            <i class="bi bi-hexagon-fill fs-4"></i>
                        </div>
                        <span class="fw-bold fs-5 text-dark">Sodium Phosphate :</span>
                    </div>
                    <ul class="heading-desc list-unstyled ps-0 mb-0">
                        <li class="py-2 border-bottom"><a href="{{ route('mono_sodium_phosphate_crystal') }}" class="text-muted d-block">Mono Sodium Phosphate ( Anhydrous &amp; Crystals)</a></li>
                        <li class="py-2 border-bottom"><a href="{{ route('di_sodium_phosphate_crystal') }}" class="text-muted d-block">Di Sodium Phosphate (Anhydrous &amp; Crystals)</a></li>
                        <li class="py-2 border-bottom"><a href="{{ route('tri_sodium_phosphate_crystals') }}" class="text-muted d-block">Tri Sodium Phosphate (Anhydrous &amp; Crystals)</a></li>
                        <li class="py-2 border-bottom"><a href="{{ route('sodium_hexameta_phosphate') }}" class="text-muted d-block">Sodium Hexameta Phosphate</a></li>
                        <li class="py-2 border-bottom"><a href="{{ route('tetra_sodium_pyro_phosphate') }}" class="text-muted d-block">Tetra Sodium Pyro Phosphate</a></li>
                        <li class="py-2"><a href="{{ route('sodium_acid_pyrophosphate') }}" class="text-muted d-block">Sodium Acid Pyro Phosphate</a></li>
                    </ul>
                </div>
            </div>

            <!-- Potassium Phosphate Column -->
            <div class="col-md-4">
                <div class="card h-100 p-4 border-0 rounded-4 shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="p-2 bg-success-subtle text-success rounded-3">
                            <i class="bi bi-gem fs-4"></i>
                        </div>
                        <span class="fw-bold fs-5 text-dark">Potassium Phosphate :</span>
                    </div>
                    <ul class="heading-desc list-unstyled ps-0 mb-0">
                        <li class="py-2 border-bottom"><a href="{{ route('mono_potassium_phosphate') }}" class="text-muted d-block">Mono Potassium Phosphate</a></li>
                        <li class="py-2 border-bottom"><a href="{{ route('di_potassium_phosphate') }}" class="text-muted d-block">Di Potassium Phosphate</a></li>
                        <li class="py-2"><a href="{{ route('tetra_potassium_pyro_phosphate') }}" class="text-muted d-block">Tetra Potassium Pyro Phosphate</a></li>
                    </ul>
                </div>
            </div>

            <!-- Ammonium Phosphate Column -->
            <div class="col-md-4">
                <div class="card h-100 p-4 border-0 rounded-4 shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="p-2 bg-warning-subtle text-warning rounded-3">
                            <i class="bi bi-droplet-fill fs-4"></i>
                        </div>
                        <span class="fw-bold fs-5 text-dark">Ammonium Phosphate:</span>
                    </div>
                    <ul class="heading-desc list-unstyled ps-0 mb-0">
                        <li class="py-2 border-bottom"><a href="{{ route('monoammonium_phosphate') }}" class="text-muted d-block">Mono Ammonium Phosphate</a></li>
                        <li class="py-2"><a href="{{ route('di_ammonium_phosphate') }}" class="text-muted d-block">Di Ammonium Phosphate</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. Our Clientele Section -->
@include('partials.client-strip')

<!-- 10. Our Mission Block -->
<section class="src-mission-section">
    <div class="container-fluid px-lg-5">
        <div class="src-mission-banner" style="background-image: url('{{ asset('assets/images/banners/1.jpg') }}');">
            <div class="src-mission-overlay" aria-hidden="true"></div>
            <div class="src-mission-content">
                <span class="badge bg-warning text-dark text-uppercase px-3 py-2 fw-bold mb-3">
                    <i class="bi bi-compass-fill me-1"></i> Strategic Vision
                </span>
                <h5 class="heading-title text-white fs-2 fw-bold mb-3">Our Mission</h5>
                <p class="heading-desc text-light mb-0 justify-content-end" style="line-height: 1.85; font-size: 1.05rem; opacity: 0.94;">
                    To cater all the requirements of clients from Pharmaceutical Industry, who reside in domestic as well as international market, we are preparing to make AR and LR grade phosphate chemicals along with BP and IP grade phosphate salts in our state-of-the-art-premises.
                </p>

                <div class="src-mission-pills">
                    <div class="src-mission-pill">
                        <i class="bi bi-capsule text-warning"></i>
                        <span>Pharma Industry Solutions</span>
                    </div>
                    <div class="src-mission-pill">
                        <i class="bi bi-shield-check text-info"></i>
                        <span>AR &amp; LR Analytical Grades</span>
                    </div>
                    <div class="src-mission-pill">
                        <i class="bi bi-award text-success"></i>
                        <span>BP &amp; IP Pharmacopoeia Salts</span>
                    </div>
                    <div class="src-mission-pill">
                        <i class="bi bi-globe-americas text-primary-subtle"></i>
                        <span>Domestic &amp; Global Supply</span>
                    </div>
                </div>

                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('contact_us') }}" class="src-btn-cta">
                        <i class="bi bi-chat-dots-fill me-2"></i>
                        <span>Partner With Us</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
