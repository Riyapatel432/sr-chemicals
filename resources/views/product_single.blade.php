@extends('layouts.app')

@section('seo')
<title>{{ $product->meta_title ?: ($product->name . ' Manufacturer | SR Chems') }}</title>
<meta name="description" content="{{ $product->meta_description ?: ($product->excerpt ?: ($product->name . ' bulk manufacturer and supplier from S R Chemicals.')) }}">
<meta name="keywords" content="{{ $product->meta_keywords ?: ($product->name . ', ' . $product->category . ', inorganic chemicals, chemical supplier India') }}">
<meta name="robots" content="index, follow">
<meta property="og:title" content="{{ $product->og_title ?: ($product->meta_title ?: $product->name) }}">
<meta property="og:description" content="{{ $product->og_description ?: ($product->meta_description ?: $product->excerpt) }}">
<meta property="og:url" content="{{ $product->canonical_url ?: url('/' . $product->slug) }}">
<meta property="og:type" content="product">
<meta property="og:image" content="{{ $product->featured_image_url }}">

@if(!empty($product->schema_markup))
{!! $product->schema_markup !!}
@else
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": {!! json_encode($product->name) !!},
  "image": {!! json_encode($product->featured_image_url) !!},
  "description": {!! json_encode($product->meta_description ?: $product->excerpt) !!},
  "brand": {
    "@type": "Brand",
    "name": "S R Chemicals"
  },
  "manufacturer": {
    "@type": "Organization",
    "name": "S R Chemicals",
    "url": "https://srchems.com"
  },
  "category": {!! json_encode($product->category ?: 'Inorganic Phosphate Chemicals') !!}
}
</script>
@endif
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
            <a href="{{ route('our_products') }}">Our Products</a>
            @if($product->category)
                <i class="bi bi-chevron-right small text-white-50"></i>
                <span>{{ $product->category }}</span>
            @endif
            <i class="bi bi-chevron-right small text-white-50"></i>
            <span class="active">{{ $product->name }}</span>
        </div>
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                @if($product->hero_tag)
                    <div class="src-hero-tag mb-3">
                        <i class="bi bi-shield-check"></i> {{ $product->hero_tag }}
                    </div>
                @endif
                <h1 class="src-page-title">{{ $product->name }}</h1>
                <p class="text-white-50 mt-3 mb-0 fs-5" style="max-width: 720px;">
                    {{ $product->excerpt ?: 'Manufacturer and bulk exporter of high-purity inorganic phosphate salts for industrial processing, water treatment, and specialized compounding.' }}
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact_us') }}" class="src-btn-cta">
                    <span>Send Inquiry</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========================
    Product Overview & Technical Details
=========================== -->
<section class="src-product-overview py-5">
    <div class="container-fluid px-lg-5">
        <div class="row g-5">
            {{-- Left Column: Details & Tables --}}
            <div class="col-12 col-xl-8">
                
                <div class="card p-4 border-0 shadow-sm mb-4">
                    <h2 class="h4 fw-bold text-dark mb-3">Product Overview</h2>
                    <div class="text-secondary leading-relaxed mb-4">
                        @if($product->description)
                            {!! $product->description !!}
                        @else
                            <p>{{ $product->excerpt }}</p>
                        @endif
                    </div>

                    {{-- Technical Parameters Quick Grid --}}
                    <h3 class="h5 fw-bold text-dark mb-3">Technical Specifications</h3>
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 35%;">Parameter</th>
                                    <th>Specification / Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($product->chemical_name)
                                    <tr>
                                        <td class="fw-semibold text-secondary">Chemical Name</td>
                                        <td class="fw-bold text-dark">{{ $product->chemical_name }}</td>
                                    </tr>
                                @endif
                                @if($product->cas_number)
                                    <tr>
                                        <td class="fw-semibold text-secondary">CAS Registry No.</td>
                                        <td class="font-monospace text-primary fw-bold">{{ $product->cas_number }}</td>
                                    </tr>
                                @endif
                                @if($product->chemical_formula)
                                    <tr>
                                        <td class="fw-semibold text-secondary">Chemical Formula</td>
                                        <td class="fw-bold">{{ $product->chemical_formula }}</td>
                                    </tr>
                                @endif
                                @if($product->grade)
                                    <tr>
                                        <td class="fw-semibold text-secondary">Commercial Grade</td>
                                        <td>{{ $product->grade }}</td>
                                    </tr>
                                @endif
                                @if($product->packaging)
                                    <tr>
                                        <td class="fw-semibold text-secondary">Standard Packaging</td>
                                        <td>{{ $product->packaging }}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    @if(!empty($product->specifications))
                        <div class="mb-4">
                            {!! $product->specifications !!}
                        </div>
                    @endif

                    @if(!empty($product->applications))
                        <h3 class="h5 fw-bold text-dark mb-3">Industrial &amp; Commercial Applications</h3>
                        <div class="p-3 bg-light rounded border mb-4">
                            <p class="mb-0 text-secondary">{{ $product->applications }}</p>
                        </div>
                    @endif

                    {{-- Bulk Quote CTA Box --}}
                    <div class="p-4 rounded-3 text-white" style="background: linear-gradient(135deg, #0c1e3d 0%, #142a52 100%);">
                        <div class="row align-items-center">
                            <div class="col-md-8 mb-3 mb-md-0">
                                <h4 class="fw-bold text-white mb-1">Looking for Bulk Procurement or TDS/MSDS?</h4>
                                <p class="text-white-50 small mb-0">Direct manufacturer supply from GIDC Panoli with certificate of analysis (COA) for every shipment.</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <a href="{{ route('contact_us') }}" class="btn btn-warning fw-bold px-4 py-2">
                                    Request Quote &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Right Column: Sidebar Inquiry & Product Info --}}
            <div class="col-12 col-xl-4">
                <div class="card p-4 border-0 shadow-sm mb-4" style="position: sticky; top: 100px; z-index: 20; max-height: calc(100vh - 120px); overflow-y: auto;">
                    <div class="text-center mb-4">
                        <img src="{{ $product->featured_image_url }}" alt="{{ $product->image_alt ?: $product->name }}" class="img-fluid rounded border shadow-sm" style="max-height: 220px;" onerror="this.onerror=null;this.src='{{ asset('assets/images/logo/logo.1.jpg') }}'">
                    </div>

                    <div class="border-top pt-3 mb-4">
                        <h5 class="fw-bold mb-3">Direct Technical Sales</h5>
                        <div class="d-flex align-items-center gap-2 mb-2 text-secondary small">
                            <i class="bi bi-envelope-fill text-primary"></i>
                            <a href="mailto:info@srchems.com" class="text-decoration-none text-secondary">info@srchems.com</a>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3 text-secondary small">
                            <i class="bi bi-telephone-fill text-primary"></i>
                            <a href="tel:+919913645555" class="text-decoration-none text-secondary">+91 9913645555</a>
                        </div>
                        <a href="{{ route('contact_us') }}" class="btn btn-primary w-100 fw-semibold">
                            Inquire for {{ $product->name }}
                        </a>
                    </div>

                    @php
                        $sameCategoryProducts = \App\Models\Product::where('category', $product->category)
                            ->where('id', '!=', $product->id)
                            ->where('is_category', false)
                            ->where('status', 'published')
                            ->take(8)
                            ->get();
                    @endphp

                    @if($sameCategoryProducts->isNotEmpty())
                    <div class="border-top pt-3 mb-3">
                        <h6 class="fw-bold mb-2"><i class="bi bi-grid-fill text-primary me-1"></i> More in {{ $product->category }}</h6>
                        <ul class="list-unstyled mb-0 small">
                            @foreach($sameCategoryProducts as $scp)
                                <li class="mb-2">
                                    <a href="{{ url('/' . $scp->slug) }}" class="text-decoration-none text-secondary d-flex align-items-center justify-content-between py-1">
                                        <span>{{ $scp->name }}</span>
                                        <i class="bi bi-chevron-right text-muted" style="font-size: 10px;"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="border-top pt-3">
                        <h6 class="fw-bold mb-2">Our Product Series</h6>
                        <ul class="list-unstyled mb-0 small">
                            <li class="mb-2"><a href="{{ route('sodium_phosphate') }}" class="text-decoration-none text-secondary d-flex align-items-center justify-content-between"><span>Sodium Phosphates</span> <i class="bi bi-chevron-right text-muted"></i></a></li>
                            <li class="mb-2"><a href="{{ route('potassium_phosphate') }}" class="text-decoration-none text-secondary d-flex align-items-center justify-content-between"><span>Potassium Phosphates</span> <i class="bi bi-chevron-right text-muted"></i></a></li>
                            <li class="mb-2"><a href="{{ route('ammonium_phosphate') }}" class="text-decoration-none text-secondary d-flex align-items-center justify-content-between"><span>Ammonium Phosphates</span> <i class="bi bi-chevron-right text-muted"></i></a></li>
                            @php
                                $sidebarOtherCats = \App\Models\Product::whereNotNull('category')
                                    ->whereNotIn('category', ['Sodium Phosphate', 'Potassium Phosphate', 'Ammonium Phosphate'])
                                    ->where('status', 'published')
                                    ->distinct('category')
                                    ->pluck('category');
                            @endphp
                            @foreach($sidebarOtherCats as $soc)
                                <li class="mb-2"><a href="{{ route('our_products') }}" class="text-decoration-none text-secondary d-flex align-items-center justify-content-between"><span>{{ $soc }}</span> <i class="bi bi-chevron-right text-muted"></i></a></li>
                            @endforeach
                            <li><a href="{{ route('our_products') }}" class="text-decoration-none text-primary fw-bold d-flex align-items-center justify-content-between"><span>View Complete Catalog</span> <i class="bi bi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
