<!-- Modern Dark B2B Footer -->
<footer class="src-footer">
    <div class="container-fluid px-lg-5">
        <div class="row g-5">
            <!-- Brand Column -->
            <div class="col-lg-5 col-md-6 pe-lg-5">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo/logo.1.jpg') }}" alt="S R Chemicals Logo" class="src-footer-logo" width="140" height="55" onerror="this.style.display='none'">
                </a>
                <p class="src-footer-desc mt-3">
                    Chemicals undeniably possess a large impact on human life because of their existence in almost every product from medicines, fertilizers to building material.
                </p>
                <div class="d-flex align-items-center gap-3 mt-3">
                    <a href="https://www.facebook.com/people/SR-Chemical/61590453215732/" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-light rounded-circle p-2 d-inline-flex align-items-center justify-content-center" style="width:36px;height:36px;" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/sr.chemicals/" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-light rounded-circle p-2 d-inline-flex align-items-center justify-content-center" style="width:36px;height:36px;" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-light rounded-circle p-2 d-inline-flex align-items-center justify-content-center" style="width:36px;height:36px;" aria-label="Twitter">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                </div>
            </div>

            <!-- Get In Touch Column (H6 Get in Touch preserved for SEO Lock) -->
            <div class="col-lg-4 col-md-6">
                <h6 class="src-footer-title">Get in Touch</h6>
                <p class="src-footer-subtitle mb-3">If you have any questions or need help, feel free to contact with our team.</p>
                <ul class="src-footer-contact-list">
                    <li>
                        <i class="bi bi-envelope-fill"></i>
                        <div>
                            <span class="src-footer-contact-label">Email Inquiry</span>
                            <a href="mailto:info@srchems.com">info@srchems.com</a>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-telephone-fill"></i>
                        <div>
                            <span class="src-footer-contact-label">Direct Helpline</span>
                            <a href="tel:+919913645555">9913645555</a>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-geo-alt-fill"></i>
                        <div>
                            <span class="src-footer-contact-label">Plant &amp; Registered Office</span>
                            <span class="src-footer-contact-value">Plot No. 1917 &amp; C-1/1918, G.I.D.C., Panoli, Dist.: Bharuch,Panoli - 394116, Gujarat, India</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Quick Links Column (H6 Quick Links preserved for SEO Lock) -->
            <div class="col-lg-3 col-md-12">
                <h6 class="src-footer-title">Quick Links</h6>
                <nav>
                    <ul class="src-footer-links">
                        <li><a href="{{ route('home') }}"><i class="bi bi-chevron-right small"></i> Home</a></li>
                        <li><a href="{{ route('about') }}"><i class="bi bi-chevron-right small"></i> About Us</a></li>
                        <li><a href="{{ route('our_products') }}"><i class="bi bi-chevron-right small"></i> Our Products</a></li>
                        <li><a href="{{ route('blog') }}"><i class="bi bi-chevron-right small"></i> Blog</a></li>
                        <li><a href="{{ route('contact_us') }}"><i class="bi bi-chevron-right small"></i> Contact Us</a></li>
                        <li><a href="{{ route('sitemap') }}"><i class="bi bi-chevron-right small"></i> Sitemap</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Copyright & Credit Unchanged -->
        <div class="src-footer-bottom">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div>
                    <span>©S R Chemicals. All rights reserved. Designed &amp; Developed By</span>
                    <a href="https://techomaxsolution.com/" target="_blank" rel="noopener noreferrer" class="footer-credit-link">Techomax Solution</a>
                </div>
                <div class="src-footer-tagline">
                    High Purity Industrial &amp; Technical Grade Inorganic Salts
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Scroll-To-Top Button -->
<button id="srcScrollTop" type="button" aria-label="Scroll to top">
    <i class="bi bi-arrow-up"></i>
</button>

<!-- Floating Desktop WhatsApp Button (Preserves Old Site Chat Feature) -->
<aside class="src-floating-whatsapp d-none d-lg-flex position-fixed z-3" style="bottom: 24px; left: 24px;">
    <a href="https://wa.me/919913645555?text=Hello%20SR%20Chemicals,%20I%20have%20an%20inquiry%20regarding%20phosphate%20chemicals." target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-circle shadow-lg d-flex align-items-center justify-content-center text-white" style="width: 54px; height: 54px; font-size: 28px; background-color: #25D366; border-color: #25D366;" aria-label="Chat with S R Chemicals on WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>
</aside>

<!-- Mobile Sticky Bottom Bar -->
@include('partials.mobile-bottom-bar')

