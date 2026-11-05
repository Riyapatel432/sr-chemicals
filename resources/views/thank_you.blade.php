@extends('layouts.app')

@section('seo')
    <meta name="description" content="Thank you for contacting S R Chemicals. We have received your inquiry and will get back to you shortly.">
    <meta name="robots" content="noindex, nofollow">
    <title>Thank You | S R Chemicals</title>
@endsection

@section('content')

<!-- ========================
    page title
=========================== -->
<section class="page-title-layout2 page-title-light text-center pb-0 bg-overlay bg-parallax">
    <div class="bg-img"><img src="{{ asset('assets/images/') }}" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
                <h1 class="pagetitle-heading mt-50">Thank You</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area">
        <div class="container">
            <nav>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}"><i class="icon-home"></i> <span>Home</span></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Thank You</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- /.page-title -->

<!-- ========================
    Thank You Section
=========================== -->
<section class="pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-sm-12 col-md-8 col-lg-6">
                <div style="background:#f7fbff; border-radius:16px; padding:60px 40px; box-shadow:0 4px 30px rgba(26,115,232,0.08);">
                    <!-- Checkmark icon -->
                    <div style="width:80px; height:80px; background:#1a73e8; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 30px;">
                        <i class="fas fa-check" style="font-size:36px; color:#fff;"></i>
                    </div>
                    <h2 style="font-size:30px; font-weight:700; color:#1a2340; margin-bottom:16px;">
                        Thank You for Reaching Out!
                    </h2>
                    <p style="font-size:16px; color:#555; line-height:1.8; margin-bottom:30px;">
                        We have received your inquiry and our team will get back to you within <strong>1–2 business days</strong>.
                        If you need immediate assistance, please call us at
                        <a href="tel:+919913645555" style="color:#1a73e8; font-weight:600;">+91 9913645555</a>.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center" style="gap:16px;">
                        <a href="{{ route('home') }}" class="btn btn-secondary btn-xhight">
                            <span>Back to Home</span> <i class="icon-arrow-right"></i>
                        </a>
                        <a href="{{ route('our_products') }}" class="btn btn-outline-secondary btn-xhight" style="border:2px solid #1a73e8; color:#1a73e8; background:transparent;">
                            <span>View Our Products</span> <i class="icon-arrow-right"></i>
                        </a>
                        <a href="{{ route('blog') }}" class="btn btn-outline-secondary btn-xhight" style="border:2px solid #e67e22; color:#e67e22; background:transparent;">
                            <span>Read Our Blog</span> <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
