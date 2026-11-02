@extends('layouts.layout')

@section('seo')
    <title>Ammonium Phosphate Manufacturer & Bulk Supplier | SR Chems</title>
    <meta name="description" content="High-quality Ammonium Phosphate for industrial, agricultural, and fire-retardant applications. Contact SR Chems for custom packaging options and volume pricing.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Ammonium Phosphate Manufacturer & Bulk Supplier | SR Chems">
    <meta property="og:description" content="High-quality Ammonium Phosphate for industrial, agricultural, and fire-retardant applications. Contact SR Chems for custom packaging options and volume pricing.">
    <meta property="og:url" content="https://www.srchems.com/ammonium-phosphate">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.srchems.com/assets/images/logo/logo.1.jpg">
@endsection

@section('content') 

<!-- ========================
    page title 
=========================== -->
<section class="page-title-layout2 page-title-light text-center pb-0 bg-overlay bg-parallax">
  <div class="bg-img"><img src="assets/images/" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
          <h1 class="pagetitle-heading mt-50">Ammonium Phosphate</h1>
        </div><!-- /.col-xl-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="breadcrumb-area">
      <div class="container">
        <nav>
          <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item">
                  <a href="{{route('home')}}"><i class="icon-home"></i> <span>Home</span></a>
                  <li class="breadcrumb-item active" aria-current="page">Our Products</li>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Ammonium Phosphate</li>
          </ol>
        </nav>
      </div><!-- /.container -->
    </div><!-- /.breadcrumb-area -->
</section>
<!-- /.page-title -->

<!-- ========================
  Banner Layout 3
=========================== -->
<section class="banner-layout3 py-0 mb-80 mt-0">
  <div class="top-shape"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-xl-6 banner-img d-flex">
        <div class="bg-img">
          <img src="assets/images/banners/2.jpg" alt="backgrounds">
        </div>
        <div class="banner-shape"></div>
      </div><!-- /.col-lg-6 -->
      <div class="col-12 col-xl-6 banner-content">
        <div class="banner-text">
          <div class="heading-layout2 heading-light">
            <h3 class="heading-title">Ammonium Phosphate</h3>
            <p class="heading-desc mb-40">Ammonium Phosphate is a white solid that possessing very less ammonium odor. The mentioned compound finds implementation as the best source to obtain Nitrogen and Phosphorous. Due to composition, it is widely used in the agricultural industry for making fertilizers. Keeping this aspect in view, we offer an extensive range of Ammonium Phosphate to be used for varied applications. Being highly unstable in nature, it is an ideal choice to be used for several scientific research. The offered array is highly soluble in nature.
            </p>
          </div>
          <div class="fancybox-layout2 fancybox-light">
            <div class="fancybox-item">
              <div class="fancybox-body">
                <h4 class="fancybox-title">Key Characteristics:</h4>
                <ul class="fancybox-title">
                  <li> Can be availed in white crystals or white powder </li>
                  <li> Possess density of 1800 kg per metric cube </li>
                  <li> pH level is slightly acidic that ranges between 4 to 4.5 </li>
                  <li> Extremely insoluble in acetone </li>
                </ul>
              </div><!-- /.fancybox-body -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.fancybox-layout2 -->
        </div><!-- /.banner-text -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.Banner Layout3 -->

<!-- ======================
    Blog Grid
========================= -->
<section class="blog-layout1 pb-70">
  <div class="container">
    <div class="row">
      <!-- Post Item #1 -->
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="post-item">
          <div class="post-img">
            <a href="blog-single-post.html">
              <img src="assets/images/product/di_ammonium_phosphate.png" height="300px" alt="post image" loading="lazy">
            </a>
          </div><!-- /.post-img -->
          <div class="post-body">
            <div class="post-meta d-flex align-items-center">
              <div class="post-meta-cat">
                {{-- <a href="#">Mental Health</a> --}}
              </div><!-- /.blog-meta-cat -->
              {{-- <a class="post-meta-author" href="#">Martin King</a> --}}
            </div>
            <h4 class="post-title"><a href="{{route('di_ammonium_phosphate')}}">Di Ammonium Phosphate</a></h4>
            <p class="post-desc">
              Supply Ability:50 Per Month Delivery Time:3 Days
            </p>
            <a href="{{route('contact_us')}}" class="btn btn-link">
              <i class="plus-icon">+</i>
              <span>Send Inquiry</span>
            </a>
          </div><!-- /.post-body -->
        </div><!-- /.post-item -->
      </div><!-- /.col-lg-4 -->
      <!-- Post Item #2 -->
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="post-item">
          <div class="post-img">
            <a href="blog-single-post.html">
              <img src="assets/images/product/mono_ammonium_phosphate.png" height="300px" alt="post image" loading="lazy">
            </a>
          </div><!-- /.post-img -->
          <div class="post-body">
            <div class="post-meta d-flex align-items-center">
              {{-- <a class="post-meta-author" href="#">Tony Dawny</a> --}}
            </div>
            <h4 class="post-title"><a href="{{route('monoammonium_phosphate')}}">Monoammonium Phosphate</a></h4>
            <p class="post-desc">
              Supply Ability:50 Per Month  Delivery Time:3 Days
            </p>
            <a href="{{route('contact_us')}}" class="btn btn-link">
              <i class="plus-icon">+</i>
              <span>Send Inquiry</span>
            </a>
          </div><!-- /.post-body -->
        </div><!-- /.post-item -->
      </div><!-- /.col-lg-4 -->
      <!-- Post Item #3 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.blog Grid -->



@endsection
