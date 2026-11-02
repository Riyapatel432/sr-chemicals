@extends('layouts.layout')

@section('seo')
    <title>Industrial & Food-Grade Phosphate Product List | SR Chems</title>
    <meta name="description" content="Browse our extensive catalog of high-purity chemical compounds, including sodium, potassium, and ammonium phosphates. Download technical data sheets online.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Industrial & Food-Grade Phosphate Product List | SR Chems">
    <meta property="og:description" content="Browse our extensive catalog of high-purity chemical compounds, including sodium, potassium, and ammonium phosphates. Download technical data sheets online.">
    <meta property="og:url" content="https://www.srchems.com/our-products">
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
                    <h1 class="pagetitle-heading mt-50">Our Products</h1>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="breadcrumb-area">
            <div class="container">
            <nav>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('home')}}"><i class="icon-home"></i> <span>Home</span></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                </ol>
            </nav>
        </div><!-- /.container -->
    </div><!-- /.breadcrumb-area -->
</section>
  <!-- /.page-title -->

<!-- ======================
    Showroom
========================= -->
<section class="blog-layout1 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading-layout2 text-center mb-50">
                    <h3 class="heading-title">Showroom</h3>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <!-- Post Item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post-img">
                        <a href="{{route('di_sodium_phosphate')}}">
                        <img src="assets/images/product/di_ sodium_phosphate.png" height="315px" alt="post image" width="250px" loading="lazy">
                        </a>
                </div><!-- /.post-img -->
                <div class="post-body">
                    <div class="post-meta d-flex align-items-center">
                        <div class="post-meta-cat">
                            <a href="{{route('di_sodium_phosphate')}}">Sodium Phosphate</a>
                        </div><!-- /.blog-meta-cat -->
                    </div>
                    <p class="post-desc">Sodium Phosphate comes in different forms and we provide all of them under one roof at highly competitive prices. Moreover, all these compounds are unmatched in quality as these have been carefully prepared under the supervision of professionals to obtain the desired results.
                    </p>
                    <a href="{{route('di_sodium_phosphate')}}" class="btn btn-link">
                        <i class="plus-icon">+</i>
                        <span>Read More</span>
                    </a>
                </div><!-- /.post-body -->
                </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Post Item #2 -->    
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post-img">
                        <a href="{{route('potassium_phosphate')}}">
                        <img src="assets/images/product/di_potassium_phosphate.png" height="330px" alt="post image" width="250px" loading="lazy">
                        </a>
                </div><!-- /.post-img -->
                <div class="post-body">
                    <div class="post-meta d-flex align-items-center">
                        <div class="post-meta-cat">
                            <a href="{{route('potassium_phosphate')}}">Potassium Phosphate</a>
                        </div><!-- /.blog-meta-cat -->
                    </div>
                    <p class="post-desc">Are you afraid of buying chemical compounds online? If yes, then worry no more. Allying with S. R. Chemicals provide you the relief of buying Potassium Phosphate and its different forms of unmatched quality at the prices that fit within the budgets of all customers.
                    </p>
                    <a href="{{route('potassium_phosphate')}}" class="btn btn-link">
                        <i class="plus-icon">+</i>
                        <span>Read More</span>
                    </a>
                </div><!-- /.post-body -->
                </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->          
            <!-- Post Item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post-img">
                        <a href="{{route('ammonium_phosphate')}}">
                        <img src="assets/images/product/di_ammonium_phosphate.png" height="330px" alt="post image" width="250px" loading="lazy">
                        </a>
                </div><!-- /.post-img -->
                <div class="post-body">
                    <div class="post-meta d-flex align-items-center">
                        <div class="post-meta-cat">
                            <a href="{{route('ammonium_phosphate')}}">Ammonium Phosphate</a>
                        </div><!-- /.blog-meta-cat -->
                    </div>
                    <p class="post-desc">If you are looking for a good quality Ammonium Phosphate, then buy the same at the best prices from us by exploring our range. The chemical compounds provided under this category have been prepared after conducting a rigorous research.
                    </p>
                    <a href="{{route('ammonium_phosphate')}}" class="btn btn-link">
                        <i class="plus-icon">+</i>
                        <span>Read More</span>
                    </a>
                </div><!-- /.post-body -->
                </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
        <div class="col-12 text-center">
        <a href="{{route('our_products')}}" class="btn btn-link btn-primary">
            <span>View All Products</span>
            <i class="icon-arrow-right"></i>
        </a>
        </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.Showroom-->

@endsection