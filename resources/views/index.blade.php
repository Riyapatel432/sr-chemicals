@extends('layouts.layout')

@section('seo')
    <title>Phosphate Chemical Manufacturer & Bulk Supplier | Industrial Grade Inorganic Salts Exporter | SR Chems</title>
    <meta name="description" content="Leading manufacturer and global supplier of high-purity industrial and food-grade phosphate chemicals. Request a quote for premium bulk chemical orders today.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Phosphate Chemical Manufacturer & Bulk Supplier | SR Chems">
    <meta property="og:description" content="Leading manufacturer and global supplier of high-purity industrial and food-grade phosphate chemicals. Request a quote for premium bulk chemical orders today.">
    <meta property="og:url" content="https://www.srchems.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.srchems.com/assets/images/logo/logo.1.jpg">
@endsection

@section('content')    
    
<!-- ============================
    Slider
============================== -->
<section class="slider">
    <div class="slick-carousel carousel-dots-light m-slides-0"
    data-slick='{"slidesToShow": 1,"autoplay": true, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item bg-overlay align-v-h">
            <div class="bg-img"><img src="assets/images/sliders/s1.png" alt="slider img">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="slide-content">
                    <h1 class="slide-title" style="font-size: 100px;">Sodium Phosphate</h1>
                    <div class="d-flex flex-wrap align-items-center">
                      <a href="{{route('our_products')}}" class="btn btn-white btn-outlined">
                        <span>Our Products</span>
                        <i class="icon-arrow-right"></i>
                      </a>
                    </div>
                  </div><!-- /.slide-content -->
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->        
    </div><!-- /.slide-item -->
    <div class="slide-item bg-overlay align-v-h">
        <div class="bg-img"><img src="assets/images/sliders/s2.png" alt="slide img"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="slide-content">
                        <h1 class="slide-title" style="font-size: 100px;"> Ammonium phosphate </h1>
                        <div class="d-flex flex-wrap align-items-center">
                          <a href="{{route('our_products')}}" class="btn btn-white btn-outlined">
                            <span>Our Products</span>
                            <i class="icon-arrow-right"></i>
                          </a>
                        </div>
                    </div><!-- /.slide-content -->
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.slide-item -->
    <div class="slide-item bg-overlay align-v-h">
        <div class="bg-img"><img src="assets/images/sliders/s3.png" alt="slide img"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="slide-content">
                        <h1 class="slide-title" style="font-size: 100px;"> Potassium Phosphate</h1>
                        <div class="d-flex flex-wrap align-items-center">
                            <a href="{{route('our_products')}}" class="btn btn-white btn-outlined">
                                <span>Our Products</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- /.slide-content -->
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.slide-item -->
</div><!-- /.carousel -->
</section><!-- /.slider -->

<!-- ========================
    Services Layout 4
=========================== -->
<section class="services-layout4 pb-0 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">         
                <div class="heading-layout2 text-center mb-50">
                    <h3 class="heading-title">DEALS</h3>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="slick-carousel"
                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 1100, "settings": {"slidesToShow": 2}},{"breakpoint": 992, "settings": {"slidesToShow": 1}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <!-- service item #1 -->
                <div class="service-item">  
                    <div class="service-body">
                        <div class="service-icon">
                            <i class="icon-education4 icon-item"></i>
                            <i class="icon-education4 icon-item"></i>
                        </div>
                        <h5> Di Sodium Phosphate Anhydrous - SR </h5>
                        <h4 class="service-title">
                            <a href="{{route('di_sodium_phosphate_anhydrous_sr')}}">Di Sodium Phosphate <br>Anhydrous-SR
                            </a>
                        </h4>
                    </div><!-- /.service-body -->
                    <div class="service-img">
                        <img src="assets/images/product/di_ sodium_phosphate_anhydrous.png" alt="service">
                    </div><!-- /.service-img -->
                    <a href="{{route('di_sodium_phosphate_anhydrous_sr')}}" class="service-more">
                        <svg class="service-more-svg">
                            <path stroke-width="2px" stroke="white" fill="transparent"
                                d="M105.000,82.843 L104.995,82.843 C104.982,87.968 102.169,92.700 97.606,95.262 L62.390,115.041 C57.816,117.610 52.181,117.610 47.607,115.041 L12.390,95.262 C7.827,92.700 5.014,87.968 5.001,82.843 L5.000,82.843 L5.000,82.821 C5.000,82.817 4.999,82.812 4.999,82.808 L5.000,82.808 L5.000,39.148 L4.992,39.148 C4.992,34.010 7.810,29.262 12.383,26.694 L47.600,6.915 C52.174,4.346 57.809,4.346 62.383,6.915 L97.599,26.694 C102.157,29.253 104.967,33.977 104.987,39.094 L105.000,39.094 L105.000,82.843 Z">
                            </path>
                        </svg>
                        <i class="plus-icon">+</i>
                    </a>
                </div><!-- /.service-item -->
                <!-- service item #2 -->
                <div class="service-item">
                    <div class="service-body">
                        <div class="service-icon">
                            <i class="icon-biology6 icon-item"></i>
                            <i class="icon-biology6 icon-item"></i>
                        </div>
                        <h5>Di Ammonium <br>Phosphate</h5>
                        <h4 class="service-title">
                            <a href="{{route('di_ammonium_phosphate')}}">Di Ammonium <br> Phosphate</a>
                        </h4>
                    </div><!-- /.service-body -->
                    <div class="service-img">
                        <img src="assets/images/product/di_ammonium_phosphate.png" alt="service">
                    </div><!-- /.service-img -->
                    <a href="{{route('di_ammonium_phosphate')}}" class="service-more">
                        <svg class="service-more-svg">
                            <path stroke-width="2px" stroke="white" fill="transparent"
                            d="M105.000,82.843 L104.995,82.843 C104.982,87.968 102.169,92.700 97.606,95.262 L62.390,115.041 C57.816,117.610 52.181,117.610 47.607,115.041 L12.390,95.262 C7.827,92.700 5.014,87.968 5.001,82.843 L5.000,82.843 L5.000,82.821 C5.000,82.817 4.999,82.812 4.999,82.808 L5.000,82.808 L5.000,39.148 L4.992,39.148 C4.992,34.010 7.810,29.262 12.383,26.694 L47.600,6.915 C52.174,4.346 57.809,4.346 62.383,6.915 L97.599,26.694 C102.157,29.253 104.967,33.977 104.987,39.094 L105.000,39.094 L105.000,82.843 Z">
                            </path>
                        </svg>
                        <i class="plus-icon">+</i>
                    </a>
                </div><!-- /.service-item -->
                <!-- service item #3 -->
                <div class="service-item">
                    <div class="service-body">
                        <div class="service-icon">
                            <i class="icon-chemical4 icon-item"></i>
                            <i class="icon-chemical4 icon-item"></i>
                        </div>
                        <h5>Mono Ammonium Phosphate</h5>
                        <h4 class="service-title">
                            <a href="{{route('monoammonium_phosphate')}}">Monoammonium <br> Phosphate</a>
                        </h4>
                    </div><!-- /.service-body -->
                    <div class="service-img">
                        <img src="assets/images/product/mono_ammonium_phosphate.png" alt="service">
                    </div><!-- /.service-img -->
                    <a href="{{route('monoammonium_phosphate')}}" class="service-more">
                        <svg class="service-more-svg">
                            <path stroke-width="2px" stroke="white" fill="transparent"
                                d="M105.000,82.843 L104.995,82.843 C104.982,87.968 102.169,92.700 97.606,95.262 L62.390,115.041 C57.816,117.610 52.181,117.610 47.607,115.041 L12.390,95.262 C7.827,92.700 5.014,87.968 5.001,82.843 L5.000,82.843 L5.000,82.821 C5.000,82.817 4.999,82.812 4.999,82.808 L5.000,82.808 L5.000,39.148 L4.992,39.148 C4.992,34.010 7.810,29.262 12.383,26.694 L47.600,6.915 C52.174,4.346 57.809,4.346 62.383,6.915 L97.599,26.694 C102.157,29.253 104.967,33.977 104.987,39.094 L105.000,39.094 L105.000,82.843 Z">
                            </path>
                        </svg>
                      <i class="plus-icon">+</i>
                    </a>
                </div><!-- /.service-item -->
                <!-- service item #4 -->
                <div class="service-item">
                    <div class="service-body">
                        <div class="service-icon">
                            <i class="icon-allotropy icon-item"></i>
                            <i class="icon-allotropy icon-item"></i>
                        </div>
                        <h5>Tri Sodium Phosphate Crystals</h5>
                        <h4 class="service-title">
                            <a href="{{route('tri_sodium_phosphate_crystals')}}">Tri Sodium <br>Phosphate Crystals</a>
                        </h4>
                    </div><!-- /.service-body -->
                    <div class="service-img">
                        <img src="assets/images/product/tri_sodium_phosphate_crystal.png" alt="service">
                    </div><!-- /.service-img -->
                    <a href="{{route('tri_sodium_phosphate_crystals')}}" class="service-more">
                        <svg class="service-more-svg">
                            <path stroke-width="2px" stroke="white" fill="transparent"
                                d="M105.000,82.843 L104.995,82.843 C104.982,87.968 102.169,92.700 97.606,95.262 L62.390,115.041 C57.816,117.610 52.181,117.610 47.607,115.041 L12.390,95.262 C7.827,92.700 5.014,87.968 5.001,82.843 L5.000,82.843 L5.000,82.821 C5.000,82.817 4.999,82.812 4.999,82.808 L5.000,82.808 L5.000,39.148 L4.992,39.148 C4.992,34.010 7.810,29.262 12.383,26.694 L47.600,6.915 C52.174,4.346 57.809,4.346 62.383,6.915 L97.599,26.694 C102.157,29.253 104.967,33.977 104.987,39.094 L105.000,39.094 L105.000,82.843 Z">
                            </path>
                        </svg>
                        <i class="plus-icon">+</i>
                    </a>
                    </div><!-- /.service-item -->
                    <!-- service item #5 -->
                </div><!-- /.slick-carousel -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="cat-area mt-60 ">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6 col-xl-5">
                    <p class="font-weight-bold">If You Need Any Solution ...We Are Available For You !  
                        <br>
                        <a href="{{route('our_products')}}" class="color-secondary underlined-text-secondary font-weight-bold">Our Specialty Areas</a>
                    </p>
                </div><!-- /.col-xl-5 -->
                <div class="col-md-12 col-lg-6 col-xl-6 offset-xl-1 d-flex flex-wrap justify-content-xl-end">
                    <a href="{{route('contact_us')}}" class="btn btn-primary btn-xl mr-30">
                        <span>Send Inquiry </span>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <div class="contact-phone d-flex align-items-center" style="margin-top: 25px">
                        <div class="phone-icon mr-20">
                            <i class="icon-phone icon-item"></i>
                        </div>
                        <span class="fz-14"><b>Contact our friendly staff or call us any time </b> 9913645555</span>
                    </div>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.Call to action Area -->
    </div><!-- /.container -->
</section><!-- /.Services Layout 4 -->

<!-- ========================
    About Layout 2
=========================== -->
<section class="about-layout2 pb-130 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-8">
                <div class="about-text mb-30">
                    <div class="about-badge">
                        <div class="about-icon"><i class="icon-beaker"></i></div>
                    </div>
                    <div class="about-text-banner">
                        <div class="heading-layout2">
                            <h3 class="heading-title pt-0">Inorganic Salts are indispensable chemicals that surrounds us everywhere, from what we eat to what we wear.</h3>
                        </div>
                    </div>
                </div>
                <div class="about-img d-flex justify-content-end">
                    <img src="assets/images/about/t_1.jpg" height="480" width="580"alt="about">
                </div>
            </div><!-- /.col-12 -->
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-4">
                <div class="about-Text">
                    <p class="mb-30" style="color:#2e3192"><b>Offering precisely formulated and highly soluble Inorganic Chemicals like Sodium Phosphate, Ammonium Phosphate, and Potassium Phosphate series like Mono / Di / Tri / Pyro,  that are accessible in crystalline as well as Powder form.</b>
                    </p>
                    <p class="mb-30" style="color:#2e3192"><b>Their existence is just not negligible because of their wide benefits and usage in Fertilizers, Pharmaceuticals, Petrochemicals, Dyes Industry & Construction chemical industry. These chemicals have become a great necessity that sustains the effective functioning of industrial goods, making it more certain to use.</b>
                    </p>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.About Layout 2 -->

<!-- ==========================
    FOR QUICK RESPONSE
=========================== -->
<section class="contact-layout3 bg-overlay bg-overlay-primary-gradient">
    <!--<div class="bg-img">-->
    <!--    <img src="assets/images/banners/6.jpg" alt="banner">-->
    <!--</div>-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="contact-panel">
                    <form class="contact-panel-form" id="contactForm">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel-title">FOR QUICK RESPONSE</h4>
                                <p class="contact-panel-desc mb-30">We Are Here For You </p>
                            </div>                        
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" id="email">
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Company Name </label>
                                    <input type="text" class="form-control" placeholder="Company Name" id="name" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Subject Name </label> 
                                    <input type="text" class="form-control" placeholder="Subject Name" id="name" required>
                                </div>
                            </div><!-- /.col-lg-6 -->                
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="location">City</label>
                                    <input type="text" class="form-control" placeholder=" City" id="name" required>
                                </div>
                            </div><!-- /.col-lg-6 -->               
                            <div class="col-sm-4 col-md-4 col-lg-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone" id="phone">
                                </div>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-secondary btn-block btn-xhight">      
                                    <span>Submit</span><a href="{{route('contact_us')}}"></a>
                                    <i class="icon-arrow-right"></i>
                                </button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.FOR QUICK RESPONSE -->

<!-- ======================
   MOST POPULAR PRODUCTS
========================= -->
<section class="blog-layout1 pb-70">
    <div class="container">
    @if(config('view.blog.enabled'))
    <div class="heading-layout2 text-center mb-50">
        <h2 class="heading-title">{{ config('view.blog.title') }}</h2>
    </div>
@endif
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading-layout2 text-center mb-50">
                    <!-- <h2 class="heading-subtitle">Recent Articles</h2> -->
                    <h3 class="heading-title pt-0">MOST POPULAR PRODUCTS</h3>
                </div>
            </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
            <!-- Post Item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="post-item">
                    <div class="post-img">
                        <a href="#">
                            <img src="assets/images/product/di_ sodium_phosphate.png" height="315px" alt="post image" loading="lazy">
                        </a>
                    </div><!-- /.post-img -->
                    <div class="post-body">
                        <div class="post-meta d-flex align-items-center">
                            <div class="post-meta-cat">
                                <a href="{{route('di_sodium_phosphate')}}">Di Sodium Phosphate</a>
                            </div><!-- /.blog-meta-cat -->
                        </div>
                        <a href="{{route('di_sodium_phosphate')}}" class="btn btn-link">
                            <i class="plus-icon">+</i>
                            <span>Read More</span>
                        </a>
                    </div><!-- /.post-body -->
                </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Post Item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="post-item">
                <div class="post-img">
                <a href="blog-single-post.html">
                    <img src="assets/images/product/mono_sodium_phosphate_crystal.png" height="315px" alt="post image" loading="lazy">
                </a>
                </div><!-- /.post-img -->
                <div class="post-body">
                <div class="post-meta d-flex align-items-center">
                    <div class="post-meta-cat">
                    <a href="{{route('mono_sodium_phosphate_crystal')}}">Mono Sodium Phosphate Crystal </a>
                    </div><!-- /.blog-meta-cat -->
                </div>
                <a href="{{route('mono_sodium_phosphate_crystal')}}" class="btn btn-link">
                    <i class="plus-icon">+</i>
                    <span>Read More</span>
                </a>
                </div><!-- /.post-body -->
            </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Post Item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="post-item">
                <div class="post-img">
                <a href="blog-single-post.html">
                    <img src="assets/images/product/di_sodium_ phosphate_crystal.png" height="315px" alt="post image" loading="lazy">
                </a>
                </div><!-- /.post-img -->
                <div class="post-body">
                <div class="post-meta d-flex align-items-center">
                    <div class="post-meta-cat">
                    <a href="{{route('di_sodium_phosphate_crystal')}}"> Di Sodium Phosphate Crystal </a>
                    </div><!-- /.blog-meta-cat -->
                </div>
                <a href="{{route('di_sodium_phosphate_crystal')}}" class="btn btn-link">
                    <i class="plus-icon">+</i>
                    <span>Read More</span>
                </a>
                </div><!-- /.post-body -->
            </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="post-item">
                <div class="post-img">
                <a href="blog-single-post.html">
                    <img src="assets/images/product/tetra_sodium_pyro_phoshpate.png" height="315px" alt="post image" loading="lazy">
                </a>
                </div><!-- /.post-img -->
                <div class="post-body">
                <div class="post-meta d-flex align-items-center">
                    <div class="post-meta-cat">
                    <a href="{{route('tetra_potassium_pyro_phosphate')}}"> Tetra Potassium Pyro Phosphate</a>
                    </div><!-- /.blog-meta-cat -->
                   
                </div>
                <a href="{{route('tetra_potassium_pyro_phosphate')}}" class="btn btn-link">
                    <i class="plus-icon">+</i>
                    <span>Read More</span>
                </a>
                </div><!-- /.post-body -->
            </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12 text-center mt-30">
                <button type="submit" class="btn btn-secondary btn-block btn-xhight">
                    <a href="{{route('our_products')}}">
                    <span>View All products</span><i class="icon-arrow-right"></i></a>
                </button>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.MOST POPULAR PRODUCTS -->

<!-- ========================
   Company Info
=========================== -->
<section class="banner-layout4 py-0" style="padding-bottom:0px;">  
    <div class="container-fluid">
        <div class="row banner-wrapper">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 banner-content">
                <div class="banner-text">
                    <div class="heading-layout2 heading-light">
                        <p class="heading-desc mb-40 justify-content-end">S.R. Chemicals is a Manufacturer and Exporter of huge array of Inorganic Chemicals including Phosphate, Ammonium Phosphate, and Potassium Phosphate series like Mono / Di / Tri / Pyro. Our products are widely used by the patrons and comprehended for their purity features, crystalline and powdered  form. Our customers can avail the offered range in different amounts and enclosing options as per their requirements. Since the inception of our company in 2000, we are working under the guidance of Mr. Ashokbhai Patel, our respected owner. His farsightedness and huge expertise in the domain, is what made us establish a reputable position in the market.
                        </p>
                        <h5 class="heading-title">Our Strengths</h5>
                        <p class="heading-desc mb-40 justify-content-end">We have established a notable position in the industry by dealing a large assortment of Inorganic Chemicals that finds application in pigments, fuels, medicines, coatings, catalysts, and various other products. Our offered range includes the following:
                        </p>
                        <ul class="heading-desc">
                            <li>Large manufacturing area equipped with latest technology and advance machines.</li> 
                            <li>We are certified with ISO 9001:2008, which is an evidence of how well we formulate chemicals.
                            </li>
                            <li>High performance and financial stability.</li>
                            <li>Prompt delivery service and market leading prices of the produced range.<br><br></li>
                        </ul>
                    </div>
                    <div class="heading-layout2 heading-light">
                        <h5 class="heading-title">Infrastructure Facilities</h5>
                        <p class="heading-desc mb-40 justify-content-end">We have developed a large chemical plant with the objective to create and formulate new material wealth that is chemical composition. Our production unit is outfitted with ambient pressure and temperature handling instruments and specialized equipment like separating, filtration, distillation, osmosis, condensation and various others, that assist in proper processing and formulation of Ammonium Phosphate and Pyro Phosphate. In order the meet the demands of the customers more promptly, we have developed a commodious warehouse that is located near market places, so as to ensure on time delivery of the offered range.
                        </p>
                    </div> 
                    <div class="heading-layout2 heading-light">
                        <h5 class="heading-title">Our Certifications</h5>
                        <p class="heading-desc mb-40 justify-content-end">Quality has always been and will be the foremost thing in our product range and we feel proud to tell that we are credentialed with ISO 9001:2008, because we compose only high grade Inorganic Chemicals as per the industrial standards. We right from sourcing raw materials till the final stage of fabrication, analyze each and every activity. Apart from this, we have also developed an in-house quality checking department that is run by diligent quality auditors, who make sure that the produced range is flawless to deliver.
                        </p>
                    </div>        
                </div><!-- /.banner-text -->
            </div><!-- /.col-lg-6 -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 banner-img d-flex align-items-center">
                <div class="bg-img">
                    <img src="assets/images/banners/2.jpg" alt="backgrounds">
                </div>
                <div class="banner-shape"></div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.Company Info -->

<!-- ========================
    Company Info
=========================== -->
<section class="banner-layout2 py-0" style="padding-bottom:0px;">
    <div class="container-fluid">
        <div class="row banner-wrapper">
            <div class="col-12 col-xl-6 banner-img d-flex align-items-center">
                <div class="bg-img">
                    <img src="assets/images/banners/1.jpg" alt="backgrounds">
                </div>
                <div class="banner-shape"></div>
            </div><!-- /.col-lg-6 -->
            <div class="col-12 col-xl-6 banner-content">
                <div class="banner-text">
                    <div class="heading-layout2 heading-light">
                        <h5 class="heading-title">What Do We Offer?</h5>
                        <p class="heading-desc mb-40 justify-content-end">We have established a notable position in the industry by dealing a large assortment of Inorganic Chemicals that finds application in pigments, fuels, medicines, coatings, catalysts, and various other products. Our offered range includes the following:</p>
                        <ul class="heading-desc"> 
                            <li> Sodium Phosphate : </li>
                            <ul>
                                <li>Mono Sodium Phosphate ( Anhydrous & Crystals)</li>
                                <li>Di Sodium Phosphate (Anhydrous & Crystals)</li>
                                <li>Tri Sodium Phosphate (Anhydrous & Crystals)</li>
                                <li>Sodium Hexameta Phosphate </li>
                                <li>Tetra Sodium Pyro Phosphate</li>
                                <li>Sodium Acid Pyro Phosphate</li>
                            </ul><br>
                            <li> Potassium Phosphate : </li>
                            <ul>
                                <li>Mono Potassium Phosphate</li>
                                <li>Di Potassium Phosphate</li>
                                <li>Tetra Potassium Pyro Phosphate</li>
                            </ul><br>
                            <li> Ammonium Phosphate:  </li>
                            <ul><br>
                                <li>Mono Ammonium Phosphate</li>
                                <li>Di Ammonium Phosphate</li>
                            </ul><br>
                        </ul>
                    </div>
                    <div class="heading-layout2 heading-light">
                        <h5 class="heading-title">Our Clientele</h5>
                        <p class="heading-desc mb-40 justify-content-end">Clients are the biggest strength of our organization. So to maximize their contentment we have adopted and implemented various plans and policies such as on time delivery, customer centric approaches, transparent dealings and many more. We focus on making cordial relations with the clients, which is why we are offering our produced range in custom-made packaging options as per their needs. WE feel proud to have collaborated with some reputed names of construction, pharmaceutical, fertilizer and petrochemical industry, that are listed below:</p>
                        <ul class="heading-desc"> 
                            <li> Atul Limited </li>
                            <li> Essar Oil Limited </li>
                            <li> Gujarat Narmada Valley Fertilizers & Chemicals Limited. </li>
                            <li> Gujarat State Electricity Corporation Limited </li>
                            <li> Oil and Natural Gas Corporation Limited </li>
                            <li> Rajasthan Rajya Vidyut Utpadan Nigam Limited </li>
                            <li> Rashtriya Chemicals & Fertilizers Limited </li>
                            <li> Steel Authority of India Limited <br><br></li>
                        </ul>
                    </div> 
                    <div class="heading-layout2 heading-light">              
                        <h5 class="heading-title">Our Mission</h5>  
                        <p class="heading-desc mb-40 justify-content-end">To cater all the requirements of clients from Pharmaceutical Industry, who reside in domestic as well as international market, we are preparing to make AR and LR grade phosphate chemicals along with BP and IP grade phosphate salts in our state-of-the-art-premises.</p>
                    </div>    
                </div><!-- /.banner-text -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.Company Info-->

@endsection