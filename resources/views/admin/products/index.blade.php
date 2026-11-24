@extends('admin.layouts.app')

@section('title', 'Manage Products')

@section('content')
<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="h3 fw-bold mb-1">Product Catalog</h1>
        <p class="text-muted small mb-0">Browse, filter, edit, and manage all chemical compounds, specifications, and SEO metadata.</p>
    </div>
    <div>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i> Add New Product
        </a>
    </div>
</div>

{{-- Filters Card --}}
<div class="card-custom mb-4 p-3 bg-white">
    <form action="{{ route('admin.products.index') }}" method="GET" class="row g-2 align-items-center">
        <div class="col-md-5">
            <div class="input-group input-group-sm">
                <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-search"></i></span>
                <input type="text" name="search" class="form-control border-start-0" placeholder="Search by name, slug, CAS No, formula..." value="{{ request('search') }}">
            </div>
        </div>

        <div class="col-md-3">
            <select name="category" class="form-select form-select-sm" onchange="this.form.submit()">
                <option value="">All Categories</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat }}" {{ request('category') === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                <option value="">All Statuses</option>
                <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
            </select>
        </div>

        <div class="col-md-2 d-flex gap-1">
            <button type="submit" class="btn btn-sm btn-primary flex-grow-1">Filter</button>
            @if(request()->hasAny(['search', 'category', 'status']))
                <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline-secondary" title="Reset Filters"><i class="bi bi-x-lg"></i></a>
            @endif
        </div>
    </form>

    {{-- Quick 1-Click Category Filter Tabs --}}
    <div class="d-flex flex-wrap gap-2 pt-2 border-top mt-3">
        <a href="{{ route('admin.products.index', array_merge(request()->except(['category', 'page']), [])) }}" class="btn btn-sm py-1 px-3 rounded-pill {{ !request('category') ? 'btn-primary' : 'btn-light border text-secondary' }}">
            All Families ({{ \App\Models\Product::count() }})
        </a>
        <a href="{{ route('admin.products.index', array_merge(request()->except(['category', 'page']), ['category' => 'Sodium Phosphate'])) }}" class="btn btn-sm py-1 px-3 rounded-pill {{ request('category') === 'Sodium Phosphate' ? 'btn-primary' : 'btn-light border text-secondary' }}">
            🧪 Sodium Phosphate ({{ \App\Models\Product::where('category', 'Sodium Phosphate')->count() }})
        </a>
        <a href="{{ route('admin.products.index', array_merge(request()->except(['category', 'page']), ['category' => 'Potassium Phosphate'])) }}" class="btn btn-sm py-1 px-3 rounded-pill {{ request('category') === 'Potassium Phosphate' ? 'btn-primary' : 'btn-light border text-secondary' }}">
            ⚗️ Potassium Phosphate ({{ \App\Models\Product::where('category', 'Potassium Phosphate')->count() }})
        </a>
        <a href="{{ route('admin.products.index', array_merge(request()->except(['category', 'page']), ['category' => 'Ammonium Phosphate'])) }}" class="btn btn-sm py-1 px-3 rounded-pill {{ request('category') === 'Ammonium Phosphate' ? 'btn-primary' : 'btn-light border text-secondary' }}">
            🔬 Ammonium Phosphate ({{ \App\Models\Product::where('category', 'Ammonium Phosphate')->count() }})
        </a>
    </div>
</div>

{{-- Products Table Card --}}
<div class="card-custom">
    <div class="card-custom-header">
        <div class="d-flex align-items-center gap-2">
            <span class="fw-bold">All Products</span>
            <span class="badge bg-primary rounded-pill">{{ $products->total() }}</span>
        </div>
        <div class="small text-muted">Showing {{ $products->firstItem() ?? 0 }} to {{ $products->lastItem() ?? 0 }} of {{ $products->total() }}</div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light text-muted small text-uppercase">
                <tr>
                    <th scope="col" style="width: 60px;">Image</th>
                    <th scope="col">Product Name / URL</th>
                    <th scope="col" style="width: 140px;">CAS / Formula</th>
                    <th scope="col" style="width: 180px;">Category</th>
                    <th scope="col" style="width: 110px;">Status</th>
                    <th scope="col" style="width: 140px;" class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>
                            <img src="{{ $product->featured_image_url }}" alt="{{ $product->name }}" class="rounded object-fit-cover shadow-sm" style="width: 50px; height: 38px;" onerror="this.onerror=null;this.src='{{ asset('assets/images/logo/logo.1.jpg') }}'">
                        </td>
                        <td>
                            <div class="fw-semibold text-dark mb-1">
                                {{ $product->name }}
                                @if($product->is_category)
                                    <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25" style="font-size: 10px;">Category Hub</span>
                                @endif
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-light text-muted font-monospace border" style="font-size: 11px;">/{{ $product->slug }}</span>
                                @if($product->blade_view)
                                    <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25" style="font-size: 10px;" title="Preserved blade template">Blade View</span>
                                @endif
                            </div>
                        </td>
                        <td class="small">
                            @if($product->cas_number)
                                <div class="font-monospace text-primary fw-semibold"><i class="bi bi-tag me-1"></i>{{ $product->cas_number }}</div>
                            @endif
                            @if($product->chemical_formula)
                                <div class="text-muted"><i class="bi bi-flask me-1"></i>{{ $product->chemical_formula }}</div>
                            @endif
                            @if(!$product->cas_number && !$product->chemical_formula)
                                <span class="text-muted fst-italic">Series Hub</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge bg-light text-dark border">{{ $product->category ?: 'General' }}</span>
                        </td>
                        <td>
                            <form action="{{ route('admin.products.toggle-status', $product) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm p-0 border-0" title="Click to toggle status">
                                    @if($product->status === 'published')
                                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1">
                                            <i class="bi bi-check2-circle me-1"></i>Live
                                        </span>
                                    @else
                                        <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-25 px-2 py-1">
                                            <i class="bi bi-dash-circle me-1"></i>Draft
                                        </span>
                                    @endif
                                </button>
                            </form>
                        </td>
                        <td class="text-end">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ url('/' . $product->slug) }}" target="_blank" class="btn btn-outline-secondary" title="View Product Page">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-outline-primary" title="Edit Product">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger" title="Delete Product" data-bs-toggle="modal" data-bs-target="#deleteProductModal{{ $product->id }}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                            <!-- Delete Modal -->
                            <div class="modal fade text-start" id="deleteProductModal{{ $product->id }}" tabindex="-1" aria-labelledby="deleteProductModalLabel{{ $product->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger fs-6" id="deleteProductModalLabel{{ $product->id }}">
                                                <i class="bi bi-exclamation-triangle-fill me-2"></i>Delete Chemical Product
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="mb-2">Are you sure you want to remove this product from the catalog?</p>
                                            <p class="fw-bold text-dark mb-0 bg-light p-2 rounded border">{{ $product->name }} (<code>/{{ $product->slug }}</code>)</p>
                                            <small class="text-muted d-block mt-2">This action cannot be undone.</small>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Yes, Delete Product</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-2 text-secondary"></i>
                            <div class="fw-semibold">No products found matching criteria</div>
                            <p class="small mb-3">Adjust your search or filter parameters.</p>
                            <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-primary">Add Product</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($products->hasPages())
        <div class="card-footer bg-white border-top py-3 d-flex justify-content-center">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
