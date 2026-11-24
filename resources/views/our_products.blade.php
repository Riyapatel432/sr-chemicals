@extends('layouts.app')

@section('seo')
    <title>Industrial & Food-Grade Phosphate Product List | SR Chems</title>
    <meta name="description" content="Browse our extensive catalog of high-purity chemical compounds, including sodium, potassium, and ammonium phosphates. Download technical data sheets online.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Industrial & Food-Grade Phosphate Product List | SR Chems">
    <meta property="og:description" content="Browse our extensive catalog of high-purity chemical compounds, including sodium, potassium, and ammonium phosphates. Download technical data sheets online.">
    <meta property="og:url" content="https://www.srchems.com/our-products">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.srchems.com/assets/images/logo/logo.1.jpg">
@endsection

@section('content') 

<!-- ========================
    Page Hero Section with Breadcrumb & Industrial Scrim
=========================== -->
<section class="src-page-hero position-relative">
    <div class="src-page-hero-bg" aria-hidden="true">
        <img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="background" loading="eager">
    </div>
    <div class="container-fluid px-lg-5 position-relative" style="z-index: 2;">
        <div class="src-breadcrumb">
            <a href="{{ route('home') }}"><i class="bi bi-house-door-fill me-1"></i> Home</a>
            <i class="bi bi-chevron-right small text-white-50"></i>
            <span class="active">Our Products</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <div class="src-hero-tag mb-3">
                    <i class="bi bi-patch-check-fill"></i> ISO 9001:2008 Certified Inorganic Chemical Catalog
                </div>
                <h1 class="src-page-title">Our Products</h1>
                <p class="text-white-50 mt-3 mb-0 fs-5" style="max-width: 720px;">
                    Manufacturer and global exporter of high-purity Sodium, Potassium, and Ammonium Phosphate series for industrial processing, water treatment, fertilizers, and pharmaceuticals.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact_us') }}" class="src-btn-cta">
                    <span>Request Bulk Quote</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /.page-hero -->

<!-- ======================
    Showroom Section
========================= -->
<section class="src-showroom-section py-5">
    <div class="container-fluid px-lg-5">
        <!-- Section Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div class="text-center text-md-start">
                <span class="src-section-badge mb-2">Manufacturing Excellence</span>
                <h3 class="src-section-title mb-1">Showroom</h3>
                <p class="src-section-sub mb-0" style="max-width: 680px;">
                    Explore our core chemical families formulated to stringent international standards with guaranteed purity, custom mesh sizing, and export-grade packaging.
                </p>
            </div>
        </div>

        <!-- 3 Primary Product Category Cards (Touch-Swipeable Swiper on Mobile & Tablet) -->
        <div class="swiper src-showroom-swiper pb-4 mb-4">
            <div class="swiper-wrapper align-items-stretch">
                <!-- Product Item #1: Sodium Phosphate -->
                <div class="swiper-slide h-auto">
                    <div class="src-showroom-card h-100">
                        <div class="src-showroom-img-wrap">
                            <span class="src-showroom-badge"><i class="bi bi-award-fill text-warning me-1"></i> Pure Grade</span>
                            <a href="{{ route('di_sodium_phosphate') }}">
                                <img src="{{ asset('assets/images/product/di_ sodium_phosphate.png') }}" alt="post image" width="250" height="315" loading="lazy">
                            </a>
                        </div>
                        <div class="src-showroom-body">
                            <span class="src-showroom-cat-tag">Inorganic Salts Series</span>
                            <div class="src-showroom-title">
                                <a href="{{ route('di_sodium_phosphate') }}">Sodium Phosphate</a>
                            </div>
                            <p class="src-showroom-desc">
                                Sodium Phosphate comes in different forms and we provide all of them under one roof at highly competitive prices. Moreover, all these compounds are unmatched in quality as these have been carefully prepared under the supervision of professionals to obtain the desired results.
                            </p>
                            <div class="src-showroom-pills">
                                <span>Mono (MSP)</span>
                                <span>Di (DSP)</span>
                                <span>Tri (TSP)</span>
                                <span>Pyro (TSPP / SAPP)</span>
                                <span>Hexameta (SHMP)</span>
                            </div>
                            <div class="src-showroom-actions">
                                <a href="{{ route('di_sodium_phosphate') }}" class="btn-read-more">
                                    <i class="bi bi-plus-lg"></i>
                                    <span>Read More</span>
                                </a>
                                <a href="{{ route('contact_us') }}" class="btn-inquire">
                                    <span>Inquire</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item #2: Potassium Phosphate -->
                <div class="swiper-slide h-auto">
                    <div class="src-showroom-card h-100">
                        <div class="src-showroom-img-wrap">
                            <span class="src-showroom-badge"><i class="bi bi-award-fill text-warning me-1"></i> Technical Grade</span>
                            <a href="{{ route('potassium_phosphate') }}">
                                <img src="{{ asset('assets/images/product/di_potassium_phosphate.png') }}" alt="post image" width="250" height="330" loading="lazy">
                            </a>
                        </div>
                        <div class="src-showroom-body">
                            <span class="src-showroom-cat-tag">Potassium Compounds</span>
                            <div class="src-showroom-title">
                                <a href="{{ route('potassium_phosphate') }}">Potassium Phosphate</a>
                            </div>
                            <p class="src-showroom-desc">
                                Are you afraid of buying chemical compounds online? If yes, then worry no more. Allying with S. R. Chemicals provide you the relief of buying Potassium Phosphate and its different forms of unmatched quality at the prices that fit within the budgets of all customers.
                            </p>
                            <div class="src-showroom-pills">
                                <span>Mono (MKP)</span>
                                <span>Di (DKP)</span>
                                <span>Tetra (TKPP)</span>
                                <span>Nutrient Solutions</span>
                                <span>Buffer Agents</span>
                            </div>
                            <div class="src-showroom-actions">
                                <a href="{{ route('potassium_phosphate') }}" class="btn-read-more">
                                    <i class="bi bi-plus-lg"></i>
                                    <span>Read More</span>
                                </a>
                                <a href="{{ route('contact_us') }}" class="btn-inquire">
                                    <span>Inquire</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item #3: Ammonium Phosphate -->
                <div class="swiper-slide h-auto">
                    <div class="src-showroom-card h-100">
                        <div class="src-showroom-img-wrap">
                            <span class="src-showroom-badge"><i class="bi bi-award-fill text-warning me-1"></i> Industrial Grade</span>
                            <a href="{{ route('ammonium_phosphate') }}">
                                <img src="{{ asset('assets/images/product/di_ammonium_phosphate.png') }}" alt="post image" width="250" height="330" loading="lazy">
                            </a>
                        </div>
                        <div class="src-showroom-body">
                            <span class="src-showroom-cat-tag">Fertilizer &amp; Flame Retardant</span>
                            <div class="src-showroom-title">
                                <a href="{{ route('ammonium_phosphate') }}">Ammonium Phosphate</a>
                            </div>
                            <p class="src-showroom-desc">
                                If you are looking for a good quality Ammonium Phosphate, then buy the same at the best prices from us by exploring our range. The chemical compounds provided under this category have been prepared after conducting a rigorous research.
                            </p>
                            <div class="src-showroom-pills">
                                <span>Mono (MAP)</span>
                                <span>Di (DAP)</span>
                                <span>Fire Safety</span>
                                <span>Agriculture</span>
                                <span>Water Soluble</span>
                            </div>
                            <div class="src-showroom-actions">
                                <a href="{{ route('ammonium_phosphate') }}" class="btn-read-more">
                                    <i class="bi bi-plus-lg"></i>
                                    <span>Read More</span>
                                </a>
                                <a href="{{ route('contact_us') }}" class="btn-inquire">
                                    <span>Inquire</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="d-flex justify-content-between align-items-center mt-3 src-slider-controls src-showroom-controls">
                <div class="swiper-pagination src-showroom-pagination position-static w-auto"></div>
                <div class="src-slider-arrows d-flex gap-2">
                    <button class="src-slider-btn src-showroom-prev" type="button" aria-label="Previous Category"><i class="bi bi-chevron-left"></i></button>
                    <button class="src-slider-btn src-showroom-next" type="button" aria-label="Next Category"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>

        <!-- Center CTA: View All Products -->
        <div class="text-center pt-2">
            <a href="{{ route('our_products') }}" class="src-btn-primary">
                <span>View All Products</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
<!-- /.Showroom -->

<!-- ======================
    Featured Phosphate Formulations Carousel (Swiper.js Slider)
========================= -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div>
                <span class="src-subheading">High Demand Formulations</span>
                <div class="src-title fs-2 fw-bold text-navy-900">Featured Bulk Formulations</div>
                <p class="src-desc mb-0">Explore our most requested high-purity inorganic phosphate compounds with guaranteed analytical specs.</p>
            </div>
        </div>

        <div class="swiper src-featured-products-swiper pb-4">
            <div class="swiper-wrapper align-items-stretch">
                <!-- Slide 1: DSP Anhydrous -->
                <div class="swiper-slide h-auto">
                    <div class="src-product-card h-100">
                        <span class="src-product-badge">Anhydrous 98%</span>
                        <div class="src-product-img-wrap">
                            <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}">
                                <img src="{{ asset('assets/images/product/di_ sodium_phosphate_anhydrous.png') }}" alt="Di Sodium Phosphate Anhydrous" loading="lazy">
                            </a>
                        </div>
                        <div class="post-meta-cat small text-muted mb-1">
                            <span class="text-primary fw-bold">Sodium Line</span>
                        </div>
                        <div class="src-product-title fs-6 fw-bold">
                            <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="text-navy-900 text-decoration-none">Di Sodium Phosphate Anhydrous - SR</a>
                        </div>
                        <div class="src-product-footer mt-auto pt-3">
                            <span class="text-muted small"><i class="bi bi-patch-check text-primary me-1"></i> Technical</span>
                            <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="src-view-link">
                                <span>Details</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: MSP Crystal -->
                <div class="swiper-slide h-auto">
                    <div class="src-product-card h-100">
                        <span class="src-product-badge">Crystal Pure</span>
                        <div class="src-product-img-wrap">
                            <a href="{{ route('mono_sodium_phosphate_crystal') }}">
                                <img src="{{ asset('assets/images/product/mono_sodium_phosphate_crystal.png') }}" alt="Mono Sodium Phosphate Crystal" loading="lazy">
                            </a>
                        </div>
                        <div class="post-meta-cat small text-muted mb-1">
                            <span class="text-primary fw-bold">Monobasic</span>
                        </div>
                        <div class="src-product-title fs-6 fw-bold">
                            <a href="{{ route('mono_sodium_phosphate_crystal') }}" class="text-navy-900 text-decoration-none">Mono Sodium Phosphate Crystal</a>
                        </div>
                        <div class="src-product-footer mt-auto pt-3">
                            <span class="text-muted small"><i class="bi bi-patch-check text-primary me-1"></i> High Clarity</span>
                            <a href="{{ route('mono_sodium_phosphate_crystal') }}" class="src-view-link">
                                <span>Details</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3: DKP Pure -->
                <div class="swiper-slide h-auto">
                    <div class="src-product-card h-100">
                        <span class="src-product-badge">Potassium Buffer</span>
                        <div class="src-product-img-wrap">
                            <a href="{{ route('di_potassium_phosphate') }}">
                                <img src="{{ asset('assets/images/product/di_potassium_phosphate.png') }}" alt="Di Potassium Phosphate" loading="lazy">
                            </a>
                        </div>
                        <div class="post-meta-cat small text-muted mb-1">
                            <span class="text-success fw-bold">Potassium Line</span>
                        </div>
                        <div class="src-product-title fs-6 fw-bold">
                            <a href="{{ route('di_potassium_phosphate') }}" class="text-navy-900 text-decoration-none">Di Potassium Phosphate (DKP)</a>
                        </div>
                        <div class="src-product-footer mt-auto pt-3">
                            <span class="text-muted small"><i class="bi bi-patch-check text-success me-1"></i> Pure Grade</span>
                            <a href="{{ route('di_potassium_phosphate') }}" class="src-view-link">
                                <span>Details</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 4: MKP Crystalline -->
                <div class="swiper-slide h-auto">
                    <div class="src-product-card h-100">
                        <span class="src-product-badge">0-52-34 Grade</span>
                        <div class="src-product-img-wrap">
                            <a href="{{ route('mono_potassium_phosphate') }}">
                                <img src="{{ asset('assets/images/product/di_potassium_phosphate.png') }}" alt="Mono Potassium Phosphate" loading="lazy">
                            </a>
                        </div>
                        <div class="post-meta-cat small text-muted mb-1">
                            <span class="text-success fw-bold">Nutrient Salt</span>
                        </div>
                        <div class="src-product-title fs-6 fw-bold">
                            <a href="{{ route('mono_potassium_phosphate') }}" class="text-navy-900 text-decoration-none">Mono Potassium Phosphate (MKP)</a>
                        </div>
                        <div class="src-product-footer mt-auto pt-3">
                            <span class="text-muted small"><i class="bi bi-patch-check text-success me-1"></i> Water Soluble</span>
                            <a href="{{ route('mono_potassium_phosphate') }}" class="src-view-link">
                                <span>Details</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 5: DAP Crystalline -->
                <div class="swiper-slide h-auto">
                    <div class="src-product-card h-100">
                        <span class="src-product-badge">Ammonium Series</span>
                        <div class="src-product-img-wrap">
                            <a href="{{ route('di_ammonium_phosphate') }}">
                                <img src="{{ asset('assets/images/product/di_ammonium_phosphate.png') }}" alt="Di Ammonium Phosphate" loading="lazy">
                            </a>
                        </div>
                        <div class="post-meta-cat small text-muted mb-1">
                            <span class="text-warning-emphasis fw-bold">Ammonium Line</span>
                        </div>
                        <div class="src-product-title fs-6 fw-bold">
                            <a href="{{ route('di_ammonium_phosphate') }}" class="text-navy-900 text-decoration-none">Di Ammonium Phosphate (DAP)</a>
                        </div>
                        <div class="src-product-footer mt-auto pt-3">
                            <span class="text-muted small"><i class="bi bi-patch-check text-warning-emphasis me-1"></i> Technical</span>
                            <a href="{{ route('di_ammonium_phosphate') }}" class="src-view-link">
                                <span>Details</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 6: SHMP -->
                <div class="swiper-slide h-auto">
                    <div class="src-product-card h-100">
                        <span class="src-product-badge">Water Treatment</span>
                        <div class="src-product-img-wrap">
                            <a href="{{ route('sodium_hexameta_phosphate') }}">
                                <img src="{{ asset('assets/images/product/di_ sodium_phosphate.png') }}" alt="Sodium Hexametaphosphate" loading="lazy">
                            </a>
                        </div>
                        <div class="post-meta-cat small text-muted mb-1">
                            <span class="text-primary fw-bold">Polyphosphate</span>
                        </div>
                        <div class="src-product-title fs-6 fw-bold">
                            <a href="{{ route('sodium_hexameta_phosphate') }}" class="text-navy-900 text-decoration-none">Sodium Hexametaphosphate (SHMP)</a>
                        </div>
                        <div class="src-product-footer mt-auto pt-3">
                            <span class="text-muted small"><i class="bi bi-patch-check text-primary me-1"></i> Glass / Powder</span>
                            <a href="{{ route('sodium_hexameta_phosphate') }}" class="src-view-link">
                                <span>Details</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 7: TSP Crystals -->
                <div class="swiper-slide h-auto">
                    <div class="src-product-card h-100">
                        <span class="src-product-badge">Dodecahydrate</span>
                        <div class="src-product-img-wrap">
                            <a href="{{ route('tri_sodium_phosphate_crystals') }}">
                                <img src="{{ asset('assets/images/product/tri_sodium_phosphate_crystal.png') }}" alt="Tri Sodium Phosphate Crystals" loading="lazy">
                            </a>
                        </div>
                        <div class="post-meta-cat small text-muted mb-1">
                            <span class="text-primary fw-bold">Degreasing Grade</span>
                        </div>
                        <div class="src-product-title fs-6 fw-bold">
                            <a href="{{ route('tri_sodium_phosphate_crystals') }}" class="text-navy-900 text-decoration-none">Tri Sodium Phosphate Crystals</a>
                        </div>
                        <div class="src-product-footer mt-auto pt-3">
                            <span class="text-muted small"><i class="bi bi-patch-check text-primary me-1"></i> Dodeca 12H2O</span>
                            <a href="{{ route('tri_sodium_phosphate_crystals') }}" class="src-view-link">
                                <span>Details</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <div class="d-flex justify-content-between align-items-center mt-3 src-slider-controls src-featured-products-controls">
                <div class="swiper-pagination src-featured-products-pagination position-static w-auto"></div>
                <div class="src-slider-arrows d-flex gap-2">
                    <button class="src-slider-btn src-featured-products-prev" type="button" aria-label="Previous Product"><i class="bi bi-chevron-left"></i></button>
                    <button class="src-slider-btn src-featured-products-next" type="button" aria-label="Next Product"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================
    Industries & Applications Cross-Reference Grid (Touch Swiper on Mobile & Tablet)
========================= -->
<section class="py-5 bg-white border-bottom">
    <div class="container-fluid px-lg-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div>
                <span class="src-subheading">Product Application Guide</span>
                <div class="src-title fs-2 fw-bold text-navy-900">Industries Powered by Our Chemicals</div>
                <p class="src-desc mb-0">Match your exact formulation needs with the right inorganic phosphate salt manufactured to verified industrial purity.</p>
            </div>
        </div>

        <div class="swiper src-app-guide-swiper pb-4">
            <div class="swiper-wrapper align-items-stretch">
                <div class="swiper-slide h-auto">
                    <div class="p-4 rounded-4 border bg-light h-100">
                        <div class="d-flex align-items-center gap-2 mb-2 text-primary fw-bold fs-5">
                            <i class="bi bi-water"></i>
                            <span>Boiler &amp; Water</span>
                        </div>
                        <p class="small text-muted mb-3">Scale control, hardness precipitation, and pipeline passivation in industrial steam systems.</p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge bg-white text-dark border">SHMP</span>
                            <span class="badge bg-white text-dark border">DSP Anhydrous</span>
                            <span class="badge bg-white text-dark border">TSP</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="p-4 rounded-4 border bg-light h-100">
                        <div class="d-flex align-items-center gap-2 mb-2 text-success fw-bold fs-5">
                            <i class="bi bi-tree-fill"></i>
                            <span>Horticulture</span>
                        </div>
                        <p class="small text-muted mb-3">Chloride-free foliar feeds, hydroponic fertilization, and nutrient buffer formulations.</p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge bg-white text-dark border">MKP 0-52-34</span>
                            <span class="badge bg-white text-dark border">MAP 12-61-0</span>
                            <span class="badge bg-white text-dark border">DAP</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="p-4 rounded-4 border bg-light h-100">
                        <div class="d-flex align-items-center gap-2 mb-2 text-warning fw-bold fs-5">
                            <i class="bi bi-gear-fill"></i>
                            <span>Metal Finishing</span>
                        </div>
                        <p class="small text-muted mb-3">Pre-treatment phosphating, chemical cleaning, surface conversion, and rust passivation.</p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge bg-white text-dark border">MSP Crystals</span>
                            <span class="badge bg-white text-dark border">TSPP</span>
                            <span class="badge bg-white text-dark border">TSP</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="p-4 rounded-4 border bg-light h-100">
                        <div class="d-flex align-items-center gap-2 mb-2 text-danger fw-bold fs-5">
                            <i class="bi bi-capsule"></i>
                            <span>Pharma &amp; Food</span>
                        </div>
                        <p class="small text-muted mb-3">Biochemical research buffers, leavening acidulants, emulsifiers, and yeast nutrition.</p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge bg-white text-dark border">DKP Pure</span>
                            <span class="badge bg-white text-dark border">SAPP</span>
                            <span class="badge bg-white text-dark border">DSP Dodeca</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="d-flex justify-content-between align-items-center mt-3 src-slider-controls src-app-guide-controls">
                <div class="swiper-pagination src-app-guide-pagination position-static w-auto"></div>
                <div class="src-slider-arrows d-flex gap-2">
                    <button class="src-slider-btn src-app-guide-prev" type="button" aria-label="Previous Application"><i class="bi bi-chevron-left"></i></button>
                    <button class="src-slider-btn src-app-guide-next" type="button" aria-label="Next Application"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================
    Comprehensive B2B Product Specifications Matrix
========================= -->
<section class="src-matrix-section py-5">
    <div class="container-fluid px-lg-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
            <div>
                <span class="src-section-badge mb-1">Technical Reference</span>
                <div class="fs-4 fw-bold text-navy-800">Chemical Specifications &amp; Grades Matrix</div>
                <div class="text-muted small">Standard technical &amp; pure grade specifications manufactured at Panoli GIDC</div>
            </div>
            <div>
                <a href="{{ route('contact_us') }}" class="src-btn-outline">
                    <i class="bi bi-file-earmark-arrow-down-fill me-1"></i> Request TDS / COA
                </a>
            </div>
        </div>

        <div class="src-matrix-table">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Chemical Formula</th>
                            <th scope="col">CAS Number</th>
                            <th scope="col">Standard Grade</th>
                            <th scope="col">Available Form</th>
                            <th scope="col">Standard Packaging</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>Sodium Hexametaphosphate (SHMP)</strong>
                                <div class="small text-muted">Water treatment &amp; detergent builder</div>
                            </td>
                            <td><code>(NaPO3)6</code></td>
                            <td>68915-31-1</td>
                            <td><span class="badge bg-primary-subtle text-primary border border-primary-subtle">Technical / Food</span></td>
                            <td>White Powder / Glassy Plates</td>
                            <td>25kg / 50kg HDPE Bags</td>
                            <td class="text-end">
                                <a href="{{ route('sodium_hexameta_phosphate') }}" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Trisodium Phosphate (TSP) - Anhydrous</strong>
                                <div class="small text-muted">Heavy-duty cleaning &amp; degreasing</div>
                            </td>
                            <td><code>Na3PO4</code></td>
                            <td>7601-54-9</td>
                            <td><span class="badge bg-success-subtle text-success border border-success-subtle">Pure 98% Min</span></td>
                            <td>Fine White Powder</td>
                            <td>25kg / 50kg Bags</td>
                            <td class="text-end">
                                <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Disodium Phosphate (DSP) - Anhydrous</strong>
                                <div class="small text-muted">Industrial buffering &amp; water conditioning</div>
                            </td>
                            <td><code>Na2HPO4</code></td>
                            <td>7558-79-4</td>
                            <td><span class="badge bg-success-subtle text-success border border-success-subtle">Pure 98.5% Min</span></td>
                            <td>Anhydrous Powder</td>
                            <td>25kg / 50kg Bags</td>
                            <td class="text-end">
                                <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Monosodium Phosphate (MSP) - Anhydrous</strong>
                                <div class="small text-muted">Metal treatment &amp; pH regulation</div>
                            </td>
                            <td><code>NaH2PO4</code></td>
                            <td>7558-80-7</td>
                            <td><span class="badge bg-info-subtle text-info border border-info-subtle">Technical / Pure</span></td>
                            <td>Crystalline Powder</td>
                            <td>25kg / 50kg Bags</td>
                            <td class="text-end">
                                <a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Tetrasodium Pyrophosphate (TSPP)</strong>
                                <div class="small text-muted">Dispersion agent &amp; food preservation</div>
                            </td>
                            <td><code>Na4P2O7</code></td>
                            <td>7722-88-5</td>
                            <td><span class="badge bg-primary-subtle text-primary border border-primary-subtle">Technical</span></td>
                            <td>White Granular Powder</td>
                            <td>25kg / 50kg Bags</td>
                            <td class="text-end">
                                <a href="{{ route('tetra_sodium_pyro_phosphate') }}" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Dipotassium Phosphate (DKP)</strong>
                                <div class="small text-muted">Nutrient fermentation &amp; specialty buffer</div>
                            </td>
                            <td><code>K2HPO4</code></td>
                            <td>7758-11-4</td>
                            <td><span class="badge bg-success-subtle text-success border border-success-subtle">Pure 98% Min</span></td>
                            <td>Deliquescent Powder</td>
                            <td>25kg Poly-lined Bags</td>
                            <td class="text-end">
                                <a href="{{ route('di_potassium_phosphate') }}" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Monopotassium Phosphate (MKP)</strong>
                                <div class="small text-muted">Horticultural &amp; industrial grade</div>
                            </td>
                            <td><code>KH2PO4</code></td>
                            <td>7778-77-0</td>
                            <td><span class="badge bg-success-subtle text-success border border-success-subtle">0-52-34 Grade</span></td>
                            <td>Crystalline Powder</td>
                            <td>25kg / 50kg Bags</td>
                            <td class="text-end">
                                <a href="{{ route('mono_potassium_phosphate') }}" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Monoammonium Phosphate (MAP)</strong>
                                <div class="small text-muted">Dry chemical fire extinguishers &amp; fertilizer</div>
                            </td>
                            <td><code>(NH4)H2PO4</code></td>
                            <td>7722-76-1</td>
                            <td><span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle">Technical / ABC Grade</span></td>
                            <td>Fine Granular</td>
                            <td>25kg / 50kg / 1000kg</td>
                            <td class="text-end">
                                <a href="{{ route('monoammonium_phosphate') }}" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Diammonium Phosphate (DAP)</strong>
                                <div class="small text-muted">Industrial flame retardant &amp; yeast nutrient</div>
                            </td>
                            <td><code>(NH4)2HPO4</code></td>
                            <td>7783-28-0</td>
                            <td><span class="badge bg-primary-subtle text-primary border border-primary-subtle">Pure / Tech</span></td>
                            <td>White Crystals</td>
                            <td>25kg / 50kg Bags</td>
                            <td class="text-end">
                                <a href="{{ route('di_ammonium_phosphate') }}" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        @php
                            $extraMatrixProducts = \App\Models\Product::where('is_category', false)->whereNull('blade_view')->where('status', 'published')->get();
                        @endphp
                        @foreach($extraMatrixProducts as $emp)
                        <tr>
                            <td>
                                <strong>{{ $emp->name }}</strong>
                                <div class="small text-muted">{{ $emp->category }} &bull; {{ Str::limit($emp->excerpt ?: 'Custom Formulation', 60) }}</div>
                            </td>
                            <td><code>{{ $emp->chemical_formula ?: '—' }}</code></td>
                            <td>{{ $emp->cas_number ?: '—' }}</td>
                            <td><span class="badge bg-success-subtle text-success border border-success-subtle">{{ $emp->grade ?: 'Standard Grade' }}</span></td>
                            <td>Pure Form</td>
                            <td>{{ $emp->packaging ?: 'Standard Bags' }}</td>
                            <td class="text-end">
                                <a href="{{ url('/' . $emp->slug) }}" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Packaging & Quality Strip -->
        <div class="row g-4 mt-4">
            <div class="col-12 col-md-4">
                <div class="p-3 rounded-3 bg-white border d-flex align-items-center gap-3">
                    <div class="fs-2 text-primary"><i class="bi bi-box-seam-fill"></i></div>
                    <div>
                        <div class="fw-bold text-navy-800">Export Packaging</div>
                        <div class="text-muted small">25kg / 50kg HDPE bags with poly liner &amp; 1MT jumbo bags on pallets.</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="p-3 rounded-3 bg-white border d-flex align-items-center gap-3">
                    <div class="fs-2 text-success"><i class="bi bi-file-earmark-check-fill"></i></div>
                    <div>
                        <div class="fw-bold text-navy-800">Batch-Wise COA</div>
                        <div class="text-muted small">Every dispatch includes signed Certificate of Analysis and TDS documentation.</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="p-3 rounded-3 bg-white border d-flex align-items-center gap-3">
                    <div class="fs-2 text-warning"><i class="bi bi-globe2"></i></div>
                    <div>
                        <div class="fw-bold text-navy-800">Global Port Sourcing</div>
                        <div class="text-muted small">FOB Hazira / Nhava Sheva with direct sea routes to Vietnam, Thailand &amp; UAE.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
