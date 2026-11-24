<!-- Hero Section with Touch/Swipe Swiper Slider & SEO-Locked Headings -->
<section class="src-hero position-relative overflow-hidden">
    <!-- Ambient Industrial Chemical Plant Background Images with Clear Visibility -->
    <div class="src-hero-bg-media" aria-hidden="true">
        <div class="src-hero-bg-img active" id="bg-hero-sodium" style="background-image: url('{{ asset('assets/images/sliders/1.jpg') }}');"></div>
        <div class="src-hero-bg-img" id="bg-hero-ammonium" style="background-image: url('{{ asset('assets/images/sliders/2.jpg') }}');"></div>
        <div class="src-hero-bg-img" id="bg-hero-potassium" style="background-image: url('{{ asset('assets/images/sliders/3.jpg') }}');"></div>
        <div class="src-hero-bg-overlay"></div>
    </div>

    <div class="container-fluid px-3 px-sm-4 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-12 col-lg-8 col-xl-7">
                <!-- Trust Badge -->
                <div class="src-hero-tag mb-3 d-inline-flex align-items-center">
                    <i class="bi bi-patch-check-fill me-1"></i> ISO 9001:2008 Certified Manufacturer &amp; Exporter
                </div>

                <!-- Interactive Category Selector Pill Navigation (Syncs with Swiper) -->
                <div class="src-hero-pills-nav mb-4" role="tablist" aria-label="Chemical Categories">
                    <button class="src-hero-pill-btn active" data-slide-index="0" type="button" role="tab" aria-selected="true" aria-label="Sodium Phosphate series">
                        <span class="d-none d-sm-inline">Sodium Phosphate</span>
                        <span class="d-inline d-sm-none">Sodium</span>
                    </button>
                    <button class="src-hero-pill-btn" data-slide-index="1" type="button" role="tab" aria-selected="false" aria-label="Ammonium Phosphate series">
                        <span class="d-none d-sm-inline">Ammonium Phosphate</span>
                        <span class="d-inline d-sm-none">Ammonium</span>
                    </button>
                    <button class="src-hero-pill-btn" data-slide-index="2" type="button" role="tab" aria-selected="false" aria-label="Potassium Phosphate series">
                        <span class="d-none d-sm-inline">Potassium Phosphate</span>
                        <span class="d-inline d-sm-none">Potassium</span>
                    </button>
                </div>

                <!-- Touch & Swipe Swiper Slider for Hero (Preserves all 3 H1 tags in exact DOM order) -->
                <div class="swiper src-hero-swiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1: Sodium Phosphate -->
                        <div class="swiper-slide">
                            <div class="src-hero-item active" id="hero-sodium">
                                <h1 class="src-hero-h1">Sodium Phosphate</h1>
                                <p class="src-hero-desc">
                                    Inorganic Salts are indispensable chemicals that surrounds us everywhere, from what we eat to what we wear. Offering precisely formulated and highly soluble Sodium Phosphate series in crystalline as well as Powder form.
                                </p>
                                <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
                                    <a href="{{ route('our_products') }}" class="src-btn-outline-light">
                                        <span>Our Products</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <a href="{{ route('contact_us') }}" class="src-btn-cta">
                                        <span>Send Inquiry</span>
                                        <i class="bi bi-envelope-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2: Ammonium phosphate -->
                        <div class="swiper-slide">
                            <div class="src-hero-item active" id="hero-ammonium">
                                <h1 class="src-hero-h1"> Ammonium phosphate </h1>
                                <p class="src-hero-desc">
                                    Prepared after conducting a rigorous research, our Ammonium Phosphate compounds provide superior stability, high solubility and optimal purity for industrial fertilizers, fire safety, and technical applications.
                                </p>
                                <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
                                    <a href="{{ route('our_products') }}" class="src-btn-outline-light">
                                        <span>Our Products</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <a href="{{ route('contact_us') }}" class="src-btn-cta">
                                        <span>Send Inquiry</span>
                                        <i class="bi bi-envelope-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3: Potassium Phosphate -->
                        <div class="swiper-slide">
                            <div class="src-hero-item active" id="hero-potassium">
                                <h1 class="src-hero-h1"> Potassium Phosphate</h1>
                                <p class="src-hero-desc">
                                    Allying with S. R. Chemicals provides you the relief of buying Potassium Phosphate and its different forms of unmatched quality at prices that fit within the budgets of all customers worldwide.
                                </p>
                                <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
                                    <a href="{{ route('our_products') }}" class="src-btn-outline-light">
                                        <span>Our Products</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <a href="{{ route('contact_us') }}" class="src-btn-cta">
                                        <span>Send Inquiry</span>
                                        <i class="bi bi-envelope-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Strip Directly Below Hero (Locked Heading for SEO Baseline) -->
        <h6 class="visually-hidden">Inorganic Salts Series</h6>
        @include('partials.trust-strip')
    </div>
</section>
<!-- /.Hero Section -->
