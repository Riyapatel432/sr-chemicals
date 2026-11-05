<!-- Sticky Header & Navigation -->
<header class="src-header sticky-top">
    @include('partials.top-bar')
    <nav class="navbar navbar-expand-lg py-2">
        <div class="container-fluid px-lg-5">
            <!-- Brand Logo & SEO H3 Title -->
            <a class="src-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo/logo.1.jpg') }}" alt="S R Chemicals Logo" width="85" height="52" onerror="this.style.display='none'">
                <h3 class="src-brand-title">
                    S R Chemicals
                    <span class="src-brand-sub">Panoli GIDC &bull; Bharuch</span>
                </h3>
            </a>

            <!-- Mobile Offcanvas Toggler -->
            <button class="navbar-toggler border-0 shadow-none px-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#srcMobileMenu" aria-controls="srcMobileMenu" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1 text-primary"></i>
            </button>

            <!-- Desktop Navigation -->
            <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex" id="mainNavigation">
                <ul class="navbar-nav align-items-center mb-2 mb-lg-0 gap-1">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    </li>

                    <!-- About Us Dropdown with Locations -->
                    <li class="nav-item dropdown">
                        <a href="{{ route('about') }}" class="nav-link dropdown-toggle {{ request()->routeIs('about') || request()->is('chemical-exporter-supplier*') || request()->is('srchems-chemical-exporter-supplier*') ? 'active' : '' }}" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us <i class="bi bi-chevron-down small ms-1"></i>
                        </a>
                        <ul class="dropdown-menu src-simple-dropdown" aria-labelledby="aboutDropdown">
                            <li><a href="{{ route('about') }}" class="dropdown-item">About S R Chemicals</a></li>
                            <li><hr class="dropdown-divider my-1"></li>
                            <li class="dropdown-header small text-uppercase text-muted fw-bold px-3 py-1">Global Locations</li>
                            <li><a href="{{ route('chemical_exporter_supplier_vietnam') }}" class="dropdown-item"><i class="bi bi-globe2 me-2 text-primary"></i>Vietnam Export Division</a></li>
                            <li><a href="{{ route('chemical_exporter_supplier_thailand') }}" class="dropdown-item"><i class="bi bi-globe2 me-2 text-primary"></i>Thailand Export Division</a></li>
                        </ul>
                    </li>

                    <!-- Our Products Mega-Menu -->
                    <li class="nav-item dropdown src-megamenu-dropdown">
                        <a href="{{ route('our_products') }}" class="nav-link dropdown-toggle {{ request()->routeIs('our_products') || request()->is('sodium-phosphate*') || request()->is('potassium-phosphate*') || request()->is('ammonium-phosphate*') || request()->is('di-*') || request()->is('mono*') || request()->is('tri*') || request()->is('tetra*') ? 'active' : '' }}" id="productsDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            Our Products <i class="bi bi-chevron-down small ms-1"></i>
                        </a>
                        @include('partials.mega-menu')
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link {{ request()->routeIs('blog*') ? 'active' : '' }}">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contact_us') }}" class="nav-link {{ request()->routeIs('contact_us') ? 'active' : '' }}">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!-- Header CTA Button -->
            <div class="d-none d-lg-flex align-items-center gap-3">
                <a href="{{ route('contact_us') }}" class="src-btn-cta">
                    <span>Send Inquiry</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Mobile Offcanvas Navigation Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="srcMobileMenu" aria-labelledby="srcMobileMenuLabel">
        <div class="offcanvas-header border-bottom">
            <div class="d-flex align-items-center gap-2">
                <img src="{{ asset('assets/images/logo/logo.1.jpg') }}" alt="S R Chemicals Logo" height="42" onerror="this.style.display='none'">
                <div>
                    <h5 class="offcanvas-title fw-bold text-primary mb-0" id="srcMobileMenuLabel">S R Chemicals</h5>
                    <span class="small text-muted">Panoli GIDC, Bharuch</span>
                </div>
            </div>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-4 py-3">
                    <a href="{{ route('home') }}" class="text-dark fw-bold text-decoration-none d-block">Home</a>
                </li>
                <!-- About Accordion -->
                <li class="list-group-item px-4 py-2">
                    <a class="text-dark fw-bold text-decoration-none d-flex justify-content-between align-items-center py-2" data-bs-toggle="collapse" href="#mobileAboutSub" role="button">
                        About Us <i class="bi bi-chevron-down small"></i>
                    </a>
                    <div class="collapse ps-3" id="mobileAboutSub">
                        <ul class="list-unstyled py-2">
                            <li class="py-1"><a href="{{ route('about') }}" class="text-muted text-decoration-none">About</a></li>
                            <li class="py-1"><a href="{{ route('chemical_exporter_supplier_vietnam') }}" class="text-muted text-decoration-none">Vietnam Location</a></li>
                            <li class="py-1"><a href="{{ route('chemical_exporter_supplier_thailand') }}" class="text-muted text-decoration-none">Thailand Location</a></li>
                        </ul>
                    </div>
                </li>
                <!-- Products Accordion -->
                <li class="list-group-item px-4 py-2">
                    <a class="text-dark fw-bold text-decoration-none d-flex justify-content-between align-items-center py-2" data-bs-toggle="collapse" href="#mobileProductsSub" role="button">
                        Our Products <i class="bi bi-chevron-down small"></i>
                    </a>
                    <div class="collapse ps-3" id="mobileProductsSub">
                        <div class="py-2">
                            <a href="{{ route('our_products') }}" class="fw-bold text-primary text-decoration-none d-block mb-2">View All Products</a>
                            
                            <div class="fw-bold text-secondary small text-uppercase mt-2 mb-1">Sodium Phosphate</div>
                            <ul class="list-unstyled ps-2 small text-muted">
                                <li><a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="text-muted d-block py-1">Mono Sodium Phosphate Anhydrous</a></li>
                                <li><a href="{{ route('mono_sodium_phosphate_crystal') }}" class="text-muted d-block py-1">Mono Sodium Phosphate Crystal</a></li>
                                <li><a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="text-muted d-block py-1">Di Sodium Phosphate Anhydrous</a></li>
                                <li><a href="{{ route('di_sodium_phosphate_crystal') }}" class="text-muted d-block py-1">Di Sodium Phosphate Crystal</a></li>
                                <li><a href="{{ route('trisodium_phosphate_anhydrous') }}" class="text-muted d-block py-1">Tri Sodium Phosphate Anhydrous</a></li>
                                <li><a href="{{ route('tri_sodium_phosphate_crystals') }}" class="text-muted d-block py-1">Tri Sodium Phosphate Crystals</a></li>
                                <li><a href="{{ route('sodium_hexameta_phosphate') }}" class="text-muted d-block py-1">Sodium Hexameta Phosphate</a></li>
                                <li><a href="{{ route('tetra_sodium_pyro_phosphate') }}" class="text-muted d-block py-1">Tetra Sodium Pyro Phosphate</a></li>
                                <li><a href="{{ route('sodium_acid_pyrophosphate') }}" class="text-muted d-block py-1">Sodium Acid Pyrophosphate</a></li>
                            </ul>

                            <div class="fw-bold text-secondary small text-uppercase mt-3 mb-1">Potassium Phosphate</div>
                            <ul class="list-unstyled ps-2 small text-muted">
                                <li><a href="{{ route('mono_potassium_phosphate') }}" class="text-muted d-block py-1">Mono Potassium Phosphate</a></li>
                                <li><a href="{{ route('di_potassium_phosphate') }}" class="text-muted d-block py-1">Di Potassium Phosphate</a></li>
                                <li><a href="{{ route('tetra_potassium_pyro_phosphate') }}" class="text-muted d-block py-1">Tetra Potassium Pyro Phosphate</a></li>
                            </ul>

                            <div class="fw-bold text-secondary small text-uppercase mt-3 mb-1">Ammonium Phosphate</div>
                            <ul class="list-unstyled ps-2 small text-muted">
                                <li><a href="{{ route('monoammonium_phosphate') }}" class="text-muted d-block py-1">Monoammonium Phosphate</a></li>
                                <li><a href="{{ route('di_ammonium_phosphate') }}" class="text-muted d-block py-1">Di Ammonium Phosphate</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-4 py-3">
                    <a href="{{ route('blog') }}" class="text-dark fw-bold text-decoration-none d-block">Blog</a>
                </li>
                <li class="list-group-item px-4 py-3">
                    <a href="{{ route('contact_us') }}" class="text-dark fw-bold text-decoration-none d-block">Contact Us</a>
                </li>
            </ul>

            <div class="p-4 bg-light mt-auto border-top">
                <a href="{{ route('contact_us') }}" class="src-btn-cta w-100 justify-content-center mb-3">
                    <span>Send Inquiry</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                <div class="small text-muted">
                    <p class="mb-1"><i class="bi bi-telephone-fill me-2 text-warning"></i> +91 9913645555</p>
                    <p class="mb-0"><i class="bi bi-envelope-fill me-2 text-warning"></i> info@srchems.com</p>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /.Sticky Header -->

