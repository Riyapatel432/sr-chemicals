<!-- Hero Section with Industrial Background Image & SEO-Locked Headings -->
<section class="src-hero">
    <!-- Ambient Industrial Chemical Plant Background Images with Clear Visibility -->
    <div class="src-hero-bg-media" aria-hidden="true">
        <div class="src-hero-bg-img active" id="bg-hero-sodium" style="background-image: url('{{ asset('assets/images/sliders/1.jpg') }}');"></div>
        <div class="src-hero-bg-img" id="bg-hero-ammonium" style="background-image: url('{{ asset('assets/images/sliders/2.jpg') }}');"></div>
        <div class="src-hero-bg-img" id="bg-hero-potassium" style="background-image: url('{{ asset('assets/images/sliders/3.jpg') }}');"></div>
        <div class="src-hero-bg-overlay"></div>
    </div>

    <div class="container-fluid px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <!-- Trust Badge -->
                <div class="src-hero-tag">
                    <i class="bi bi-patch-check-fill"></i> ISO 9001:2008 Certified Manufacturer &amp; Exporter
                </div>

                <!-- Interactive Category Selector Pill Navigation -->
                <div class="src-hero-pills-nav" role="tablist">
                    <button class="src-hero-pill-btn active" data-target="hero-sodium" type="button" role="tab">Sodium Phosphate</button>
                    <button class="src-hero-pill-btn" data-target="hero-ammonium" type="button" role="tab">Ammonium Phosphate</button>
                    <button class="src-hero-pill-btn" data-target="hero-potassium" type="button" role="tab">Potassium Phosphate</button>
                </div>

                <!-- Hero Content Items (All 3 H1 tags preserved in DOM for SEO Lock) -->
                <div class="src-hero-titles-wrapper">
                    <!-- Item 1: Sodium Phosphate -->
                    <div class="src-hero-item active" id="hero-sodium">
                        <h1 class="src-hero-h1">Sodium Phosphate</h1>
                        <p class="src-hero-desc">
                            Inorganic Salts are indispensable chemicals that surrounds us everywhere, from what we eat to what we wear. Offering precisely formulated and highly soluble Sodium Phosphate series in crystalline as well as Powder form.
                        </p>
                        <div class="d-flex flex-wrap align-items-center gap-3">
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

                    <!-- Item 2: Ammonium phosphate -->
                    <div class="src-hero-item" id="hero-ammonium" style="display: none;">
                        <h1 class="src-hero-h1"> Ammonium phosphate </h1>
                        <p class="src-hero-desc">
                            Prepared after conducting a rigorous research, our Ammonium Phosphate compounds provide superior stability, high solubility and optimal purity for industrial fertilizers, fire safety, and technical applications.
                        </p>
                        <div class="d-flex flex-wrap align-items-center gap-3">
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

                    <!-- Item 3: Potassium Phosphate -->
                    <div class="src-hero-item" id="hero-potassium" style="display: none;">
                        <h1 class="src-hero-h1"> Potassium Phosphate</h1>
                        <p class="src-hero-desc">
                            Allying with S. R. Chemicals provides you the relief of buying Potassium Phosphate and its different forms of unmatched quality at prices that fit within the budgets of all customers worldwide.
                        </p>
                        <div class="d-flex flex-wrap align-items-center gap-3">
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

        <!-- Trust Strip Directly Below Hero (Locked Heading for SEO Baseline) -->
        <h6 class="visually-hidden">Inorganic Salts Series</h6>
        @include('partials.trust-strip')
    </div>
</section>
<!-- /.Hero Section -->
