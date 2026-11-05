@extends('layouts.app')

@section('seo')
    <title>Contact SR Chems | Bulk Chemical Quotes & Support</title>
    <meta name="description" content="Get in touch with the chemical manufacturing experts at SR Chems. Contact us today for custom formulation requests, pricing sheets, and bulk shipping options.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Contact SR Chems | Bulk Chemical Quotes & Support">
    <meta property="og:description" content="Get in touch with the chemical manufacturing experts at SR Chems. Contact us today for custom formulation requests, pricing sheets, and bulk shipping options.">
    <meta property="og:url" content="https://www.srchems.com/contact-us">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.srchems.com/assets/images/logo/logo.1.jpg">
@endsection

@section('content')

<style>
/* =====================================================
   S R CHEMICALS — Modern B2B Contact Page Redesign
   Panoli GIDC, Bharuch, Gujarat, India
   ===================================================== */

/* Hero Section */
.src-contact-hero {
    position: relative;
    background: linear-gradient(135deg, #07101e 0%, #0c1e3d 60%, #142a52 100%);
    padding: 72px 0 54px;
    overflow: hidden;
    color: #ffffff;
}
.src-contact-hero-bg {
    position: absolute;
    inset: 0;
    z-index: 1;
    overflow: hidden;
    opacity: 0.22;
}
.src-contact-hero-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.85) contrast(1.1);
}
.src-contact-hero .container-fluid {
    position: relative;
    z-index: 2;
}
.src-contact-hero .src-breadcrumb {
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
.src-contact-hero .src-breadcrumb a {
    color: #cbd5e1;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s ease;
}
.src-contact-hero .src-breadcrumb a:hover {
    color: #ffffff;
}
.src-contact-hero .src-breadcrumb span.active {
    color: #e8792a;
    font-weight: 600;
}
.src-contact-hero h1 {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    font-size: clamp(28px, 4vw, 44px);
    font-weight: 800;
    color: #ffffff;
    line-height: 1.25;
    letter-spacing: -0.02em;
    margin-bottom: 12px;
}

/* Quick Contact Info Strip */
.src-contact-strip-section {
    background-color: #ffffff;
    padding: 36px 0 20px;
    border-bottom: 1px solid #e2e8f0;
}
.src-contact-info-tile {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 24px 20px;
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
    box-shadow: 0 4px 16px rgba(12, 30, 61, 0.04);
}
.src-contact-info-tile:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 32px rgba(12, 30, 61, 0.1);
    border-color: #cbd5e1;
}
.src-tile-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    flex-shrink: 0;
}
.src-tile-icon.blue { background: #e8f0fd; color: #1a4fa0; }
.src-tile-icon.amber { background: #fff1e7; color: #e8792a; }
.src-tile-icon.teal { background: #e6f7f5; color: #00a896; }
.src-tile-icon.dark { background: #0c1e3d; color: #ffffff; }

.src-tile-label {
    font-size: 11.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #64748b;
    margin-bottom: 4px;
}
.src-tile-heading {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #0c1e3d;
    margin-bottom: 8px;
}
.src-tile-desc {
    font-size: 13.5px;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 14px;
    flex-grow: 1;
}
.src-tile-link {
    font-size: 13px;
    font-weight: 700;
    color: #1a4fa0;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: gap 0.2s ease, color 0.2s ease;
}
.src-tile-link:hover {
    gap: 8px;
    color: #e8792a;
}

/* Main Content & Form Section */
.src-contact-main-section {
    background-color: #f8fafc;
    padding: 56px 0 80px;
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
}

/* Form Card */
.src-contact-form-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(12, 30, 61, 0.06);
}
.src-form-banner-top {
    position: relative;
    height: 110px;
    overflow: hidden;
    background: #0c1e3d;
}
.src-form-banner-top img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.35;
    filter: brightness(0.9) contrast(1.1);
}
.src-form-banner-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(7, 16, 30, 0.88) 0%, rgba(20, 42, 82, 0.78) 100%);
    display: flex;
    align-items: center;
    padding: 0 32px;
}
.src-form-body {
    padding: 32px 36px 40px;
}
.contact-panel-title {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    font-size: 22px;
    font-weight: 800;
    color: #0c1e3d;
    letter-spacing: -0.01em;
    margin-bottom: 6px;
}
.contact-panel-desc {
    font-size: 14.5px;
    color: #64748b;
    margin-bottom: 24px;
}

/* Form Inputs */
.src-form-label {
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 6px;
}
.src-input-control {
    width: 100%;
    background: #f8fafc;
    border: 1px solid #cbd5e1;
    border-radius: 10px;
    padding: 12px 16px;
    font-size: 14px;
    color: #0c1e3d;
    transition: all 0.2s ease;
}
.src-input-control:focus {
    background: #ffffff;
    border-color: #1a4fa0;
    outline: none;
    box-shadow: 0 0 0 3px rgba(26, 79, 160, 0.15);
}
textarea.src-input-control {
    min-height: 120px;
    resize: vertical;
}

/* Trust / Capabilities Side Card */
.src-trust-side-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 32px;
    box-shadow: 0 8px 30px rgba(12, 30, 61, 0.06);
    height: 100%;
    display: flex;
    flex-direction: column;
}
.src-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #e8f0fd;
    color: #1a4fa0;
    font-size: 11.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 5px 14px;
    border-radius: 50px;
    margin-bottom: 16px;
    border: 1px solid #cfe0fc;
}
.src-side-title {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 20px;
    font-weight: 800;
    color: #0c1e3d;
    line-height: 1.35;
    margin-bottom: 14px;
}
.src-side-desc {
    font-size: 14px;
    color: #475569;
    line-height: 1.7;
    margin-bottom: 24px;
}
.src-capability-item {
    display: flex;
    gap: 14px;
    padding: 14px 0;
    border-top: 1px solid #f1f5f9;
}
.src-cap-icon {
    width: 38px;
    height: 38px;
    border-radius: 8px;
    background: #f1f5f9;
    color: #1a4fa0;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}
.src-cap-title {
    font-size: 14px;
    font-weight: 700;
    color: #0c1e3d;
    margin-bottom: 2px;
}
.src-cap-text {
    font-size: 12.5px;
    color: #64748b;
    line-height: 1.5;
    margin: 0;
}

/* Map Section with Floating Office Card */
.src-map-section {
    position: relative;
    background: #0c1e3d;
    overflow: hidden;
}
.src-map-frame {
    width: 100%;
    height: 520px;
    border: none;
    display: block;
    filter: contrast(1.02);
}
.src-map-floating-panel {
    position: absolute;
    top: 40px;
    right: 5%;
    width: 380px;
    max-width: 90%;
    background: #ffffff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 16px 40px rgba(12, 30, 61, 0.22);
    border: 1px solid rgba(255, 255, 255, 0.2);
    z-index: 10;
}
.src-map-floating-header {
    background: linear-gradient(135deg, #07101e 0%, #0c1e3d 60%, #142a52 100%);
    padding: 20px 24px;
    border-bottom: 3px solid #e8792a;
}
.src-map-floating-header .panel-title {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 17px;
    font-weight: 700;
    color: #ffffff;
}
.src-map-floating-body {
    padding: 24px;
}
.src-office-row {
    display: flex;
    gap: 12px;
    margin-bottom: 16px;
    font-size: 13.5px;
}
.src-office-icon {
    width: 32px;
    height: 32px;
    background: #e8f0fd;
    color: #1a4fa0;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
}
.src-office-text {
    color: #334155;
    line-height: 1.55;
}
.src-office-text strong {
    color: #0c1e3d;
    display: block;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 2px;
}
.src-office-text a {
    color: #1a4fa0;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.2s;
}
.src-office-text a:hover {
    color: #e8792a;
}

@media (max-width: 991px) {
    .src-contact-hero { padding: 56px 0 42px; }
    .src-contact-main-section { padding: 42px 0 60px; }
    .src-map-floating-panel {
        position: static;
        width: 100%;
        max-width: 100%;
        margin-top: 0;
        border-radius: 0;
        box-shadow: none;
    }
    .src-map-frame { height: 380px; }
}
@media (max-width: 575px) {
    .src-contact-hero { padding: 46px 0 36px; }
    .src-form-body { padding: 24px 20px; }
    .src-trust-side-card { padding: 24px 20px; }
}
</style>

{{-- Page Hero Section (Headings SEO Lock: [h1] Contact Us) --}}
<section class="src-contact-hero">
    <div class="src-contact-hero-bg" aria-hidden="true">
        <img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="background" loading="eager">
    </div>
    <div class="container-fluid px-lg-5 position-relative" style="z-index: 2;">
        <div class="src-breadcrumb">
            <a href="{{ route('home') }}"><i class="bi bi-house-door-fill me-1"></i> Home</a>
            <i class="bi bi-chevron-right small text-white-50"></i>
            <span class="active">Contact Us</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <span class="badge bg-primary text-white text-uppercase px-3 py-1 fw-bold small mb-2">
                    <i class="bi bi-patch-check-fill me-1"></i> ISO 9001:2008 Certified Chemical Manufacturer
                </span>
                <h1 class="src-page-title">Contact Us</h1>
                <p class="text-white-50 fs-5 mt-2 mb-0" style="max-width: 720px;">
                    Direct manufacturer contact for bulk industrial phosphate inquiries, technical data sheets (TDS), certificates of analysis (COA), and worldwide container exports.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-inline-flex flex-column align-items-lg-end p-3 rounded-4" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px);">
                    <span class="small text-warning fw-bold text-uppercase"><i class="bi bi-geo-alt-fill"></i> Manufacturing Plant</span>
                    <span class="fw-bold text-white fs-5">Panoli GIDC • Bharuch, Gujarat</span>
                    <span class="small text-white-50">Rapid Export Fulfillment • Ports of Hazira &amp; Nhava Sheva</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Quick Contact Info Strip --}}
<section class="src-contact-strip-section">
    <div class="container-fluid px-lg-5">
        <div class="row g-4">
            {{-- Factory & Synthesis Facility --}}
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="src-contact-info-tile">
                    <div class="src-tile-icon dark"><i class="bi bi-buildings"></i></div>
                    <span class="src-tile-label">Synthesis Plant</span>
                    <div class="src-tile-heading">Factory &amp; Works</div>
                    <div class="src-tile-desc">Plot No. 1917 &amp; C-1/1918, G.I.D.C., Panoli, Dist. Bharuch - 394116, Gujarat, India.</div>
                    <a href="https://maps.google.com/?q=S.R.+Chemicals+Panoli" target="_blank" rel="noopener" class="src-tile-link">Get Directions <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            {{-- Direct Technical & Sales Line --}}
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="src-contact-info-tile">
                    <div class="src-tile-icon amber"><i class="bi bi-telephone-inbound-fill"></i></div>
                    <span class="src-tile-label">Direct Sales Line</span>
                    <div class="src-tile-heading">Telephone &amp; WhatsApp</div>
                    <div class="src-tile-desc">+91 9913645555<br><span class="small text-muted">Mon – Sat: 9:00 AM – 7:00 PM IST</span></div>
                    <a href="tel:+919913645555" class="src-tile-link">Call Sales Direct <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            {{-- Official Email & COA Inquiries --}}
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="src-contact-info-tile">
                    <div class="src-tile-icon blue"><i class="bi bi-envelope-check-fill"></i></div>
                    <span class="src-tile-label">Official Inquiries</span>
                    <div class="src-tile-heading">Email &amp; Quotations</div>
                    <div class="src-tile-desc">info@srchems.com<br><span class="small text-muted">Typical response within 24 business hours</span></div>
                    <a href="mailto:info@srchems.com" class="src-tile-link">Send Email <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            {{-- Global Export Hubs --}}
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="src-contact-info-tile">
                    <div class="src-tile-icon teal"><i class="bi bi-globe-americas"></i></div>
                    <span class="src-tile-label">Global Trade Desk</span>
                    <div class="src-tile-heading">Export Divisions</div>
                    <div class="src-tile-desc">Dedicated logistics and regulatory support for Vietnam, Thailand, GCC, and Europe.</div>
                    <a href="{{ route('chemical_exporter_supplier_vietnam') }}" class="src-tile-link">View Export Hubs <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Main Content Section: Form & Manufacturing Capabilities --}}
<section class="src-contact-main-section">
    <div class="container-fluid px-lg-5">
        <div class="row g-5 align-items-stretch">

            {{-- Left Column: Inquiry Form Card --}}
            <div class="col-lg-7">
                <div class="src-contact-form-card">
                    <div class="src-form-banner-top">
                        <img src="{{ asset('assets/images/banners/6.jpg') }}" alt="banner">
                        <div class="src-form-banner-overlay">
                            <div>
                                <span class="badge bg-warning text-dark text-uppercase px-3 py-1 fw-bold small mb-1">Direct Factory Pricing</span>
                                <div class="text-white fs-5 fw-bold">Request a Bulk Quote or Technical Data Sheet</div>
                            </div>
                        </div>
                    </div>
                    <div class="src-form-body">
                        {{-- SEO Headings Lock: [h4] SR CHEMICALS --}}
                        <h4 class="contact-panel-title">SR CHEMICALS</h4>
                        <p class="contact-panel-desc mb-30">We Are Here For You</p>

                        @include('flash_data')

                        <form action="{{ route('sendmail') }}" method="post" class="contact-page__form contact-form-validated" novalidate="novalidate">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="src-form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="src-input-control" placeholder="Enter your full name" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="src-form-label">Business Email <span class="text-danger">*</span></label>
                                    <input type="email" id="email" class="src-input-control" placeholder="company@domain.com" name="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="location" class="src-form-label">Requirement Details / Chemical Grade <span class="text-danger">*</span></label>
                                    <textarea id="location" class="src-input-control" placeholder="Specify products (e.g. DKP, SHMP, MSP), grade (Technical/Pure), estimated volume, and destination port..." name="msg" required rows="4"></textarea>
                                </div>
                                <div class="col-12 pt-2">
                                    <button type="submit" class="btn btn-warning w-100 py-3 fw-bold text-white rounded-pill shadow-sm" style="background: linear-gradient(135deg, #e8792a 0%, #f97316 100%); border: none;">
                                        <span>Send Inquiry</span> <i class="bi bi-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Right Column: Factory Capabilities & B2B Assurance --}}
            <div class="col-lg-5">
                <div class="src-trust-side-card">
                    <span class="src-badge-pill"><i class="bi bi-shield-check"></i> Manufacturer Assurance</span>
                    <div class="src-side-title">Direct Chemical Synthesis from GIDC Panoli</div>
                    <p class="src-side-desc">
                        When you contact S R Chemicals, you speak directly with chemical synthesis engineers and export coordinators at our manufacturing facility in Gujarat, India.
                    </p>

                    <div class="src-capability-item">
                        <div class="src-cap-icon"><i class="bi bi-box-seam-fill"></i></div>
                        <div>
                            <div class="src-cap-title">Export-Grade Protective Packaging</div>
                            <p class="src-cap-text">25 kg &amp; 50 kg HDPE bags with moisture-proof inner liners, jumbo bags, and heat-treated export pallets.</p>
                        </div>
                    </div>

                    <div class="src-capability-item">
                        <div class="src-cap-icon"><i class="bi bi-flask-fill"></i></div>
                        <div>
                            <div class="src-cap-title">COA &amp; Quality Specifications</div>
                            <p class="src-cap-text">Every shipment is backed by a batch-specific Certificate of Analysis verifying purity, pH, assay, and trace limits.</p>
                        </div>
                    </div>

                    <div class="src-capability-item">
                        <div class="src-cap-icon"><i class="bi bi-speedometer2"></i></div>
                        <div>
                            <div class="src-cap-title">Reliable Monthly Capacity</div>
                            <p class="src-cap-text">Consistent production capacity ensures dependable order fulfillment for high-demand processing plants.</p>
                        </div>
                    </div>

                    <div class="src-capability-item border-bottom-0 pb-0">
                        <div class="src-cap-icon"><i class="bi bi-truck"></i></div>
                        <div>
                            <div class="src-cap-title">Proximity to Western Seaports</div>
                            <p class="src-cap-text">Short transit to Hazira (Surat) and Nhava Sheva (JNPT Mumbai) seaports for fast container loading.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Google Map & Office Details Section (Headings SEO Lock: [h3] Office Details) --}}
<section class="src-map-section map py-0">
    <iframe class="src-map-frame"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.287634183214!2d72.98759537595065!3d21.574692768802812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0248329c77055%3A0x26bd51628f483af2!2sS.R.Chemicals!5e0!3m2!1sen!2sin!4v1684489446414!5m2!1sen!2sin"
        title="S R Chemicals Panoli GIDC Location Map"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="src-map-floating-panel">
        <div class="src-map-floating-header">
            {{-- SEO Headings Lock: [h3] Office Details --}}
            <h3 class="panel-title color-white mb-0">Office Details</h3>
        </div>
        <div class="src-map-floating-body">
            <div class="src-office-row">
                <div class="src-office-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div class="src-office-text">
                    <strong>Registered Works &amp; Plant</strong>
                    Plot No. 1917 &amp; C-1/1918, G.I.D.C., Panoli, Dist.: Bharuch, Panoli - 394116, Gujarat, India
                </div>
            </div>
            <div class="src-office-row">
                <div class="src-office-icon"><i class="bi bi-telephone-fill"></i></div>
                <div class="src-office-text">
                    <strong>Telephone / WhatsApp</strong>
                    <a href="tel:+919913645555">+91 9913645555</a>
                </div>
            </div>
            <div class="src-office-row">
                <div class="src-office-icon"><i class="bi bi-envelope-fill"></i></div>
                <div class="src-office-text">
                    <strong>Direct Email</strong>
                    <a href="mailto:info@srchems.com">info@srchems.com</a>
                </div>
            </div>
            <div class="src-office-row">
                <div class="src-office-icon"><i class="bi bi-printer-fill"></i></div>
                <div class="src-office-text">
                    <strong>Fax Number</strong>
                    +91-2646-272366
                </div>
            </div>
            <div class="pt-2">
                <a href="https://maps.google.com/?q=S.R.+Chemicals+Panoli" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm w-100 rounded-pill fw-bold">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Open in Google Maps
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
