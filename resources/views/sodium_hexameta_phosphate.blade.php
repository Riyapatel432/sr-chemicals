@extends('layouts.layout')

@section('seo')
    <title>Sodium Hexametaphosphate (SHMP) Supplier | SR Chems</title>
    <meta name="description" content="Industrial-strength Sodium Hexametaphosphate (SHMP) perfect for water softening, detergents, and industrial tanning processes. Request wholesale pricing.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Sodium Hexametaphosphate (SHMP) Supplier | SR Chems">
    <meta property="og:description" content="Industrial-strength Sodium Hexametaphosphate (SHMP) perfect for water softening, detergents, and industrial tanning processes. Request wholesale pricing.">
    <meta property="og:url" content="https://www.srchems.com/sodium-hexameta-phosphate">
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
          <h1 class="pagetitle-heading mt-50">Sodium Hexamate Phosphate</h1>
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
              <li class="breadcrumb-item active" aria-current="page">Sodium Phosphate</li> 
              <li class="breadcrumb-item active" aria-current="page">Sodium Hexameta Phosphate</li>
          </ol>
        </nav>
      </div><!-- /.container -->
    </div><!-- /.breadcrumb-area -->
</section>
<!-- /.page-title -->

<!-- ========================
  Sodium Hexameta Phosphate
=========================== -->
<section class="about-layout1 pb-0">
  <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-10 col-xl-7">
          <div class="heading-layout2">
            <h3 class="heading-title mb-50">Sodium Hexameta Phosphate</h3>
          </div><!-- /heading -->
          <div class="about-img">
            <img src="assets/images/product/tri_sodium_phosphate_anhydrous.png" height="385px" alt="about" class="w-100">
          </div>
        </div><!-- /.col-12 -->
        <div class="col-sm-12 col-md-10 col-lg-10 col-xl-5">
          <div class="pricing-widget-layout1 mb-30">
            <h5 class="pricing-title">Product Details:</h5>
            <ul class="pricing-list list-unstyled mb-0">
              {{-- <li><span> Formula </span><span>(NaPO3)6</span></li>
              <li><span> Storage</span><span>  Room Temperature </span></li>
              <li><span> Ph Level</span><span>10.0 - 10.6</span></li>
              <li><span> Other Names </span><span> TSPP</span></li>
              <li><span> Purity </span><span>  95% Min </span></li>
              <li><span> Form </span><span>Powder</span></li>
              <li><span> Classification </span><span>   Inorganic Chemicals </span></li>              
              <li><span> Supply Ability : </span><span> 50 Kilograms<br> Per Month</span></li> --}}
            </ul>
          </div> 
          <button type="submit" class="btn btn-secondary btn-block btn-xhight" style="margin-top: -80px">
            <span>Send Inquiry</span> <i class="icon-arrow-right"></i>
          </button>         
        </div><!-- /.col-12-->
    </div><!-- /.container -->
</section>
<!-- /.Sodium Hexameta Phosphate-->

<!-- ========================
  Price And Quantity
=========================== -->
<section class="fancybox-layout5 bg-overlay bg-overlay-primary-gradient pt-120 pb-110"> 
  <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="backgrounds"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 fancybox-container">
        <h6 class="heading-title color-white" style="padding-top: 15px">Specification</h6>
        <style>
          table {
            border-collapse: collapse;
            width: 100%;
            color:white;
            border-bottom: 1px solid #ddd;
          }          
         th, td {
            padding: 8px;
          }        
          tr:hover {background-color:#f4572e;}
        </style >
        <table>
          <tr>  
            <td>Molecular Weight</td>
            <td>Matter insoluble in water % by mass Max.</td>
            <td>Soluble iron compound(as Fe) % by mass Max.</td>
            <td>Phosphate (as P205) % by mass Min.</td>
            <td>Loss in ignition % by mass Min.</td>                             
          </tr>
          <tr>
            <td>611.77</td>
            <td>0.20% </td>
            <td>0.03%</td>
            <td>67.00%</td>     
            <td>3.00 </td>
          </tr>
        </table>
      </div><!-- /.col-12 --> 
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
<!-- /.Price And Quantity -->

@endsection
