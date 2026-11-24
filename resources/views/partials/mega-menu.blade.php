@php
    $extraSodium = \App\Models\Product::where('category', 'Sodium Phosphate')->where('is_category', false)->whereNull('blade_view')->where('status', 'published')->get();
    $extraPotassium = \App\Models\Product::where('category', 'Potassium Phosphate')->where('is_category', false)->whereNull('blade_view')->where('status', 'published')->get();
    $extraAmmonium = \App\Models\Product::where('category', 'Ammonium Phosphate')->where('is_category', false)->whereNull('blade_view')->where('status', 'published')->get();

    // Fetch all other published products grouped by category
    $otherProducts = \App\Models\Product::whereNotNull('category')
        ->whereNotIn('category', ['Sodium Phosphate', 'Potassium Phosphate', 'Ammonium Phosphate'])
        ->where('status', 'published')
        ->get();
    $otherCategories = $otherProducts->groupBy('category');
    $otherCount = $otherCategories->count();
    $totalCategories = 3 + $otherCount;

    // Grid sizing:
    // 3 categories: col-lg-4 (1 row of 3)
    // 4 categories: col-lg-3 (1 row of 4)
    // 5+ categories: col-lg-4 col-md-6 (perfect 3-column multi-row grid)
    if ($totalCategories === 3) {
        $colClass = 'col-lg-4 src-megamenu-col';
    } elseif ($totalCategories === 4) {
        $colClass = 'col-lg-3 src-megamenu-col';
    } else {
        $colClass = 'col-lg-4 col-md-6 src-megamenu-col mb-4';
    }
@endphp

<!-- Mega Menu Dropdown Content for Desktop -->
<div class="dropdown-menu src-megamenu-menu shadow-lg" aria-labelledby="productsDropdown">
    <div class="row g-4">
        <!-- Column 1: Sodium Phosphate -->
        <div class="{{ $colClass }}">
            <div class="src-megamenu-cat-title">
                <a href="{{ route('sodium_phosphate') }}">Sodium Phosphate</a>
                <span class="badge bg-light text-primary border">{{ 9 + $extraSodium->count() }} Products</span>
            </div>
            <ul class="src-megamenu-list">
                <li><a href="{{ route('mono_sodium_phosphate_anhydrous_sr') }}">Mono Sodium Phosphate Anhydrous</a></li>
                <li><a href="{{ route('mono_sodium_phosphate_crystal') }}">Mono Sodium Phosphate Crystal</a></li>
                <li><a href="{{ route('di_sodium_phosphate_anhydrous_sr') }}">Di Sodium Phosphate Anhydrous</a></li>
                <li><a href="{{ route('di_sodium_phosphate_crystal') }}">Di Sodium Phosphate Crystal</a></li>
                <li><a href="{{ route('trisodium_phosphate_anhydrous') }}">Tri Sodium Phosphate Anhydrous</a></li>
                <li><a href="{{ route('tri_sodium_phosphate_crystals') }}">Tri Sodium Phosphate Crystals</a></li>
                <li><a href="{{ route('sodium_hexameta_phosphate') }}">Sodium Hexameta Phosphate</a></li>
                <li><a href="{{ route('tetra_sodium_pyro_phosphate') }}">Tetra Sodium Pyro Phosphate</a></li>
                <li><a href="{{ route('sodium_acid_pyrophosphate') }}">Sodium Acid Pyrophosphate</a></li>
                @foreach($extraSodium as $extraP)
                    <li><a href="{{ url('/' . $extraP->slug) }}">{{ $extraP->name }}</a></li>
                @endforeach
            </ul>
        </div>

        <!-- Column 2: Potassium Phosphate -->
        <div class="{{ $colClass }}">
            <div class="src-megamenu-cat-title">
                <a href="{{ route('potassium_phosphate') }}">Potassium Phosphate</a>
                <span class="badge bg-light text-primary border">{{ 3 + $extraPotassium->count() }} Products</span>
            </div>
            <ul class="src-megamenu-list">
                <li><a href="{{ route('mono_potassium_phosphate') }}">Mono Potassium Phosphate</a></li>
                <li><a href="{{ route('di_potassium_phosphate') }}">Di Potassium Phosphate</a></li>
                <li><a href="{{ route('tetra_potassium_pyro_phosphate') }}">Tetra Potassium Pyro Phosphate</a></li>
                @foreach($extraPotassium as $extraP)
                    <li><a href="{{ url('/' . $extraP->slug) }}">{{ $extraP->name }}</a></li>
                @endforeach
            </ul>
            @if($totalCategories <= 4)
            <div class="mt-4 p-3 bg-light rounded-3 border">
                <div class="d-flex align-items-center gap-2 mb-2 text-primary fw-bold small">
                    <i class="bi bi-shield-check"></i> High Purity Formulation
                </div>
                <p class="small text-muted mb-0" style="font-size: 0.8rem; line-height: 1.5;">
                    Crystalline and powder forms manufactured in Panoli GIDC for pharmaceutical, agriculture and water treatment applications.
                </p>
            </div>
            @endif
        </div>

        <!-- Column 3: Ammonium Phosphate -->
        <div class="{{ $colClass }}">
            <div class="src-megamenu-cat-title">
                <a href="{{ route('ammonium_phosphate') }}">Ammonium Phosphate</a>
                <span class="badge bg-light text-primary border">{{ 2 + $extraAmmonium->count() }} Products</span>
            </div>
            <ul class="src-megamenu-list">
                <li><a href="{{ route('monoammonium_phosphate') }}">Monoammonium Phosphate</a></li>
                <li><a href="{{ route('di_ammonium_phosphate') }}">Di Ammonium Phosphate</a></li>
                @foreach($extraAmmonium as $extraP)
                    <li><a href="{{ url('/' . $extraP->slug) }}">{{ $extraP->name }}</a></li>
                @endforeach
            </ul>
            @if($totalCategories === 3)
            <div class="mt-4 p-3 rounded-3" style="background: linear-gradient(135deg, #0c1e3d 0%, #1a4fa0 100%); color: #ffffff;">
                <div class="fw-bold small mb-1 text-warning">
                    <i class="bi bi-box-seam me-1"></i> Bulk Export Packing
                </div>
                <p class="small mb-3 text-light" style="font-size: 0.8rem; line-height: 1.5; opacity: 0.9;">
                    Custom moisture-proof packaging options with fast container dispatch from Gujarat ports.
                </p>
                <a href="{{ route('our_products') }}" class="btn btn-warning btn-sm fw-bold w-100" style="background:#e8792a; border:none; color:#fff;">
                    View All Products <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            @endif
        </div>

        <!-- Additional Categories: Each gets its own dedicated column in the grid -->
        @foreach($otherCategories as $otherCatName => $catProds)
            @php
                $catHub = $catProds->firstWhere('is_category', true);
                $nonHubProds = $catProds->where('is_category', false);
                $displayProds = $nonHubProds->isNotEmpty() ? $nonHubProds : $catProds;
                $catUrl = $catHub ? url('/' . $catHub->slug) : ($displayProds->count() === 1 ? url('/' . $displayProds->first()->slug) : url('/our-products'));
            @endphp
            <div class="{{ $colClass }}">
                <div class="src-megamenu-cat-title">
                    <a href="{{ $catUrl }}">{{ $otherCatName }}</a>
                    <span class="badge bg-light text-primary border">{{ $catProds->count() }} {{ Str::plural('Product', $catProds->count()) }}</span>
                </div>
                <ul class="src-megamenu-list">
                    @foreach($displayProds as $op)
                        <li><a href="{{ url('/' . $op->slug) }}">{{ $op->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endforeach

        <!-- For 4 or 5 categories: Show the Bulk Export Packing CTA card to fill the grid slot -->
        @if($totalCategories === 5 || $totalCategories === 4)
        <div class="{{ $colClass }}">
            <div class="p-3 rounded-3 h-100 d-flex flex-column justify-content-between" style="background: linear-gradient(135deg, #0c1e3d 0%, #1a4fa0 100%); color: #ffffff; min-height: 180px;">
                <div>
                    <div class="fw-bold small mb-2 text-warning d-flex align-items-center gap-1">
                        <i class="bi bi-box-seam fs-6"></i> Bulk Export Packing
                    </div>
                    <p class="small mb-3 text-light" style="font-size: 0.8rem; line-height: 1.5; opacity: 0.95;">
                        Custom moisture-proof packaging options with fast container dispatch from Gujarat ports.
                    </p>
                </div>
                <div>
                    <a href="{{ route('our_products') }}" class="btn btn-warning btn-sm fw-bold w-100" style="background:#e8792a; border:none; color:#fff;">
                        View All Products <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- For 6 or more categories: Full-width sleek bottom strip -->
    @if($totalCategories >= 6)
    <div class="mt-4 pt-3 border-top d-flex flex-wrap align-items-center justify-content-between gap-3 bg-light p-3 rounded-3">
        <div class="d-flex align-items-center gap-2 text-navy-800 small">
            <span class="badge bg-primary text-white"><i class="bi bi-box-seam me-1"></i> Bulk Supply</span>
            <span class="fw-semibold">Custom moisture-proof packaging with fast international dispatch from Panoli GIDC.</span>
        </div>
        <a href="{{ route('our_products') }}" class="btn btn-warning btn-sm fw-bold px-4" style="background:#e8792a; border:none; color:#fff;">
            View Complete Product Catalog ({{ \App\Models\Product::where('status', 'published')->count() }}) <i class="bi bi-arrow-right ms-1"></i>
        </a>
    </div>
    @endif
</div>
