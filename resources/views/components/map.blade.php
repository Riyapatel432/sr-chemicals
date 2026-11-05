@props([
    'title' => 'Office Details',
    'badge' => 'Plant & Works Location',
    'heading' => 'Visit Our Synthesis Facility',
    'lead' => 'Located at Panoli GIDC industrial corridor in Gujarat, with seamless multimodal logistics access to NH-48 and western ports.',
    'address' => 'Plot No. 1917 & C-1/1918, G.I.D.C., Panoli, Dist.: Bharuch, Panoli - 394116, Gujarat, India',
    'phone' => '+91 9913645555',
    'phoneRaw' => '+919913645555',
    'email' => 'info@srchems.com',
    'fax' => '+91-2646-272366',
    'hours' => 'Tue - Sun: 8:00 AM - 7:00 PM',
    'mapEmbedUrl' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.287634183214!2d72.98759537595065!3d21.574692768802812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0248329c77055%3A0x26bd51628f483af2!2sS.R.Chemicals!5e0!3m2!1sen!2sin!4v1684489446414!5m2!1sen!2sin',
    'directionsUrl' => 'https://maps.google.com/?q=S.R.+Chemicals+Panoli',
    'height' => '500px'
])

<section class="src-map-component-section py-5 py-lg-6 bg-light border-top">
    <div class="container-fluid px-lg-5">
        <!-- Section Header -->
        <div class="text-center max-w-700 mx-auto mb-4 mb-lg-5">
            <span class="d-inline-flex align-items-center gap-2 px-3 py-1 bg-primary-subtle text-primary border border-primary-subtle rounded-pill fw-bold small mb-2">
                <i class="bi bi-geo-alt-fill text-primary"></i> {{ $badge }}
            </span>
            <h2 class="fs-2 fw-bold text-dark mb-2">{{ $heading }}</h2>
            <p class="text-muted mb-0" style="font-size: 0.98rem; line-height: 1.7;">
                {{ $lead }}
            </p>
        </div>

        <!-- 2-Column Split Layout: Interactive Map + Office Details Card -->
        <div class="row g-4 align-items-stretch">
            <!-- Left: Google Maps Interactive Frame -->
            <div class="col-lg-7 col-xl-8">
                <div class="position-relative h-100 rounded-4 overflow-hidden shadow-sm border bg-white" style="min-height: {{ $height }};">
                    <iframe
                        class="w-100 h-100 position-absolute top-0 start-0 border-0"
                        src="{{ $mapEmbedUrl }}"
                        title="S R Chemicals Panoli GIDC Location Map"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        style="min-height: 100%; filter: contrast(1.02);"></iframe>

                    <!-- Top-Left Location Badge -->
                    <div class="position-absolute top-0 start-0 m-3 px-3 py-1 bg-white bg-opacity-95 rounded-pill shadow-sm small fw-semibold text-dark d-flex align-items-center gap-2" style="backdrop-filter: blur(8px); z-index: 2;">
                        <span class="spinner-grow spinner-grow-sm text-success" style="width: 8px; height: 8px;"></span>
                        <span>S.R. Chemicals &bull; Panoli Works</span>
                    </div>

                    <!-- Bottom-Right Quick Action Button -->
                    <div class="position-absolute bottom-0 end-0 m-3" style="z-index: 2;">
                        <a href="{{ $directionsUrl }}" target="_blank" rel="noopener" class="btn btn-light btn-sm rounded-pill shadow-sm fw-bold text-primary px-3 py-2 d-inline-flex align-items-center gap-2" style="backdrop-filter: blur(8px);">
                            <i class="bi bi-box-arrow-up-right"></i>
                            <span>Open in Google Maps</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right: Office Details Card -->
            <div class="col-lg-5 col-xl-4">
                <div class="h-100 rounded-4 shadow-sm p-4 p-xl-5 text-white d-flex flex-column justify-content-between" style="background: linear-gradient(145deg, #07101e 0%, #0c1e3d 60%, #102a54 100%); border: 1px solid rgba(255, 255, 255, 0.1);">
                    <div>
                        <!-- Card Header -->
                        <div class="d-flex align-items-start justify-content-between border-bottom border-light border-opacity-10 pb-3 mb-4">
                            <div>
                                <span class="badge bg-warning text-dark text-uppercase fw-bold px-2 py-1 mb-2" style="font-size: 11px; letter-spacing: 0.5px;">Registered Facility</span>
                                {{-- SEO Headings Lock: [h3] Office Details --}}
                                <h3 class="panel-title fs-3 fw-bold text-white mb-0">{{ $title }}</h3>
                            </div>
                            <div class="rounded-circle d-inline-flex align-items-center justify-content-center bg-white bg-opacity-10 text-warning" style="width: 46px; height: 46px; font-size: 22px;">
                                <i class="bi bi-buildings"></i>
                            </div>
                        </div>

                        <!-- Details List -->
                        <div class="d-flex flex-column gap-3 mb-4">
                            <!-- Address -->
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center bg-white bg-opacity-10 text-warning flex-shrink-0" style="width: 36px; height: 36px;">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="small">
                                    <span class="d-block text-uppercase text-light opacity-75 fw-semibold" style="font-size: 11px; letter-spacing: 0.5px;">Registered Works &amp; Plant</span>
                                    <span class="text-white" style="line-height: 1.5;">{{ $address }}</span>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center bg-white bg-opacity-10 text-warning flex-shrink-0" style="width: 36px; height: 36px;">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="small">
                                    <span class="d-block text-uppercase text-light opacity-75 fw-semibold" style="font-size: 11px; letter-spacing: 0.5px;">Telephone / WhatsApp</span>
                                    <a href="tel:{{ $phoneRaw }}" class="text-white text-decoration-none fw-bold fs-6 hover-warning">{{ $phone }}</a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center bg-white bg-opacity-10 text-warning flex-shrink-0" style="width: 36px; height: 36px;">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <div class="small">
                                    <span class="d-block text-uppercase text-light opacity-75 fw-semibold" style="font-size: 11px; letter-spacing: 0.5px;">Direct Inquiries</span>
                                    <a href="mailto:{{ $email }}" class="text-white text-decoration-none fw-semibold hover-warning">{{ $email }}</a>
                                </div>
                            </div>

                            <!-- Fax -->
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center bg-white bg-opacity-10 text-warning flex-shrink-0" style="width: 36px; height: 36px;">
                                    <i class="bi bi-printer-fill"></i>
                                </div>
                                <div class="small">
                                    <span class="d-block text-uppercase text-light opacity-75 fw-semibold" style="font-size: 11px; letter-spacing: 0.5px;">Fax Number</span>
                                    <span class="text-white">{{ $fax }}</span>
                                </div>
                            </div>

                            <!-- Hours -->
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center bg-white bg-opacity-10 text-warning flex-shrink-0" style="width: 36px; height: 36px;">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                                <div class="small">
                                    <span class="d-block text-uppercase text-light opacity-75 fw-semibold" style="font-size: 11px; letter-spacing: 0.5px;">Working Hours</span>
                                    <span class="text-white">{{ $hours }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Actions -->
                    <div class="pt-3 border-top border-light border-opacity-10">
                        <a href="{{ $directionsUrl }}" target="_blank" rel="noopener" class="btn btn-warning w-100 py-2 rounded-pill fw-bold text-white shadow-sm d-flex align-items-center justify-content-center gap-2 mb-2" style="background: linear-gradient(135deg, #e8792a 0%, #f97316 100%); border: none;">
                            <i class="bi bi-compass-fill"></i>
                            <span>Get Driving Directions</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="tel:{{ $phoneRaw }}" class="btn btn-outline-light btn-sm w-100 py-2 rounded-pill fw-semibold d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-telephone-fill text-warning"></i>
                            <span>Call Plant Directly</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

