@extends('layouts.app')

@section('seo')
    <title>Thank You | S R Chemicals</title>
    <meta name="description" content="Thank you for contacting S R Chemicals. We have received your inquiry and will get back to you shortly.">
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')

<!-- ========================
    Page Hero Section
=========================== -->
<section class="src-page-hero position-relative">
    <div class="src-page-hero-bg" aria-hidden="true">
        <img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="background" loading="eager">
    </div>
    <div class="container-fluid px-lg-5 position-relative" style="z-index: 2;">
        <div class="src-breadcrumb">
            <a href="{{ route('home') }}"><i class="bi bi-house-door-fill me-1"></i> Home</a>
            <i class="bi bi-chevron-right small text-white-50"></i>
            <span class="active">Thank You</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <span class="badge bg-success text-white text-uppercase px-3 py-1 fw-bold small mb-2">
                    <i class="bi bi-check-circle-fill me-1"></i> Inquiry Received
                </span>
                <h1 class="src-page-title">Thank You</h1>
                <p class="text-white-50 mt-2 mb-0 fs-5" style="max-width: 680px;">
                    Your chemical procurement or technical inquiry has been routed to our Panoli sales &amp; engineering desk.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-inline-flex flex-column align-items-lg-end p-3 rounded-4" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px);">
                    <span class="small text-warning fw-bold text-uppercase"><i class="bi bi-clock-history"></i> Fast Response</span>
                    <span class="fw-bold text-white fs-5">Within 24 Business Hours</span>
                    <span class="small text-white-50">Batch COA &bull; FOB/CIF Shipping Quotes</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.page-hero -->

<!-- ========================
    Thank You Card Section
=========================== -->
<section class="py-5 py-lg-6 bg-light">
    <div class="container-fluid px-lg-5">
        <div class="src-thankyou-card">
            <!-- Animated Checkmark Icon -->
            <div class="src-thankyou-icon">
                <i class="bi bi-check-lg"></i>
            </div>

            <h2 class="src-thankyou-title">Thank You for Reaching Out!</h2>

            <p class="src-thankyou-text">
                We have successfully received your inquiry. Our commercial sales engineers and chemical formulation specialists will review your requirements and provide formal pricing, technical data sheets (TDS), or batch Certificate of Analysis (COA) within <strong>1–2 business days</strong>.
            </p>

            <!-- Direct Contact Helpline Strip -->
            <div class="src-thankyou-contact-strip">
                <div>
                    <i class="bi bi-telephone-fill text-primary me-2"></i>
                    <span>Direct Helpline: </span>
                    <a href="tel:+919913645555">+91 9913645555</a>
                </div>
                <div>
                    <i class="bi bi-envelope-fill text-primary me-2"></i>
                    <span>Email: </span>
                    <a href="mailto:info@srchems.com">info@srchems.com</a>
                </div>
                <div>
                    <i class="bi bi-whatsapp text-success me-2"></i>
                    <a href="https://wa.me/919913645555" target="_blank" rel="noopener noreferrer">WhatsApp Sales Desk</a>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('home') }}" class="src-btn-primary">
                    <i class="bi bi-house-door me-2"></i>
                    <span>Back to Home</span>
                </a>
                <a href="{{ route('our_products') }}" class="src-btn-outline">
                    <i class="bi bi-grid me-2"></i>
                    <span>View Our Products</span>
                </a>
                <a href="{{ route('blog') }}" class="src-btn-cta">
                    <i class="bi bi-journal-text me-2"></i>
                    <span>Read Our Blog</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
