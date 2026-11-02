@extends('layouts.layout')

@section('seo')
    <title>SR Chems Chemical Supplier &amp; Exporter to Thailand | S R Chemicals</title>
    <meta name="description" content="Premier Indian manufacturer &amp; bulk exporter of SR Chems inorganic phosphate salts to Thailand. Serving industrial processing, water treatment, &amp; manufacturing in Bangkok, Rayong, &amp; Chonburi.">
    <meta name="keywords" content="SR Chems phosphate exporter Thailand, Phosphate salt supplier Bangkok, Sodium Hexametaphosphate supplier Thailand, SR Chems DKP MSP supplier Thailand, Bulk industrial chemical importer Thailand">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://srchems.com/srchems-chemical-exporter-supplier-thailand">
    <meta property="og:title" content="SR Chems Chemical Supplier &amp; Exporter to Thailand | S R Chemicals">
    <meta property="og:description" content="Premier Indian manufacturer &amp; bulk exporter of SR Chems inorganic phosphate salts to Thailand. Serving industrial processing, water treatment, &amp; manufacturing in Bangkok, Rayong, &amp; Chonburi.">
    <meta property="og:url" content="https://srchems.com/srchems-chemical-exporter-supplier-thailand">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/logo/logo.1.jpg') }}">

    {{-- JSON-LD Structured Data --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "@id": "https://srchems.com/srchems-chemical-exporter-supplier-thailand#webpage",
      "url": "https://srchems.com/srchems-chemical-exporter-supplier-thailand",
      "name": "SR Chems Chemical Supplier & Exporter to Thailand | S R Chemicals",
      "description": "Premier Indian manufacturer & bulk exporter of SR Chems inorganic phosphate salts to Thailand. Serving Bangkok, Rayong, and Chonburi industrial zones.",
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://srchems.com/"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Locations",
            "item": "https://srchems.com/#locations"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Thailand Export Services",
            "item": "https://srchems.com/srchems-chemical-exporter-supplier-thailand"
          }
        ]
      }
    }
    </script>
@endsection

@section('content')
@include('partials.blog_styles')

<style>
/* Additional specific refinements for Thailand export page */
.th-port-badge {
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
.th-port-badge i {
    color: #e8792a;
    margin-right: 6px;
}
.th-hub-card {
    background: #fdfdfd;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 16px 20px;
    margin-bottom: 15px;
}
.th-hub-card h5 {
    color: #1a2340;
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 6px;
}
.th-hub-card p {
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
    <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="Chemical Supplier &amp; Exporter to Thailand"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1">
                <h1 class="pagetitle-heading mt-50">SR Chems Chemical Supplier &amp; Exporter to Thailand</h1>
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
                    <li class="breadcrumb-item">
                        <a href="{{ route('about') }}"><span>Locations</span></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Thailand Export Services</li>
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
                    <img src="{{ asset('assets/images/banners/1.jpg') }}" alt="SR Chems Inorganic Phosphate Salt Export from India to Thailand">
                </div>

                {{-- Metadata Tags --}}
                <div class="bl-meta">
                    <span><i class="icon-location"></i> Factory: Panoli, Gujarat (India)</span>
                    <span><i class="fas fa-ship"></i> Direct Maritime Lines: Nhava Sheva &amp; Mundra</span>
                    <span class="bl-badge">Global Export Corridor</span>
                </div>

                {{-- Introduction Section --}}
                <h2 class="bl-h1">Reliable Inorganic Phosphate Manufacturer &amp; Bulk Exporter to Thailand</h2>

                <p class="bl-p">
                    Welcome to <strong>S R Chemicals (SR Chems)</strong>, a premier Indian chemical manufacturer and global exporter specializing in high-purity Inorganic Phosphate Salts. Based in <strong>Panoli, Gujarat</strong>—India's chemical manufacturing hub—we deliver SR Chems and technical pure grade sodium, potassium, and ammonium phosphates to industrial buyers, blenders, and distributors across Thailand.
                </p>

                <p class="bl-p mb-30">
                    Whether you operate in the Eastern Seaboard industrial estates of <strong>Chonburi and Rayong</strong>, or manage industrial processing facilities in <strong>Greater Bangkok</strong>, we provide reliable bulk supply, international quality compliance, and competitive factory-direct pricing.
                </p>

                <div class="mb-40">
                    <span class="th-port-badge"><i class="fas fa-ship"></i> Port of Laem Chabang</span>
                    <span class="th-port-badge"><i class="fas fa-ship"></i> Bangkok Port (Klong Toey)</span>
                    <span class="th-port-badge"><i class="fas fa-map-marker-alt"></i> Rayong Industrial Hub</span>
                    <span class="th-port-badge"><i class="fas fa-map-marker-alt"></i> Chonburi Eastern Seaboard</span>
                    <span class="th-port-badge"><i class="fas fa-map-marker-alt"></i> Greater Bangkok Belt</span>
                </div>

                <hr class="bl-hr">

                {{-- Strategic Industries Section --}}
                <h2 class="bl-h2">Key Industries We Serve in Thailand</h2>
                <p class="bl-p mb-30">
                    Thailand's thriving industrial sector relies on consistent, high-specification chemical raw materials. Our export portfolio supports key Thai manufacturing sectors:
                </p>

                {{-- Industry 1 --}}
                <div class="bl-box mb-30">
                    <h3 class="bl-box-title">1. Industrial Processing, Formulations &amp; Speciality Chemicals</h3>
                    <p class="bl-box-p">
                        Thailand's manufacturing and chemical blending sector demands strict chemical purity and active assay compliance:
                    </p>
                    <ul class="bl-ul mb-20">
                        <li><strong>High-Purity Moisture &amp; Texture Control:</strong> SR Chems <a href="{{ route('di_potassium_phosphate') }}" class="bl-link">Dipotassium Phosphate (DKP)</a> and Sodium Tripolyphosphate (STPP) for specialized industrial formulations, viscosity control, and processing stability.</li>
                        <li><strong>Precision Buffering Solutions:</strong> SR Chems <a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-link">Monosodium Phosphate (MSP)</a> and <a href="{{ route('sodium_acid_pyrophosphate') }}" class="bl-link">Sodium Acid Pyrophosphate (SAPP)</a> for accurate pH regulation, reaction buffering, and process control.</li>
                    </ul>
                    <div class="bl-chips">
                        <span class="bl-chip-label">Featured:</span>
                        <a href="{{ route('di_potassium_phosphate') }}" class="bl-chip">DKP SR Chems</a>
                        <a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-chip">MSP Anhydrous</a>
                        <a href="{{ route('sodium_acid_pyrophosphate') }}" class="bl-chip">SAPP Pure</a>
                    </div>
                </div>

                {{-- Industry 2 --}}
                <div class="bl-box mb-30">
                    <h3 class="bl-box-title">2. Water Treatment &amp; Municipal Infrastructure</h3>
                    <p class="bl-box-p">
                        Supporting industrial wastewater management and cooling systems across Thailand's heavy industrial zones:
                    </p>
                    <ul class="bl-ul mb-20">
                        <li><strong>Boiler &amp; Cooling Tower Scale Control:</strong> High-solubility <a href="{{ route('sodium_hexameta_phosphate') }}" class="bl-link">Sodium Hexametaphosphate (SHMP)</a> for sequestering calcium and magnesium hard ions.</li>
                        <li><strong>Corrosion Inhibition:</strong> Inorganic polyphosphates engineered for high-temperature thermal stability.</li>
                    </ul>
                    <div class="bl-chips">
                        <span class="bl-chip-label">Featured:</span>
                        <a href="{{ route('sodium_hexameta_phosphate') }}" class="bl-chip">SHMP 68% Pure</a>
                        <a href="{{ route('tetra_sodium_pyro_phosphate') }}" class="bl-chip">TSPP Industrial</a>
                    </div>
                </div>

                {{-- Industry 3 --}}
                <div class="bl-box mb-40">
                    <h3 class="bl-box-title">3. Metal Surface Treatment &amp; Automotive Manufacturing</h3>
                    <p class="bl-box-p">
                        Serving the "Detroit of Asia"—Thailand's automotive assembly, steel fabrication, and electroplating plants:
                    </p>
                    <ul class="bl-ul mb-20">
                        <li><strong>Metal Degreasing &amp; Cleaning:</strong> Heavy-duty <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-link">Trisodium Phosphate (TSP Anhydrous &amp; Crystalline)</a>.</li>
                        <li><strong>Iron Phosphating:</strong> <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-link">Disodium Phosphate (DSP)</a> for rust prevention and conversion coating prep.</li>
                    </ul>
                    <div class="bl-chips">
                        <span class="bl-chip-label">Featured:</span>
                        <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-chip">TSP Anhydrous</a>
                        <a href="{{ route('tri_sodium_phosphate_crystals') }}" class="bl-chip">TSP Crystals</a>
                        <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-chip">DSP SR Chems</a>
                    </div>
                </div>

                <hr class="bl-hr">

                {{-- Product Portfolio Table --}}
                <h2 class="bl-h2">Our Product Portfolio for the Thai Market</h2>
                <p class="bl-p mb-25">
                    High-specification inorganic phosphate compounds available for containerized maritime shipments to Thailand:
                </p>

                <div class="table-responsive mb-40">
                    <table class="table table-bordered bl-table">
                        <thead>
                            <tr>
                                <th style="min-width:200px;">Product Name</th>
                                <th style="min-width:110px;">Chemical Formula</th>
                                <th style="min-width:180px;">Key Export Grades</th>
                                <th style="min-width:230px;">Primary Application in Thailand</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-600">
                                    <a href="{{ route('sodium_hexameta_phosphate') }}" class="bl-link">Sodium Hexametaphosphate (SHMP)</a>
                                </td>
                                <td><code>(NaPO3)6</code></td>
                                <td>Pure Technical / High P2O5</td>
                                <td>Water Treatment, Textile Dyeing, Detergents</td>
                            </tr>
                            <tr class="alt">
                                <td class="fw-600">
                                    <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-link">Trisodium Phosphate (TSP)</a>
                                </td>
                                <td><code>Na3PO4</code></td>
                                <td>Anhydrous SR Chems &amp; Crystalline SR Chems</td>
                                <td>Metal Surface Cleaning, Degreasing, Cleaners</td>
                            </tr>
                            <tr>
                                <td class="fw-600">
                                    <a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-link">Monosodium Phosphate (MSP)</a>
                                </td>
                                <td><code>NaH2PO4</code></td>
                                <td>SR Chems / Technical / Anhydrous</td>
                                <td>Industrial Buffers, Reaction Control, Water Conditioning</td>
                            </tr>
                            <tr class="alt">
                                <td class="fw-600">
                                    <a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-link">Disodium Phosphate (DSP)</a>
                                </td>
                                <td><code>Na2HPO4</code></td>
                                <td>SR Chems / Industrial</td>
                                <td>Metal Phosphating, Chemical Buffering, Emulsifiers</td>
                            </tr>
                            <tr>
                                <td class="fw-600">
                                    <a href="{{ route('di_potassium_phosphate') }}" class="bl-link">Dipotassium Phosphate (DKP)</a>
                                </td>
                                <td><code>K2HPO4</code></td>
                                <td>SR Chems / Technical Buffer</td>
                                <td>Industrial Processing, Buffering, Specialty Formulations</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr class="bl-hr">

                {{-- Why Thai Importers Partner Section --}}
                <h2 class="bl-h2">Why Thai Importers Partner with S R Chemicals</h2>
                <p class="bl-p mb-25">
                    End-to-end manufacturing integrity, moisture-barrier packaging engineered for tropical transit, and dependable port logistics:
                </p>

                <div class="row mb-40">
                    <div class="col-md-12 mb-20">
                        <div class="bl-usp-card">
                            <h4 class="bl-usp-title">📦 1. Export-Grade Moisture-Proof Packaging</h4>
                            <p class="bl-usp-p mb-10">Thailand’s tropical monsoon climate requires robust packaging to prevent chemical caking and degradation during transit:</p>
                            <ul class="bl-ul mb-0" style="font-size:13.5px;">
                                <li>Heavy-duty 25 kg / 50 kg HDPE outer woven bags.</li>
                                <li>Sealed 80–100 micron LDPE inner liners to block humidity and avoid moisture pickup.</li>
                                <li>Customized Jumbo / FIBC bag options available for automated plant hoppers.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 mb-20">
                        <div class="bl-usp-card">
                            <h4 class="bl-usp-title">🚢 2. Seamless Logistics from India to Thai Ports</h4>
                            <p class="bl-usp-p mb-10">Fast shipping connectivity ensuring swift delivery from factory to Thai industrial hubs:</p>
                            <ul class="bl-ul mb-0" style="font-size:13.5px;">
                                <li><strong>Strategic Factory Location:</strong> Proximity to major Western Indian container ports (Nhava Sheva / Mundra) offers short transit times to Port of Laem Chabang and Bangkok Port (Klong Toey).</li>
                                <li><strong>Full Export Documentation:</strong> Every shipment includes comprehensive Certificate of Analysis (COA), Safety Data Sheet (SDS / MSDS), Certificate of Origin, and Packing Lists.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 mb-20">
                        <div class="bl-usp-card">
                            <h4 class="bl-usp-title">🔬 3. International Quality Compliance</h4>
                            <p class="bl-usp-p mb-10">Stringent testing and verification at our on-site testing facility:</p>
                            <ul class="bl-ul mb-0" style="font-size:13.5px;">
                                <li>Our manufacturing protocols adhere to rigorous international testing standards.</li>
                                <li>Ensuring trace heavy metal limits (Pb, As, F) and active assays (P2O5) strictly comply with international quality benchmarks and raw material import regulations in Thailand.</li>
                                <li>Batch-level testing and certified COA accompany every container.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr class="bl-hr">

                {{-- Request an Export Quote Section --}}
                <div class="bl-cta">
                    <h3 class="bl-cta-title">Request an Export Quote for Thailand</h3>
                    <p class="bl-cta-p">
                        Expand your chemical supply chain with an established Indian phosphate manufacturer. Contact our export sales team today for product specifications, free sample requests, and competitive CIF Laem Chabang / FOB pricing.
                    </p>
                    <div class="bl-cta-contact">
                        <div>📞 <strong>Export Desk Phone:</strong> <a href="tel:+919913645555" class="bl-cta-link">+91 9913645555</a></div>
                        <div>📩 <strong>Email:</strong> <a href="mailto:info@srchems.com" class="bl-cta-link">info@srchems.com</a></div>
                        <div>🏭 <strong>Plant Address:</strong> GIDC Industrial Estate, Panoli, District Bharuch, Gujarat, India.</div>
                    </div>
                    <a href="{{ route('contact_us') }}" class="bl-cta-btn">Send Export Inquiry <i class="icon-arrow-right"></i></a>
                </div>

                {{-- SEO Tags Footer --}}
                <div class="bl-tags">
                    <strong>Export Tags: </strong>
                    <a href="{{ route('sodium_hexameta_phosphate') }}" class="bl-tag">SHMP Thailand</a>
                    <a href="{{ route('di_potassium_phosphate') }}" class="bl-tag">DKP Exporter</a>
                    <a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-tag">TSP Supplier Bangkok</a>
                    <a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-tag">MSP SR Chems</a>
                    <a href="{{ route('our_products') }}" class="bl-tag">All Products</a>
                    <a href="{{ route('about') }}" class="bl-tag">About S R Chemicals</a>
                </div>

            </div>{{-- /.col-lg-8 --}}

            {{-- Sidebar Column --}}
            <div class="col-lg-4">

                {{-- Quick Contact Widget --}}
                <div class="bl-sidebar-contact mb-30">
                    <div class="bl-sc-header">Thailand Export Desk</div>
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

                {{-- Key Thai Ports & Industrial Hubs Card --}}
                <div class="bl-sidebar-card mb-30">
                    <div class="bl-sidebar-card-title">Major Thai Hubs Served</div>
                    <div style="padding:15px 18px 5px;">
                        <div class="th-hub-card">
                            <h5><i class="fas fa-ship text-primary mr-1"></i> Port of Laem Chabang</h5>
                            <p>Thailand's premier deep-sea port serving Chonburi &amp; Rayong industrial zones.</p>
                        </div>
                        <div class="th-hub-card">
                            <h5><i class="fas fa-ship text-primary mr-1"></i> Bangkok Port (Klong Toey)</h5>
                            <p>Direct riverine gateway serving central Thailand &amp; Greater Bangkok processing plants.</p>
                        </div>
                        <div class="th-hub-card">
                            <h5><i class="fas fa-industry text-primary mr-1"></i> Rayong &amp; Chonburi</h5>
                            <p>Eastern Economic Corridor (EEC) automotive, petrochemical &amp; processing parks.</p>
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
                        Premier Indian manufacturer &amp; bulk exporter of high-purity inorganic phosphate salts. Operating from GIDC Panoli, Gujarat, delivering factory-direct chemical quality to Thailand.
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
            <p class="bl-related-sub">Browse SR Chems inorganic salts available for bulk international orders.</p>
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
