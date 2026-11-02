@extends('layouts.layout')

@section('seo')
    <title>Chemical Supplier &amp; Exporter to Vietnam | S R Chemicals India</title>
    <meta name="description" content="Premier Indian manufacturer &amp; bulk exporter of pure grade inorganic phosphate salts to Vietnam. Serving industrial processing, water treatment, &amp; textile manufacturing in Ho Chi Minh City, Hai Phong, &amp; Da Nang.">
    <meta name="keywords" content="Inorganic phosphate exporter to Vietnam, Phosphate salt supplier Ho Chi Minh City, Sodium Hexametaphosphate supplier Vietnam, Bulk chemical importer Hai Phong, High purity pure grade phosphates export India">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Chemical Supplier &amp; Exporter to Vietnam | S R Chemicals India">
    <meta property="og:description" content="Premier Indian manufacturer &amp; bulk exporter of pure grade inorganic phosphate salts to Vietnam. Serving industrial processing, water treatment, &amp; textile manufacturing in Ho Chi Minh City, Hai Phong, &amp; Da Nang.">
    <meta property="og:url" content="https://srchems.com/chemical-exporter-supplier-vietnam">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/logo/logo.1.jpg') }}">
@endsection

@section('content')
@include('partials.blog_styles')

<style>
/* Additional specific refinements for Vietnam export page */
.vn-port-badge {
    display: inline-flex;
    align-items: center;
    background: #eef4fc;
    color: #1a4fa0;
    font-size: 13px;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 6px;
    margin: 4px 6px 4px 0;
}
.vn-port-badge i {
    color: #e8792a;
    margin-right: 6px;
}
.vn-hub-card {
    background: #fdfdfd;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 16px 20px;
    margin-bottom: 15px;
}
.vn-hub-card h5 {
    color: #1a2340;
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 6px;
}
.vn-hub-card p {
    color: #64748b;
    font-size: 13.5px;
    margin: 0;
    line-height: 1.6;
}

/* High-Contrast Dark Overlay for Page Title & Breadcrumb */
.page-title-dark {
    position: relative;
    background-color: #1a2340;
}
.page-title-dark::before {
    content: "" !important;
    position: absolute !important;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0.88) 0%, rgba(15, 23, 42, 0.94) 100%) !important;
    opacity: 1 !important;
    z-index: 1 !important;
}
.page-title-dark .container,
.page-title-dark .breadcrumb-area {
    position: relative;
    z-index: 2;
}
.page-title-dark .pagetitle-heading {
    color: #ffffff !important;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
    font-weight: 700;
}
.page-title-dark .breadcrumb-area {
    background: rgba(10, 16, 30, 0.85);
    backdrop-filter: blur(8px);
    padding: 14px 0;
    border-top: 1px solid rgba(255, 255, 255, 0.12);
}
.page-title-dark .breadcrumb-item a {
    color: #cbd5e1 !important;
    font-weight: 600;
    font-size: 14px;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
    transition: color 0.2s ease;
}
.page-title-dark .breadcrumb-item a:hover {
    color: #e8792a !important;
}
.page-title-dark .breadcrumb-item.active {
    color: #ffffff !important;
    font-weight: 700;
    font-size: 14px;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
}
.page-title-dark .breadcrumb-item + .breadcrumb-item::before {
    color: #94a3b8 !important;
}
</style>

{{-- Page Title & Breadcrumb --}}
<section class="page-title-layout2 page-title-light page-title-dark text-center pb-0 bg-overlay bg-parallax">
    <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="Chemical Supplier &amp; Exporter to Vietnam"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1">
                <h1 class="pagetitle-heading mt-50">Chemical Supplier &amp; Exporter to Vietnam</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}"><i class="icon-home"></i> <span>Home</span></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Vietnam Export Services</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

{{-- Main Content Section with Clean B2B Sidebar Layout --}}
<section class="blog-single pt-80 pb-80">
    <div class="container">
        <div class="row">

            {{-- Main Content Column --}}
            <div class="col-lg-8">

                {{-- Hero Banner Image --}}
                <div class="bl-hero-img">
                    <img src="{{ asset('assets/images/banners/1.jpg') }}" alt="Inorganic Phosphate Salt Export from S R Chemicals India to Vietnam">
                </div>

                {{-- Metadata Tags --}}
                <div class="bl-meta">
                    <span><i class="icon-location"></i> Factory: Panoli, Gujarat (India)</span>
                    <span><i class="fas fa-ship"></i> Direct Sailings: Nhava Sheva &amp; Mundra</span>
                    <span class="bl-badge">Global Export Corridor</span>
                </div>

                {{-- Introduction Section --}}
                <h2 class="bl-h1">Trusted Inorganic Phosphate Manufacturer &amp; Bulk Exporter to Vietnam</h2>

                <p class="bl-p">
                    Welcome to <strong>S R Chemicals</strong>, a premier Indian chemical manufacturer and global exporter specializing in high-purity Inorganic Phosphate Salts. Operating from <strong>Panoli, Gujarat</strong>—the heart of India's industrial chemical belt—we supply pure grade and technical pure grade sodium, potassium, and ammonium phosphate compounds to industrial buyers, blenders, and distributors across Vietnam.
                </p>

                <p class="bl-p mb-30">
                    Whether your facilities are located in the southern industrial hubs around <strong>Ho Chi Minh City (Binh Duong, Dong Nai)</strong>, key northern port corridors like <strong>Hai Phong and Hanoi</strong>, or central processing zones in <strong>Da Nang</strong>, we deliver factory-direct pricing, consistent high-purity quality, and dependable maritime shipping logistics.
                </p>

                <div class="mb-40">
                    <span class="vn-port-badge"><i class="fas fa-ship"></i> Cai Mep / Ho Chi Minh</span>
                    <span class="vn-port-badge"><i class="fas fa-ship"></i> Hai Phong Port</span>
                    <span class="vn-port-badge"><i class="fas fa-ship"></i> Da Nang Port</span>
                    <span class="vn-port-badge"><i class="fas fa-map-marker-alt"></i> Binh Duong &amp; Dong Nai</span>
                    <span class="vn-port-badge"><i class="fas fa-map-marker-alt"></i> Hanoi Industrial Belt</span>
                </div>

                <hr class="bl-hr">

                {{-- Strategic Industries Section --}}
                <h2 class="bl-h2">Strategic Industries We Serve in Vietnam</h2>
                <p class="bl-p mb-30">
                    Vietnam’s rapid industrial growth and export-driven economy require stable, high-specification raw materials. Our export catalog is tailored to support key Vietnamese industries:
                </p>

                {{-- Industry 1 --}}
                <div class="bl-box mb-30">
                    <h3 class="bl-box-title">1. Industrial Processing, Formulations &amp; Speciality Chemicals</h3>
                    <p class="bl-box-p">
                        Vietnam's manufacturing and chemical blending sector demands strict chemical purity and active assay compliance.
                    </p>
                    <ul class="bl-ul mb-20">
                        <li><strong>High-Purity Moisture &amp; Texture Control:</strong> Pure grade <a href="{{ route('di_potassium_phosphate') }}" class="bl-link">Dipotassium Phosphate (DKP)</a> and Sodium Tripolyphosphate (STPP) for specialized industrial formulations, viscosity control, and processing stability.</li>
                        <li><strong>Precision Buffering Solutions:</strong> Pure grade <a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-link">Monosodium Phosphate (MSP)</a> and <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-link">Disodium Phosphate (DSP)</a> for accurate pH regulation, reaction buffering, and process control.</li>
                    </ul>
                    <div class="bl-chips">
                        <span class="bl-chip-label">Featured:</span>
                        <a href="{{ route('di_potassium_phosphate') }}" class="bl-chip">DKP Pure</a>
                        <a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-chip">MSP Anhydrous</a>
                        <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-chip">DSP Anhydrous</a>
                    </div>
                </div>

                {{-- Industry 2 --}}
                <div class="bl-box mb-30">
                    <h3 class="bl-box-title">2. Textile Processing, Garment &amp; Dyeing Units</h3>
                    <p class="bl-box-p">
                        Vietnam is a global textile manufacturing powerhouse. Raw fabric processing relies on precise auxiliaries.
                    </p>
                    <ul class="bl-ul mb-20">
                        <li><strong>Sequestration &amp; Level Dyeing:</strong> High-purity <a href="{{ route('sodium_hexameta_phosphate') }}" class="bl-link">Sodium Hexametaphosphate (SHMP)</a> to deactivate metal ions in process water, preventing color streaking and dullness.</li>
                    </ul>
                    <div class="bl-chips">
                        <span class="bl-chip-label">Featured:</span>
                        <a href="{{ route('sodium_hexameta_phosphate') }}" class="bl-chip">SHMP 68% Pure</a>
                    </div>
                </div>

                {{-- Industry 3 --}}
                <div class="bl-box mb-30">
                    <h3 class="bl-box-title">3. Industrial Water Treatment &amp; Power Plants</h3>
                    <p class="bl-box-p">
                        Supporting wastewater management and boiler maintenance across Vietnam’s expanding industrial zones (IZs).
                    </p>
                    <ul class="bl-ul mb-20">
                        <li><strong>Scale &amp; Corrosion Inhibition:</strong> Pure grade inorganic polyphosphates engineered to sequester hard calcium and magnesium ions in industrial boiler systems.</li>
                    </ul>
                    <div class="bl-chips">
                        <span class="bl-chip-label">Featured:</span>
                        <a href="{{ route('tetra_sodium_pyro_phosphate') }}" class="bl-chip">TSPP</a>
                        <a href="{{ route('sodium_acid_pyrophosphate') }}" class="bl-chip">SAPP</a>
                    </div>
                </div>

                {{-- Industry 4 --}}
                <div class="bl-box mb-40">
                    <h3 class="bl-box-title">4. Metal Finishing &amp; Electronics Manufacturing</h3>
                    <p class="bl-box-p">
                        Serving Vietnam’s growing electronics assembly, steel fabrication, and hardware sectors.
                    </p>
                    <ul class="bl-ul mb-20">
                        <li><strong>Degreasing &amp; Conversion Coating:</strong> <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-link">Trisodium Phosphate (TSP)</a> for heavy-duty metal degreasing and <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-link">Disodium Phosphate (DSP)</a> for iron phosphating rust-prevention baths.</li>
                    </ul>
                    <div class="bl-chips">
                        <span class="bl-chip-label">Featured:</span>
                        <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-chip">TSP Anhydrous</a>
                        <a href="{{ route('tri_sodium_phosphate_crystals') }}" class="bl-chip">TSP Crystals</a>
                        <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-chip">DSP Pure</a>
                    </div>
                </div>

                <hr class="bl-hr">

                {{-- Product Portfolio Table --}}
                <h2 class="bl-h2">Export Product Portfolio for the Vietnamese Market</h2>
                <p class="bl-p mb-25">
                    High-specification inorganic phosphate compounds available for containerized maritime shipments to Vietnam:
                </p>

                <div class="table-responsive mb-40">
                    <table class="table table-bordered bl-table">
                        <thead>
                            <tr>
                                <th style="min-width:200px;">Product Name</th>
                                <th style="min-width:110px;">Chemical Formula</th>
                                <th style="min-width:180px;">Available Export Grades</th>
                                <th style="min-width:230px;">Primary Application in Vietnam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-600">
                                    <a href="{{ route('sodium_hexameta_phosphate') }}" class="bl-link">Sodium Hexametaphosphate (SHMP)</a>
                                </td>
                                <td><code>(NaPO3)6</code></td>
                                <td>Pure Technical / High P2O5</td>
                                <td>Textile Dyeing, Water Conditioning, Industrial Cleaning</td>
                            </tr>
                            <tr class="alt">
                                <td class="fw-600">
                                    <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-link">Trisodium Phosphate (TSP)</a>
                                </td>
                                <td><code>Na3PO4</code></td>
                                <td>Anhydrous Pure / Crystalline Pure</td>
                                <td>Metal Surface Treatment, Degreasing, Cleaners</td>
                            </tr>
                            <tr>
                                <td class="fw-600">
                                    <a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-link">Monosodium Phosphate (MSP)</a>
                                </td>
                                <td><code>NaH2PO4</code></td>
                                <td>Pure Grade / Technical / Anhydrous</td>
                                <td>Industrial Buffers, Chemical Synthesis, Water Conditioning</td>
                            </tr>
                            <tr class="alt">
                                <td class="fw-600">
                                    <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-link">Disodium Phosphate (DSP)</a>
                                </td>
                                <td><code>Na2HPO4</code></td>
                                <td>Pure Grade / Industrial Pure</td>
                                <td>Metal Phosphating, Chemical Buffering, Emulsifiers</td>
                            </tr>
                            <tr>
                                <td class="fw-600">
                                    <a href="{{ route('di_potassium_phosphate') }}" class="bl-link">Dipotassium Phosphate (DKP)</a>
                                </td>
                                <td><code>K2HPO4</code></td>
                                <td>Pure Grade / Technical Buffer</td>
                                <td>Industrial Processing, Fermentation, Specialty Buffers</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr class="bl-hr">

                {{-- Why Partner Section --}}
                <h2 class="bl-h2">Why Vietnamese Importers Partner with S R Chemicals</h2>
                <p class="bl-p mb-25">
                    End-to-end manufacturing integrity, moisture-barrier packaging engineered for tropical transit, and dependable port logistics:
                </p>

                <div class="row mb-40">
                    <div class="col-md-12 mb-20">
                        <div class="bl-usp-card">
                            <h4 class="bl-usp-title">📦 1. Tropical Monsoon Moisture-Proof Packaging</h4>
                            <p class="bl-usp-p mb-10">To withstand high humidity and transit conditions across Vietnam's tropical climate, our export packaging follows strict moisture-barrier standards:</p>
                            <ul class="bl-ul mb-0" style="font-size:13.5px;">
                                <li>Outer heavy-duty 25 kg / 50 kg HDPE woven sacks.</li>
                                <li>Internal 80–100 micron sealed LDPE liners to prevent air contact and caking.</li>
                                <li>Customized 1000 kg Jumbo / FIBC bag options for large-scale automation.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 mb-20">
                        <div class="bl-usp-card">
                            <h4 class="bl-usp-title">🚢 2. Fast Shipping Lines from India to Major Vietnamese Ports</h4>
                            <p class="bl-usp-p mb-10">Direct sea freight connectivity ensures fast turnaround and dependable delivery timelines:</p>
                            <ul class="bl-ul mb-0" style="font-size:13.5px;">
                                <li><strong>Strategic Port Access:</strong> Proximity to Nhava Sheva (JNPT) and Mundra ports ensures frequent container sailings and short transit times to Cai Mep / Ho Chi Minh Port, Hai Phong Port, and Da Nang Port.</li>
                                <li><strong>Complete Customs Clearance Documentation:</strong> Full export documentation provided with every order, including Certificate of Analysis (COA), Safety Data Sheet (SDS/MSDS), Certificate of Origin, and Packing Lists.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 mb-20">
                        <div class="bl-usp-card">
                            <h4 class="bl-usp-title">🔬 3. Quality Assurance &amp; Traceability</h4>
                            <p class="bl-usp-p mb-10">Stringent manufacturing protocols and analytical testing backing every exported batch:</p>
                            <ul class="bl-ul mb-0" style="font-size:13.5px;">
                                <li>Every export batch is processed in accordance with ISO quality benchmarks.</li>
                                <li>Our testing laboratory guarantees strict control over active assays (P2O5), solubility rates, and trace heavy metal limits (Pb, As, F) to satisfy Vietnamese regulatory standards.</li>
                                <li>Batch-wise traceability and verified analytical certificates for all shipments.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr class="bl-hr">

                {{-- Request an Export Quote Section --}}
                <div class="bl-cta">
                    <h3 class="bl-cta-title">Request an Export Quote for Vietnam</h3>
                    <p class="bl-cta-p">
                        Looking for a trusted Indian phosphate manufacturer to secure your raw material supply chain in Vietnam? Contact our export desk today for technical specification sheets, free sample batches, and competitive CIF / FOB price quotes.
                    </p>
                    <div class="bl-cta-contact">
                        <div>📞 <strong>Export Desk Phone:</strong> <a href="tel:+919913645555" class="bl-cta-link">+91 9913645555</a></div>
                        <div>📩 <strong>Export Desk Email:</strong> <a href="mailto:info@srchems.com" class="bl-cta-link">info@srchems.com</a></div>
                        <div>🏭 <strong>Plant Address:</strong> GIDC Industrial Estate, Panoli, District Bharuch, Gujarat, India.</div>
                    </div>
                    <a href="{{ route('contact_us') }}" class="bl-cta-btn">Send Export Inquiry <i class="icon-arrow-right"></i></a>
                </div>

                {{-- SEO Tags Footer --}}
                <div class="bl-tags">
                    <strong>Export Tags: </strong>
                    <a href="{{ route('sodium_hexameta_phosphate') }}" class="bl-tag">SHMP Vietnam</a>
                    <a href="{{ route('di_potassium_phosphate') }}" class="bl-tag">DKP Exporter</a>
                    <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-tag">TSP Supplier</a>
                    <a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-tag">MSP Pure Grade</a>
                    <a href="{{ route('our_products') }}" class="bl-tag">All Products</a>
                    <a href="{{ route('about') }}" class="bl-tag">About S R Chemicals</a>
                </div>

            </div>{{-- /.col-lg-8 --}}

            {{-- Sidebar Column --}}
            <div class="col-lg-4">

                {{-- Quick Contact Widget --}}
                <div class="bl-sidebar-contact mb-30">
                    <div class="bl-sc-header">Vietnam Export Desk</div>
                    <div class="bl-sc-body">
                        <div class="bl-sc-row">
                            <i class="icon-phone bl-sc-icon"></i>
                            <a href="tel:+919913645555" class="bl-sc-text">+91 9913645555</a>
                        </div>
                        <div class="bl-sc-row">
                            <i class="icon-email bl-sc-icon"></i>
                            <a href="mailto:info@srchems.com" class="bl-sc-text">info@srchems.com</a>
                        </div>
                        <div class="bl-sc-row">
                            <i class="icon-location bl-sc-icon"></i>
                            <span style="font-size:13px; color:#4a5568;">Panoli GIDC, Gujarat, India</span>
                        </div>
                        <a href="{{ route('contact_us') }}" class="bl-sc-btn">Request Quote Now</a>
                    </div>
                </div>

                {{-- Key Vietnamese Ports Card --}}
                <div class="bl-sidebar-card mb-30">
                    <div class="bl-sidebar-card-title">Major Vietnamese Hubs Served</div>
                    <div style="padding:15px 18px 5px;">
                        <div class="vn-hub-card">
                            <h5><i class="fas fa-ship text-primary mr-1"></i> Ho Chi Minh / Cai Mep</h5>
                            <p>Serving southern manufacturing belts across Binh Duong &amp; Dong Nai.</p>
                        </div>
                        <div class="vn-hub-card">
                            <h5><i class="fas fa-ship text-primary mr-1"></i> Hai Phong Port</h5>
                            <p>Direct maritime gateway for northern Vietnam &amp; Hanoi industrial corridors.</p>
                        </div>
                        <div class="vn-hub-card">
                            <h5><i class="fas fa-ship text-primary mr-1"></i> Da Nang Port</h5>
                            <p>Central industrial and processing zones logistics access.</p>
                        </div>
                    </div>
                </div>

                {{-- Product Range Card --}}
                <div class="bl-sidebar-card mb-30">
                    <div class="bl-sidebar-card-title">Export Phosphate Range</div>
                    <ul class="bl-sidebar-list">
                        <li><a href="{{ route('sodium_hexameta_phosphate') }}" class="bl-sidebar-link">Sodium Hexametaphosphate (SHMP) <i class="icon-arrow-right"></i></a></li>
                        <li><a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-sidebar-link">Trisodium Phosphate (TSP) <i class="icon-arrow-right"></i></a></li>
                        <li><a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-sidebar-link">Monosodium Phosphate (MSP) <i class="icon-arrow-right"></i></a></li>
                        <li><a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-sidebar-link">Disodium Phosphate (DSP) <i class="icon-arrow-right"></i></a></li>
                        <li><a href="{{ route('di_potassium_phosphate') }}" class="bl-sidebar-link">Dipotassium Phosphate (DKP) <i class="icon-arrow-right"></i></a></li>
                        <li><a href="{{ route('our_products') }}" class="bl-sidebar-link bl-sidebar-link-primary">View All Products <i class="icon-arrow-right"></i></a></li>
                    </ul>
                </div>

                {{-- About S R Chemicals Card --}}
                <div class="bl-sidebar-card">
                    <div class="bl-sidebar-card-title">About S R Chemicals</div>
                    <p class="bl-sidebar-about-p">
                        Premier Indian manufacturer &amp; bulk exporter of high-purity inorganic phosphate salts. Operating from GIDC Panoli, Gujarat, delivering factory-direct chemical quality to Vietnam.
                    </p>
                    <a href="{{ route('about') }}" class="bl-sidebar-about-link">Learn More About Us <i class="icon-arrow-right"></i></a>
                </div>

            </div>{{-- /.col-lg-4 --}}

        </div>
    </div>
</section>

{{-- Related Products Section --}}
<section class="bl-related-section">
    <div class="container">
        <div class="text-center mb-40">
            <h2 class="bl-related-title">Explore Phosphate Compounds for Export</h2>
            <p class="bl-related-sub">Browse pure grade inorganic salts available for bulk international orders.</p>
        </div>
        <div class="row text-center">
            <div class="col-6 col-md-4 col-lg-2 mb-20">
                <a href="{{ route('sodium_hexameta_phosphate') }}" class="bl-product-tile">
                    <span class="bl-pt-icon">🧪</span>SHMP
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-20">
                <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-product-tile">
                    <span class="bl-pt-icon">⚗️</span>TSP
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-20">
                <a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-product-tile">
                    <span class="bl-pt-icon">🔬</span>MSP
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-20">
                <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-product-tile">
                    <span class="bl-pt-icon">🧪</span>DSP
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-20">
                <a href="{{ route('di_potassium_phosphate') }}" class="bl-product-tile">
                    <span class="bl-pt-icon">🌿</span>DKP
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-20">
                <a href="{{ route('our_products') }}" class="bl-product-tile">
                    <span class="bl-pt-icon">📦</span>All Products
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
