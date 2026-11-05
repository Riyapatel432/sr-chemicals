<!-- Mega Menu Dropdown Content for Desktop -->
<div class="dropdown-menu src-megamenu-menu shadow-lg" aria-labelledby="productsDropdown">
    <div class="row g-4">
        <!-- Column 1: Sodium Phosphate -->
        <div class="col-lg-4 src-megamenu-col">
            <div class="src-megamenu-cat-title">
                <a href="{{ route('sodium_phosphate') }}">Sodium Phosphate</a>
                <span class="badge bg-light text-primary border">9 Products</span>
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
            </ul>
        </div>

        <!-- Column 2: Potassium Phosphate -->
        <div class="col-lg-4 src-megamenu-col">
            <div class="src-megamenu-cat-title">
                <a href="{{ route('potassium_phosphate') }}">Potassium Phosphate</a>
                <span class="badge bg-light text-primary border">3 Products</span>
            </div>
            <ul class="src-megamenu-list">
                <li><a href="{{ route('mono_potassium_phosphate') }}">Mono Potassium Phosphate</a></li>
                <li><a href="{{ route('di_potassium_phosphate') }}">Di Potassium Phosphate</a></li>
                <li><a href="{{ route('tetra_potassium_pyro_phosphate') }}">Tetra Potassium Pyro Phosphate</a></li>
            </ul>
            <div class="mt-4 p-3 bg-light rounded-3 border">
                <div class="d-flex align-items-center gap-2 mb-2 text-primary fw-bold small">
                    <i class="bi bi-shield-check"></i> High Purity Formulation
                </div>
                <p class="small text-muted mb-0" style="font-size: 0.8rem; line-height: 1.5;">
                    Crystalline and powder forms manufactured in Panoli GIDC for pharmaceutical, agriculture and water treatment applications.
                </p>
            </div>
        </div>

        <!-- Column 3: Ammonium Phosphate -->
        <div class="col-lg-4 src-megamenu-col">
            <div class="src-megamenu-cat-title">
                <a href="{{ route('ammonium_phosphate') }}">Ammonium Phosphate</a>
                <span class="badge bg-light text-primary border">2 Products</span>
            </div>
            <ul class="src-megamenu-list">
                <li><a href="{{ route('monoammonium_phosphate') }}">Monoammonium Phosphate</a></li>
                <li><a href="{{ route('di_ammonium_phosphate') }}">Di Ammonium Phosphate</a></li>
            </ul>
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
        </div>
    </div>
</div>

