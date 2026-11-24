<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(App\Http\Controllers\UserController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/our-products', 'our_products')->name('our_products');
    Route::get('/sodium-phosphate', 'sodium_phosphate')->name('sodium_phosphate');

    // subproducts of Sodium
    Route::get('/di-sodium-phosphate-crystal', 'di_sodium_phosphate_crystal')->name('di_sodium_phosphate_crystal');
    Route::get('/mono-sodium-phosphate-crystal', 'mono_sodium_phosphate_crystal')->name('mono_sodium_phosphate_crystal');
    Route::get('/di-sodium-phosphate', 'di_sodium_phosphate')->name('di_sodium_phosphate');
    Route::get('/di-sodium-phosphate-anhydrous-sr', 'di_sodium_phosphate_anhydrous_sr')->name('di_sodium_phosphate_anhydrous_sr');
    Route::get('/sodium-acid-pyrophosphate', 'sodium_acid_pyrophosphate')->name('sodium_acid_pyrophosphate');
    Route::get('/di-sodium-phosphate-anhydrous', 'di_sodium_phosphate_anhydrous')->name('di_sodium_phosphate_anhydrous');
    Route::get('/tetra-sodium-pyro-phosphate', 'tetra_sodium_pyro_phosphate')->name('tetra_sodium_pyro_phosphate');
    Route::get('/tri-sodium-phosphate-crystals', 'tri_sodium_phosphate_crystals')->name('tri_sodium_phosphate_crystals');
    Route::get('/sodium-hexameta-phosphate', 'sodium_hexameta_phosphate')->name('sodium_hexameta_phosphate');   
    Route::get('/mono-sodium-phosphate-anhydrous-sr', 'mono_sodium_phosphate_anhydrous_sr')->name('mono_sodium_phosphate_anhydrous_sr');
    Route::get('/trisodium-phosphate-anhydrous', 'trisodium_phosphate_anhydrous')->name('trisodium_phosphate_anhydrous');

     // subproducts of Potassium
    Route::get('/potassium-phosphate', 'potassium_phosphate')->name('potassium_phosphate');
    Route::get('/tetra-potassium-pyro-phosphate', 'tetra_potassium_pyro_phosphate')->name('tetra_potassium_pyro_phosphate');
    Route::get('/di-potassium-phosphate', 'di_potassium_phosphate')->name('di_potassium_phosphate');
    Route::get('/mono-potassium-phosphate', 'mono_potassium_phosphate')->name('mono_potassium_phosphate');

     // subproducts of Ammonium
    Route::get('/ammonium-phosphate', 'ammonium_phosphate')->name('ammonium_phosphate');
    Route::get('/monoammonium-phosphate', 'monoammonium_phosphate')->name('monoammonium_phosphate');
    Route::get('/di-ammonium-phosphate', 'di_ammonium_phosphate')->name('di_ammonium_phosphate');

    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/pharma-grade-phosphate-salts', 'blog_pharma_grade_phosphate')->name('blog_pharma_grade_phosphate');
    Route::get('/blog/inorganic-chemicals-manufacturer-gidc-panoli', 'blog_inorganic_chemicals')->name('blog_inorganic_chemicals');
    Route::get('/blog/mono-sodium-phosphate-anhydrous-vs-crystal', 'blog_msp_anhydrous_vs_crystal')->name('blog_msp_anhydrous_vs_crystal');
    Route::get('/blog/dipotassium-phosphate-industrial-water-treatment', 'blog_dipotassium_phosphate_water_treatment')->name('blog_dipotassium_phosphate_water_treatment');
    Route::get('/blog/mono-sodium-phosphate-crystal-industrial-processes', 'blog_msp_crystal_industrial')->name('blog_msp_crystal_industrial');
    Route::get('/blog/industrial-buyers-guide-potassium-phosphate', 'blog_potassium_phosphate_guide')->name('blog_potassium_phosphate_guide');
    Route::get('/blog/sourcing-ammonium-phosphate-agriculture-industrial-research', 'blog_ammonium_phosphate_guide')->name('blog_ammonium_phosphate_guide');
    Route::get('/blog/industrial-buyers-guide-sodium-phosphates', 'blog_sodium_phosphates_guide')->name('blog_sodium_phosphates_guide');
    Route::get('/blog/understanding-potassium-phosphate-uses-forms-applications', 'blog_understanding_potassium_phosphate')->name('blog_understanding_potassium_phosphate');
    Route::get('/blog/potassium-dihydrogen-phosphate-mkp-technical-grade', 'blog_potassium_dihydrogen_phosphate')->name('blog_potassium_dihydrogen_phosphate');
    Route::get('/blog/di-potassium-phosphate-dkp-food-industrial-grade', 'blog_di_potassium_phosphate_dkp')->name('blog_di_potassium_phosphate_dkp');
    Route::get('/blog/tetra-potassium-pyrophosphate-tkpp-industrial-supplier', 'blog_tetra_potassium_pyrophosphate_tkpp')->name('blog_tetra_potassium_pyrophosphate_tkpp');
    Route::get('/blog/sodium-hexametaphosphate-shmp-water-treatment-guide', 'blog_shmp_water_treatment_guide')->name('blog_shmp_water_treatment_guide');
    Route::get('/blog/food-grade-vs-industrial-grade-phosphates-differences', 'blog_food_grade_vs_industrial_phosphates')->name('blog_food_grade_vs_industrial_phosphates');
    Route::get('/blog/tsp-dsp-metal-phosphating-surface-treatment', 'blog_tsp_dsp_metal_phosphating')->name('blog_tsp_dsp_metal_phosphating');
    Route::get('/blog/prevent-caking-in-bulk-phosphate-powder', 'blog_prevent_caking_phosphate_powder')->name('blog_prevent_caking_phosphate_powder');
    Route::get('/blog/srchems-sodium-phosphates-textile-water-treatment-vietnam', 'blog_srchems_sodium_phosphates_vietnam')->name('blog_srchems_sodium_phosphates_vietnam');
    Route::redirect('/blog/pure-grade-sodium-phosphates-textile-water-treatment-vietnam', '/blog/srchems-sodium-phosphates-textile-water-treatment-vietnam', 301);
    Route::get('/blog/bulk-srchems-phosphates-sourcing-guide-india-vietnam', 'blog_bulk_srchems_phosphates_sourcing_vietnam')->name('blog_bulk_srchems_phosphates_sourcing_vietnam');
    Route::redirect('/blog/bulk-pure-grade-phosphates-sourcing-guide-india-vietnam', '/blog/bulk-srchems-phosphates-sourcing-guide-india-vietnam', 301);
    Route::get('/blog/srchems-phosphates-water-treatment-metal-cleaning-thailand', 'blog_srchems_phosphates_thailand')->name('blog_srchems_phosphates_thailand');
    Route::redirect('/blog/pure-grade-phosphates-water-treatment-metal-cleaning-thailand', '/blog/srchems-phosphates-water-treatment-metal-cleaning-thailand', 301);
    Route::get('/blog/bulk-srchems-phosphates-sourcing-guide-india-thailand', 'blog_bulk_srchems_phosphates_sourcing_thailand')->name('blog_bulk_srchems_phosphates_sourcing_thailand');
    Route::redirect('/blog/bulk-pure-grade-phosphates-sourcing-guide-india-thailand', '/blog/bulk-srchems-phosphates-sourcing-guide-india-thailand', 301);
    Route::get('/chemical-exporter-supplier-vietnam', 'chemical_exporter_supplier_vietnam')->name('chemical_exporter_supplier_vietnam');
    Route::get('/srchems-chemical-exporter-supplier-thailand', 'chemical_exporter_supplier_thailand')->name('chemical_exporter_supplier_thailand');
    Route::redirect('/pure-grade-chemical-exporter-supplier-thailand', '/srchems-chemical-exporter-supplier-thailand', 301);
    Route::redirect('/chemical-exporter-supplier-thailand', '/srchems-chemical-exporter-supplier-thailand', 301);
    Route::get('/contact-us', 'contact_us')->name('contact_us');
    Route::get('/thank-you', 'thank_you')->name('thank_you');
    Route::get('/sitemap', 'sitemap')->name('sitemap');
});

// Dynamic blog post route for database-managed posts
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('/product/{slug}', [App\Http\Controllers\ProductFrontendController::class, 'show'])->name('product.show');

Route::redirect('/login', '/admin/login')->name('login');

// Admin Authentication & Blog Management CMS
Route::prefix('admin')->group(function () {
    Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->middleware('throttle:5,1')->name('admin.login.submit');
    Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

        Route::get('/blogs', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('admin.posts.index');
        Route::get('/blogs/create', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('admin.posts.create');
        Route::post('/blogs', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('admin.posts.store');
        Route::get('/blogs/{post}/edit', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('admin.posts.edit');
        Route::put('/blogs/{post}', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('admin.posts.update');
        Route::delete('/blogs/{post}', [App\Http\Controllers\Admin\PostController::class, 'destroy'])->name('admin.posts.destroy');
        Route::post('/blogs/{post}/toggle-status', [App\Http\Controllers\Admin\PostController::class, 'toggleStatus'])->name('admin.posts.toggle-status');
        Route::post('/blogs/upload-image', [App\Http\Controllers\Admin\PostController::class, 'uploadImage'])->name('admin.posts.upload-image');

        // Product Catalog Management
        Route::get('/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products.index');
        Route::get('/products/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.products.create');
        Route::post('/products', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.products.store');
        Route::get('/products/{product}/edit', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.products.edit');
        Route::put('/products/{product}', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin.products.update');
        Route::delete('/products/{product}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin.products.destroy');
        Route::post('/products/{product}/toggle-status', [App\Http\Controllers\Admin\ProductController::class, 'toggleStatus'])->name('admin.products.toggle-status');
    });
});

Route::post('sendmail', [MailController::class, 'sendEmail'])->name('sendmail');

Route::get('/clear-cache', function() {
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
    return "Cache cleared successfully!";
});

// Fallback redirect for old URLs with underscores to new ones with hyphens
Route::get('/{any}', function ($any) {
    if (str_contains($any, '_')) {
        return redirect(str_replace('_', '-', $any), 301);
    }
    if ($product = \App\Models\Product::where('slug', $any)->first()) {
        return app(\App\Http\Controllers\ProductFrontendController::class)->show($any);
    }
    abort(404);
})->where('any', '.*');

