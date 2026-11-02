@extends('layouts.layout')

@section('seo')
    <title>Blog | Chemical Industry Insights | S R Chemicals</title>
    <meta name="description" content="Read the latest articles, industry news and product insights from S R Chemicals – a leading phosphate salt manufacturer from GIDC Panoli, Gujarat, India.">
    <meta name="keywords" content="SR Chemicals blog, phosphate chemicals blog, inorganic chemicals news, chemical industry India, phosphate salt insights">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Blog | Chemical Industry Insights | S R Chemicals">
    <meta property="og:description" content="Latest articles and industry insights from S R Chemicals – phosphate salt manufacturer from Gujarat, India.">
    <meta property="og:url" content="https://srchems.com/blog">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://srchems.com/assets/images/logo/logo.1.jpg">
@endsection

@section('content')

<style>
/* ===== Blog Hero ===== */
.src-blog-hero {
    position: relative;
    background: linear-gradient(135deg, #0d1b3e 0%, #1a2d5a 50%, #0f2044 100%);
    padding: 80px 0 60px;
    overflow: hidden;
}
.src-blog-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url('{{ asset("assets/images/backgrounds/1.jpg") }}') center center / cover no-repeat;
    opacity: 0.18;
}
.src-blog-hero .hero-inner {
    position: relative;
    z-index: 2;
}
.src-blog-hero h1 {
    font-size: 42px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 14px;
}
.src-blog-hero .breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
}
.src-blog-hero .breadcrumb-item a { color: #a8c4f0; font-size: 14px; }
.src-blog-hero .breadcrumb-item.active { color: #fff; font-size: 14px; }
.src-blog-hero .breadcrumb-item + .breadcrumb-item::before { color: #a8c4f0; }

/* ===== Blog Grid ===== */
.src-blog-section {
    background: #f4f7fb;
    padding: 70px 0 80px;
}
.src-blog-col {
    margin-bottom: 30px;
    display: flex;
}
.src-blog-col a {
    text-decoration: none;
    display: flex;
    width: 100%;
}

/* ===== Blog Card — image is direct first child, NO padding around image ===== */
.src-blog-card {
    background: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 16px rgba(26,45,90,0.08);
    transition: transform 0.25s, box-shadow 0.25s;
    display: flex;
    flex-direction: column;
    width: 100%;
    /* NO padding here — image must touch all edges */
}
.src-blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 32px rgba(26,45,90,0.18);
}

/* Image: direct first child — edge to edge, zero margin/padding */
.src-blog-card > .src-card-img {
    width: 100%;
    height: 210px;
    overflow: hidden;
    flex-shrink: 0;
    /* No margin, no padding, no border-radius — card overflow:hidden handles corners */
    margin: 0 !important;
    padding: 0 !important;
    line-height: 0;
}
.src-blog-card > .src-card-img img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover;
    display: block !important;
    margin: 0 !important;
    padding: 0 !important;
    border-radius: 0 !important;
    transition: transform 0.4s;
}
.src-blog-card:hover > .src-card-img img {
    transform: scale(1.05);
}

/* Content area: padding starts AFTER image */
.src-blog-card > .src-card-content {
    padding: 20px 22px 16px;
    display: flex;
    flex-direction: column;
    flex: 1;
}
.src-card-content .src-badge {
    display: inline-block;
    background: #e8f0fd;
    color: #1a4fa0;
    font-size: 11px;
    font-weight: 700;
    padding: 3px 12px;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 12px;
    align-self: flex-start;
}
.src-card-content .src-card-title {
    font-size: 15px;
    font-weight: 700;
    color: #1a2340;
    line-height: 1.55;
    margin-bottom: 10px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.src-card-content .src-card-excerpt {
    font-size: 13px;
    color: #6b7280;
    line-height: 1.7;
    flex: 1;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    margin-bottom: 0;
}

/* Footer: date + read more */
.src-blog-card > .src-card-footer {
    padding: 12px 22px;
    border-top: 1px solid #f0f3f8;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-shrink: 0;
}
.src-card-footer .src-date {
    font-size: 12px;
    color: #9ca3af;
    display: flex;
    align-items: center;
    gap: 5px;
}
.src-card-footer .src-date i { color: #1a4fa0; }
.src-card-footer .src-readmore {
    font-size: 12px;
    font-weight: 700;
    color: #1a4fa0;
    display: flex;
    align-items: center;
    gap: 4px;
    transition: gap 0.2s;
}
.src-card-footer .src-readmore:hover { gap: 8px; color: #0d2d70; }

@media (max-width: 991px) { .src-blog-hero h1 { font-size: 30px; } }
@media (max-width: 575px) {
    .src-blog-hero { padding: 55px 0 40px; }
    .src-blog-hero h1 { font-size: 24px; }
    .src-blog-section { padding: 45px 0 55px; }
}
</style>

{{-- Hero --}}
<section class="src-blog-hero">
    <div class="container">
        <div class="hero-inner">
            <h1>Our Blog</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

{{-- Blog Grid --}}
<section class="src-blog-section">
    <div class="container">
        <div class="row">

            {{-- Card Thailand Bulk Phosphate Procurement Guide --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_bulk_srchems_phosphates_sourcing_thailand') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/thailand-bulk-sourcing-port.jpg') }}"
                                 alt="Sourcing Bulk SR Chems Phosphates from India to Thailand: Importer’s Guide - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Procurement Guide</span>
                            <h3 class="src-card-title">Sourcing Bulk SR Chems Phosphates from India to Thailand: A Procurement &amp; Quality Guide</h3>
                            <p class="src-card-excerpt">A practical procurement guide for Thai chemical importers purchasing SR Chems DKP, MSP, DSP, and SHMP from Panoli, India. Covers COA verification, tropical packaging, &amp; customs documentation.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> October 22, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Thailand Scale Control & Metal Cleaning --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_srchems_phosphates_thailand') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/thailand-automotive-water-treatment.jpg') }}"
                                 alt="How SR Chems Phosphates Enhance Scale Control &amp; Metal Cleaning in Thailand - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Thailand Export</span>
                            <h3 class="src-card-title">How SR Chems Phosphates Enhance Scale Control &amp; Metal Cleaning in Thailand</h3>
                            <p class="src-card-excerpt">Learn how SR Chems Sodium Hexametaphosphate (SHMP) and TSP/DSP optimize industrial boiler scale control, textile dyeing, and automotive surface treatment in Thailand.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> October 22, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Vietnam Bulk Phosphate Procurement Guide --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_bulk_srchems_phosphates_sourcing_vietnam') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/vietnam-procurement-logistics.jpg') }}"
                                 alt="Sourcing Bulk SR Chems Phosphates from India to Vietnam: Procurement Guide - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Procurement Guide</span>
                            <h3 class="src-card-title">Sourcing Bulk SR Chems Phosphates from India to Vietnam: A Procurement &amp; Quality Guide</h3>
                            <p class="src-card-excerpt">A practical procurement guide for Vietnamese chemical importers buying SR Chems DKP, MSP, DSP, and SHMP from Panoli, India. Covers COA checks, tropical packaging, &amp; customs documentation.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> October 22, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Vietnam Textile & Water Treatment --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_srchems_sodium_phosphates_vietnam') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/vietnam-textile-water-treatment.jpg') }}"
                                 alt="How SR Chems Sodium Phosphates Enhance Textile Dyeing &amp; Water Treatment in Vietnam - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Vietnam Export</span>
                            <h3 class="src-card-title">How SR Chems Sodium Phosphates Enhance Textile Dyeing &amp; Water Treatment in Vietnam</h3>
                            <p class="src-card-excerpt">Discover how SR Chems Sodium Hexametaphosphate (SHMP 68%) and TSP/MSP optimize textile processing, boiler scale inhibition, and industrial cleaning across Vietnam's industrial zones.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> October 22, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Prevent Caking in Bulk Phosphate Powder --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_prevent_caking_phosphate_powder') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/grid/4.jpg') }}"
                                 alt="How to Prevent Caking in Bulk Phosphate Powder Storage - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Storage &amp; Logistics</span>
                            <h3 class="src-card-title">How to Prevent Caking in Bulk Phosphate Powder Storage</h3>
                            <p class="src-card-excerpt">Learn why inorganic phosphate powders cake during storage and transport, and discover actionable tips to preserve flowability in high-humidity conditions.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> September 17, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card TSP & DSP in Metal Phosphating --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_tsp_dsp_metal_phosphating') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/scientist-test-tubes.jpg') }}"
                                 alt="Role of TSP & DSP in Metal Phosphating & Surface Treatment - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Surface Treatment</span>
                            <h3 class="src-card-title">Role of TSP &amp; DSP in Metal Phosphating &amp; Surface Treatment</h3>
                            <p class="src-card-excerpt">Discover how Trisodium Phosphate (TSP) and Disodium Phosphate (DSP) optimize metal phosphating, heavy-duty degreasing, and rust prevention in steel fabrication.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> September 17, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Food Grade vs Industrial Grade Phosphates --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_food_grade_vs_industrial_phosphates') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/scientists-microscope.jpg') }}"
                                 alt="Food Grade vs Industrial Grade Phosphates - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/pharma-grade-phosphate.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Technical Guide</span>
                            <h3 class="src-card-title">Food Grade vs. Industrial Grade Phosphates: Technical Guide</h3>
                            <p class="src-card-excerpt">Compare Food Grade (FCC) vs. Technical/Industrial Grade phosphates. Understand key differences in purity, heavy metal assays, and safety standards.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> September 17, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Sodium Hexametaphosphate (SHMP) --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_shmp_water_treatment_guide') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/single/1.jpg') }}"
                                 alt="Sodium Hexametaphosphate (SHMP) in Water Treatment & Cleaning - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Water Treatment</span>
                            <h3 class="src-card-title">Guide to Sodium Hexametaphosphate (SHMP) in Water Treatment &amp; Cleaning</h3>
                            <p class="src-card-excerpt">Learn how Sodium Hexametaphosphate (SHMP) acts as a scale inhibitor, water softener, and dispersing agent in industrial water treatment and textile dyeing.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> September 17, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Tetra Potassium Pyrophosphate (TKPP) --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_tetra_potassium_pyrophosphate_tkpp') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/single/3.jpg') }}"
                                 alt="Tetra Potassium Pyrophosphate (TKPP) | Industrial Supplier - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Industrial Supplier</span>
                            <h3 class="src-card-title">Tetra Potassium Pyrophosphate (TKPP) | Industrial Supplier</h3>
                            <p class="src-card-excerpt">High-grade Tetra Potassium Pyrophosphate (TKPP) powder for industrial use. Excellent sequestering &amp; dispersion properties. MOQ 100 kg.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> August 19, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Di Potassium Phosphate (DKP) --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_di_potassium_phosphate_dkp') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/single/2.jpg') }}"
                                 alt="Di Potassium Phosphate (DKP) 99% Pure | Food & Industrial Grade - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/pharma-grade-phosphate.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">99% Pure DKP</span>
                            <h3 class="src-card-title">Di Potassium Phosphate (DKP) 99% Pure | Food &amp; Industrial Grade</h3>
                            <p class="src-card-excerpt">High-purity Di Potassium Phosphate (CAS 7758-11-4) with 99% assay. Ideal for food, pharma, &amp; industrial buffering.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> August 19, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Potassium Dihydrogen Phosphate (MKP) --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_potassium_dihydrogen_phosphate') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/grid/4.jpg') }}"
                                 alt="Potassium Dihydrogen Phosphate (KH2PO4) | Technical Grade MKP - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Technical Grade</span>
                            <h3 class="src-card-title">Potassium Dihydrogen Phosphate (KH2PO4) | Technical Grade MKP</h3>
                            <p class="src-card-excerpt">High-purity Potassium Phosphate Monobasic (KH2PO4) for industrial &amp; chemical applications. Clear solubility and excellent buffering.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> August 19, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Understanding Potassium Phosphate --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_understanding_potassium_phosphate') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/microscope-closeup.jpg') }}"
                                 alt="Potassium Phosphate Manufacturer & Supplier | Di, Mono & Tetra Forms - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/pharma-grade-phosphate.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Technical Guide</span>
                            <h3 class="src-card-title">Potassium Phosphate Manufacturer &amp; Supplier | Di, Mono &amp; Tetra Forms</h3>
                            <p class="src-card-excerpt">Explore high-assay Potassium Phosphate compounds with clear solubility and precise pH control. Suitable for pharma and industrial applications.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> August 19, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Sodium Phosphates Guide --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_sodium_phosphates_guide') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/scientist-test-tubes.jpg') }}"
                                 alt="Buy Industrial Sodium Acid Pyrophosphate Powder (Na2H2P2O7) - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Industry Insight</span>
                            <h3 class="src-card-title">Buy Industrial Sodium Acid Pyrophosphate Powder (Na2H2P2O7) | S R Chemicals</h3>
                            <p class="src-card-excerpt">Premium technical grade SAPP with 91% min assay &amp; clear solubility. Ideal for leather treatment, oil dispersants, and stabilization.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> July 20, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Ammonium Phosphate Guide --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_ammonium_phosphate_guide') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/scientists-microscope.jpg') }}"
                                 alt="Bulk Ammonium Phosphate Supplier (MAP & DAP) - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Industry Insight</span>
                            <h3 class="src-card-title">Bulk Ammonium Phosphate Supplier (MAP &amp; DAP) | S R Chemicals</h3>
                            <p class="src-card-excerpt">High-solubility Ammonium Phosphate for fertilizers and scientific research. Reliable 50-ton monthly capacity and fast 3-day delivery.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> July 20, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Potassium Phosphate Guide --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_potassium_phosphate_guide') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/grid/2.jpg') }}"
                                 alt="Potassium Phosphate Manufacturer & Bulk Supplier - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/pharma-grade-phosphate.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Industry Insight</span>
                            <h3 class="src-card-title">The Industrial Buyer’s Guide to Potassium Phosphate: Selecting the Right Form</h3>
                            <p class="src-card-excerpt">Source high-purity Di-Potassium Phosphate, Mono-Potassium Phosphate, and TKPP. Get consistent batch quality, clear solubility, and fast 3-day delivery.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> July 20, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 1 --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_pharma_grade_phosphate') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                    <img src="{{ asset('assets/images/blog/single/1.jpg') }}" alt="Pharma Grade Phosphate Salt Manufacturing at S R Chemicals">
                                
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Industry Insight</span>
                            <h3 class="src-card-title">Pharma &amp; Analytical Grade Phosphate Salts Manufacturer | S R Chemicals</h3>
                            <p class="src-card-excerpt">Discover how S R Chemicals is scaling to AR, LR, BP, and IP grade phosphate salts to meet global pharmaceutical and laboratory standards.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> June 2, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 2 --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_inorganic_chemicals') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                    <img src="{{ asset('assets/images/blog/grid/3.jpg') }}" alt="High Purity Inorganic Chemicals Manufacturing at S R Chemicals GIDC Panoli">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Industry Insight</span>
                            <h3 class="src-card-title">High-Purity Inorganic Chemicals Manufacturer GIDC Panoli | S R Chemicals</h3>
                            <p class="src-card-excerpt">Why ISO-certified phosphate salts from a trusted GIDC Panoli manufacturer matter for your global B2B supply chain. Bulk pricing available.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> June 9, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 3 --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_msp_anhydrous_vs_crystal') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                                                <img src="{{ asset('assets/images/blog/grid/5.jpg') }}"

                                 alt="Mono Sodium Phosphate Anhydrous vs Crystal - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Industry Insight</span>
                            <h3 class="src-card-title">Mono Sodium Phosphate Anhydrous vs. Crystal: Choosing the Right Form for Your Formulations</h3>
                            <p class="src-card-excerpt">Compare Mono Sodium Phosphate Anhydrous vs Crystalline forms. Key differences in caking, solubility, and applications from S.R. Chemicals.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> June 20, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 4 --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_dipotassium_phosphate_water_treatment') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/grid/6.jpg') }}"
                                 alt="Dipotassium Phosphate Powder for Industrial Water Treatment - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/pharma-grade-phosphate.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Industry Insight</span>
                            <h3 class="src-card-title">Dipotassium Phosphate Powder for Industrial Water Treatment Systems</h3>
                            <p class="src-card-excerpt">Discover why Dipotassium Phosphate powder is a critical corrosion inhibitor and pH buffer for industrial cooling towers, boiler loops, and chiller systems.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> June 20, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 5: MSP Crystal Industrial --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col">
                <a href="{{ route('blog_msp_crystal_industrial') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <img src="{{ asset('assets/images/blog/pharma-grade-phosphate.png') }}"
                                 alt="High-Purity Mono Sodium Phosphate Crystals - S R Chemicals"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/pharma-grade-phosphate.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <span class="src-badge">Industry Insight</span>
                            <h3 class="src-card-title">Optimizing Industrial Processes with High-Purity Mono Sodium Phosphate Crystals</h3>
                            <p class="src-card-excerpt">Source high-purity Mono Sodium Phosphate (MSP) crystals for industrial water treatment, metal finishing, and food processing. Get predictable batch consistency.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="icon-calendar"></i> July 7, 2026</span>
                            <span class="src-readmore">Read More <i class="icon-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

@endsection
