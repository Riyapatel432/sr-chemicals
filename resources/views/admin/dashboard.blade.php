@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="h3 fw-bold mb-1">Enterprise Admin Dashboard</h1>
        <p class="text-muted small mb-0">Manage products, blog articles, SEO health, and chemical catalog data.</p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.products.create') }}" class="btn btn-outline-primary btn-sm">
            <i class="bi bi-box-seam me-1"></i> Add Product
        </a>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-orange btn-sm">
            <i class="bi bi-pencil-square me-1"></i> Write Article
        </a>
    </div>
</div>

{{-- Product Catalog Metrics --}}
<h5 class="fw-bold text-dark mb-3"><i class="bi bi-box-seam text-primary me-2"></i>Product Catalog Overview</h5>
<div class="row g-3 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card-custom p-3 border-start border-4 border-primary">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="text-muted small fw-semibold">Total Products</span>
                <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-2">
                    <i class="bi bi-boxes fs-5"></i>
                </div>
            </div>
            <div class="h2 fw-bold mb-1">{{ $totalProducts }}</div>
            <div class="small text-muted"><i class="bi bi-check2-circle text-success me-1"></i>Across all chemical families</div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card-custom p-3 border-start border-4 border-success">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="text-muted small fw-semibold">Published Products</span>
                <div class="bg-success bg-opacity-10 text-success rounded-3 p-2">
                    <i class="bi bi-check-circle fs-5"></i>
                </div>
            </div>
            <div class="h2 fw-bold mb-1 text-success">{{ $publishedProducts }}</div>
            <div class="small text-muted"><i class="bi bi-globe text-primary me-1"></i>Live in catalog &amp; SEO</div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card-custom p-3 border-start border-4 border-warning">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="text-muted small fw-semibold">Draft Products</span>
                <div class="bg-warning bg-opacity-10 text-warning rounded-3 p-2">
                    <i class="bi bi-file-earmark-lock fs-5"></i>
                </div>
            </div>
            <div class="h2 fw-bold mb-1 text-warning">{{ $draftProducts }}</div>
            <div class="small text-muted"><i class="bi bi-lock me-1"></i>Hidden from catalog</div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card-custom p-3 border-start border-4 border-info">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="text-muted small fw-semibold">Product Families</span>
                <div class="bg-info bg-opacity-10 text-info rounded-3 p-2">
                    <i class="bi bi-diagram-3 fs-5"></i>
                </div>
            </div>
            <div class="h2 fw-bold mb-1 text-info">{{ $productCategoriesCount }}</div>
            <div class="small text-muted"><i class="bi bi-tags me-1"></i>Sodium, Potassium, etc.</div>
        </div>
    </div>
</div>

{{-- Blog Metrics --}}
<h5 class="fw-bold text-dark mb-3"><i class="bi bi-journal-richtext text-danger me-2"></i>Blog &amp; Knowledge Base</h5>
<div class="row g-3 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card-custom p-3">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="text-muted small fw-semibold">Total Articles</span>
                <div class="bg-danger bg-opacity-10 text-danger rounded-3 p-2">
                    <i class="bi bi-journal-text fs-5"></i>
                </div>
            </div>
            <div class="h2 fw-bold mb-1">{{ $totalPosts }}</div>
            <div class="small text-muted"><i class="bi bi-check2-circle text-success me-1"></i>All indexed &amp; tracked</div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card-custom p-3">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="text-muted small fw-semibold">Published Articles</span>
                <div class="bg-success bg-opacity-10 text-success rounded-3 p-2">
                    <i class="bi bi-check-circle fs-5"></i>
                </div>
            </div>
            <div class="h2 fw-bold mb-1 text-success">{{ $publishedPosts }}</div>
            <div class="small text-muted"><i class="bi bi-globe text-primary me-1"></i>Visible on /blog</div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card-custom p-3">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="text-muted small fw-semibold">Draft Articles</span>
                <div class="bg-warning bg-opacity-10 text-warning rounded-3 p-2">
                    <i class="bi bi-file-earmark-text fs-5"></i>
                </div>
            </div>
            <div class="h2 fw-bold mb-1 text-warning">{{ $draftPosts }}</div>
            <div class="small text-muted"><i class="bi bi-lock me-1"></i>Unpublished drafts</div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card-custom p-3">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="text-muted small fw-semibold">Article Categories</span>
                <div class="bg-info bg-opacity-10 text-info rounded-3 p-2">
                    <i class="bi bi-tags fs-5"></i>
                </div>
            </div>
            <div class="h2 fw-bold mb-1 text-info">{{ $categoriesCount }}</div>
            <div class="small text-muted"><i class="bi bi-diagram-2 me-1"></i>Procurement, Insight, etc.</div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    {{-- Products Table --}}
    <div class="col-lg-6">
        <div class="card-custom h-100">
            <div class="card-custom-header">
                <h6 class="fw-bold mb-0"><i class="bi bi-box-seam me-2 text-primary"></i>Recent Products</h6>
                <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline-secondary">Manage All ({{ $totalProducts }})</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-muted small text-uppercase">
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentProducts as $product)
                            <tr>
                                <td>
                                    <div class="fw-semibold text-dark">{{ $product->name }}</div>
                                    <div class="small text-muted font-monospace">/{{ $product->slug }}</div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border">{{ $product->category }}</span>
                                </td>
                                <td>
                                    @if($product->status === 'published')
                                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Live</span>
                                    @else
                                        <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-25">Draft</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-outline-primary" title="Edit Product">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-3 text-muted">No products yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Blog Posts Table --}}
    <div class="col-lg-6">
        <div class="card-custom h-100">
            <div class="card-custom-header">
                <h6 class="fw-bold mb-0"><i class="bi bi-journal-text me-2 text-danger"></i>Recent Blog Articles</h6>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-outline-secondary">Manage All ({{ $totalPosts }})</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-muted small text-uppercase">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentPosts as $post)
                            <tr>
                                <td>
                                    <div class="fw-semibold text-dark text-truncate" style="max-width: 220px;">{{ $post->title }}</div>
                                    <div class="small text-muted font-monospace">/blog/{{ $post->slug }}</div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border">{{ $post->category ?: 'General' }}</span>
                                </td>
                                <td>
                                    @if($post->status === 'published')
                                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Live</span>
                                    @else
                                        <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-25">Draft</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-outline-primary" title="Edit Article">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-3 text-muted">No posts yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
