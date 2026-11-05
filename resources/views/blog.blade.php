@extends('layouts.app')

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
/* =====================================================
   S R CHEMICALS — Modern B2B Blog Redesign Styles
   ===================================================== */

/* Page Hero */
.src-blog-hero {
    position: relative;
    background: linear-gradient(135deg, #07101e 0%, #0c1e3d 60%, #142a52 100%);
    padding: 72px 0 54px;
    overflow: hidden;
    color: #ffffff;
}
.src-blog-hero-bg {
    position: absolute;
    inset: 0;
    z-index: 1;
    overflow: hidden;
    opacity: 0.22;
}
.src-blog-hero-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.85) contrast(1.1);
}
.src-blog-hero .container-fluid {
    position: relative;
    z-index: 2;
}
.src-blog-hero .src-breadcrumb {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.16);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 13px;
    margin-bottom: 20px;
}
.src-blog-hero .src-breadcrumb a {
    color: #cbd5e1;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s ease;
}
.src-blog-hero .src-breadcrumb a:hover {
    color: #ffffff;
}
.src-blog-hero .src-breadcrumb span.active {
    color: #e8792a;
    font-weight: 600;
}
.src-blog-hero h1 {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    font-size: clamp(28px, 4vw, 44px);
    font-weight: 800;
    color: #ffffff;
    line-height: 1.25;
    letter-spacing: -0.02em;
    margin-bottom: 12px;
}

/* Blog Section Wrapper */
.src-blog-section {
    background-color: #f8fafc;
    padding: 56px 0 80px;
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
}

/* Filter & Search Toolbar */
.src-blog-toolbar {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 22px 24px;
    margin-bottom: 40px;
    box-shadow: 0 4px 18px rgba(12, 30, 61, 0.04);
}
.src-filter-pills {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
}
.src-filter-btn {
    background: #f1f5f9;
    color: #475569;
    border: 1px solid #e2e8f0;
    border-radius: 50px;
    padding: 7px 18px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.22s ease;
    white-space: nowrap;
}
.src-filter-btn:hover {
    background: #e8f0fd;
    color: #1a4fa0;
    border-color: #cfe0fc;
}
.src-filter-btn.active {
    background: #1a4fa0;
    color: #ffffff;
    border-color: #1a4fa0;
    box-shadow: 0 4px 12px rgba(26, 79, 160, 0.25);
}
.src-search-box {
    position: relative;
}
.src-search-box input {
    width: 100%;
    background: #f8fafc;
    border: 1px solid #cbd5e1;
    border-radius: 50px;
    padding: 10px 42px 10px 42px;
    font-size: 13.5px;
    color: #0c1e3d;
    transition: all 0.2s ease;
}
.src-search-box input:focus {
    background: #ffffff;
    border-color: #1a4fa0;
    outline: none;
    box-shadow: 0 0 0 3px rgba(26, 79, 160, 0.15);
}
.src-search-box .src-search-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #64748b;
    pointer-events: none;
    font-size: 14px;
}
.src-search-box .src-search-clear {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #94a3b8;
    cursor: pointer;
    font-size: 16px;
    display: none;
    padding: 2px 6px;
}
.src-search-box .src-search-clear:hover {
    color: #0c1e3d;
}

/* Blog Cards Grid */
.src-blog-col {
    margin-bottom: 30px;
    display: flex;
    transition: opacity 0.25s ease, transform 0.25s ease;
}
.src-blog-col.src-hidden {
    display: none !important;
}
.src-blog-col a {
    text-decoration: none !important;
    display: flex;
    width: 100%;
}
.src-blog-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 16px rgba(12, 30, 61, 0.05);
    transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
    display: flex;
    flex-direction: column;
    width: 100%;
}
.src-blog-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 36px rgba(12, 30, 61, 0.12);
    border-color: #cbd5e1;
}

/* Card Image */
.src-blog-card > .src-card-img {
    position: relative;
    width: 100%;
    height: 220px;
    overflow: hidden;
    flex-shrink: 0;
    background: #0c1e3d;
    margin: 0 !important;
    padding: 0 !important;
}
.src-blog-card > .src-card-img img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    display: block !important;
    transition: transform 0.45s ease;
}
.src-blog-card:hover > .src-card-img img {
    transform: scale(1.06);
}

/* Category Pill on Image */
.src-img-badge {
    position: absolute;
    top: 14px;
    left: 14px;
    background: rgba(12, 30, 61, 0.88);
    color: #ffffff;
    font-size: 11px;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    z-index: 2;
}

/* Content Area */
.src-blog-card > .src-card-content {
    padding: 22px 24px 18px;
    display: flex;
    flex-direction: column;
    flex: 1;
}
.src-card-meta-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    margin-bottom: 12px;
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
    border: 1px solid #cfe0fc;
}
.src-read-time {
    font-size: 11.5px;
    color: #64748b;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}
.src-card-content .src-card-title {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    font-size: 16.5px;
    font-weight: 700;
    color: #0c1e3d;
    line-height: 1.48;
    margin-bottom: 10px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    transition: color 0.2s ease;
}
.src-blog-card:hover .src-card-title {
    color: #1a4fa0;
}
.src-card-content .src-card-excerpt {
    font-size: 13.5px;
    color: #64748b;
    line-height: 1.68;
    flex: 1;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    margin-bottom: 0;
}

/* Card Footer */
.src-blog-card > .src-card-footer {
    padding: 14px 24px;
    background: #fafcff;
    border-top: 1px solid #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-shrink: 0;
}
.src-card-footer .src-date {
    font-size: 12px;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 5px;
    font-weight: 500;
}
.src-card-footer .src-date i {
    color: #1a4fa0;
}
.src-card-footer .src-readmore {
    font-size: 12.5px;
    font-weight: 700;
    color: #1a4fa0;
    display: flex;
    align-items: center;
    gap: 5px;
    transition: gap 0.22s ease, color 0.22s ease;
}
.src-blog-card:hover .src-readmore {
    gap: 8px;
    color: #e8792a;
}

/* Bottom CTA Band */
.src-blog-cta-band {
    background: linear-gradient(135deg, #07101e 0%, #0c1e3d 50%, #142a52 100%);
    border-radius: 20px;
    padding: 44px 36px;
    color: #ffffff;
    margin-top: 20px;
    box-shadow: 0 16px 40px rgba(12, 30, 61, 0.16);
    position: relative;
    overflow: hidden;
}
.src-blog-cta-band::before {
    content: '';
    position: absolute;
    top: -60px;
    right: -60px;
    width: 220px;
    height: 220px;
    background: rgba(232, 121, 42, 0.18);
    border-radius: 50%;
    filter: blur(45px);
}
.src-blog-cta-band .src-cta-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(232, 121, 42, 0.18);
    border: 1px solid rgba(232, 121, 42, 0.4);
    color: #ffaa6b;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 5px 14px;
    border-radius: 50px;
    margin-bottom: 14px;
}
.src-blog-cta-band .src-cta-title {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: clamp(20px, 3vw, 28px);
    font-weight: 800;
    color: #ffffff;
    line-height: 1.35;
    margin-bottom: 10px;
}
.src-blog-cta-band .src-cta-desc {
    color: #cbd5e1;
    font-size: 15px;
    max-width: 720px;
    line-height: 1.7;
    margin-bottom: 24px;
}

/* No Results State */
.src-no-results {
    display: none;
    text-align: center;
    padding: 60px 20px;
    background: #ffffff;
    border-radius: 16px;
    border: 1px dashed #cbd5e1;
    margin-bottom: 40px;
}
.src-no-results i {
    font-size: 42px;
    color: #94a3b8;
    margin-bottom: 14px;
    display: block;
}

@media (max-width: 991px) {
    .src-blog-hero { padding: 56px 0 42px; }
    .src-blog-section { padding: 42px 0 60px; }
}
@media (max-width: 575px) {
    .src-blog-hero { padding: 46px 0 36px; }
    .src-blog-card > .src-card-img { height: 190px; }
    .src-blog-cta-band { padding: 32px 20px; }
}
</style>

{{-- Hero Section --}}
<section class="src-blog-hero">
    <div class="src-blog-hero-bg" aria-hidden="true">
        <img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="S R Chemicals Panoli GIDC Facility" loading="eager">
    </div>
    <div class="container-fluid px-lg-5 position-relative" style="z-index: 2;">
        <div class="src-breadcrumb">
            <a href="{{ route('home') }}"><i class="bi bi-house-door-fill me-1"></i> Home</a>
            <i class="bi bi-chevron-right small text-white-50"></i>
            <span class="active">Blog</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <span class="badge bg-primary text-white text-uppercase px-3 py-1 fw-bold small mb-2">
                    <i class="bi bi-patch-check-fill me-1"></i> ISO 9001:2008 Certified Manufacturer &amp; Exporter
                </span>
                <h1 class="src-page-title">Our Blog</h1>
                <p class="text-white-50 fs-5 mt-2 mb-0" style="max-width: 720px;">
                    Technical insights, formulation guides, and global phosphate chemical procurement intelligence from our chemical engineering team in Panoli GIDC, Bharuch.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-inline-flex flex-column align-items-lg-end p-3 rounded-4" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px);">
                    <span class="small text-warning fw-bold text-uppercase"><i class="bi bi-book-half"></i> Knowledge Hub</span>
                    <span class="fw-bold text-white fs-5">20 In-Depth Technical Articles</span>
                    <span class="small text-white-50">Quality Specs • Applications • Global Trade</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Blog Grid & Filter Section --}}
<section class="src-blog-section">
    <div class="container-fluid px-lg-5">

        {{-- Interactive Filter & Search Toolbar --}}
        <div class="src-blog-toolbar">
            <div class="row align-items-center g-3">
                <div class="col-xl-8 col-lg-7">
                    <div class="src-filter-pills" role="tablist">
                        <button type="button" class="src-filter-btn active" data-filter="all">All Articles (20)</button>
                        <button type="button" class="src-filter-btn" data-filter="export"><i class="bi bi-globe2 me-1"></i> Global Sourcing &amp; Export</button>
                        <button type="button" class="src-filter-btn" data-filter="water"><i class="bi bi-droplet-half me-1"></i> Water &amp; Boiler Treatment</button>
                        <button type="button" class="src-filter-btn" data-filter="technical"><i class="bi bi-shield-check me-1"></i> Technical &amp; Quality Guides</button>
                        <button type="button" class="src-filter-btn" data-filter="potassium"><i class="bi bi-radioactive me-1"></i> Potassium Phosphates</button>
                        <button type="button" class="src-filter-btn" data-filter="sodium"><i class="bi bi-hexagon-fill me-1"></i> Sodium Phosphates</button>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="src-search-box">
                        <i class="bi bi-search src-search-icon"></i>
                        <input type="text" id="srcBlogSearch" placeholder="Search by chemical, grade, or application..." aria-label="Search blog articles">
                        <button type="button" id="srcSearchClear" class="src-search-clear" aria-label="Clear search">&times;</button>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-3 pt-3 border-top border-light-subtle small text-muted">
                <div>
                    Showing <strong id="srcVisibleCount" class="text-primary">20</strong> of 20 chemical articles
                </div>
                <div class="d-none d-md-block">
                    <i class="bi bi-geo-alt-fill text-warning me-1"></i> Manufactured &amp; Tested at Panoli GIDC, Gujarat
                </div>
            </div>
        </div>

        {{-- No Results Message --}}
        <div id="srcNoResults" class="src-no-results">
            <i class="bi bi-search"></i>
            <div class="h5 fw-bold text-dark mb-1">No matching articles found</div>
            <p class="text-muted small mb-3">Try searching for other terms like "SHMP", "DKP", "Food Grade", "Boiler", or "Thailand".</p>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-pill px-3" onclick="resetBlogFilters()">Reset Filters</button>
        </div>

        {{-- Blog Cards Grid (All 20 Cards Retained with Exact Original H3 Sequence for SEO) --}}
        <div class="row" id="srcBlogGrid">

            {{-- Card 1: Sourcing Bulk SR Chems Phosphates from India to Thailand: A Procurement & Quality Guide --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="export water potassium sodium technical" data-keywords="sourcing bulk sr chems phosphates from india to thailand: a procurement &amp; quality guide procurement guide a practical procurement guide for thai chemical importers purchasing sr chems dkp, msp, dsp, and shmp from panoli, india. covers coa verification, tropical packaging, &amp; customs documentation.">
                <a href="{{ route('blog_bulk_srchems_phosphates_sourcing_thailand') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Procurement Guide</span>
                            <img src="{{ asset('assets/images/blog/thailand-bulk-sourcing-port.jpg') }}"
                                 alt="Sourcing Bulk SR Chems Phosphates from India to Thailand: Importer’s Guide - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Procurement Guide</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 5 min read</span>
                            </div>
                            <h3 class="src-card-title">Sourcing Bulk SR Chems Phosphates from India to Thailand: A Procurement &amp; Quality Guide</h3>
                            <p class="src-card-excerpt">A practical procurement guide for Thai chemical importers purchasing SR Chems DKP, MSP, DSP, and SHMP from Panoli, India. Covers COA verification, tropical packaging, &amp; customs documentation.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> October 22, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 2: How SR Chems Phosphates Enhance Scale Control & Metal Cleaning in Thailand --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="export water sodium technical" data-keywords="how sr chems phosphates enhance scale control &amp; metal cleaning in thailand thailand export learn how sr chems sodium hexametaphosphate (shmp) and tsp/dsp optimize industrial boiler scale control, textile dyeing, and automotive surface treatment in thailand.">
                <a href="{{ route('blog_srchems_phosphates_thailand') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Thailand Export</span>
                            <img src="{{ asset('assets/images/blog/thailand-automotive-water-treatment.jpg') }}"
                                 alt="How SR Chems Phosphates Enhance Scale Control &amp; Metal Cleaning in Thailand - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Thailand Export</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 4 min read</span>
                            </div>
                            <h3 class="src-card-title">How SR Chems Phosphates Enhance Scale Control &amp; Metal Cleaning in Thailand</h3>
                            <p class="src-card-excerpt">Learn how SR Chems Sodium Hexametaphosphate (SHMP) and TSP/DSP optimize industrial boiler scale control, textile dyeing, and automotive surface treatment in Thailand.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> October 22, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 3: Sourcing Bulk SR Chems Phosphates from India to Vietnam: A Procurement & Quality Guide --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="export water potassium sodium technical" data-keywords="sourcing bulk sr chems phosphates from india to vietnam: a procurement &amp; quality guide procurement guide a practical procurement guide for vietnamese chemical importers buying sr chems dkp, msp, dsp, and shmp from panoli, india. covers coa checks, tropical packaging, &amp; customs documentation.">
                <a href="{{ route('blog_bulk_srchems_phosphates_sourcing_vietnam') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Procurement Guide</span>
                            <img src="{{ asset('assets/images/blog/vietnam-procurement-logistics.jpg') }}"
                                 alt="Sourcing Bulk SR Chems Phosphates from India to Vietnam: Procurement Guide - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Procurement Guide</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 6 min read</span>
                            </div>
                            <h3 class="src-card-title">Sourcing Bulk SR Chems Phosphates from India to Vietnam: A Procurement &amp; Quality Guide</h3>
                            <p class="src-card-excerpt">A practical procurement guide for Vietnamese chemical importers buying SR Chems DKP, MSP, DSP, and SHMP from Panoli, India. Covers COA checks, tropical packaging, &amp; customs documentation.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> October 22, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 4: How SR Chems Sodium Phosphates Enhance Textile Dyeing & Water Treatment in Vietnam --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="export water sodium" data-keywords="how sr chems sodium phosphates enhance textile dyeing &amp; water treatment in vietnam vietnam export discover how sr chems sodium hexametaphosphate (shmp 68%) and tsp/msp optimize textile processing, boiler scale inhibition, and industrial cleaning across vietnam's industrial zones.">
                <a href="{{ route('blog_srchems_sodium_phosphates_vietnam') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Vietnam Export</span>
                            <img src="{{ asset('assets/images/blog/vietnam-textile-water-treatment.jpg') }}"
                                 alt="How SR Chems Sodium Phosphates Enhance Textile Dyeing &amp; Water Treatment in Vietnam - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Vietnam Export</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 5 min read</span>
                            </div>
                            <h3 class="src-card-title">How SR Chems Sodium Phosphates Enhance Textile Dyeing &amp; Water Treatment in Vietnam</h3>
                            <p class="src-card-excerpt">Discover how SR Chems Sodium Hexametaphosphate (SHMP 68%) and TSP/MSP optimize textile processing, boiler scale inhibition, and industrial cleaning across Vietnam's industrial zones.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> October 22, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 5: How to Prevent Caking in Bulk Phosphate Powder Storage --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="technical" data-keywords="how to prevent caking in bulk phosphate powder storage storage &amp; logistics learn why inorganic phosphate powders cake during storage and transport, and discover actionable tips to preserve flowability in high-humidity conditions.">
                <a href="{{ route('blog_prevent_caking_phosphate_powder') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Storage &amp; Logistics</span>
                            <img src="{{ asset('assets/images/blog/grid/4.jpg') }}"
                                 alt="How to Prevent Caking in Bulk Phosphate Powder Storage - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Storage &amp; Logistics</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 4 min read</span>
                            </div>
                            <h3 class="src-card-title">How to Prevent Caking in Bulk Phosphate Powder Storage</h3>
                            <p class="src-card-excerpt">Learn why inorganic phosphate powders cake during storage and transport, and discover actionable tips to preserve flowability in high-humidity conditions.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> September 17, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 6: Role of TSP & DSP in Metal Phosphating & Surface Treatment --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="sodium technical" data-keywords="role of tsp &amp; dsp in metal phosphating &amp; surface treatment surface treatment discover how trisodium phosphate (tsp) and disodium phosphate (dsp) optimize metal phosphating, heavy-duty degreasing, and rust prevention in steel fabrication.">
                <a href="{{ route('blog_tsp_dsp_metal_phosphating') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Surface Treatment</span>
                            <img src="{{ asset('assets/images/blog/scientist-test-tubes.jpg') }}"
                                 alt="Role of TSP & DSP in Metal Phosphating & Surface Treatment - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Surface Treatment</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 5 min read</span>
                            </div>
                            <h3 class="src-card-title">Role of TSP &amp; DSP in Metal Phosphating &amp; Surface Treatment</h3>
                            <p class="src-card-excerpt">Discover how Trisodium Phosphate (TSP) and Disodium Phosphate (DSP) optimize metal phosphating, heavy-duty degreasing, and rust prevention in steel fabrication.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> September 17, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 7: Food Grade vs. Industrial Grade Phosphates: Technical Guide --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="technical" data-keywords="food grade vs. industrial grade phosphates: technical guide technical guide compare food grade (fcc) vs. technical/industrial grade phosphates. understand key differences in purity, heavy metal assays, and safety standards.">
                <a href="{{ route('blog_food_grade_vs_industrial_phosphates') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Technical Guide</span>
                            <img src="{{ asset('assets/images/blog/scientists-microscope.jpg') }}"
                                 alt="Food Grade vs Industrial Grade Phosphates - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Technical Guide</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 6 min read</span>
                            </div>
                            <h3 class="src-card-title">Food Grade vs. Industrial Grade Phosphates: Technical Guide</h3>
                            <p class="src-card-excerpt">Compare Food Grade (FCC) vs. Technical/Industrial Grade phosphates. Understand key differences in purity, heavy metal assays, and safety standards.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> September 17, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 8: Guide to Sodium Hexametaphosphate (SHMP) in Water Treatment & Cleaning --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="water sodium technical" data-keywords="guide to sodium hexametaphosphate (shmp) in water treatment &amp; cleaning water treatment learn how sodium hexametaphosphate (shmp) acts as a scale inhibitor, water softener, and dispersing agent in industrial water treatment and textile dyeing.">
                <a href="{{ route('blog_shmp_water_treatment_guide') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Water Treatment</span>
                            <img src="{{ asset('assets/images/blog/single/1.jpg') }}"
                                 alt="Sodium Hexametaphosphate (SHMP) in Water Treatment & Cleaning - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Water Treatment</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 5 min read</span>
                            </div>
                            <h3 class="src-card-title">Guide to Sodium Hexametaphosphate (SHMP) in Water Treatment &amp; Cleaning</h3>
                            <p class="src-card-excerpt">Learn how Sodium Hexametaphosphate (SHMP) acts as a scale inhibitor, water softener, and dispersing agent in industrial water treatment and textile dyeing.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> September 17, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 9: Tetra Potassium Pyrophosphate (TKPP) | Industrial Supplier --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="potassium" data-keywords="tetra potassium pyrophosphate (tkpp) | industrial supplier industrial supplier high-grade tetra potassium pyrophosphate (tkpp) powder for industrial use. excellent sequestering &amp; dispersion properties. moq 100 kg.">
                <a href="{{ route('blog_tetra_potassium_pyrophosphate_tkpp') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Industrial Supplier</span>
                            <img src="{{ asset('assets/images/blog/single/3.jpg') }}"
                                 alt="Tetra Potassium Pyrophosphate (TKPP) | Industrial Supplier - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Industrial Supplier</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 4 min read</span>
                            </div>
                            <h3 class="src-card-title">Tetra Potassium Pyrophosphate (TKPP) | Industrial Supplier</h3>
                            <p class="src-card-excerpt">High-grade Tetra Potassium Pyrophosphate (TKPP) powder for industrial use. Excellent sequestering &amp; dispersion properties. MOQ 100 kg.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> August 19, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 10: Di Potassium Phosphate (DKP) 99% Pure | Food & Industrial Grade --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="potassium technical" data-keywords="di potassium phosphate (dkp) 99% pure | food &amp; industrial grade 99% pure dkp high-purity di potassium phosphate (cas 7758-11-4) with 99% assay. ideal for food, pharma, &amp; industrial buffering.">
                <a href="{{ route('blog_di_potassium_phosphate_dkp') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">99% Pure DKP</span>
                            <img src="{{ asset('assets/images/blog/single/2.jpg') }}"
                                 alt="Di Potassium Phosphate (DKP) 99% Pure | Food & Industrial Grade - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">99% Pure DKP</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 4 min read</span>
                            </div>
                            <h3 class="src-card-title">Di Potassium Phosphate (DKP) 99% Pure | Food &amp; Industrial Grade</h3>
                            <p class="src-card-excerpt">High-purity Di Potassium Phosphate (CAS 7758-11-4) with 99% assay. Ideal for food, pharma, &amp; industrial buffering.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> August 19, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 11: Potassium Dihydrogen Phosphate (KH2PO4) | Technical Grade MKP --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="potassium" data-keywords="potassium dihydrogen phosphate (kh2po4) | technical grade mkp technical grade high-purity potassium phosphate monobasic (kh2po4) for industrial &amp; chemical applications. clear solubility and excellent buffering.">
                <a href="{{ route('blog_potassium_dihydrogen_phosphate') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Technical Grade</span>
                            <img src="{{ asset('assets/images/blog/grid/4.jpg') }}"
                                 alt="Potassium Dihydrogen Phosphate (KH2PO4) | Technical Grade MKP - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Technical Grade</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 4 min read</span>
                            </div>
                            <h3 class="src-card-title">Potassium Dihydrogen Phosphate (KH2PO4) | Technical Grade MKP</h3>
                            <p class="src-card-excerpt">High-purity Potassium Phosphate Monobasic (KH2PO4) for industrial &amp; chemical applications. Clear solubility and excellent buffering.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> August 19, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 12: Potassium Phosphate Manufacturer & Supplier | Di, Mono & Tetra Forms --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="potassium technical" data-keywords="potassium phosphate manufacturer &amp; supplier | di, mono &amp; tetra forms technical guide explore high-assay potassium phosphate compounds with clear solubility and precise ph control. suitable for pharma and industrial applications.">
                <a href="{{ route('blog_understanding_potassium_phosphate') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Technical Guide</span>
                            <img src="{{ asset('assets/images/blog/microscope-closeup.jpg') }}"
                                 alt="Potassium Phosphate Manufacturer & Supplier | Di, Mono & Tetra Forms - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Technical Guide</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 5 min read</span>
                            </div>
                            <h3 class="src-card-title">Potassium Phosphate Manufacturer &amp; Supplier | Di, Mono &amp; Tetra Forms</h3>
                            <p class="src-card-excerpt">Explore high-assay Potassium Phosphate compounds with clear solubility and precise pH control. Suitable for pharma and industrial applications.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> August 19, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 13: Buy Industrial Sodium Acid Pyrophosphate Powder (Na2H2P2O7) | S R Chemicals --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="sodium" data-keywords="buy industrial sodium acid pyrophosphate powder (na2h2p2o7) | s r chemicals industry insight premium technical grade sapp with 91% min assay &amp; clear solubility. ideal for leather treatment, oil dispersants, and stabilization.">
                <a href="{{ route('blog_sodium_phosphates_guide') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Industry Insight</span>
                            <img src="{{ asset('assets/images/blog/scientist-test-tubes.jpg') }}"
                                 alt="Buy Industrial Sodium Acid Pyrophosphate Powder (Na2H2P2O7) - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Industry Insight</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 4 min read</span>
                            </div>
                            <h3 class="src-card-title">Buy Industrial Sodium Acid Pyrophosphate Powder (Na2H2P2O7) | S R Chemicals</h3>
                            <p class="src-card-excerpt">Premium technical grade SAPP with 91% min assay &amp; clear solubility. Ideal for leather treatment, oil dispersants, and stabilization.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> July 20, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 14: Bulk Ammonium Phosphate Supplier (MAP & DAP) | S R Chemicals --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="" data-keywords="bulk ammonium phosphate supplier (map &amp; dap) | s r chemicals industry insight high-solubility ammonium phosphate for fertilizers and scientific research. reliable 50-ton monthly capacity and fast 3-day delivery.">
                <a href="{{ route('blog_ammonium_phosphate_guide') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Industry Insight</span>
                            <img src="{{ asset('assets/images/blog/scientists-microscope.jpg') }}"
                                 alt="Bulk Ammonium Phosphate Supplier (MAP & DAP) - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Industry Insight</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 5 min read</span>
                            </div>
                            <h3 class="src-card-title">Bulk Ammonium Phosphate Supplier (MAP &amp; DAP) | S R Chemicals</h3>
                            <p class="src-card-excerpt">High-solubility Ammonium Phosphate for fertilizers and scientific research. Reliable 50-ton monthly capacity and fast 3-day delivery.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> July 20, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 15: The Industrial Buyer’s Guide to Potassium Phosphate: Selecting the Right Form --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="potassium technical" data-keywords="the industrial buyer’s guide to potassium phosphate: selecting the right form industry insight source high-purity di-potassium phosphate, mono-potassium phosphate, and tkpp. get consistent batch quality, clear solubility, and fast 3-day delivery.">
                <a href="{{ route('blog_potassium_phosphate_guide') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Industry Insight</span>
                            <img src="{{ asset('assets/images/blog/grid/2.jpg') }}"
                                 alt="Potassium Phosphate Manufacturer & Bulk Supplier - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Industry Insight</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 6 min read</span>
                            </div>
                            <h3 class="src-card-title">The Industrial Buyer’s Guide to Potassium Phosphate: Selecting the Right Form</h3>
                            <p class="src-card-excerpt">Source high-purity Di-Potassium Phosphate, Mono-Potassium Phosphate, and TKPP. Get consistent batch quality, clear solubility, and fast 3-day delivery.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> July 20, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 16: Pharma & Analytical Grade Phosphate Salts Manufacturer | S R Chemicals --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="technical" data-keywords="pharma &amp; analytical grade phosphate salts manufacturer | s r chemicals industry insight discover how s r chemicals is scaling to ar, lr, bp, and ip grade phosphate salts to meet global pharmaceutical and laboratory standards.">
                <a href="{{ route('blog_pharma_grade_phosphate') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Industry Insight</span>
                            <img src="{{ asset('assets/images/blog/single/1.jpg') }}"
                                 alt="Pharma Grade Phosphate Salt Manufacturing at S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Industry Insight</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 5 min read</span>
                            </div>
                            <h3 class="src-card-title">Pharma &amp; Analytical Grade Phosphate Salts Manufacturer | S R Chemicals</h3>
                            <p class="src-card-excerpt">Discover how S R Chemicals is scaling to AR, LR, BP, and IP grade phosphate salts to meet global pharmaceutical and laboratory standards.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> June 2, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 17: High-Purity Inorganic Chemicals Manufacturer GIDC Panoli | S R Chemicals --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="export" data-keywords="high-purity inorganic chemicals manufacturer gidc panoli | s r chemicals industry insight why iso-certified phosphate salts from a trusted gidc panoli manufacturer matter for your global b2b supply chain. bulk pricing available.">
                <a href="{{ route('blog_inorganic_chemicals') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Industry Insight</span>
                            <img src="{{ asset('assets/images/blog/grid/3.jpg') }}"
                                 alt="High Purity Inorganic Chemicals Manufacturing at S R Chemicals GIDC Panoli"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Industry Insight</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 4 min read</span>
                            </div>
                            <h3 class="src-card-title">High-Purity Inorganic Chemicals Manufacturer GIDC Panoli | S R Chemicals</h3>
                            <p class="src-card-excerpt">Why ISO-certified phosphate salts from a trusted GIDC Panoli manufacturer matter for your global B2B supply chain. Bulk pricing available.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> June 9, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 18: Mono Sodium Phosphate Anhydrous vs. Crystal: Choosing the Right Form for Your Formulations --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="sodium technical" data-keywords="mono sodium phosphate anhydrous vs. crystal: choosing the right form for your formulations industry insight compare mono sodium phosphate anhydrous vs crystalline forms. key differences in caking, solubility, and applications from s.r. chemicals.">
                <a href="{{ route('blog_msp_anhydrous_vs_crystal') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Industry Insight</span>
                            <img src="{{ asset('assets/images/blog/grid/5.jpg') }}"
                                 alt="Mono Sodium Phosphate Anhydrous vs Crystal - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Industry Insight</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 5 min read</span>
                            </div>
                            <h3 class="src-card-title">Mono Sodium Phosphate Anhydrous vs. Crystal: Choosing the Right Form for Your Formulations</h3>
                            <p class="src-card-excerpt">Compare Mono Sodium Phosphate Anhydrous vs Crystalline forms. Key differences in caking, solubility, and applications from S.R. Chemicals.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> June 20, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 19: Dipotassium Phosphate Powder for Industrial Water Treatment Systems --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="water potassium" data-keywords="dipotassium phosphate powder for industrial water treatment systems industry insight discover why dipotassium phosphate powder is a critical corrosion inhibitor and ph buffer for industrial cooling towers, boiler loops, and chiller systems.">
                <a href="{{ route('blog_dipotassium_phosphate_water_treatment') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Industry Insight</span>
                            <img src="{{ asset('assets/images/blog/grid/6.jpg') }}"
                                 alt="Dipotassium Phosphate Powder for Industrial Water Treatment - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Industry Insight</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 5 min read</span>
                            </div>
                            <h3 class="src-card-title">Dipotassium Phosphate Powder for Industrial Water Treatment Systems</h3>
                            <p class="src-card-excerpt">Discover why Dipotassium Phosphate powder is a critical corrosion inhibitor and pH buffer for industrial cooling towers, boiler loops, and chiller systems.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> June 20, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 20: Optimizing Industrial Processes with High-Purity Mono Sodium Phosphate Crystals --}}
            <div class="col-12 col-md-6 col-lg-4 src-blog-col" data-categories="water sodium technical" data-keywords="optimizing industrial processes with high-purity mono sodium phosphate crystals industry insight source high-purity mono sodium phosphate (msp) crystals for industrial water treatment, metal finishing, and food processing. get predictable batch consistency.">
                <a href="{{ route('blog_msp_crystal_industrial') }}">
                    <div class="src-blog-card">
                        <div class="src-card-img">
                            <span class="src-img-badge">Industry Insight</span>
                            <img src="{{ asset('assets/images/blog/pharma-grade-phosphate.png') }}"
                                 alt="High-Purity Mono Sodium Phosphate Crystals - S R Chemicals"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/inorganic-chemicals-manufacturer.png') }}'">
                        </div>
                        <div class="src-card-content">
                            <div class="src-card-meta-row">
                                <span class="src-badge">Industry Insight</span>
                                <span class="src-read-time"><i class="bi bi-clock-history"></i> 5 min read</span>
                            </div>
                            <h3 class="src-card-title">Optimizing Industrial Processes with High-Purity Mono Sodium Phosphate Crystals</h3>
                            <p class="src-card-excerpt">Source high-purity Mono Sodium Phosphate (MSP) crystals for industrial water treatment, metal finishing, and food processing. Get predictable batch consistency.</p>
                        </div>
                        <div class="src-card-footer">
                            <span class="src-date"><i class="bi bi-calendar3"></i> July 7, 2026</span>
                            <span class="src-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

        </div>{{-- /#srcBlogGrid --}}

        {{-- Technical Inquiry & Sourcing CTA Band (Preserving Heading SEO: using div/span instead of h1-h6) --}}
        <div class="src-blog-cta-band">
            <div class="row align-items-center g-4 position-relative" style="z-index: 2;">
                <div class="col-lg-8">
                    <span class="src-cta-tag"><i class="bi bi-patch-check-fill"></i> Factory-Direct Synthesis • GIDC Panoli</span>
                    <div class="src-cta-title">Require Technical Data Sheets (TDS) or Bulk Export Pricing?</div>
                    <p class="src-cta-desc mb-lg-0">
                        Our Panoli GIDC chemical engineering laboratory provides complete Certificate of Analysis (COA), custom mesh sizing, anti-caking packaging, and competitive FOB/CIF export pricing for ports across Asia, Europe, and the Middle East.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex flex-column flex-sm-row flex-lg-column gap-2 justify-content-lg-end">
                        <a href="{{ route('contact_us') }}" class="btn btn-warning rounded-pill px-4 py-2 fw-bold text-white shadow-sm">
                            <i class="bi bi-envelope-fill me-1"></i> Request Bulk Quote
                        </a>
                        <a href="tel:+919913645555" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold">
                            <i class="bi bi-telephone-fill me-1"></i> +91 9913645555
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterBtns = document.querySelectorAll('.src-filter-btn');
    const searchInput = document.getElementById('srcBlogSearch');
    const searchClear = document.getElementById('srcSearchClear');
    const blogCards = document.querySelectorAll('.src-blog-col');
    const visibleCountEl = document.getElementById('srcVisibleCount');
    const noResultsEl = document.getElementById('srcNoResults');

    let currentFilter = 'all';
    let searchQuery = '';

    function filterCards() {
        let visibleCount = 0;
        const query = searchQuery.trim().toLowerCase();

        blogCards.forEach(card => {
            const categories = card.getAttribute('data-categories') || '';
            const keywords = card.getAttribute('data-keywords') || '';

            const matchesCategory = (currentFilter === 'all') || categories.split(' ').includes(currentFilter);
            const matchesSearch = !query || keywords.includes(query);

            if (matchesCategory && matchesSearch) {
                card.classList.remove('src-hidden');
                visibleCount++;
            } else {
                card.classList.add('src-hidden');
            }
        });

        if (visibleCountEl) visibleCountEl.textContent = visibleCount;
        if (noResultsEl) {
            noResultsEl.style.display = (visibleCount === 0) ? 'block' : 'none';
        }
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentFilter = this.getAttribute('data-filter') || 'all';
            filterCards();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            searchQuery = this.value;
            if (searchClear) {
                searchClear.style.display = searchQuery ? 'block' : 'none';
            }
            filterCards();
        });
    }

    if (searchClear) {
        searchClear.addEventListener('click', function () {
            if (searchInput) searchInput.value = '';
            searchQuery = '';
            this.style.display = 'none';
            filterCards();
            if (searchInput) searchInput.focus();
        });
    }

    window.resetBlogFilters = function () {
        if (searchInput) searchInput.value = '';
        searchQuery = '';
        if (searchClear) searchClear.style.display = 'none';
        currentFilter = 'all';
        filterBtns.forEach(b => {
            b.classList.toggle('active', b.getAttribute('data-filter') === 'all');
        });
        filterCards();
    };
});
</script>
@endpush

@endsection
