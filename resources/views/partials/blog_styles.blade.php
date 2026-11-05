<style>
/* =====================================================
   S R CHEMICALS — Modern B2B Blog Design System
   Panoli GIDC, Bharuch, Gujarat, India
   ===================================================== */

/* --- Icon Compatibility for Bootstrap Icons --- */
.icon-calendar::before { font-family: 'bootstrap-icons' !important; content: "\f1f2"; font-style: normal; display: inline-block; vertical-align: -1px; }
.icon-user::before { font-family: 'bootstrap-icons' !important; content: "\f4da"; font-style: normal; display: inline-block; vertical-align: -1px; }
.icon-arrow-right::before { font-family: 'bootstrap-icons' !important; content: "\f138"; font-style: normal; display: inline-block; vertical-align: -1px; }
.icon-email::before { font-family: 'bootstrap-icons' !important; content: "\f32f"; font-style: normal; display: inline-block; vertical-align: -1px; }
.icon-phone::before { font-family: 'bootstrap-icons' !important; content: "\f5c1"; font-style: normal; display: inline-block; vertical-align: -1px; }
.icon-home::before { font-family: 'bootstrap-icons' !important; content: "\f425"; font-style: normal; display: inline-block; vertical-align: -1px; }

/* --- Hero Banner (.page-title-layout2) --- */
.page-title-layout2 {
    position: relative;
    background: linear-gradient(135deg, #07101e 0%, #0c1e3d 60%, #142a52 100%) !important;
    padding: 72px 0 44px !important;
    overflow: hidden;
    color: #ffffff;
}
.page-title-layout2 .bg-img {
    position: absolute;
    inset: 0;
    z-index: 1;
    overflow: hidden;
    opacity: 0.22;
}
.page-title-layout2 .bg-img img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    filter: brightness(0.85) contrast(1.1);
}
.page-title-layout2 .container {
    position: relative;
    z-index: 2;
}
.page-title-layout2 .pagetitle-heading {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif !important;
    font-size: clamp(23px, 3.2vw, 34px) !important;
    font-weight: 800 !important;
    color: #ffffff !important;
    line-height: 1.35 !important;
    letter-spacing: -0.02em !important;
    margin-top: 10px !important;
    margin-bottom: 22px !important;
    text-shadow: 0 2px 12px rgba(0, 0, 0, 0.4);
}
.page-title-layout2 .breadcrumb-area {
    position: relative;
    z-index: 2;
    margin-top: 10px;
}
.page-title-layout2 .breadcrumb {
    background: rgba(255, 255, 255, 0.08) !important;
    display: inline-flex !important;
    align-items: center;
    padding: 8px 22px !important;
    border-radius: 50px !important;
    border: 1px solid rgba(255, 255, 255, 0.16) !important;
    backdrop-filter: blur(8px) !important;
    -webkit-backdrop-filter: blur(8px) !important;
    list-style: none !important;
    margin-bottom: 0 !important;
}
.page-title-layout2 .breadcrumb-item a {
    color: #cbd5e1 !important;
    text-decoration: none !important;
    font-size: 13px !important;
    font-weight: 500 !important;
    transition: color 0.2s ease;
}
.page-title-layout2 .breadcrumb-item a:hover {
    color: #ffffff !important;
}
.page-title-layout2 .breadcrumb-item.active {
    color: #e8792a !important;
    font-size: 13px !important;
    font-weight: 600 !important;
}
.page-title-layout2 .breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, 0.4) !important;
    content: "›" !important;
    font-size: 15px !important;
    padding: 0 10px !important;
    line-height: 1;
}

/* --- Main Blog Single Layout --- */
.blog-single {
    background-color: #f8fafc;
    padding: 56px 0 76px;
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
}
.blog-single .col-lg-8 > div:first-child {
    background: #ffffff;
}

/* Article Hero Image */
.bl-hero-img {
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(12, 30, 61, 0.08);
    margin-bottom: 28px;
    width: 100% !important;
    max-width: 100% !important;
    border: 1px solid #e2e8f0;
}
.bl-hero-img img {
    width: 100% !important;
    max-width: 100% !important;
    height: 420px;
    object-fit: cover;
    display: block;
}

/* Post Meta */
.bl-meta {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 16px;
    font-size: 13.5px;
    color: #64748b;
    margin-bottom: 24px;
    padding-bottom: 18px;
    border-bottom: 1px solid #e2e8f0;
}
.bl-meta i {
    margin-right: 5px;
    color: #1a4fa0;
}
.bl-badge {
    background: #e8f0fd;
    color: #1a4fa0;
    padding: 4px 14px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 11.5px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    border: 1px solid #cfe0fc;
}

/* Typography & Headings */
.bl-h1 {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 26px;
    font-weight: 800;
    color: #0c1e3d;
    line-height: 1.4;
    margin-bottom: 22px;
    letter-spacing: -0.015em;
}
.bl-h2 {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 20px;
    font-weight: 700;
    color: #102a54;
    margin-top: 36px;
    margin-bottom: 16px;
    padding-left: 14px;
    border-left: 4px solid #1a4fa0;
    letter-spacing: -0.01em;
}

/* Paragraphs & Lists */
.bl-p {
    font-size: 15.5px;
    line-height: 1.85;
    color: #334155;
    margin-bottom: 18px;
}
.bl-link {
    color: #1a4fa0;
    font-weight: 600;
    text-decoration: underline;
    text-underline-offset: 3px;
    transition: color 0.2s ease;
}
.bl-link:hover {
    color: #e8792a;
}
.bl-ul {
    padding-left: 22px;
    color: #334155;
    line-height: 2;
    font-size: 15px;
    margin-bottom: 20px;
}
.bl-ul li {
    margin-bottom: 6px;
}
.bl-hr {
    border-color: #e2e8f0;
    margin: 36px 0;
    opacity: 0.8;
}

/* Content Callout Boxes */
.bl-box {
    background: #f8fbff;
    border: 1px solid #dbeafe;
    border-left: 4px solid #1a4fa0;
    border-radius: 0 12px 12px 0;
    padding: 22px 24px;
    margin: 22px 0;
    box-shadow: 0 2px 8px rgba(26, 79, 160, 0.04);
}
.bl-box-title {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 16.5px;
    font-weight: 700;
    color: #0c1e3d;
    margin-bottom: 10px;
}
.bl-box-p {
    font-size: 14.5px;
    line-height: 1.75;
    color: #475569;
    margin-bottom: 12px;
}

/* Formula Box */
.bl-formula {
    background: #ffffff;
    border: 1px dashed #93c5fd;
    border-radius: 10px;
    padding: 16px 22px;
    font-family: 'IBM Plex Mono', SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    font-size: 14.5px;
    color: #0c1e3d;
    text-align: center;
    margin: 22px 0;
    box-shadow: 0 4px 12px rgba(26, 79, 160, 0.05);
}

/* Product Chips */
.bl-chips {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
    margin-top: 8px;
}
.bl-chip-label {
    font-size: 13px;
    font-weight: 700;
    color: #0c1e3d;
}
.bl-chip {
    display: inline-block;
    background: #0c1e3d;
    color: #ffffff !important;
    font-size: 12px;
    font-weight: 600;
    padding: 5px 14px;
    border-radius: 50px;
    text-decoration: none;
    transition: background 0.2s, transform 0.2s;
}
.bl-chip:hover {
    background: #1a4fa0;
    transform: translateY(-1px);
}

/* USP Cards */
.bl-usp-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 22px;
    height: 100%;
    box-shadow: 0 2px 8px rgba(12, 30, 61, 0.04);
}
.bl-usp-icon {
    font-size: 26px;
    margin-bottom: 12px;
}
.bl-usp-title {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #0c1e3d;
    margin-bottom: 8px;
}
.bl-usp-p {
    font-size: 13.5px;
    color: #64748b;
    line-height: 1.7;
    margin: 0;
}

/* CTA Block */
.bl-cta {
    background: linear-gradient(135deg, #07101e 0%, #0c1e3d 50%, #142a52 100%);
    border-radius: 16px;
    padding: 38px 32px;
    text-align: center;
    color: #ffffff;
    margin: 36px 0;
    box-shadow: 0 12px 32px rgba(12, 30, 61, 0.18);
    position: relative;
    overflow: hidden;
}
.bl-cta::before {
    content: '';
    position: absolute;
    top: -40px;
    right: -40px;
    width: 140px;
    height: 140px;
    background: rgba(232, 121, 42, 0.15);
    border-radius: 50%;
    filter: blur(35px);
}
.bl-cta-title {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 21px;
    font-weight: 800;
    margin-bottom: 12px;
    color: #ffffff;
    letter-spacing: -0.01em;
}
.bl-cta-p {
    font-size: 14.5px;
    color: #cbd5e1;
    max-width: 620px;
    margin: 0 auto 20px;
    line-height: 1.7;
}
.bl-cta-contact {
    font-size: 14px;
    line-height: 2.2;
    margin-bottom: 22px;
    color: #e2e8f0;
}
.bl-cta-link {
    color: #93c5fd;
    font-weight: 600;
    text-decoration: none;
}
.bl-cta-link:hover {
    color: #ffffff;
    text-decoration: underline;
}
.bl-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #e8792a 0%, #f97316 100%);
    color: #ffffff !important;
    font-size: 14.5px;
    font-weight: 700;
    padding: 13px 32px;
    border-radius: 50px;
    text-decoration: none !important;
    box-shadow: 0 4px 16px rgba(232, 121, 42, 0.35);
    transition: all 0.25s ease;
}
.bl-cta-btn:hover {
    background: linear-gradient(135deg, #d4621a 0%, #ea580c 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(232, 121, 42, 0.45);
}

/* Tags */
.bl-tags {
    margin: 28px 0 10px;
    padding-top: 18px;
    border-top: 1px solid #e2e8f0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 6px;
}
.bl-tags strong {
    font-size: 13.5px;
    color: #0c1e3d;
    margin-right: 4px;
}
.bl-tag {
    display: inline-block;
    background: #e8f0fd;
    color: #1a4fa0;
    padding: 5px 14px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    border: 1px solid #cfe0fc;
    transition: all 0.2s ease;
}
.bl-tag:hover {
    background: #1a4fa0;
    color: #ffffff !important;
    border-color: #1a4fa0;
    transform: translateY(-1px);
}

/* Comparison Tables */
.bl-table {
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    overflow: hidden;
    font-size: 14px;
}
.bl-table thead {
    background: linear-gradient(135deg, #0c1e3d 0%, #1a4fa0 100%);
    color: #ffffff;
}
.bl-table thead th {
    padding: 15px 18px;
    font-weight: 700;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border: none;
}
.bl-table tbody td {
    padding: 14px 18px;
    color: #334155;
    vertical-align: middle;
    border-color: #f1f5f9;
}
.bl-table tbody tr.alt,
.bl-table tbody tr:nth-child(even) {
    background-color: #f8fafc;
}
.bl-table tbody tr:hover {
    background-color: #f0f7ff;
}
.bl-table .fw-600 {
    font-weight: 600;
    color: #0c1e3d;
}

/* =====================================================
   SPACING UTILITIES (Legacy template compatibility)
   ===================================================== */
.mb-10 { margin-bottom: 10px !important; }
.mb-15 { margin-bottom: 15px !important; }
.mb-20 { margin-bottom: 20px !important; }
.mb-25 { margin-bottom: 25px !important; }
.mb-30 { margin-bottom: 30px !important; }
.mb-35 { margin-bottom: 35px !important; }
.mb-40 { margin-bottom: 40px !important; }
.mb-50 { margin-bottom: 50px !important; }
.mt-10 { margin-top: 10px !important; }
.mt-20 { margin-top: 20px !important; }
.mt-30 { margin-top: 30px !important; }
.mt-50 { margin-top: 50px !important; }
.mr-10 { margin-right: 10px !important; }

/* =====================================================
   SIDEBAR — Clean Card Flow (No Sticky Overlap)
   ===================================================== */
.blog-single .col-lg-4 {
    display: flex;
    flex-direction: column;
    gap: 0;
}

/* Quick Contact Widget */
.bl-sidebar-contact {
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(12, 30, 61, 0.06);
    border: 1px solid #e2e8f0;
    margin-bottom: 28px !important;
    position: relative;
    z-index: 1;
}
.bl-sc-header {
    background: linear-gradient(135deg, #07101e 0%, #0c1e3d 60%, #142a52 100%);
    color: #ffffff;
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 15px;
    font-weight: 700;
    padding: 16px 22px;
    border-bottom: 3px solid #e8792a;
    letter-spacing: -0.01em;
}
.bl-sc-body {
    background: #ffffff;
    padding: 22px;
}
.bl-sc-row {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 14px;
    font-size: 13.5px;
}
.bl-sc-icon {
    color: #1a4fa0;
    font-size: 15px;
    flex-shrink: 0;
    width: 32px;
    height: 32px;
    background: #e8f0fd;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
.bl-sc-text {
    color: #334155;
    text-decoration: none;
    font-weight: 500;
    word-break: break-all;
    transition: color 0.2s;
}
.bl-sc-text:hover {
    color: #1a4fa0;
}
.bl-sc-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    background: linear-gradient(135deg, #e8792a 0%, #f97316 100%);
    color: #ffffff !important;
    font-size: 14px;
    font-weight: 700;
    text-align: center;
    padding: 12px 18px;
    border-radius: 8px;
    text-decoration: none !important;
    margin-top: 18px;
    box-shadow: 0 4px 14px rgba(232, 121, 42, 0.3);
    transition: all 0.2s ease;
}
.bl-sc-btn:hover {
    background: linear-gradient(135deg, #d4621a 0%, #ea580c 100%);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(232, 121, 42, 0.4);
}

/* Sidebar Cards */
.bl-sidebar-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(12, 30, 61, 0.05);
    margin-bottom: 28px !important;
    position: relative;
    z-index: 1;
}
.bl-sidebar-card-title {
    background: #f8fafc;
    color: #0c1e3d;
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 14.5px;
    font-weight: 700;
    padding: 14px 20px;
    border-bottom: 2px solid #1a4fa0;
    letter-spacing: -0.01em;
}
.bl-sidebar-list {
    list-style: none;
    padding: 6px 0;
    margin: 0;
}
.bl-sidebar-list li {
    border-bottom: 1px solid #f1f5f9;
}
.bl-sidebar-list li:last-child {
    border-bottom: none;
}
.bl-sidebar-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 11px 20px;
    color: #475569;
    font-size: 13.5px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s ease;
}
.bl-sidebar-link:hover {
    background: #f0f7ff;
    color: #1a4fa0;
    padding-left: 24px;
}
.bl-sidebar-link i {
    color: #1a4fa0;
    font-size: 12px;
    transition: transform 0.2s;
}
.bl-sidebar-link:hover i {
    transform: translateX(3px);
}
.bl-sidebar-link-primary {
    color: #1a4fa0;
    font-weight: 700;
}
.bl-sidebar-blog-list {
    list-style: none;
    padding: 8px 0;
    margin: 0;
}
.bl-sidebar-blog-list li {
    border-bottom: 1px solid #f1f5f9;
    padding: 12px 20px;
}
.bl-sidebar-blog-list li:last-child {
    border-bottom: none;
}
.bl-sidebar-blog-list a {
    color: #334155;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    line-height: 1.6;
    display: block;
    transition: color 0.2s;
}
.bl-sidebar-blog-list a:hover {
    color: #1a4fa0;
}

/* About S R Chemicals & Text Widgets in Sidebar Cards */
.bl-sidebar-card > p,
.bl-sidebar-about-p {
    font-size: 13.5px;
    color: #475569;
    line-height: 1.75;
    padding: 18px 22px 10px !important;
    margin: 0 !important;
}
.bl-sidebar-about-link {
    display: inline-flex !important;
    align-items: center;
    gap: 8px;
    margin: 4px 22px 20px !important;
    padding: 9px 18px;
    background: #e8f0fd;
    color: #1a4fa0 !important;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none !important;
    border-radius: 8px;
    border: 1px solid #cfe0fc;
    transition: all 0.22s ease;
}
.bl-sidebar-about-link:hover {
    background: #1a4fa0;
    color: #ffffff !important;
    border-color: #1a4fa0;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(26, 79, 160, 0.2);
}
.bl-sidebar-about-link i {
    font-size: 12px;
    transition: transform 0.2s ease;
}
.bl-sidebar-about-link:hover i {
    transform: translateX(3px);
}
.bl-sidebar-card > a[style*="display:flex"] {
    transition: background 0.2s ease;
}
.bl-sidebar-card > a[style*="display:flex"]:hover {
    background: #f8fafc;
}

/* Related Products Section */
.bl-related-section {
    background: #f1f5f9;
    padding: 60px 0 70px;
    border-top: 1px solid #e2e8f0;
}
.bl-related-title {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 24px;
    font-weight: 800;
    color: #0c1e3d;
    letter-spacing: -0.015em;
    margin-bottom: 8px;
}
.bl-related-sub {
    color: #64748b;
    font-size: 15px;
    margin-bottom: 35px;
}
.bl-product-tile {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px 16px;
    color: #0c1e3d;
    font-size: 13.5px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.25s ease;
    box-shadow: 0 2px 8px rgba(12, 30, 61, 0.04);
    height: 100%;
}
.bl-product-tile:hover {
    box-shadow: 0 10px 24px rgba(26, 79, 160, 0.14);
    transform: translateY(-4px);
    color: #1a4fa0;
    border-color: #1a4fa0;
    text-decoration: none;
}
.bl-pt-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    background: #e8f0fd;
    border-radius: 50%;
    font-size: 22px;
    margin-bottom: 12px;
}

/* Mobile & Tablet Responsiveness */
@media (max-width: 991px) {
    .page-title-layout2 { padding: 60px 0 35px !important; }
    .bl-hero-img img { height: 300px; }
    .blog-single { padding: 40px 0 60px; }
}
@media (max-width: 767px) {
    .bl-hero-img img { height: 220px; }
    .bl-h1 { font-size: 21px; }
    .bl-h2 { font-size: 18px; }
    .bl-cta { padding: 30px 20px; }
    .bl-box { padding: 18px 16px; }
}
</style>
