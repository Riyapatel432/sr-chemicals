<!-- Quick Response Inquiry Form -->
<div class="src-inquiry-card">
    <div class="src-form-header">
        <h4 class="contact-panel-title src-form-title">FOR QUICK RESPONSE</h4>
        <p class="contact-panel-desc src-form-sub mb-30">We Are Here For You</p>
    </div>

    @include('flash_data')

    <form action="{{ route('sendmail') }}" method="POST" class="src-validated-form" novalidate id="contactForm">
        @csrf
        
        <!-- Anti-Spam Honeypot Field (hidden from real users, caught by bots) -->
        <div class="d-none" aria-hidden="true">
            <label for="website_hp">Leave this field blank</label>
            <input type="text" name="website_hp" id="website_hp" tabindex="-1" autocomplete="off">
        </div>

        <div class="row g-3">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inq_name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Name" id="inq_name" name="name" required>
                    <div class="invalid-feedback">Please provide your name.</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inq_email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" placeholder="Email" id="inq_email" name="email" required>
                    <div class="invalid-feedback">Please provide a valid email.</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inq_company" class="form-label">Company Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Company Name" id="inq_company" name="company" required>
                    <div class="invalid-feedback">Please enter your company name.</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inq_subject" class="form-label">Subject Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Subject Name" id="inq_subject" name="subject" required>
                    <div class="invalid-feedback">Please enter the subject.</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inq_city" class="form-label">City <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="City" id="inq_city" name="city" required>
                    <div class="invalid-feedback">Please provide your city.</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inq_phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" placeholder="Phone" id="inq_phone" name="phone">
                </div>
            </div>

            <!-- Existing backend expects $request->msg in MailController -->
            <div class="col-12">
                <div class="form-group">
                    <label for="inq_msg" class="form-label">Requirement Details / Message</label>
                    <textarea class="form-control" rows="3" placeholder="Specify chemicals, grades (Technical/Pure), purity, or packaging requirements..." id="inq_msg" name="msg"></textarea>
                </div>
            </div>

            <div class="col-12 pt-2">
                <button type="submit" class="src-btn-cta w-100 justify-content-center py-3">
                    <span>Submit</span>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<!-- /.Quick Response Form -->

