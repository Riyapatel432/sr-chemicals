@extends('admin.layouts.app')

@section('title', $post->exists ? 'Edit: ' . $post->title : 'Create New Blog Post')

@section('content')
<form action="{{ $post->exists ? route('admin.posts.update', $post) : route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" id="postForm" novalidate>
    @csrf
    @if($post->exists)
        @method('PUT')
    @endif

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
        <div>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-arrow-left"></i> Back</a>
                <h1 class="h4 fw-bold mb-0">{{ $post->exists ? 'Edit Article' : 'Compose New Article' }}</h1>
            </div>
            <p class="text-muted small mt-1 mb-0">{{ $post->exists ? 'Update content, featured imagery, and SEO configurations.' : 'Draft a new phosphate chemistry insight or export guide.' }}</p>
        </div>
        <div class="d-flex align-items-center gap-2">
            @if($post->exists)
                <a href="{{ url('/blog/' . $post->slug) }}" target="_blank" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Preview on Site
                </a>
            @endif
            <button type="submit" name="status" value="draft" class="btn btn-outline-dark btn-sm">
                <i class="bi bi-file-earmark me-1"></i> Save Draft
            </button>
            <button type="submit" name="status" value="published" class="btn btn-orange btn-sm">
                <i class="bi bi-check-circle-fill me-1"></i> {{ $post->exists ? 'Update & Publish' : 'Publish Article' }}
            </button>
        </div>
    </div>

    <div class="row g-4">
        {{-- Left / Main Column: Article Content --}}
        <div class="col-lg-8">
            <div class="card-custom mb-4 p-4">
                {{-- Title --}}
                <div class="mb-3">
                    <label for="title" class="form-label fw-bold">Article Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg fw-semibold @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" placeholder="e.g. Pharma & Analytical Grade Phosphate Salts Manufacturer" autofocus>
                    <div id="titleErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('title')
                        <div class="invalid-msg" id="titleErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Slug --}}
                <div class="mb-3">
                    <label for="slug" class="form-label fw-semibold small text-secondary">URL Slug <span class="text-danger">*</span></label>
                    <div class="input-group input-group-sm has-validation">
                        <span class="input-group-text bg-light text-muted">https://srchems.com/blog/</span>
                        <input type="text" class="form-control font-monospace @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" placeholder="pharma-grade-phosphate-salts">
                        <button class="btn btn-outline-secondary" type="button" id="btnAutoSlug" title="Re-sync from Title"><i class="bi bi-arrow-repeat"></i> Auto-Generate</button>
                    </div>
                    <div id="slugErrorClient" class="invalid-msg" style="display: none;"></div>
                    <small class="text-muted" style="font-size: 11px;">Must be unique. Used in the canonical URL and search engines.</small>
                    @error('slug')
                        <div class="invalid-msg" id="slugErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Excerpt --}}
                <div class="mb-3">
                    <label for="excerpt" class="form-label fw-bold">Short Excerpt / Summary <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" rows="2" placeholder="Brief summary of this article displayed on the /blog listing page cards...">{{ old('excerpt', $post->excerpt) }}</textarea>
                    <div id="excerptErrorClient" class="invalid-msg" style="display: none;"></div>
                    <small class="text-muted" style="font-size: 11px;">Used on blog cards and as fallback meta description.</small>
                    @error('excerpt')
                        <div class="invalid-msg" id="excerptErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Rich Content Editor --}}
                <div class="mb-2">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="form-label fw-bold mb-0">Article Body Content <span class="text-danger">*</span></label>
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-outline-secondary btn-sm" id="btnEditorVisual"><i class="bi bi-eye"></i> Visual</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm active" id="btnEditorHtml"><i class="bi bi-code-slash"></i> HTML Source</button>
                        </div>
                    </div>

                    {{-- Toolbar for Quick Formatting --}}
                    <div class="p-2 bg-light border border-bottom-0 rounded-top d-flex flex-wrap gap-1 align-items-center" id="editorToolbar">
                        <button type="button" class="btn btn-sm btn-white border bg-white" data-cmd="formatBlock" data-val="h2" title="Heading 2"><b>H2</b></button>
                        <button type="button" class="btn btn-sm btn-white border bg-white" data-cmd="formatBlock" data-val="h3" title="Heading 3"><b>H3</b></button>
                        <button type="button" class="btn btn-sm btn-white border bg-white" data-cmd="bold" title="Bold"><i class="bi bi-type-bold"></i></button>
                        <button type="button" class="btn btn-sm btn-white border bg-white" data-cmd="italic" title="Italic"><i class="bi bi-type-italic"></i></button>
                        <span class="vr mx-1"></span>
                        <button type="button" class="btn btn-sm btn-white border bg-white" data-cmd="insertUnorderedList" title="Bullet List"><i class="bi bi-list-ul"></i></button>
                        <button type="button" class="btn btn-sm btn-white border bg-white" data-cmd="insertOrderedList" title="Numbered List"><i class="bi bi-list-ol"></i></button>
                        <button type="button" class="btn btn-sm btn-white border bg-white" id="btnInsertTable" title="Insert Table"><i class="bi bi-table"></i> Table</button>
                        <span class="vr mx-1"></span>
                        <button type="button" class="btn btn-sm btn-white border bg-white" id="btnInsertLink" title="Insert Link"><i class="bi bi-link-45deg"></i> Link</button>
                        <button type="button" class="btn btn-sm btn-white border bg-white" id="btnInsertImg" title="Insert Image Tag"><i class="bi bi-image"></i> Image</button>
                        <button type="button" class="btn btn-sm btn-white border bg-white text-danger" id="btnClearFormatting" title="Clear Formatting"><i class="bi bi-eraser"></i></button>
                    </div>

                    {{-- Visual Editable Div --}}
                    <div id="visualEditor" contenteditable="true" class="form-control p-3 border-top-0 rounded-bottom" style="min-height: 420px; max-height: 700px; overflow-y: auto; display: none;">
                        {!! old('content', $post->content) !!}
                    </div>

                    {{-- HTML Textarea --}}
                    <textarea class="form-control font-monospace border-top-0 rounded-bottom @error('content') is-invalid @enderror" id="content" name="content" rows="18" style="font-size: 13px;" placeholder="Write HTML content here or use the visual editor...">{{ old('content', $post->content) }}</textarea>
                    <div id="contentErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('content')
                        <div class="invalid-msg" id="contentErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- SEO & Google SERP Preview Card --}}
            <div class="card-custom mb-4 p-4 border-start border-4 border-warning">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <h5 class="fw-bold mb-0"><i class="bi bi-google me-2 text-danger"></i>Search Engine Optimization (SEO)</h5>
                        <small class="text-muted">Maintain optimal metadata, SERP snippet appearance, and canonical rankings.</small>
                    </div>
                    <span class="badge bg-warning bg-opacity-25 text-dark"><i class="bi bi-shield-check"></i> High Priority</span>
                </div>

                {{-- Live Google Search Preview --}}
                <div class="mb-4">
                    <label class="form-label small fw-bold text-uppercase text-muted">Google SERP Snippet Preview</label>
                    <div class="serp-preview">
                        <div class="serp-url" id="serpPreviewUrl">https://srchems.com › blog › <span id="serpSlugText">{{ $post->slug ?: 'your-slug' }}</span></div>
                        <a href="javascript:void(0)" class="serp-title" id="serpPreviewTitle">{{ $post->meta_title ?: ($post->title ?: 'Article Title | S R Chemicals') }}</a>
                        <div class="serp-snippet" id="serpPreviewDesc">{{ $post->meta_description ?: ($post->excerpt ?: 'Read our chemical industry guide and high purity phosphate salts technical insights from S R Chemicals.') }}</div>
                    </div>
                </div>

                {{-- Meta Title --}}
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <label for="meta_title" class="form-label fw-semibold small">Meta Title Tag <span class="text-muted fw-normal">(Optional)</span></label>
                        <small class="text-muted"><span id="metaTitleCount">0</span>/60 characters</small>
                    </div>
                    <input type="text" class="form-control form-control-sm @error('meta_title') is-invalid @enderror" id="meta_title" name="meta_title" value="{{ old('meta_title', $post->meta_title) }}" placeholder="e.g. Pharma Grade Phosphate Salts Manufacturer | S R Chemicals">
                    @error('meta_title')
                        <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Meta Description --}}
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <label for="meta_description" class="form-label fw-semibold small">Meta Description Tag <span class="text-muted fw-normal">(Optional)</span></label>
                        <small class="text-muted"><span id="metaDescCount">0</span>/160 characters</small>
                    </div>
                    <textarea class="form-control form-control-sm @error('meta_description') is-invalid @enderror" id="meta_description" name="meta_description" rows="2" placeholder="Scale your supply chain with ISO-certified AR, LR, BP, and IP grade phosphate salts from S R Chemicals...">{{ old('meta_description', $post->meta_description) }}</textarea>
                    @error('meta_description')
                        <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Meta Keywords --}}
                <div class="mb-3">
                    <label for="meta_keywords" class="form-label fw-semibold small">Meta Keywords <span class="text-muted fw-normal">(Optional)</span></label>
                    <input type="text" class="form-control form-control-sm" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', $post->meta_keywords) }}" placeholder="pharma grade phosphate, AR grade, LR grade, sodium phosphate supplier">
                    <small class="text-muted" style="font-size: 11px;">Comma-separated keywords.</small>
                </div>

                {{-- Canonical URL --}}
                <div class="mb-3">
                    <label for="canonical_url" class="form-label fw-semibold small">Canonical URL Override <span class="text-muted fw-normal">(Optional)</span></label>
                    <input type="url" class="form-control form-control-sm font-monospace @error('canonical_url') is-invalid @enderror" id="canonical_url" name="canonical_url" value="{{ old('canonical_url', $post->canonical_url) }}" placeholder="https://srchems.com/blog/{{ $post->slug }}">
                    <div id="canonicalUrlErrorClient" class="invalid-msg" style="display: none;"></div>
                    <small class="text-muted" style="font-size: 11px;">Leave empty to automatically use the standard post URL.</small>
                    @error('canonical_url')
                        <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Open Graph Details Collapsible --}}
                <div class="border rounded p-3 bg-light">
                    <a class="text-decoration-none fw-semibold small d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#ogCollapse" role="button">
                        <span><i class="bi bi-share me-1 text-primary"></i> Open Graph &amp; Social Meta Tags (Facebook, LinkedIn, Twitter) <span class="text-muted fw-normal">(Optional)</span></span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse mt-3" id="ogCollapse">
                        <div class="mb-2">
                            <label for="og_title" class="form-label small">OG Title</label>
                            <input type="text" class="form-control form-control-sm" id="og_title" name="og_title" value="{{ old('og_title', $post->og_title) }}" placeholder="Defaults to Meta Title">
                        </div>
                        <div class="mb-2">
                            <label for="og_description" class="form-label small">OG Description</label>
                            <textarea class="form-control form-control-sm" id="og_description" name="og_description" rows="2" placeholder="Defaults to Meta Description">{{ old('og_description', $post->og_description) }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label for="og_image" class="form-label small">OG Image URL</label>
                            <input type="text" class="form-control form-control-sm font-monospace" id="og_image" name="og_image" value="{{ old('og_image', $post->og_image) }}" placeholder="e.g. https://srchems.com/assets/images/blog/...">
                        </div>
                    </div>
                </div>

                {{-- Structured Schema JSON-LD --}}
                <div class="border rounded p-3 bg-light mt-3">
                    <a class="text-decoration-none fw-semibold small d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#schemaCollapse" role="button">
                        <span><i class="bi bi-diagram-2 me-1 text-success"></i> Custom Schema / Structured Data (JSON-LD) <span class="text-muted fw-normal">(Optional)</span></span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse mt-3" id="schemaCollapse">
                        <textarea class="form-control font-monospace form-control-sm" id="schema_markup" name="schema_markup" rows="4" placeholder="Optional: <script type=&quot;application/ld+json&quot;>{ ... }</script>">{{ old('schema_markup', $post->schema_markup) }}</textarea>
                        <small class="text-muted" style="font-size: 11px;">Leave empty to use automatic Article schema.</small>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right / Sidebar Column: Meta, Publishing, Image --}}
        <div class="col-lg-4">
            {{-- Publishing Card --}}
            <div class="card-custom mb-4 p-3 bg-white">
                <h6 class="fw-bold mb-3 border-bottom pb-2"><i class="bi bi-sliders me-1 text-primary"></i> Publishing Settings</h6>

                <div class="mb-3">
                    <label for="status" class="form-label fw-bold small">Post Status <span class="text-danger">*</span></label>
                    <select class="form-select form-select-sm @error('status') is-invalid @enderror" id="status" name="status">
                        <option value="published" {{ old('status', $post->status) === 'published' ? 'selected' : '' }}>🟢 Published (Public)</option>
                        <option value="draft" {{ old('status', $post->status) === 'draft' ? 'selected' : '' }}>⚪ Draft (Hidden from Public)</option>
                    </select>
                    <div id="statusErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('status')
                        <div class="invalid-msg" id="statusErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="published_date" class="form-label fw-bold small">Publication Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control form-control-sm @error('published_date') is-invalid @enderror" id="published_date" name="published_date" value="{{ old('published_date', $post->published_date ? $post->published_date->format('Y-m-d') : now()->format('Y-m-d')) }}">
                    <div id="publishedDateErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('published_date')
                        <div class="invalid-msg" id="publishedDateErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label fw-bold small">Author Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author', $post->author ?: 'S R Chemicals') }}">
                    <div id="authorErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('author')
                        <div class="invalid-msg" id="authorErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="read_time" class="form-label fw-semibold small">Estimated Read Time <span class="text-muted fw-normal">(Optional)</span></label>
                    <input type="text" class="form-control form-control-sm @error('read_time') is-invalid @enderror" id="read_time" name="read_time" value="{{ old('read_time', $post->read_time ?: '5 min read') }}" placeholder="5 min read">
                    @error('read_time')
                        <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Category Card --}}
            <div class="card-custom mb-4 p-3 bg-white">
                <h6 class="fw-bold mb-3 border-bottom pb-2"><i class="bi bi-tag me-1 text-primary"></i> Category</h6>
                <div class="mb-3">
                    <label for="category" class="form-label fw-bold small">Category Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm @error('category') is-invalid @enderror" id="category" name="category" list="categoryOptions" value="{{ old('category', $post->category ?: 'Industry Insight') }}" placeholder="Type or select category">
                    <div id="categoryErrorClient" class="invalid-msg" style="display: none;"></div>
                    <datalist id="categoryOptions">
                        @foreach($existingCategories as $cat)
                            <option value="{{ $cat }}">
                        @endforeach
                    </datalist>
                    @error('category')
                        <div class="invalid-msg" id="categoryErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>
                <div class="small text-muted mb-2">Popular Categories:</div>
                <div class="d-flex flex-wrap gap-1">
                    <button type="button" class="btn btn-sm btn-light border py-0 px-2 cat-pill" data-cat="Industry Insight">Industry Insight</button>
                    <button type="button" class="btn btn-sm btn-light border py-0 px-2 cat-pill" data-cat="Procurement Guide">Procurement Guide</button>
                    <button type="button" class="btn btn-sm btn-light border py-0 px-2 cat-pill" data-cat="Technical Guide">Technical Guide</button>
                    <button type="button" class="btn btn-sm btn-light border py-0 px-2 cat-pill" data-cat="Water Treatment">Water Treatment</button>
                    <button type="button" class="btn btn-sm btn-light border py-0 px-2 cat-pill" data-cat="Export & Logistics">Export & Logistics</button>
                </div>
            </div>

            {{-- Featured Image Card --}}
            <div class="card-custom mb-4 p-3 bg-white">
                <h6 class="fw-bold mb-3 border-bottom pb-2"><i class="bi bi-image me-1 text-primary"></i> Featured Image</h6>

                {{-- Image Preview --}}
                <div class="mb-3 text-center bg-light p-2 rounded border">
                    <img id="imagePreview" src="{{ $post->featured_image_url }}" alt="Preview" class="img-fluid rounded object-fit-cover" style="max-height: 180px;" onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/single/1.jpg') }}'">
                </div>

                <div class="mb-3">
                    <label for="image_file" class="form-label fw-semibold small">Upload New Image <span class="text-muted fw-normal">(Optional)</span></label>
                    <input class="form-control form-control-sm @error('image_file') is-invalid @enderror" type="file" id="image_file" name="image_file" accept="image/*">
                    <div id="imageFileErrorClient" class="invalid-msg" style="display: none;"></div>
                    <small class="text-muted" style="font-size: 11px;">Recommended: 1200x630 or 800x500 JPG/PNG/WebP (Max 5MB).</small>
                    @error('image_file')
                        <div class="invalid-msg" id="imageFileErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="featured_image" class="form-label fw-semibold small">Or Image Path / URL <span class="text-muted fw-normal">(Optional)</span></label>
                    <input type="text" class="form-control form-control-sm font-monospace" id="featured_image" name="featured_image" value="{{ old('featured_image', $post->featured_image) }}" placeholder="assets/images/blog/...">
                </div>

                <div class="mb-2">
                    <label for="image_alt" class="form-label fw-semibold small">Image Alt Text (SEO) <span class="text-muted fw-normal">(Optional)</span></label>
                    <input type="text" class="form-control form-control-sm" id="image_alt" name="image_alt" value="{{ old('image_alt', $post->image_alt) }}" placeholder="Descriptive alt text for image">
                </div>
            </div>

            @if($post->exists && $post->blade_view)
                <div class="card-custom mb-4 p-3 bg-light border">
                    <h6 class="fw-bold mb-2 text-info"><i class="bi bi-info-circle me-1"></i> Blade Template Link</h6>
                    <p class="small text-muted mb-0">This article is tied to blade template <code>{{ $post->blade_view }}.blade.php</code> ensuring 100% preservation of all legacy widgets, tables, and exact headings.</p>
                </div>
            @endif

            {{-- Save Action Card in Last --}}
            <div class="card-custom mb-4 p-3 bg-white">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-orange btn-lg fw-semibold shadow-sm">
                        <i class="bi bi-save me-1"></i> Save Article
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Action Bar --}}
    <div class="card-custom p-3 bg-white d-flex align-items-center justify-content-between flex-wrap gap-2 mt-2 mb-4">
        <span class="text-muted small"><i class="bi bi-info-circle me-1"></i> Make sure all required fields marked with <span class="text-danger">*</span> are completed.</span>
        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary btn-sm">Cancel</a>
            <button type="submit" class="btn btn-orange px-4">
                <i class="bi bi-save me-1"></i> Save Article
            </button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    const autoSlugBtn = document.getElementById('btnAutoSlug');
    const excerptInput = document.getElementById('excerpt');
    const metaTitleInput = document.getElementById('meta_title');
    const metaDescInput = document.getElementById('meta_description');

    const serpTitle = document.getElementById('serpPreviewTitle');
    const serpSlug = document.getElementById('serpSlugText');
    const serpDesc = document.getElementById('serpPreviewDesc');

    const titleCount = document.getElementById('metaTitleCount');
    const descCount = document.getElementById('metaDescCount');

    // Auto slugify function
    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')
            .replace(/[^\w\-]+/g, '')
            .replace(/\-\-+/g, '-')
            .replace(/^-+/, '')
            .replace(/-+$/, '');
    }

    if (autoSlugBtn && titleInput && slugInput) {
        autoSlugBtn.addEventListener('click', function() {
            if (titleInput.value) {
                slugInput.value = slugify(titleInput.value);
                updateSerp();
            }
        });
    }

    // Category pills click
    document.querySelectorAll('.cat-pill').forEach(btn => {
        btn.addEventListener('click', function () {
            document.getElementById('category').value = this.dataset.cat;
        });
    });

    // Image preview on file selection
    const imageFileInput = document.getElementById('image_file');
    const imagePreview = document.getElementById('imagePreview');
    if (imageFileInput && imagePreview) {
        imageFileInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // SERP live preview updater
    function updateSerp() {
        const slug = slugInput.value.trim() || 'your-slug';
        const title = metaTitleInput.value.trim() || (titleInput.value.trim() ? titleInput.value.trim() + ' | S R Chemicals' : 'Article Title | S R Chemicals');
        const desc = metaDescInput.value.trim() || (excerptInput.value.trim() || 'Read chemical industry insights from S R Chemicals.');

        serpSlug.textContent = slug;
        serpTitle.textContent = title;
        serpDesc.textContent = desc;

        titleCount.textContent = metaTitleInput.value.length;
        descCount.textContent = metaDescInput.value.length;

        titleCount.className = metaTitleInput.value.length > 60 ? 'text-danger fw-bold' : 'text-muted';
        descCount.className = metaDescInput.value.length > 160 ? 'text-danger fw-bold' : 'text-muted';
    }

    titleInput.addEventListener('input', updateSerp);
    slugInput.addEventListener('input', updateSerp);
    excerptInput.addEventListener('input', updateSerp);
    metaTitleInput.addEventListener('input', updateSerp);
    metaDescInput.addEventListener('input', updateSerp);
    updateSerp();

    // Editor visual vs HTML toggle
    const btnVisual = document.getElementById('btnEditorVisual');
    const btnHtml = document.getElementById('btnEditorHtml');
    const visualDiv = document.getElementById('visualEditor');
    const htmlTextarea = document.getElementById('content');

    btnVisual.addEventListener('click', function () {
        visualDiv.innerHTML = htmlTextarea.value;
        visualDiv.style.display = 'block';
        htmlTextarea.style.display = 'none';
        btnVisual.classList.add('active');
        btnHtml.classList.remove('active');
    });

    btnHtml.addEventListener('click', function () {
        htmlTextarea.value = visualDiv.innerHTML;
        htmlTextarea.style.display = 'block';
        visualDiv.style.display = 'none';
        btnHtml.classList.add('active');
        btnVisual.classList.remove('active');
    });

    // Form Validation (No HTML5 Tooltips - Proper Red Colour Messages)
    const postForm = document.getElementById('postForm');
    const titleErr = document.getElementById('titleErrorClient');
    const slugErr = document.getElementById('slugErrorClient');
    const excerptErr = document.getElementById('excerptErrorClient');
    const contentErr = document.getElementById('contentErrorClient');
    const categoryInput = document.getElementById('category');
    const categoryErr = document.getElementById('categoryErrorClient');
    const statusSelect = document.getElementById('status');
    const statusErr = document.getElementById('statusErrorClient');
    const publishedDateInput = document.getElementById('published_date');
    const publishedDateErr = document.getElementById('publishedDateErrorClient');
    const authorInput = document.getElementById('author');
    const authorErr = document.getElementById('authorErrorClient');
    const canonicalUrlInput = document.getElementById('canonical_url');
    const canonicalUrlErr = document.getElementById('canonicalUrlErrorClient');
    const imageFileErr = document.getElementById('imageFileErrorClient');

    function clearError(input, clientErr, serverErrId) {
        if (!input) return;
        input.classList.remove('is-invalid');
        if (clientErr) clientErr.style.display = 'none';
        if (serverErrId) {
            const srv = document.getElementById(serverErrId);
            if (srv) srv.style.display = 'none';
        }
    }

    if (titleInput) titleInput.addEventListener('input', () => clearError(titleInput, titleErr, 'titleErrorServer'));
    if (slugInput) slugInput.addEventListener('input', () => clearError(slugInput, slugErr, 'slugErrorServer'));
    if (excerptInput) excerptInput.addEventListener('input', () => clearError(excerptInput, excerptErr, 'excerptErrorServer'));
    if (htmlTextarea) htmlTextarea.addEventListener('input', () => clearError(htmlTextarea, contentErr, 'contentErrorServer'));
    if (visualDiv) visualDiv.addEventListener('input', () => {
        clearError(visualDiv, contentErr, 'contentErrorServer');
        clearError(htmlTextarea, contentErr, 'contentErrorServer');
    });
    if (categoryInput) categoryInput.addEventListener('input', () => clearError(categoryInput, categoryErr, 'categoryErrorServer'));
    if (statusSelect) statusSelect.addEventListener('change', () => clearError(statusSelect, statusErr, 'statusErrorServer'));
    if (publishedDateInput) publishedDateInput.addEventListener('input', () => clearError(publishedDateInput, publishedDateErr, 'publishedDateErrorServer'));
    if (authorInput) authorInput.addEventListener('input', () => clearError(authorInput, authorErr, 'authorErrorServer'));
    if (imageFileInput) imageFileInput.addEventListener('change', () => clearError(imageFileInput, imageFileErr, 'imageFileErrorServer'));
    if (canonicalUrlInput) canonicalUrlInput.addEventListener('input', () => clearError(canonicalUrlInput, canonicalUrlErr, null));

    // Also clear category error on pill click
    document.querySelectorAll('.cat-pill').forEach(btn => {
        btn.addEventListener('click', function () {
            clearError(categoryInput, categoryErr, 'categoryErrorServer');
        });
    });

    // Sync before submit & client-side validation
    if (postForm) {
        postForm.addEventListener('submit', function (e) {
            if (visualDiv && visualDiv.style.display !== 'none') {
                htmlTextarea.value = visualDiv.innerHTML;
            }

            let isValid = true;
            const titleVal = titleInput ? titleInput.value.trim() : '';
            const slugVal = slugInput ? slugInput.value.trim() : '';
            const excerptVal = excerptInput ? excerptInput.value.trim() : '';
            const contentVal = (visualDiv && visualDiv.style.display !== 'none')
                ? visualDiv.innerText.trim()
                : (htmlTextarea ? htmlTextarea.value.trim() : '');
            const categoryVal = categoryInput ? categoryInput.value.trim() : '';
            const statusVal = statusSelect ? statusSelect.value.trim() : '';
            const pubDateVal = publishedDateInput ? publishedDateInput.value.trim() : '';
            const authorVal = authorInput ? authorInput.value.trim() : '';
            const canonicalVal = canonicalUrlInput ? canonicalUrlInput.value.trim() : '';

            // 1. Article Title (Required)
            if (!titleVal) {
                isValid = false;
                titleInput.classList.add('is-invalid');
                if (titleErr) {
                    titleErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Article Title is required. Please provide a headline for this post.';
                    titleErr.style.display = 'flex';
                }
            }

            // 2. URL Slug (Required)
            if (!slugVal && titleVal) {
                slugInput.value = slugify(titleVal);
            } else if (!slugVal) {
                isValid = false;
                slugInput.classList.add('is-invalid');
                if (slugErr) {
                    slugErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> A unique URL Slug is required.';
                    slugErr.style.display = 'flex';
                }
            }

            // 3. Excerpt (Required)
            if (!excerptVal) {
                isValid = false;
                excerptInput.classList.add('is-invalid');
                if (excerptErr) {
                    excerptErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Short Excerpt / Summary is required. Please provide a brief description.';
                    excerptErr.style.display = 'flex';
                }
            }

            // 4. Content (Required)
            if (!contentVal) {
                isValid = false;
                if (visualDiv && visualDiv.style.display !== 'none') {
                    visualDiv.classList.add('is-invalid');
                }
                htmlTextarea.classList.add('is-invalid');
                if (contentErr) {
                    contentErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Article Body Content is required. Please write the article content.';
                    contentErr.style.display = 'flex';
                }
            }

            // 5. Category (Required)
            if (!categoryVal) {
                isValid = false;
                categoryInput.classList.add('is-invalid');
                if (categoryErr) {
                    categoryErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Category Name is required. Please select or type a category.';
                    categoryErr.style.display = 'flex';
                }
            }

            // 6. Post Status (Required)
            if (!statusVal) {
                isValid = false;
                statusSelect.classList.add('is-invalid');
                if (statusErr) {
                    statusErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Post Status is required. Please choose Published or Draft.';
                    statusErr.style.display = 'flex';
                }
            }

            // 7. Publication Date (Required)
            if (!pubDateVal) {
                isValid = false;
                publishedDateInput.classList.add('is-invalid');
                if (publishedDateErr) {
                    publishedDateErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Publication Date is required.';
                    publishedDateErr.style.display = 'flex';
                }
            }

            // 8. Author Name (Required)
            if (!authorVal) {
                isValid = false;
                authorInput.classList.add('is-invalid');
                if (authorErr) {
                    authorErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Author Name is required.';
                    authorErr.style.display = 'flex';
                }
            }

            // OPTIONAL: Image File (Only validate size if file chosen)
            if (imageFileInput && imageFileInput.files && imageFileInput.files[0]) {
                const file = imageFileInput.files[0];
                if (file.size > 5 * 1024 * 1024) {
                    isValid = false;
                    imageFileInput.classList.add('is-invalid');
                    if (imageFileErr) {
                        imageFileErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Featured image size cannot exceed 5MB.';
                        imageFileErr.style.display = 'flex';
                    }
                }
            }

            // OPTIONAL: Canonical URL (Only validate format if filled)
            if (canonicalVal && !/^https?:\/\//i.test(canonicalVal)) {
                isValid = false;
                canonicalUrlInput.classList.add('is-invalid');
                if (canonicalUrlErr) {
                    canonicalUrlErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Canonical URL must be a valid URL starting with http:// or https://';
                    canonicalUrlErr.style.display = 'flex';
                }
            }

            if (!isValid) {
                e.preventDefault();
                const firstInvalid = postForm.querySelector('.is-invalid');
                if (firstInvalid) {
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstInvalid.focus();
                }
            }
        });
    }

    // Toolbar commands
    document.querySelectorAll('#editorToolbar button[data-cmd]').forEach(btn => {
        btn.addEventListener('click', function () {
            const cmd = this.dataset.cmd;
            const val = this.dataset.val || null;
            if (visualDiv.style.display === 'none') {
                btnVisual.click();
            }
            visualDiv.focus();
            document.execCommand(cmd, false, val);
        });
    });

    // Insert Table
    document.getElementById('btnInsertTable').addEventListener('click', function () {
        const tableHtml = `
<div class="table-responsive mb-4">
    <table class="table table-bordered bl-table">
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Standard Specification</th>
                <th>Commercial Value</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>Assay (Purity)</td><td>99.0% Min</td><td>Guaranteed</td></tr>
            <tr class="alt"><td>Heavy Metals</td><td>&lt; 10 ppm</td><td>Compliant</td></tr>
        </tbody>
    </table>
</div>`;
        if (visualDiv.style.display !== 'none') {
            document.execCommand('insertHTML', false, tableHtml);
        } else {
            htmlTextarea.value += "\n" + tableHtml + "\n";
        }
    });

    // Insert Link
    document.getElementById('btnInsertLink').addEventListener('click', function () {
        const url = prompt('Enter URL (e.g. https://srchems.com/about):');
        if (url) {
            if (visualDiv.style.display !== 'none') {
                document.execCommand('createLink', false, url);
            } else {
                htmlTextarea.value += `<a href="${url}">Link Text</a>`;
            }
        }
    });

    // Insert Image Tag
    document.getElementById('btnInsertImg').addEventListener('click', function () {
        const url = prompt('Enter image URL or path:');
        if (url) {
            const imgHtml = `<div class="bl-hero-img my-4"><img src="${url}" alt="Chemical product" class="img-fluid rounded"></div>`;
            if (visualDiv.style.display !== 'none') {
                document.execCommand('insertHTML', false, imgHtml);
            } else {
                htmlTextarea.value += "\n" + imgHtml + "\n";
            }
        }
    });

    // Clear Formatting
    document.getElementById('btnClearFormatting').addEventListener('click', function () {
        if (visualDiv.style.display !== 'none') {
            document.execCommand('removeFormat', false, null);
        }
    });
});
</script>
@endpush
