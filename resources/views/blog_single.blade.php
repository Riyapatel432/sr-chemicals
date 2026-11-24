@extends('layouts.app')

@section('seo')
<title>{{ $post->meta_title ?: ($post->title . ' | S R Chemicals') }}</title>
<meta name="description" content="{{ $post->meta_description ?: Str::limit(strip_tags($post->excerpt ?: $post->content), 160) }}">
<meta name="keywords" content="{{ $post->meta_keywords ?: 'SR Chemicals, phosphate chemicals, inorganic chemicals manufacturer' }}">
<meta name="robots" content="index, follow">
<meta property="og:title" content="{{ $post->og_title ?: ($post->meta_title ?: $post->title) }}">
<meta property="og:description" content="{{ $post->og_description ?: ($post->meta_description ?: $post->excerpt) }}">
<meta property="og:url" content="{{ $post->canonical_url ?: url('/blog/' . $post->slug) }}">
<meta property="og:type" content="article">
<meta property="og:image" content="{{ $post->featured_image_url }}">

@if(!empty($post->schema_markup))
{!! $post->schema_markup !!}
@else
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": {!! json_encode($post->title) !!},
  "image": {!! json_encode($post->featured_image_url) !!},
  "author": {
    "@type": "Organization",
    "name": {!! json_encode($post->author ?: 'S R Chemicals') !!}
  },
  "publisher": {
    "@type": "Organization",
    "name": "S R Chemicals",
    "logo": {
      "@type": "ImageObject",
      "url": "https://srchems.com/assets/images/logo/logo.1.jpg"
    }
  },
  "datePublished": "{{ $post->published_date ? $post->published_date->toDateString() : now()->toDateString() }}",
  "description": {!! json_encode($post->meta_description ?: $post->excerpt) !!}
}
</script>
@endif
@endsection

@section('content')
@include('partials.blog_styles')

{{-- Page Title / Hero --}}
<section class="page-title-layout2 page-title-light text-center pb-0 bg-overlay bg-parallax">
    <div class="bg-img">
        <img src="{{ $post->featured_image_url }}" alt="{{ $post->image_alt ?: $post->title }}" onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/single/1.jpg') }}'">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1">
                <h1 class="pagetitle-heading mt-50">{{ $post->title }}</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i> <span>Home</span></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($post->title, 40) }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

{{-- Main Blog Article --}}
<section class="blog-single pt-80 pb-80">
    <div class="container">
        <div class="row">

            {{-- Main Content Column --}}
            <div class="col-lg-8">

                <div class="bl-hero-img mb-30">
                    <img src="{{ $post->featured_image_url }}" alt="{{ $post->image_alt ?: $post->title }}" class="img-fluid rounded shadow-sm" onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/single/1.jpg') }}'">
                </div>

                <div class="bl-meta mb-30 d-flex flex-wrap align-items-center gap-3">
                    @if($post->published_date)
                        <span><i class="icon-calendar"></i> {{ $post->published_date->format('F d, Y') }}</span>
                    @endif
                    <span><i class="icon-user"></i> {{ $post->author ?: 'S R Chemicals' }}</span>
                    @if($post->read_time)
                        <span><i class="bi bi-clock-history"></i> {{ $post->read_time }}</span>
                    @endif
                    @if($post->category)
                        <span class="bl-badge">{{ $post->category }}</span>
                    @endif
                </div>

                @if(!empty($post->excerpt))
                    <div class="bl-excerpt mb-30 p-3 bg-light border-start border-4 border-primary rounded">
                        <p class="bl-p mb-0 fst-italic fw-500">{{ $post->excerpt }}</p>
                    </div>
                @endif

                <div class="bl-content-body">
                    {!! $post->content !!}
                </div>

                <hr class="bl-hr my-40">

                {{-- USP Cards --}}
                <div class="row mb-30">
                    <div class="col-md-6 mb-20">
                        <div class="bl-usp-card">
                            <div class="bl-usp-icon">🏢</div>
                            <h4 class="bl-usp-title">Direct Panoli GIDC Manufacturer</h4>
                            <p class="bl-usp-p">25+ years in continuous synthesis of sodium, potassium, and ammonium phosphate compounds.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-20">
                        <div class="bl-usp-card">
                            <div class="bl-usp-icon">🔬</div>
                            <h4 class="bl-usp-title">Strict Batch-Level QC Testing</h4>
                            <p class="bl-usp-p">Full in-house laboratory testing ensuring tight compliance with international industry benchmarks.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-20">
                        <div class="bl-usp-card">
                            <div class="bl-usp-icon">🏭</div>
                            <h4 class="bl-usp-title">Elite Enterprise Clientele</h4>
                            <p class="bl-usp-p">Trusted supplier to GSFC, SAIL, GNFC, ONGC, Atul Limited, and Rashtriya Chemicals &amp; Fertilizers.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-20">
                        <div class="bl-usp-card">
                            <div class="bl-usp-icon">📦</div>
                            <h4 class="bl-usp-title">Flexible Packaging Options</h4>
                            <p class="bl-usp-p">Custom packaging available to suit bulk industrial orders and specific export compliance requirements.</p>
                        </div>
                    </div>
                </div>

                {{-- Call to Action --}}
                <div class="bl-cta">
                    <h3 class="bl-cta-title">📞 Secure Your Premium Chemical Supply Chain</h3>
                    <p class="bl-cta-p">Need a custom bulk price quote, custom packaging options, or Technical Data Sheets (TDS)? Reach out to our technical sales team for a prompt response.</p>
                    <div class="bl-cta-contact">
                        <div>📧 <a href="mailto:info@srchems.com" class="bl-cta-link">info@srchems.com</a></div>
                        <div>📱 <a href="tel:+919913645555" class="bl-cta-link">+91 9913645555</a></div>
                        <div>📍 Plot No. 1917 &amp; C-1/1918, G.I.D.C., Panoli, Dist. Bharuch - 394116, Gujarat, India.</div>
                    </div>
                    <a href="{{ route('contact_us') }}" class="bl-cta-btn">Get a Bulk Quote <i class="icon-arrow-right"></i></a>
                </div>

                <div class="bl-tags mt-30">
                    <strong>Tags: </strong>
                    <a href="{{ route('sodium_phosphate') }}" class="bl-tag">Sodium Phosphate</a>
                    <a href="{{ route('potassium_phosphate') }}" class="bl-tag">Potassium Phosphate</a>
                    <a href="{{ route('ammonium_phosphate') }}" class="bl-tag">Ammonium Phosphate</a>
                    <a href="{{ route('our_products') }}" class="bl-tag">All Products</a>
                    <a href="{{ route('about') }}" class="bl-tag">About S R Chemicals</a>
                </div>

            </div><!-- /.col-lg-8 -->

            {{-- Sidebar Column --}}
            <div class="col-lg-4">

                <div class="bl-sidebar-contact mb-30">
                    <div class="bl-sc-header">Quick Contact</div>
                    <div class="bl-sc-body">
                        <div class="bl-sc-row"><i class="icon-email bl-sc-icon"></i><a href="mailto:info@srchems.com" class="bl-sc-text">info@srchems.com</a></div>
                        <div class="bl-sc-row"><i class="icon-phone bl-sc-icon"></i><a href="tel:+919913645555" class="bl-sc-text">+91 9913645555</a></div>
                        <a href="{{ route('contact_us') }}" class="bl-sc-btn">Contact Us</a>
                    </div>
                </div>

                <div class="bl-sidebar-card mb-30">
                    <div class="bl-sidebar-card-title">Our Product Range</div>
                    <ul class="bl-sidebar-list">
                        <li><a href="{{ route('sodium_phosphate') }}" class="bl-sidebar-link">Sodium Phosphate <i class="icon-arrow-right"></i></a></li>
                        <li><a href="{{ route('potassium_phosphate') }}" class="bl-sidebar-link">Potassium Phosphate <i class="icon-arrow-right"></i></a></li>
                        <li><a href="{{ route('ammonium_phosphate') }}" class="bl-sidebar-link">Ammonium Phosphate <i class="icon-arrow-right"></i></a></li>
                        <li><a href="{{ route('tetra_sodium_pyro_phosphate') }}" class="bl-sidebar-link">Tetra Sodium Pyro Phosphate <i class="icon-arrow-right"></i></a></li>
                        <li><a href="{{ route('sodium_acid_pyrophosphate') }}" class="bl-sidebar-link">Sodium Acid Pyrophosphate <i class="icon-arrow-right"></i></a></li>
                        <li><a href="{{ route('our_products') }}" class="bl-sidebar-link bl-sidebar-link-primary">View All Products <i class="icon-arrow-right"></i></a></li>
                    </ul>
                </div>

                <div class="bl-sidebar-card">
                    <div class="bl-sidebar-card-title">About S R Chemicals</div>
                    <p class="bl-sidebar-about-p">An ISO-certified Indian manufacturer with 25+ years of excellence in inorganic phosphate salts, serving pharma, industrial, and export markets since 2000.</p>
                    <a href="{{ route('about') }}" class="bl-sidebar-about-link">Learn More About Us <i class="icon-arrow-right"></i></a>
                </div>

            </div><!-- /.col-lg-4 -->

        </div>
    </div>
</section>

{{-- Related Products Section --}}
<section class="bl-related-section">
    <div class="container">
        <div class="text-center mb-40">
            <h2 class="bl-related-title">Explore Related Products</h2>
            <p class="bl-related-sub">Directly browse the phosphate salts discussed in our articles.</p>
        </div>
        <div class="row text-center">
            <div class="col-6 col-md-4 col-lg-2 mb-20"><a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}" class="bl-product-tile"><span class="bl-pt-icon">🧪</span>MSP Anhydrous</a></div>
            <div class="col-6 col-md-4 col-lg-2 mb-20"><a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}" class="bl-product-tile"><span class="bl-pt-icon">🧪</span>DSP Anhydrous</a></div>
            <div class="col-6 col-md-4 col-lg-2 mb-20"><a href="{{ route('trisodium_phosphate_anhydrous') }}" class="bl-product-tile"><span class="bl-pt-icon">🧪</span>TSP Anhydrous</a></div>
            <div class="col-6 col-md-4 col-lg-2 mb-20"><a href="{{ route('mono_potassium_phosphate') }}" class="bl-product-tile"><span class="bl-pt-icon">⚗️</span>Mono KP</a></div>
            <div class="col-6 col-md-4 col-lg-2 mb-20"><a href="{{ route('tetra_sodium_pyro_phosphate') }}" class="bl-product-tile"><span class="bl-pt-icon">⚗️</span>TSPP</a></div>
            <div class="col-6 col-md-4 col-lg-2 mb-20"><a href="{{ route('sodium_acid_pyrophosphate') }}" class="bl-product-tile"><span class="bl-pt-icon">⚗️</span>SAPP</a></div>
        </div>
    </div>
</section>

@endsection
