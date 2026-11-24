@extends('admin.layouts.app')

@section('title', 'Manage Blog Posts')

@section('content')
<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="h3 fw-bold mb-1">Blog Articles</h1>
        <p class="text-muted small mb-0">Browse, search, edit, and manage all published and draft articles.</p>
    </div>
    <div>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-orange">
            <i class="bi bi-plus-lg me-1"></i> Add New Post
        </a>
    </div>
</div>

{{-- Filters Card --}}
<div class="card-custom mb-4 p-3 bg-white">
    <form action="{{ route('admin.posts.index') }}" method="GET" class="row g-2 align-items-center">
        <div class="col-md-5">
            <div class="input-group input-group-sm">
                <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-search"></i></span>
                <input type="text" name="search" class="form-control border-start-0" placeholder="Search by title, slug, or content..." value="{{ request('search') }}">
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
                <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-outline-secondary" title="Reset Filters"><i class="bi bi-x-lg"></i></a>
            @endif
        </div>
    </form>
</div>

{{-- Posts Table Card --}}
<div class="card-custom">
    <div class="card-custom-header">
        <div class="d-flex align-items-center gap-2">
            <span class="fw-bold">All Posts</span>
            <span class="badge bg-secondary rounded-pill">{{ $posts->total() }}</span>
        </div>
        <div class="small text-muted">Showing {{ $posts->firstItem() ?? 0 }} to {{ $posts->lastItem() ?? 0 }} of {{ $posts->total() }}</div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light text-muted small text-uppercase">
                <tr>
                    <th scope="col" style="width: 70px;">Thumbnail</th>
                    <th scope="col">Title / URL</th>
                    <th scope="col" style="width: 160px;">Category</th>
                    <th scope="col" style="width: 130px;">Date</th>
                    <th scope="col" style="width: 110px;">Status</th>
                    <th scope="col" style="width: 140px;" class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>
                            <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="rounded object-fit-cover shadow-sm" style="width: 54px; height: 40px;" onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/single/1.jpg') }}'">
                        </td>
                        <td>
                            <div class="fw-semibold text-dark mb-1">{{ $post->title }}</div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-light text-muted font-monospace border" style="font-size: 11px;">/blog/{{ $post->slug }}</span>
                                @if($post->blade_view)
                                    <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25" style="font-size: 10px;" title="Linked to custom blade view">Blade View</span>
                                @endif
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light text-dark border">{{ $post->category ?: 'General' }}</span>
                        </td>
                        <td class="small text-muted">
                            <div><i class="bi bi-calendar3 me-1"></i>{{ $post->published_date ? $post->published_date->format('M d, Y') : 'Draft' }}</div>
                            <div style="font-size: 11px;">{{ $post->read_time ?: '5 min read' }}</div>
                        </td>
                        <td>
                            <form action="{{ route('admin.posts.toggle-status', $post) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm p-0 border-0" title="Click to toggle status">
                                    @if($post->status === 'published')
                                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1">
                                            <i class="bi bi-check2-circle me-1"></i>Published
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
                                <a href="{{ url('/blog/' . $post->slug) }}" target="_blank" class="btn btn-outline-secondary" title="View Article on Live Site">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-outline-primary" title="Edit Article">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger" title="Delete Article" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $post->id }}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                            <!-- Delete Confirmation Modal -->
                            <div class="modal fade text-start" id="deleteModal{{ $post->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $post->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger fs-6" id="deleteModalLabel{{ $post->id }}">
                                                <i class="bi bi-exclamation-triangle-fill me-2"></i>Delete Blog Post
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="mb-2">Are you sure you want to delete this article?</p>
                                            <p class="fw-bold text-dark mb-0 bg-light p-2 rounded border">{{ $post->title }}</p>
                                            <small class="text-muted d-block mt-2">This action cannot be undone.</small>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Yes, Delete Post</button>
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
                            <div class="fw-semibold">No articles match your criteria</div>
                            <p class="small mb-3">Try adjusting your search query or filters.</p>
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-orange">Create New Post</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($posts->hasPages())
        <div class="card-footer bg-white border-top py-3 d-flex justify-content-center">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
