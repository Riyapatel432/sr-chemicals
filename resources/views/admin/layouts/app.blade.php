<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard') | S R Chemicals</title>
    <link href="{{ asset('assets/images/favicon/favicon_1.jpg') }}" rel="icon">
    
    <!-- Fonts & Bootstrap Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --src-navy-dark: #07101e;
            --src-navy: #0c1e3d;
            --src-navy-light: #142a52;
            --src-orange: #e8792a;
            --src-orange-hover: #d3681d;
            --src-text-muted: #64748b;
            --src-border: #e2e8f0;
            --src-bg-subtle: #f8fafc;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, h6, .brand-font {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Sidebar */
        .admin-sidebar {
            width: 260px;
            background: linear-gradient(180deg, #07101e 0%, #0c1e3d 100%);
            min-height: 100vh;
            color: #e2e8f0;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 1000;
            box-shadow: 4px 0 16px rgba(0,0,0,0.12);
            display: flex;
            flex-direction: column;
        }

        .admin-sidebar .brand {
            padding: 22px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .admin-sidebar .brand img {
            height: 38px;
            width: auto;
            border-radius: 6px;
            background: #fff;
            padding: 2px;
        }

        .admin-sidebar .brand-title {
            font-size: 15px;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.2;
            margin: 0;
        }

        .admin-sidebar .brand-sub {
            font-size: 11px;
            color: var(--src-orange);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .admin-nav {
            padding: 16px 12px;
            flex-grow: 1;
        }

        .admin-nav-header {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #94a3b8;
            font-weight: 700;
            padding: 12px 14px 6px;
        }

        .admin-nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 14px;
            color: #cbd5e1;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.2s ease;
            margin-bottom: 4px;
        }

        .admin-nav-link i {
            font-size: 18px;
            width: 22px;
            text-align: center;
            color: #94a3b8;
            transition: color 0.2s ease;
        }

        .admin-nav-link:hover {
            color: #ffffff;
            background: rgba(255,255,255,0.08);
        }

        .admin-nav-link:hover i {
            color: var(--src-orange);
        }

        .admin-nav-link.active {
            color: #ffffff;
            background: var(--src-orange);
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(232, 121, 42, 0.35);
        }

        .admin-nav-link.active i {
            color: #ffffff;
        }

        .admin-sidebar-footer {
            padding: 16px;
            border-top: 1px solid rgba(255,255,255,0.08);
            background: rgba(0,0,0,0.15);
        }

        /* Main Content wrapper */
        .admin-main {
            margin-left: 260px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Top Header */
        .admin-header {
            background: #ffffff;
            border-bottom: 1px solid var(--src-border);
            padding: 14px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 990;
        }

        .admin-body {
            padding: 28px;
            flex-grow: 1;
        }

        /* Buttons & Badges */
        .btn-orange {
            background-color: var(--src-orange);
            border-color: var(--src-orange);
            color: #ffffff;
            font-weight: 600;
        }

        .btn-orange:hover, .btn-orange:focus {
            background-color: var(--src-orange-hover);
            border-color: var(--src-orange-hover);
            color: #ffffff;
        }

        .card-custom {
            background: #ffffff;
            border: 1px solid var(--src-border);
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.03);
            overflow: hidden;
        }

        .card-custom-header {
            padding: 18px 24px;
            border-bottom: 1px solid var(--src-border);
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* High-visibility Red Validation Messaging */
        .is-invalid {
            border-color: #dc3545 !important;
            background-image: none !important;
        }
        .is-invalid:focus {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
        }
        .invalid-msg, .invalid-feedback {
            color: #dc3545 !important;
            font-size: 13px !important;
            font-weight: 600 !important;
            margin-top: 6px !important;
            display: flex !important;
            align-items: center !important;
            gap: 5px !important;
        }

        /* SERP preview box */
        .serp-preview {
            background: #ffffff;
            border: 1px solid #dfe1e5;
            border-radius: 8px;
            padding: 16px;
            max-width: 650px;
            font-family: arial, sans-serif;
        }
        .serp-url {
            font-size: 12px;
            color: #202124;
            line-height: 1.3;
            margin-bottom: 2px;
            word-break: break-all;
        }
        .serp-title {
            font-size: 18px;
            color: #1a0dab;
            line-height: 1.3;
            font-weight: 400;
            margin-bottom: 4px;
            text-decoration: none;
            display: block;
            cursor: pointer;
        }
        .serp-title:hover {
            text-decoration: underline;
        }
        .serp-snippet {
            font-size: 13px;
            color: #4d5156;
            line-height: 1.45;
            word-break: break-word;
        }

        @media (max-width: 991px) {
            .admin-sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            .admin-sidebar.show {
                transform: translateX(0);
            }
            .admin-main {
                margin-left: 0;
            }
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="brand">
            <img src="{{ asset('assets/images/logo/logo.1.jpg') }}" alt="S R Chemicals Logo">
            <div>
                <h2 class="brand-title">S R Chemicals</h2>
                <div class="brand-sub">Admin CMS</div>
            </div>
        </div>

        <nav class="admin-nav">
            <div class="admin-nav-header">Main Menu</div>
            <a href="{{ route('admin.dashboard') }}" class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid-1x2"></i>
                <span>Dashboard</span>
            </a>

            <div class="admin-nav-header">Blog Manager</div>
            <a href="{{ route('admin.posts.index') }}" class="admin-nav-link {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                <i class="bi bi-journal-text"></i>
                <span>All Blog Posts</span>
            </a>
            <a href="{{ route('admin.posts.create') }}" class="admin-nav-link {{ request()->routeIs('admin.posts.create') ? 'active' : '' }}">
                <i class="bi bi-plus-circle"></i>
                <span>Add New Post</span>
            </a>

            <div class="admin-nav-header">Product Catalog</div>
            <a href="{{ route('admin.products.index') }}" class="admin-nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                <i class="bi bi-box-seam"></i>
                <span>All Products</span>
            </a>
            <a href="{{ route('admin.products.create') }}" class="admin-nav-link {{ request()->routeIs('admin.products.create') ? 'active' : '' }}">
                <i class="bi bi-plus-square"></i>
                <span>Add New Product</span>
            </a>
        </nav>

        <div class="admin-sidebar-footer">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2 overflow-hidden">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 34px; height: 34px; font-weight: 700; flex-shrink: 0;">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <div class="overflow-hidden">
                        <div class="text-white text-truncate fw-600" style="font-size: 13px;">{{ auth()->user()->name ?? 'Administrator' }}</div>
                        <div class="text-muted text-truncate" style="font-size: 11px;">{{ auth()->user()->email ?? '' }}</div>
                    </div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-light border-0" title="Logout">
                        <i class="bi bi-box-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="admin-main">
        <!-- Top Bar -->
        <header class="admin-header">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-sm btn-outline-secondary d-lg-none" id="sidebarToggle" type="button">
                    <i class="bi bi-list fs-5"></i>
                </button>
                <div class="d-flex align-items-center gap-2 text-muted" style="font-size: 13px;">
                    <i class="bi bi-shield-check text-success"></i>
                    <span class="d-none d-sm-inline">Authenticated Admin Session</span>
                </div>
            </div>

            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-orange">
                    <i class="bi bi-plus-lg me-1"></i> New Article
                </a>
                {{-- <a href="{{ route('blog') }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-eye me-1"></i> Live Site
                </a> --}}
            </div>
        </header>

        <!-- Body Area -->
        <main class="admin-body">
            <!-- Flash Notifications -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center gap-2" role="alert">
                    <i class="bi bi-check-circle-fill fs-5"></i>
                    <div>{{ session('success') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('info'))
                <div class="alert alert-info alert-dismissible fade show d-flex align-items-center gap-2" role="alert">
                    <i class="bi bi-info-circle-fill fs-5"></i>
                    <div>{{ session('info') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-4 border-danger" role="alert">
                    <div class="fw-bold mb-2 d-flex align-items-center gap-2">
                        <i class="bi bi-exclamation-triangle-fill fs-5 text-danger"></i>
                        <span>Validation Notice: Please correct the following errors:</span>
                    </div>
                    <ul class="mb-0 ps-3">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
        const adminSidebar = document.getElementById('adminSidebar');
        if (sidebarToggle && adminSidebar) {
            sidebarToggle.addEventListener('click', () => {
                adminSidebar.classList.toggle('show');
            });
        }
    </script>
    @stack('scripts')
</body>
</html>
