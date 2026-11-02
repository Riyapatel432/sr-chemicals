@extends('layouts.layout')

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

<!-- ========================
    page title 
=========================== -->
<section class="page-title-layout2 page-title-light text-center pb-0 bg-overlay bg-parallax">
    <div class="bg-img"><img src="assets/images/" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle-heading mt-50">Contact Us</h1>
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
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
          </nav>
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-area -->
</section>
<!-- /.page-title -->
<!-- ==========================
    
     contact layout 3
=========================== -->
<section class="contact-layout3 bg-overlay bg-overlay-primary-gradient">
    <div class="bg-img">
        <img src="assets/images/banners/6.jpg" alt="banner">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="contact-panel">
                    <form  action="{{ route('sendmail') }}" method="post" class="contact-page__form contact-form-validated" novalidate="novalidate">
                        @csrf
                        @include('flash_data')
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel-title">SR CHEMICALS</h4>
                                <p class="contact-panel-desc mb-30">We Are Here For You </p>
                            </div>                        
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control"  placeholder="Name" name="name" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div><!-- /.col-lg-6 -->                  
                            <div class="col-sm-6 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="location">Message</label>
                                    <input type="text" class="form-control" placeholder="write Message" name="msg" required>
                                </div>
                            </div><!-- /.col-lg-6 -->               
                            <div class="col-12">
                                <button type="submit" class="btn btn-secondary btn-block btn-xhight">
                                    <span>Send Inquiry</span> <i class="icon-arrow-right"></i>
                                </button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 3 -->

 <!-- =========================
    Google Map
=========================  -->
<section class="map py-0">
    <iframe height="620"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.287634183214!2d72.98759537595065!3d21.574692768802812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0248329c77055%3A0x26bd51628f483af2!2sS.R.Chemicals!5e0!3m2!1sen!2sin!4v1684489446414!5m2!1sen!2sin"></iframe>
    <div class="map-container">
        <div class="contact-panel p-0">
            <div class="panel-header">
                <h3 class="panel-title color-white mb-0">Office Details</h3>
            </div>
            <div class="accordion" id="accordion">
                <div class="accordion-item opened">
                    <div id="collapse1" class="collapse show" data-parent="#accordion">
                        <div class="accordion-body">
                            <ul class="contact-list list-unstyled mb-0">
                                <li>Address: Plot No. 1917 & C-1/1918, G.I.D.C., Panoli, Dist.: Bharuch,Panoli - 394116, Gujarat, India</li>
                                <li>Phone: 9913645555</li>
                                <li>Email: info@srchems.com</li>
                                <li>Fax :91-2646-272366</li>
                            </ul>
                        </div><!-- /.accordion-item-body -->
                    </div>
                </div><!-- /.accordion-item -->
            </div><!-- /.accordion -->
        </div>
    </div><!-- /.map-container -->
</section><!-- /.GoogleMap -->

@endsection
