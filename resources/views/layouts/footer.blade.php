<!-- /.Footer -->
 <style>
    .whatsapp_float{
        position: fixed;
        bottom: 30px;
        right: 20px;
        left: 20px;
    }
    .whatsapp_back { 
        width: 60px;
        height: 60px;
        background-color: #27af32;
        border-radius: 50%;
    }
    .whatsapp_float a i {
        font-size: 35px;
        color: #ffffff;
        padding: 13.5px;
        padding-top: 12px;
        padding-right: 4px;
    }
</style>
<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-5" style="padding: 0 40px">
                    <div class="footer-widget-nav">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('assets/images/logo/logo.1.jpg') }}" alt="S R Chemicals Logo" width="140px" onerror="this.style.display='none'">
                        </a>
                    </div>
                    <div>
                        <p style="color: rgb(255, 255, 255)">Chemicals undeniably possess a large impact on human life because of their existence in almost every product from medicines, fertilizers to building material.</p>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-5 col-lg-5" style="padding: 0 60px">
                    <div class="footer-widget-contact">
                        <h6 class="footer-widget-title">Get in Touch</h6>
                        <p>If you have any questions or need help, feel free to contact with our team.</p>
                        <ul class="contact-list list-unstyled">
                            <li>
                                <a href="mailto:info@srchems.com">
                                    <i class="contact-icon icon-email"></i> <span>info@srchems.com</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+919913645555">
                                    <i class="contact-icon icon-phone"></i> <span>9913645555</span>
                                </a>
                            </li>
                        </ul>
                        <p>Plot No. 1917 & C-1/1918, G.I.D.C., Panoli, Dist.: Bharuch,Panoli - 394116, Gujarat, India</p>
                        <a href="{{route('contact_us')}}" class="btn btn-white btn-link mr-30">
                            {{-- <i class="fas fa-map-marker-alt"></i> <span>Get Directions</span> --}}
                        </a>
                    </div>
                </div><!-- /.col-xl-2 -->
                <div class="col-sm-6 col-md-5 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget-title">Quick Links</h6>
                        <nav>
                        <ul class="list-unstyled">
                          <li><a href="{{route('home')}}">Home</a></li>
                          <li><a href="{{route('about')}}">About Us</a></li>
                          <li><a href="{{route('our_products')}}">Our Products</a></li>
                          <li><a href="{{route('blog')}}">Blog</a></li>
                          <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                          <li><a href="{{route('sitemap')}}">Sitemap</a></li>
                        </ul>
                        </nav>              
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap">
                    <div>            
                        <div class="mt-1">
                            <span>©S R Chemicals. All rights reserved. Designed & Developed By</span>
                            <a href="https://techomaxsolution.com/" target="_blank" rel="noopener noreferrer" class="footer-credit-link">Techomax Solution</a>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
    
    </footer>
    <!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
    <svg class="svg-pathes" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <clipPath id="hexagon-clippath" clipPathUnits="objectBoundingBox">
            <path
            d="M1,0.701 L1,0.701 C1,0.747,0.972,0.789,0.926,0.812 L0.574,0.989 C0.528,1,0.472,1,0.426,0.989 L0.074,0.812 C0.028,0.789,0,0.747,0,0.701 L0,0.701 L0,0.311 L0,0.311 C0,0.265,0.028,0.223,0.074,0.2 L0.426,0.023 C0.472,0,0.528,0,0.574,0.023 L0.926,0.2 C0.972,0.223,1,0.265,1,0.311 L1,0.311 L1,0.701">
            </path>
        </clipPath>
        <clipPath id="hexagon-clippath2" clipPathUnits="objectBoundingBox">
            <path
            d="M1,0.701 L1,0.701 C1,0.747,0.972,0.789,0.926,0.812 L0.574,0.989 C0.528,1,0.472,1,0.426,0.989 L0.074,0.812 C0.028,0.789,0,0.747,0,0.701 L0,0.701 L0,0.311 L0,0.311 C0,0.265,0.028,0.223,0.074,0.2 L0.426,0.023 C0.472,0,0.528,0,0.574,0.023 L0.926,0.2 C0.972,0.223,1,0.265,1,0.311 L1,0.311 L1,0.701">
            </path>
        </clipPath>
        <clipPath id="path-direction-right" clipPathUnits="objectBoundingBox">
            <path
            d="M0.006,1 C0.156,1,0.295,0.972,0.371,0.926 L0.95,0.574 C1,0.528,1,0.472,0.95,0.426 L0.371,0.074 C0.295,0.028,0.156,0,0.006,0 L0.006,1">
            </path>
        </clipPath>
        <clipPath id="path-direction-left" clipPathUnits="objectBoundingBox">
            <path
            d="M0.892,1 L0.892,0 L1,0 L1,1 L0.892,1 M0.05,0.574 C-0.017,0.528,-0.017,0.472,0.05,0.426 L0.567,0.074 C0.634,0.028,0.757,0,0.892,0 L0.892,1 C0.757,1,0.634,0.972,0.567,0.926 L0.05,0.574">
            </path>
        </clipPath>
        <clipPath id="path-direction-left2" clipPathUnits="objectBoundingBox">
            <path
            d="M1,0 C0.85,0,0.711,0.028,0.635,0.074 L0.056,0.426 C-0.019,0.472,-0.019,0.528,0.056,0.574 L0.635,0.926 C0.711,0.972,0.85,1,1,1 L1,0">
            </path>
        </clipPath>
        <clipPath id="path-direction-right2" clipPathUnits="objectBoundingBox">
            <path
            d="M0,0 C0.151,0,0.289,0.028,0.365,0.074 L0.944,0.426 C1,0.472,1,0.528,0.944,0.574 L0.365,0.926 C0.289,0.972,0.151,1,0,1 L0,0">
            </path>
        </clipPath>
        <clipPath id="path-direction-up" clipPathUnits="objectBoundingBox">
            <path
            d="M1,0.258 C1,0.258,1,0.258,1,0.258 L1,0.258 L1,0.976 C1,0.989,0.993,1,0.983,1 L0.017,1 C0.007,1,0,0.989,0,0.976 L0,0.257 L0,0.257 C0,0.219,0.028,0.183,0.074,0.164 L0.426,0.015 C0.472,-0.005,0.528,-0.005,0.574,0.015 L0.926,0.164 C0.972,0.183,1,0.219,1,0.257 L1,0.257 L1,0.258">
            </path>
        </clipPath>
        <clipPath id="path-direction-down" clipPathUnits="objectBoundingBox">
            <path
            d="M1,0.859 C0.998,0.88,0.97,0.898,0.926,0.909 L0.574,0.992 C0.528,1,0.472,1,0.426,0.992 L0.074,0.909 C0.03,0.898,0.002,0.88,0,0.859 L0,0.859 L0,0.857 C0,0.856,0,0.856,0,0.856 L0,0.856 L0,0 L1,0 L1,0.859 L1,0.859">
            </path>
        </clipPath>
        <clipPath id="path-direction-down2" clipPathUnits="objectBoundingBox">
            <path
            d="M1,0.743 C1,0.781,0.972,0.817,0.926,0.836 L0.574,0.985 C0.528,1,0.472,1,0.426,0.985 L0.074,0.836 C0.028,0.817,0,0.781,0,0.743 L0,0.743 L0,0.742 C0,0.742,0,0.742,0,0.742 L0,0.742 L0,0.024 C0,0.011,0.007,0,0.017,0 L0.983,0 C0.993,0,1,0.011,1,0.024 L1,0.743 L1,0.743">
            </path>
        </clipPath>
        <clipPath id="path-direction-down-sm" clipPathUnits="objectBoundingBox">
            <path
            d="M1,0.686 C0.997,0.732,0.969,0.773,0.926,0.796 L0.574,0.982 C0.528,1,0.472,1,0.426,0.982 L0.074,0.796 C0.03,0.773,0.003,0.732,0,0.686 L0,0.686 L0,0.681 C0,0.68,0,0.68,0,0.679 L0,0.679 L0,0.042 C0,0.019,0.011,0,0.024,0 L0.976,0 C0.989,0,1,0.019,1,0.042 L1,0.686 L1,0.686">
            </path>
        </clipPath>
        <clipPath id="path-direction-left-large" clipPathUnits="objectBoundingBox">
            <path
            d="M0.301,1 L0.301,0 L1,0 L1,1 L0.301,1 M0.191,0.926 L0.017,0.574 C-0.006,0.528,-0.006,0.472,0.017,0.426 L0.191,0.074 C0.214,0.028,0.256,0,0.301,0 L0.301,1 C0.256,1,0.214,0.972,0.191,0.926">
            </path>
        </clipPath>
        <clipPath id="path-direction-right-large" clipPathUnits="objectBoundingBox">
            <path
            d="M0.983,0.574 L0.809,0.926 C0.786,0.972,0.744,1,0.699,1 L0.699,0 C0.744,0,0.786,0.028,0.809,0.074 L0.983,0.426 C1,0.472,1,0.528,0.983,0.574 M0,0 L0.699,0 L0.699,1 L0,1 L0,0">
            </path>
        </clipPath>
    </svg>
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>



