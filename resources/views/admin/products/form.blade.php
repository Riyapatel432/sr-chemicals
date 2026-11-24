@extends('admin.layouts.app')

@section('title', $product->exists ? 'Edit: ' . $product->name : 'Create Chemical Product')

@section('content')
<form action="{{ $product->exists ? route('admin.products.update', $product) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data" id="productForm" novalidate>
    @csrf
    @if($product->exists)
        @method('PUT')
    @endif

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
        <div>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-arrow-left"></i> Back</a>
                <h1 class="h4 fw-bold mb-0">{{ $product->exists ? 'Edit Product' : 'Add Chemical Product' }}</h1>
            </div>
            <p class="text-muted small mt-1 mb-0">{{ $product->exists ? 'Update specifications, packaging, imagery, and SEO metadata.' : 'Add a new chemical compound to your catalog with easy 1-click category selection.' }}</p>
        </div>
        <div class="d-flex align-items-center gap-2">
            @if($product->exists)
                <a href="{{ url('/' . $product->slug) }}" target="_blank" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-box-arrow-up-right me-1"></i> View on Site
                </a>
            @endif
            <button type="submit" name="status" value="draft" class="btn btn-outline-dark btn-sm">
                <i class="bi bi-file-earmark me-1"></i> Save as Draft
            </button>
            <button type="submit" name="status" value="published" class="btn btn-primary btn-sm">
                <i class="bi bi-check-circle-fill me-1"></i> {{ $product->exists ? 'Update & Publish' : 'Publish Product' }}
            </button>
        </div>
    </div>

    <div class="row g-4">
        {{-- Left / Main Column --}}
        <div class="col-lg-8">
            <div class="card-custom mb-4 p-4">
                {{-- Product Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Product Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg fw-semibold @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}" placeholder="e.g. Sodium Acid Pyro phosphate" autofocus>
                    <div id="nameErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('name')
                        <div class="invalid-msg" id="nameErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Slug --}}
                <div class="mb-3">
                    <label for="slug" class="form-label fw-semibold small text-secondary">URL Slug <span class="text-danger">*</span></label>
                    <div class="input-group input-group-sm has-validation">
                        <span class="input-group-text bg-light text-muted">https://srchems.com/</span>
                        <input type="text" class="form-control font-monospace @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $product->slug) }}" placeholder="sodium-acid-pyrophosphate">
                        <button class="btn btn-outline-secondary" type="button" id="btnAutoSlug" title="Re-sync from Name"><i class="bi bi-arrow-repeat"></i> Auto-Generate</button>
                    </div>
                    <div id="slugErrorClient" class="invalid-msg" style="display: none;"></div>
                    <small class="text-muted" style="font-size: 11px;">Must be unique. Appears directly at <code>https://srchems.com/[slug]</code>.</small>
                    @error('slug')
                        <div class="invalid-msg" id="slugErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Product Category (Dropdown & Custom Category) --}}
                <div class="mb-4 p-3 bg-light rounded-3 border @error('category') border-danger @enderror">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <label for="categorySelect" class="form-label fw-bold mb-0">
                            <i class="bi bi-folder-check text-primary me-1"></i> Product Category (Chemical Family) <span class="text-danger">*</span>
                        </label>
                        <button type="button" class="btn btn-sm btn-outline-primary py-0 px-2 fw-semibold" id="btnToggleNewCategory" style="font-size: 11px;">
                            <i class="bi bi-plus-circle me-1"></i>+ Add New Category
                        </button>
                    </div>

                    @php
                        $standardCategories = [
                            'Sodium Phosphate',
                            'Potassium Phosphate',
                            'Ammonium Phosphate',
                            'Pyro Phosphate',
                            'TPP Chemical',
                        ];
                        $allCategories = collect($standardCategories)
                            ->merge($existingCategories ?? [])
                            ->push($product->category)
                            ->filter()
                            ->unique()
                            ->values();
                        $currentCategory = old('category', $product->category ?: 'Sodium Phosphate');
                        $isCustom = ($currentCategory === '__custom__' || !empty(old('custom_category')) || (!in_array($currentCategory, $allCategories->toArray()) && !empty($currentCategory)));
                    @endphp

                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-folder2-open text-primary"></i></span>
                        <select class="form-select @error('category') is-invalid @enderror" id="categorySelect" name="category">
                            <option value="">-- Select Product Category --</option>
                            @foreach($allCategories as $cat)
                                <option value="{{ $cat }}" {{ ($currentCategory == $cat && !$isCustom) ? 'selected' : '' }}>
                                    {{ $cat }}
                                </option>
                            @endforeach
                            <option value="__custom__" {{ $isCustom ? 'selected' : '' }}>
                                + Add New / Custom Category...
                            </option>
                        </select>
                    </div>

                    {{-- Custom Category input box --}}
                    <div id="customCategoryGroup" class="mt-2 p-3 bg-white rounded-3 border border-primary shadow-sm" style="display: {{ $isCustom ? 'block' : 'none' }};">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <label for="customCategoryInput" class="form-label fw-bold small text-primary mb-0">
                                <i class="bi bi-pencil-square me-1"></i> New Category Name <span class="text-danger">*</span>
                            </label>
                            <button type="button" class="btn btn-sm btn-link text-muted p-0 text-decoration-none" id="btnCancelCustomCategory" style="font-size: 12px;">
                                <i class="bi bi-x-circle me-1"></i>Cancel & Back to Dropdown
                            </button>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted"><i class="bi bi-tag-fill text-primary"></i></span>
                            <input type="text" class="form-control" id="customCategoryInput" name="custom_category"
                                   value="{{ old('custom_category', $isCustom && $currentCategory !== '__custom__' ? $currentCategory : '') }}"
                                   placeholder="Type new category name (e.g. Calcium Phosphate, Zinc Phosphate)">
                        </div>
                        <small class="text-muted d-block mt-1" style="font-size: 11px;">
                            <i class="bi bi-info-circle me-1"></i>Type the name above. It will be saved as this product's category and automatically added to the dropdown.
                        </small>
                    </div>

                    <div id="categoryErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('category')
                        <div class="invalid-msg" id="categoryErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Technical Identifiers Row --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <label for="cas_number" class="form-label fw-semibold small text-secondary">CAS Registry No. <span class="text-muted fw-normal">(Optional)</span></label>
                        <input type="text" class="form-control form-control-sm font-monospace @error('cas_number') is-invalid @enderror" id="cas_number" name="cas_number" value="{{ old('cas_number', $product->cas_number) }}" placeholder="7758-16-9">
                        @error('cas_number')
                            <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="chemical_formula" class="form-label fw-semibold small text-secondary">Chemical Formula <span class="text-muted fw-normal">(Optional)</span></label>
                        <input type="text" class="form-control form-control-sm @error('chemical_formula') is-invalid @enderror" id="chemical_formula" name="chemical_formula" value="{{ old('chemical_formula', $product->chemical_formula) }}" placeholder="Na2H2P2O7">
                        @error('chemical_formula')
                            <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="grade" class="form-label fw-bold small text-secondary">Commercial Grade <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm @error('grade') is-invalid @enderror" id="grade" name="grade" value="{{ old('grade', $product->grade ?: 'Food & Industrial Grade') }}" placeholder="Food & Industrial Grade">
                        <div id="gradeErrorClient" class="invalid-msg" style="display: none;"></div>
                        @error('grade')
                            <div class="invalid-msg" id="gradeErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Chemical Name & Hero Tag --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="chemical_name" class="form-label fw-semibold small text-secondary">Full Chemical Name <span class="text-muted fw-normal">(Optional)</span></label>
                        <input type="text" class="form-control form-control-sm @error('chemical_name') is-invalid @enderror" id="chemical_name" name="chemical_name" value="{{ old('chemical_name', $product->chemical_name) }}" placeholder="Disodium dihydrogen pyrophosphate">
                        @error('chemical_name')
                            <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="hero_tag" class="form-label fw-semibold small text-secondary">Hero Badge / Subtitle Tag <span class="text-muted fw-normal">(Optional)</span></label>
                        <input type="text" class="form-control form-control-sm @error('hero_tag') is-invalid @enderror" id="hero_tag" name="hero_tag" value="{{ old('hero_tag', $product->hero_tag) }}" placeholder="Food & Industrial Grade • Na2H2P2O7 • CAS 7758-16-9">
                        @error('hero_tag')
                            <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Excerpt / Summary --}}
                <div class="mb-3">
                    <label for="excerpt" class="form-label fw-bold small text-secondary">Short Product Summary / Excerpt <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" rows="2" placeholder="Manufacturer and bulk exporter of high-purity chemical compound for industrial processing...">{{ old('excerpt', $product->excerpt) }}</textarea>
                    <div id="excerptErrorClient" class="invalid-msg" style="display: none;"></div>
                    <small class="text-muted" style="font-size: 11px;">Displayed on product cards and in the hero banner.</small>
                    @error('excerpt')
                        <div class="invalid-msg" id="excerptErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Detailed Overview / Description --}}
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Product Overview &amp; Commercial Description <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" placeholder="Detailed technical overview explaining properties, dissolution characteristics, and manufacturing quality...">{{ old('description', $product->description) }}</textarea>
                    <div id="descriptionErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('description')
                        <div class="invalid-msg" id="descriptionErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Specifications & Tables --}}
                <div class="mb-3">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <label for="specifications" class="form-label fw-bold mb-0">Technical Specifications (HTML / Table) <span class="text-muted fw-normal">(Optional)</span></label>
                        <button type="button" class="btn btn-sm btn-outline-secondary py-0" id="btnSampleSpecTable"><i class="bi bi-table"></i> Insert Spec Template</button>
                    </div>
                    <textarea class="form-control font-monospace @error('specifications') is-invalid @enderror" id="specifications" name="specifications" rows="6" style="font-size: 12px;" placeholder="Optional custom HTML tables or specifications...">{{ old('specifications', $product->specifications) }}</textarea>
                    @error('specifications')
                        <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Applications --}}
                <div class="mb-3">
                    <label for="applications" class="form-label fw-semibold small text-secondary">Industrial &amp; Commercial Applications <span class="text-muted fw-normal">(Optional)</span></label>
                    <textarea class="form-control form-control-sm @error('applications') is-invalid @enderror" id="applications" name="applications" rows="2" placeholder="Water Treatment, Food Processing, Detergents, Metal Phosphating, Ceramic Glazes...">{{ old('applications', $product->applications) }}</textarea>
                    @error('applications')
                        <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Packaging --}}
                <div class="mb-2">
                    <label for="packaging" class="form-label fw-semibold small text-secondary">Standard Export Packaging <span class="text-muted fw-normal">(Optional)</span></label>
                    <input type="text" class="form-control form-control-sm @error('packaging') is-invalid @enderror" id="packaging" name="packaging" value="{{ old('packaging', $product->packaging ?: '25 Kg / 50 Kg HDPE bags with inner liner, 1000 Kg Jumbo Bags') }}">
                    @error('packaging')
                        <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- SEO & Google SERP Preview Card --}}
            <div class="card-custom mb-4 p-4 border-start border-4 border-primary">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <h5 class="fw-bold mb-0"><i class="bi bi-google me-2 text-primary"></i>Search Engine Optimization (SEO)</h5>
                        <small class="text-muted">Target international buyers and chemical procurement inquiries on Google.</small>
                    </div>
                    <span class="badge bg-primary bg-opacity-25 text-primary"><i class="bi bi-shield-check"></i> High Priority</span>
                </div>

                {{-- Live Google Search Preview --}}
                <div class="mb-4">
                    <label class="form-label small fw-bold text-uppercase text-muted">Google SERP Snippet Preview</label>
                    <div class="serp-preview">
                        <div class="serp-url" id="serpPreviewUrl">https://srchems.com › <span id="serpSlugText">{{ $product->slug ?: 'your-slug' }}</span></div>
                        <a href="javascript:void(0)" class="serp-title" id="serpPreviewTitle">{{ $product->meta_title ?: ($product->name ? $product->name . ' Manufacturer | SR Chems' : 'Product Name Manufacturer | SR Chems') }}</a>
                        <div class="serp-snippet" id="serpPreviewDesc">{{ $product->meta_description ?: ($product->excerpt ?: 'High-performance chemical manufacturing and bulk industrial supply from S R Chemicals Panoli Gujarat.') }}</div>
                    </div>
                </div>

                {{-- Meta Title --}}
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <label for="meta_title" class="form-label fw-semibold small">Meta Title Tag <span class="text-muted fw-normal">(Optional)</span></label>
                        <small class="text-muted"><span id="metaTitleCount">0</span>/60 characters</small>
                    </div>
                    <input type="text" class="form-control form-control-sm @error('meta_title') is-invalid @enderror" id="meta_title" name="meta_title" value="{{ old('meta_title', $product->meta_title) }}" placeholder="e.g. Sodium Acid Pyrophosphate (SAPP) Bulk Manufacturer | SR Chems">
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
                    <textarea class="form-control form-control-sm @error('meta_description') is-invalid @enderror" id="meta_description" name="meta_description" rows="2" placeholder="High-performance Sodium Acid Pyrophosphate (SAPP) for commercial baking leavening agents and seafood processing...">{{ old('meta_description', $product->meta_description) }}</textarea>
                    @error('meta_description')
                        <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Meta Keywords --}}
                <div class="mb-3">
                    <label for="meta_keywords" class="form-label fw-semibold small">Meta Keywords <span class="text-muted fw-normal">(Optional)</span></label>
                    <input type="text" class="form-control form-control-sm" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', $product->meta_keywords) }}" placeholder="Sodium Acid Pyrophosphate, SAPP bulk supplier, chemical exporter India">
                </div>

                {{-- Canonical URL --}}
                <div class="mb-3">
                    <label for="canonical_url" class="form-label fw-semibold small">Canonical URL Override <span class="text-muted fw-normal">(Optional)</span></label>
                    <input type="url" class="form-control form-control-sm font-monospace @error('canonical_url') is-invalid @enderror" id="canonical_url" name="canonical_url" value="{{ old('canonical_url', $product->canonical_url) }}" placeholder="https://srchems.com/{{ $product->slug }}">
                    <div id="canonicalUrlErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('canonical_url')
                        <div class="invalid-msg"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                {{-- Open Graph Details Collapsible --}}
                <div class="border rounded p-3 bg-light">
                    <a class="text-decoration-none fw-semibold small d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#ogCollapse" role="button">
                        <span><i class="bi bi-share me-1 text-primary"></i> Open Graph &amp; Social Meta Tags <span class="text-muted fw-normal">(Optional)</span></span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse mt-3" id="ogCollapse">
                        <div class="mb-2">
                            <label for="og_title" class="form-label small">OG Title</label>
                            <input type="text" class="form-control form-control-sm" id="og_title" name="og_title" value="{{ old('og_title', $product->og_title) }}" placeholder="Defaults to Meta Title">
                        </div>
                        <div class="mb-2">
                            <label for="og_description" class="form-label small">OG Description</label>
                            <textarea class="form-control form-control-sm" id="og_description" name="og_description" rows="2" placeholder="Defaults to Meta Description">{{ old('og_description', $product->og_description) }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label for="og_image" class="form-label small">OG Image URL</label>
                            <input type="text" class="form-control form-control-sm font-monospace" id="og_image" name="og_image" value="{{ old('og_image', $product->og_image) }}" placeholder="https://www.srchems.com/assets/images/...">
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
                        <textarea class="form-control font-monospace form-control-sm" id="schema_markup" name="schema_markup" rows="4" placeholder="Optional: <script type=&quot;application/ld+json&quot;>{ ... }</script>">{{ old('schema_markup', $product->schema_markup) }}</textarea>
                        <small class="text-muted" style="font-size: 11px;">Leave empty to use automatic Schema.org Product data.</small>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right / Sidebar Column --}}
        <div class="col-lg-4">
            {{-- Catalog Settings Card --}}
            <div class="card-custom mb-4 p-3 bg-white">
                <h6 class="fw-bold mb-3 border-bottom pb-2"><i class="bi bi-sliders me-1 text-primary"></i> Catalog Settings</h6>

                <div class="mb-3">
                    <label for="status" class="form-label fw-bold small">Product Status <span class="text-danger">*</span></label>
                    <select class="form-select form-select-sm @error('status') is-invalid @enderror" id="status" name="status">
                        <option value="published" {{ old('status', $product->status) === 'published' ? 'selected' : '' }}>🟢 Published (Public Catalog)</option>
                        <option value="draft" {{ old('status', $product->status) === 'draft' ? 'selected' : '' }}>⚪ Draft (Hidden)</option>
                    </select>
                    <div id="statusErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('status')
                        <div class="invalid-msg" id="statusErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="is_category" name="is_category" value="1" {{ old('is_category', $product->is_category) ? 'checked' : '' }}>
                    <label class="form-check-label small fw-semibold" for="is_category">Category Series Hub</label>
                    <small class="text-muted d-block" style="font-size: 11px;">Enable if this is a main series hub (e.g. /sodium-phosphate).</small>
                </div>
            </div>

            {{-- Product Image Card --}}
            <div class="card-custom mb-4 p-3 bg-white">
                <h6 class="fw-bold mb-3 border-bottom pb-2"><i class="bi bi-image me-1 text-primary"></i> Product Image</h6>

                <div class="mb-3 text-center bg-light p-2 rounded border">
                    <img id="imagePreview" src="{{ $product->featured_image_url }}" alt="Preview" class="img-fluid rounded object-fit-cover" style="max-height: 180px;" onerror="this.onerror=null;this.src='{{ asset('assets/images/logo/logo.1.jpg') }}'">
                </div>

                <div class="mb-3">
                    <label for="image_file" class="form-label fw-semibold small">Upload Photo <span class="text-muted fw-normal">(Optional)</span></label>
                    <input class="form-control form-control-sm @error('image_file') is-invalid @enderror" type="file" id="image_file" name="image_file" accept="image/*">
                    <div id="imageFileErrorClient" class="invalid-msg" style="display: none;"></div>
                    <small class="text-muted" style="font-size: 11px;">JPG/PNG/WebP (Max 5MB).</small>
                    @error('image_file')
                        <div class="invalid-msg" id="imageFileErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="featured_image" class="form-label fw-semibold small">Or Image Path / URL <span class="text-muted fw-normal">(Optional)</span></label>
                    <input type="text" class="form-control form-control-sm font-monospace" id="featured_image" name="featured_image" value="{{ old('featured_image', $product->featured_image) }}" placeholder="assets/images/...">
                </div>

                <div class="mb-2">
                    <label for="image_alt" class="form-label fw-semibold small">Image Alt Tag (SEO) <span class="text-muted fw-normal">(Optional)</span></label>
                    <input type="text" class="form-control form-control-sm" id="image_alt" name="image_alt" value="{{ old('image_alt', $product->image_alt) }}" placeholder="Descriptive alt text">
                </div>
            </div>

            @if($product->exists && $product->blade_view)
                <div class="card-custom mb-4 p-3 bg-light border">
                    <h6 class="fw-bold mb-2 text-info"><i class="bi bi-shield-check me-1"></i> Blade Template Link</h6>
                    <p class="small text-muted mb-0">This chemical is tied to template <code>{{ $product->blade_view }}.blade.php</code> ensuring 100% preservation of all customized interactive comparison tables, mesh specs, and exact original headings.</p>
                </div>
            @endif

            {{-- Save Action Card in Last --}}
            <div class="card-custom mb-4 p-3 bg-white">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg fw-semibold shadow-sm">
                        <i class="bi bi-save me-1"></i> Save Product
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Action Bar --}}
    <div class="card-custom p-3 bg-white d-flex align-items-center justify-content-between flex-wrap gap-2 mt-2 mb-4">
        <span class="text-muted small"><i class="bi bi-info-circle me-1"></i> Make sure all required fields marked with <span class="text-danger">*</span> are completed.</span>
        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary btn-sm">Cancel</a>
            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-save me-1"></i> Save Product
            </button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const nameInput = document.getElementById('name');
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

    // Category Select & Custom Option Logic
    const categorySelect = document.getElementById('categorySelect');
    const customCategoryGroup = document.getElementById('customCategoryGroup');
    const customCategoryInput = document.getElementById('customCategoryInput');
    const btnToggleNewCategory = document.getElementById('btnToggleNewCategory');
    const btnCancelCustomCategory = document.getElementById('btnCancelCustomCategory');

    function showCustomCategoryMode() {
        if (categorySelect) categorySelect.value = '__custom__';
        if (customCategoryGroup) customCategoryGroup.style.display = 'block';
        if (customCategoryInput) {
            customCategoryInput.focus();
        }
        if (btnToggleNewCategory) btnToggleNewCategory.style.display = 'none';
    }

    function hideCustomCategoryMode() {
        if (customCategoryGroup) customCategoryGroup.style.display = 'none';
        if (customCategoryInput) customCategoryInput.value = '';
        if (btnToggleNewCategory) btnToggleNewCategory.style.display = 'inline-block';
        if (categorySelect && categorySelect.value === '__custom__') {
            for (let i = 0; i < categorySelect.options.length; i++) {
                if (categorySelect.options[i].value && categorySelect.options[i].value !== '__custom__') {
                    categorySelect.selectedIndex = i;
                    break;
                }
            }
        }
    }

    if (categorySelect) {
        categorySelect.addEventListener('change', function () {
            if (this.value === '__custom__') {
                showCustomCategoryMode();
            } else {
                if (customCategoryGroup) customCategoryGroup.style.display = 'none';
                if (btnToggleNewCategory) btnToggleNewCategory.style.display = 'inline-block';
            }
        });
    }

    if (btnToggleNewCategory) {
        btnToggleNewCategory.addEventListener('click', function () {
            showCustomCategoryMode();
        });
    }

    if (btnCancelCustomCategory) {
        btnCancelCustomCategory.addEventListener('click', function () {
            hideCustomCategoryMode();
            const catErrEl = document.getElementById('categoryErrorClient');
            if (catErrEl) catErrEl.style.display = 'none';
            if (categorySelect) categorySelect.classList.remove('is-invalid');
            if (customCategoryInput) customCategoryInput.classList.remove('is-invalid');
        });
    }

    // Check on page load if __custom__ is already active
    if (categorySelect && categorySelect.value === '__custom__') {
        showCustomCategoryMode();
    }

    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')
            .replace(/[^\w\-]+/g, '')
            .replace(/\-\-+/g, '-')
            .replace(/^-+/, '')
            .replace(/-+$/, '');
    }

    if (autoSlugBtn && nameInput && slugInput) {
        autoSlugBtn.addEventListener('click', function() {
            if (nameInput.value) {
                slugInput.value = slugify(nameInput.value);
                updateSerp();
            }
        });
    }

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

    function updateSerp() {
        const slug = slugInput.value.trim() || 'your-slug';
        const title = metaTitleInput.value.trim() || (nameInput.value.trim() ? nameInput.value.trim() + ' Manufacturer | SR Chems' : 'Product Name Manufacturer | SR Chems');
        const desc = metaDescInput.value.trim() || (excerptInput.value.trim() || 'High-performance chemical manufacturing from S R Chemicals.');

        serpSlug.textContent = slug;
        serpTitle.textContent = title;
        serpDesc.textContent = desc;

        titleCount.textContent = metaTitleInput.value.length;
        descCount.textContent = metaDescInput.value.length;

        titleCount.className = metaTitleInput.value.length > 60 ? 'text-danger fw-bold' : 'text-muted';
        descCount.className = metaDescInput.value.length > 160 ? 'text-danger fw-bold' : 'text-muted';
    }

    nameInput.addEventListener('input', updateSerp);
    slugInput.addEventListener('input', updateSerp);
    excerptInput.addEventListener('input', updateSerp);
    metaTitleInput.addEventListener('input', updateSerp);
    metaDescInput.addEventListener('input', updateSerp);
    updateSerp();

    // Insert Spec Template
    const btnSpec = document.getElementById('btnSampleSpecTable');
    const specTextarea = document.getElementById('specifications');
    if (btnSpec && specTextarea) {
        btnSpec.addEventListener('click', function () {
            const sample = `
<div class="table-responsive mb-4">
    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr><th>Parameter</th><th>Value</th><th>Testing Standard</th></tr>
        </thead>
        <tbody>
            <tr><td>Assay / Purity</td><td>99.0% Min</td><td>IS / BP Benchmark</td></tr>
            <tr><td>pH (1% Solution)</td><td>4.2 - 4.8</td><td>Calibrated pH Meter</td></tr>
            <tr><td>Loss on Drying</td><td>&lt; 0.5%</td><td>Gravimetric Method</td></tr>
            <tr><td>Heavy Metals (as Pb)</td><td>&lt; 10 ppm</td><td>AAS Analysis</td></tr>
        </tbody>
    </table>
</div>`;
            specTextarea.value += "\n" + sample + "\n";
        });
    }

    // Form Validation (No HTML5 Tooltips - Proper Red Colour Messages)
    const productForm = document.getElementById('productForm');
    const nameErr = document.getElementById('nameErrorClient');
    const slugErr = document.getElementById('slugErrorClient');
    const categoryErr = document.getElementById('categoryErrorClient');
    const gradeInput = document.getElementById('grade');
    const gradeErr = document.getElementById('gradeErrorClient');
    const descInput = document.getElementById('description');
    const descErr = document.getElementById('descriptionErrorClient');
    const statusSelect = document.getElementById('status');
    const statusErr = document.getElementById('statusErrorClient');
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

    if (nameInput) nameInput.addEventListener('input', () => clearError(nameInput, nameErr, 'nameErrorServer'));
    if (slugInput) slugInput.addEventListener('input', () => clearError(slugInput, slugErr, 'slugErrorServer'));
    if (gradeInput) gradeInput.addEventListener('input', () => clearError(gradeInput, gradeErr, 'gradeErrorServer'));
    if (excerptInput) excerptInput.addEventListener('input', () => clearError(excerptInput, excerptErr, 'excerptErrorServer'));
    if (descInput) descInput.addEventListener('input', () => clearError(descInput, descErr, 'descriptionErrorServer'));
    if (statusSelect) statusSelect.addEventListener('change', () => clearError(statusSelect, statusErr, 'statusErrorServer'));
    if (categorySelect) categorySelect.addEventListener('change', () => clearError(categorySelect, categoryErr, 'categoryErrorServer'));
    if (customCategoryInput) {
        customCategoryInput.addEventListener('input', () => {
            clearError(customCategoryInput, categoryErr, 'categoryErrorServer');
            clearError(categorySelect, categoryErr, 'categoryErrorServer');
        });
    }
    if (imageFileInput) imageFileInput.addEventListener('change', () => clearError(imageFileInput, imageFileErr, 'imageFileErrorServer'));
    if (canonicalUrlInput) canonicalUrlInput.addEventListener('input', () => clearError(canonicalUrlInput, canonicalUrlErr, null));

    if (productForm) {
        productForm.addEventListener('submit', function (e) {
            let isValid = true;
            const nameVal = nameInput ? nameInput.value.trim() : '';
            const slugVal = slugInput ? slugInput.value.trim() : '';
            const categoryVal = categorySelect ? categorySelect.value.trim() : '';
            const gradeVal = gradeInput ? gradeInput.value.trim() : '';
            const excerptVal = excerptInput ? excerptInput.value.trim() : '';
            const descVal = descInput ? descInput.value.trim() : '';
            const statusVal = statusSelect ? statusSelect.value.trim() : '';
            const canonicalVal = canonicalUrlInput ? canonicalUrlInput.value.trim() : '';

            // 1. Product Name (Required)
            if (!nameVal) {
                isValid = false;
                nameInput.classList.add('is-invalid');
                if (nameErr) {
                    nameErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Product Name is required. Please specify the chemical compound name.';
                    nameErr.style.display = 'flex';
                }
            }

            // 2. URL Slug (Required)
            if (!slugVal && nameVal) {
                slugInput.value = slugify(nameVal);
            } else if (!slugVal) {
                isValid = false;
                slugInput.classList.add('is-invalid');
                if (slugErr) {
                    slugErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> A unique URL Slug is required.';
                    slugErr.style.display = 'flex';
                }
            }

            // 3. Category (Required)
            const isCustomGroupOpen = (customCategoryGroup && customCategoryGroup.style.display !== 'none');
            if (categoryVal === '__custom__' || isCustomGroupOpen) {
                const customVal = customCategoryInput ? customCategoryInput.value.trim() : '';
                if (!customVal) {
                    isValid = false;
                    if (customCategoryInput) customCategoryInput.classList.add('is-invalid');
                    if (categoryErr) {
                        categoryErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Please enter the name for your new category.';
                        categoryErr.style.display = 'flex';
                    }
                } else {
                    // Valid custom category: add it as an option and select it
                    let opt = Array.from(categorySelect.options).find(o => o.value.toLowerCase() === customVal.toLowerCase() && o.value !== '__custom__');
                    if (!opt) {
                        opt = new Option(customVal, customVal, true, true);
                        const customOpt = categorySelect.querySelector('option[value="__custom__"]');
                        if (customOpt) {
                            categorySelect.insertBefore(opt, customOpt);
                        } else {
                            categorySelect.appendChild(opt);
                        }
                    }
                    categorySelect.value = opt.value;
                }
            } else if (!categoryVal) {
                isValid = false;
                if (categorySelect) categorySelect.classList.add('is-invalid');
                if (categoryErr) {
                    categoryErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Product Category is required. Please select a category from the dropdown.';
                    categoryErr.style.display = 'flex';
                }
            }

            // 4. Commercial Grade (Required)
            if (!gradeVal) {
                isValid = false;
                gradeInput.classList.add('is-invalid');
                if (gradeErr) {
                    gradeErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Commercial Grade is required (e.g. Technical / Pure / Food / Pharma).';
                    gradeErr.style.display = 'flex';
                }
            }

            // 5. Excerpt / Summary (Required)
            if (!excerptVal) {
                isValid = false;
                excerptInput.classList.add('is-invalid');
                if (excerptErr) {
                    excerptErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Short Product Summary / Excerpt is required.';
                    excerptErr.style.display = 'flex';
                }
            }

            // 6. Detailed Description (Required)
            if (!descVal) {
                isValid = false;
                descInput.classList.add('is-invalid');
                if (descErr) {
                    descErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Product Overview & Commercial Description is required.';
                    descErr.style.display = 'flex';
                }
            }

            // 7. Product Status (Required)
            if (!statusVal) {
                isValid = false;
                statusSelect.classList.add('is-invalid');
                if (statusErr) {
                    statusErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Product Status is required. Please choose Published or Draft.';
                    statusErr.style.display = 'flex';
                }
            }

            // OPTIONAL: Image File (Only validate size if file chosen)
            if (imageFileInput && imageFileInput.files && imageFileInput.files[0]) {
                const file = imageFileInput.files[0];
                if (file.size > 5 * 1024 * 1024) {
                    isValid = false;
                    imageFileInput.classList.add('is-invalid');
                    if (imageFileErr) {
                        imageFileErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Product photo size cannot exceed 5MB.';
                        imageFileErr.style.display = 'flex';
                    }
                }
            }

            // OPTIONAL: Canonical URL (Only validate format if filled)
            if (canonicalVal && !/^https?:\/\//i.test(canonicalVal)) {
                isValid = false;
                canonicalUrlInput.classList.add('is-invalid');
                if (canonicalUrlErr) {
                    canonicalUrlErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Canonical URL must be a valid complete URL starting with http:// or https://';
                    canonicalUrlErr.style.display = 'flex';
                }
            }

            if (!isValid) {
                e.preventDefault();
                const firstInvalid = productForm.querySelector('.is-invalid') || (categoryErr && categoryErr.style.display !== 'none' ? categoryErr : null);
                if (firstInvalid) {
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    if (typeof firstInvalid.focus === 'function') {
                        firstInvalid.focus();
                    }
                }
            }
        });
    }
});
</script>
@endpush
