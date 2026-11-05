<!-- /.Header -->
<header class="header header-layout1">  
    <div class="header-topbar">  
        <div class="">
            <div class="">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <ul class="contact-list d-flex flex-wrap align-items-center list-unstyled mt-20">
                            <li>
                                <i class="icon-phone"></i><a href="tel:+919913645555">Emergency Phone : 9913645555</a>
                            </li>
                            <li>
                                <i class="icon-location"></i><a href="#">Location:Bharuch,Panoli - 394116, Gujarat, India </a>
                            </li>
                            <li>
                                <i class="icon-clock"></i><a href="contact-us.html">Tue - Sun: 8:00 am - 7:00 pm</a>
                            </li>
                        </ul><!-- /.contact-list -->
                        <div class="d-flex">
                            <ul class="social-icons list-unstyled mb-0 mr-30">
                                <li><a href="https://www.facebook.com/people/SR-Chemical/61590453215732/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/sr.chemicals/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->
                        </div>
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{ asset('assets/images/logo/logo.1.jpg') }}" class="logo-dark" alt="S R Chemicals Logo" style="height:55px; width:90px;" onerror="this.style.display='none'">
            </a>
            <h3 class="src-brand-title"> S R Chemicals </h3>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center">
                <span id="mainNavigation">
                    <ul class="navbar-nav">                   
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-item-link">Home </a>
                        </li><!-- /.nav-item -->
                        <li class="nav-item has-dropdown">
                            <a href="{{route('about')}}" class="dropdown-toggle nav-item-link" data-toggle="dropdown">About Us</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('about')}}" class="nav-item-link">About</a>
                                </li>
                                <li class="nav-item has-dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle nav-item-link">Locations</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('chemical_exporter_supplier_vietnam') }}" class="nav-item-link">Vietnam</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('chemical_exporter_supplier_thailand') }}" class="nav-item-link">Thailand</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li><!-- /.nav-item -->
                        <li class="nav-item has-dropdown">
                            <a href="{{route('our_products')}}" class="dropdown-toggle nav-item-link" aria-expanded="true">Our Products</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item has-dropdown">
                                    <a href="{{route('sodium_phosphate')}}" class="dropdown-toggle nav-item-link">Sodium Phosphate</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('mono_sodium_phosphate_anhydrous_sr')}}" class="nav-item-link">Mono Sodium Phosphate Anhydrous</a> 
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('mono_sodium_phosphate_crystal')}}"class="nav-item-link">
                                                Mono Sodium Phosphate Crystal</a> 
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('di_sodium_phosphate_anhydrous_sr')}}" class="nav-item-link">Di Sodium Phosphate Anhydrous</a> 
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('di_sodium_phosphate_crystal')}}" class="nav-item-link">Di Sodium Phosphate
                                                Crystal</a>                                        
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('trisodium_phosphate_anhydrous')}}" class="nav-item-link">Tri Sodium Phosphate Anhydrous</a> 
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('tri_sodium_phosphate_crystals')}}" class="nav-item-link">
                                                Tri Sodium Phosphate Crystals</a> 
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('sodium_hexameta_phosphate')}}" class="nav-item-link">
                                                Sodium Hexameta Phosphate</a> 
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('tetra_sodium_pyro_phosphate')}}" class="nav-item-link">
                                                Tetra Sodium Pyro Phosphate</a> 
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('sodium_acid_pyrophosphate')}}" class="nav-item-link">
                                                Sodium Acid Pyrophosphate</a> 
                                        </li>
                                    </ul>
                                </li><!-- /.nav-item -->
                                <li class="nav-item has-dropdown">
                                    <a href="{{route('potassium_phosphate')}}" class="dropdown-toggle nav-item-link">Potassium Phosphate</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('mono_potassium_phosphate')}}" class="nav-item-link">
                                            Mono Potassium Phosphate</a> 
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('di_potassium_phosphate')}}"class="nav-item-link">
                                            Di Potassium Phosphate</a> 
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('tetra_potassium_pyro_phosphate')}}" class="nav-item-link">Tetra Potassium Pyro Phosphate
                                            </a>                                        
                                        </li>
                                    </ul>
                                </li><!-- /.nav-item -->
                                <li class="nav-item has-dropdown">
                                    <a href="{{route('ammonium_phosphate')}}" class="dropdown-toggle nav-item-link">Ammonium Phosphate</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('monoammonium_phosphate')}}" class="nav-item-link">Monoammonium Phosphate
                                            </a>                                        
                                        </li>
                                        <li class="nav-item has-dropdown">
                                            <a href="{{route('di_ammonium_phosphate')}}"class="nav-item-link">Di Ammonium Phosphate </a> 
                                        </li>                                    
                                    </ul>
                                </li><!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav-item"><a href="{{ route('blog') }}" class="nav-item-link">Blog</a></li>
                        <li class="nav-item has-dropdown">
                            <a href="{{route('contact_us')}}" class="nav-item-link">Contact Us</a>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.navbar-nav -->
                </span>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header>
<!-- /.Header -->