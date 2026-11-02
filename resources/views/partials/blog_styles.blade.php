<style>
/* =====================================================
   SR Chemicals — Blog Detail Pages Shared Styles
   Colors: Navy #1a2340 | Blue #1a4fa0 | Orange #e8792a
   ===================================================== */

/* Hero Image */
.bl-hero-img { border-radius:10px; overflow:hidden; box-shadow:0 4px 24px rgba(0,0,0,0.12); margin-bottom:32px; width:100% !important; max-width:100% !important; }
.bl-hero-img img { width:100% !important; max-width:100% !important; height:400px; object-fit:cover; display:block; }

/* Post Meta */
.bl-meta { display:flex; align-items:center; flex-wrap:wrap; gap:16px; font-size:14px; color:#888; margin-bottom:24px; }
.bl-meta i { margin-right:5px; }
.bl-badge { background:#e8f0fd; color:#1a4fa0; padding:3px 14px; border-radius:20px; font-weight:700; font-size:12px; }

/* Headings */
.bl-h1 { font-size:26px; font-weight:700; color:#1a2340; line-height:1.4; margin-bottom:20px; }
.bl-h2 { font-size:20px; font-weight:700; color:#1a2340; margin-bottom:18px; margin-top:0; }

/* Paragraphs */
.bl-p { line-height:1.9; color:#4a5568; margin-bottom:16px; font-size:15px; }
.bl-link { color:#1a4fa0; text-decoration:underline; }
.bl-ul { padding-left:22px; color:#4a5568; line-height:2.1; font-size:15px; }
.bl-hr { border-color:#e8edf2; margin:36px 0; }

/* Content Boxes — uniform style, navy left border */
.bl-box {
    background:#f5f8ff;
    border-left:4px solid #1a4fa0;
    border-radius:0 10px 10px 0;
    padding:24px 24px 20px;
}
.bl-box-title { font-size:16px; font-weight:700; color:#1a2340; margin-bottom:10px; }
.bl-box-p { line-height:1.85; color:#4a5568; font-size:14px; margin-bottom:14px; }

/* Formula box */
.bl-formula { background:#fff; border:1px solid #c8dff8; border-radius:8px; padding:14px 20px; font-family:monospace; font-size:15px; color:#1a2340; text-align:center; margin-bottom:14px; }

/* Product Chips */
.bl-chips { display:flex; flex-wrap:wrap; align-items:center; gap:6px; margin-top:4px; }
.bl-chip-label { font-size:13px; font-weight:700; color:#1a2340; }
.bl-chip { display:inline-block; background:#1a2340; color:#fff; font-size:12px; font-weight:600; padding:4px 12px; border-radius:20px; text-decoration:none; transition:background .2s; }
.bl-chip:hover { background:#1a4fa0; color:#fff; }

/* USP Cards */
.bl-usp-card { background:#fff; border:1px solid #e5eaf2; border-radius:10px; padding:20px; height:100%; }
.bl-usp-icon { font-size:26px; margin-bottom:10px; }
.bl-usp-title { font-size:14px; font-weight:700; color:#1a2340; margin-bottom:8px; }
.bl-usp-p { font-size:13px; color:#6b7280; line-height:1.7; margin:0; }

/* CTA Block */
.bl-cta { background:linear-gradient(135deg,#1a2340 0%,#1e3a6e 100%); border-radius:12px; padding:36px 32px; text-align:center; color:#fff; margin-bottom:36px; }
.bl-cta-title { font-size:20px; font-weight:700; margin-bottom:10px; color:#fff; }
.bl-cta-p { font-size:14px; opacity:0.88; margin-bottom:20px; }
.bl-cta-contact { font-size:14px; line-height:2.2; margin-bottom:20px; }
.bl-cta-link { color:#7ecfff; }
.bl-cta-btn { display:inline-block; background:#e8792a; color:#fff; font-size:14px; font-weight:700; padding:12px 28px; border-radius:6px; text-decoration:none; transition:background .2s; }
.bl-cta-btn:hover { background:#d06520; color:#fff; text-decoration:none; }

/* Tags */
.bl-tags { margin-bottom:10px; }
.bl-tag { display:inline-block; background:#e8f0fd; color:#1a4fa0; padding:4px 12px; border-radius:20px; font-size:12px; margin:3px; text-decoration:none; }
.bl-tag:hover { background:#1a4fa0; color:#fff; }

/* Tables */
.bl-table { border-color:#dee2e6; font-size:14px; }
.bl-table thead { background:#1a2340; color:#fff; }
.bl-table thead th { padding:14px 16px; }
.bl-table tbody td { padding:13px 16px; color:#4a5568; }
.bl-table tbody tr.alt { background:#f8f9fa; }
.bl-table .fw-600 { font-weight:600; color:#1a2340; }

/* =====================================================
   SIDEBAR — same style on all pages
   ===================================================== */

/* Quick Contact Widget */
.bl-sidebar-contact { border-radius:10px; overflow:hidden; box-shadow:0 2px 12px rgba(26,35,64,0.1); }
.bl-sc-header { background:#1a2340; color:#fff; font-size:15px; font-weight:700; padding:16px 22px; border-bottom:3px solid #e8792a; }
.bl-sc-body { background:#fff; padding:20px 22px; }
.bl-sc-row { display:flex; align-items:center; gap:10px; margin-bottom:12px; font-size:14px; }
.bl-sc-icon { color:#1a4fa0; font-size:15px; flex-shrink:0; }
.bl-sc-text { color:#4a5568; text-decoration:none; word-break:break-all; }
.bl-sc-text:hover { color:#1a4fa0; }
.bl-sc-btn { display:block; width:100%; background:#e8792a; color:#fff; font-size:14px; font-weight:700; text-align:center; padding:11px 16px; border-radius:6px; text-decoration:none; margin-top:16px; transition:background .2s; }
.bl-sc-btn:hover { background:#d06520; color:#fff; text-decoration:none; }

/* Sidebar Cards */
.bl-sidebar-card { border:1px solid #e5eaf2; border-radius:10px; overflow:hidden; }
.bl-sidebar-card-title { background:#f5f8ff; color:#1a2340; font-size:14px; font-weight:700; padding:14px 20px; border-bottom:2px solid #1a4fa0; }
.bl-sidebar-list { list-style:none; padding:8px 0; margin:0; }
.bl-sidebar-list li { border-bottom:1px solid #f0f3f8; }
.bl-sidebar-list li:last-child { border-bottom:none; }
.bl-sidebar-link { display:flex; justify-content:space-between; align-items:center; padding:11px 20px; color:#4a5568; font-size:14px; text-decoration:none; transition:background .15s; }
.bl-sidebar-link:hover { background:#f5f8ff; color:#1a2340; }
.bl-sidebar-link i { color:#1a4fa0; font-size:11px; }
.bl-sidebar-link-primary { color:#1a4fa0; font-weight:600; }
.bl-sidebar-about-p { font-size:13px; color:#6b7280; line-height:1.8; padding:16px 20px 4px; margin:0; }
.bl-sidebar-about-link { display:block; padding:8px 20px 18px; color:#1a4fa0; font-size:13px; font-weight:600; text-decoration:none; }
.bl-sidebar-about-link:hover { color:#e8792a; }
.bl-sidebar-blog-list { list-style:none; padding:10px 0; margin:0; }
.bl-sidebar-blog-list li { border-bottom:1px solid #f0f3f8; padding:10px 20px; }
.bl-sidebar-blog-list li:last-child { border-bottom:none; }
.bl-sidebar-blog-list a { color:#4a5568; font-size:13px; text-decoration:none; line-height:1.6; }
.bl-sidebar-blog-list a:hover { color:#1a4fa0; }

/* Related Products Section */
.bl-related-section { background:#f4f7fb; padding:60px 0 70px; }
.bl-related-title { font-size:22px; font-weight:700; color:#1a2340; }
.bl-related-sub { color:#777; font-size:15px; }
.bl-product-tile { display:block; background:#fff; border:1px solid #e5eaf2; border-radius:10px; padding:20px 10px; color:#1a2340; font-size:13px; font-weight:600; text-decoration:none; transition:box-shadow .2s, transform .2s; }
.bl-product-tile:hover { box-shadow:0 4px 16px rgba(26,79,160,0.15); transform:translateY(-3px); color:#1a2340; text-decoration:none; }
.bl-pt-icon { display:block; font-size:26px; margin-bottom:8px; }

/* Mobile */
@media (max-width:767px) {
    .bl-hero-img img { height:240px; }
    .bl-h1 { font-size:20px; }
    .bl-h2 { font-size:17px; }
    .bl-cta { padding:28px 20px; }
    .bl-box { padding:18px 16px; }
}
</style>
