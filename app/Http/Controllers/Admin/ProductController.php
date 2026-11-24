<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of products.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        // Search filter
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%")
                  ->orWhere('cas_number', 'like', "%{$search}%")
                  ->orWhere('chemical_formula', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($status = $request->input('status')) {
            if (in_array($status, ['published', 'draft'])) {
                $query->where('status', $status);
            }
        }

        // Category filter
        if ($category = $request->input('category')) {
            $query->where('category', $category);
        }

        $products = $query->orderBy('is_category', 'desc')
                          ->orderBy('category', 'asc')
                          ->orderBy('name', 'asc')
                          ->paginate(15)
                          ->withQueryString();

        $categories = Product::whereNotNull('category')
                             ->distinct('category')
                             ->pluck('category');

        return view('admin.products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $product = new Product([
            'grade' => 'Food & Industrial Grade',
            'status' => 'published',
            'category' => 'Sodium Phosphate',
            'packaging' => '25 Kg / 50 Kg HDPE bags with inner liner, 1000 Kg Jumbo Bags'
        ]);

        $existingCategories = Product::whereNotNull('category')->distinct('category')->pluck('category');

        return view('admin.products.form', compact('product', 'existingCategories'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        // If custom category is entered, merge it into category
        if ($request->input('category') === '__custom__' || empty($request->input('category'))) {
            if ($request->filled('custom_category')) {
                $request->merge(['category' => trim($request->input('custom_category'))]);
            }
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:products,slug',
            'category' => 'required|string|max:100',
            'is_category' => 'nullable|boolean',
            'chemical_name' => 'nullable|string|max:255',
            'chemical_formula' => 'nullable|string|max:100',
            'cas_number' => 'nullable|string|max:100',
            'grade' => 'required|string|max:100',
            'hero_tag' => 'nullable|string|max:255',
            'excerpt' => 'required|string',
            'description' => 'required|string',
            'specifications' => 'nullable|string',
            'applications' => 'nullable|string',
            'packaging' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'featured_image' => 'nullable|string|max:255',
            'image_alt' => 'nullable|string|max:255',
            'status' => 'required|in:published,draft',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|url|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|string|max:255',
            'schema_markup' => 'nullable|string',
        ], $this->validationMessages());

        // Clean or auto-generate slug
        $slug = !empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['name']);
        $originalSlug = $slug;
        $counter = 1;
        while (Product::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }
        $validated['slug'] = $slug;
        $validated['is_category'] = $request->boolean('is_category');

        // Handle image file upload
        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $uploadDir = public_path('uploads/products');
            if (!File::exists($uploadDir)) {
                File::makeDirectory($uploadDir, 0755, true);
            }
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $validated['featured_image'] = 'uploads/products/' . $filename;
        }

        // Auto-generate smart SEO defaults if empty
        if (empty($validated['meta_title'])) {
            $validated['meta_title'] = $validated['name'] . ' Manufacturer | SR Chems';
        }
        if (empty($validated['meta_description'])) {
            $validated['meta_description'] = !empty($validated['excerpt'])
                ? Str::limit(strip_tags($validated['excerpt']), 160)
                : ($validated['name'] . ' bulk manufacturer and supplier from S R Chemicals Panoli Gujarat.');
        }
        if (empty($validated['canonical_url'])) {
            $validated['canonical_url'] = 'https://srchems.com/' . $validated['slug'];
        }
        if (empty($validated['og_title'])) {
            $validated['og_title'] = $validated['meta_title'];
        }
        if (empty($validated['og_description'])) {
            $validated['og_description'] = $validated['meta_description'];
        }
        if (empty($validated['og_image']) && !empty($validated['featured_image'])) {
            $validated['og_image'] = $validated['featured_image'];
        }

        unset($validated['image_file']);

        $product = Product::create($validated);

        return redirect()->route('admin.products.index')->with('success', "Product '{$product->name}' created successfully!");
    }

    /**
     * Show form for editing an existing product.
     */
    public function edit(Product $product)
    {
        $existingCategories = Product::whereNotNull('category')->distinct('category')->pluck('category');
        return view('admin.products.form', compact('product', 'existingCategories'));
    }

    /**
     * Update an existing product.
     */
    public function update(Request $request, Product $product)
    {
        // If custom category is entered, merge it into category
        if ($request->input('category') === '__custom__' || empty($request->input('category'))) {
            if ($request->filled('custom_category')) {
                $request->merge(['category' => trim($request->input('custom_category'))]);
            }
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'category' => 'required|string|max:100',
            'is_category' => 'nullable|boolean',
            'chemical_name' => 'nullable|string|max:255',
            'chemical_formula' => 'nullable|string|max:100',
            'cas_number' => 'nullable|string|max:100',
            'grade' => 'required|string|max:100',
            'hero_tag' => 'nullable|string|max:255',
            'excerpt' => 'required|string',
            'description' => 'required|string',
            'specifications' => 'nullable|string',
            'applications' => 'nullable|string',
            'packaging' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'featured_image' => 'nullable|string|max:255',
            'image_alt' => 'nullable|string|max:255',
            'status' => 'required|in:published,draft',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|url|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|string|max:255',
            'schema_markup' => 'nullable|string',
        ], $this->validationMessages());

        $validated['slug'] = Str::slug($validated['slug']);
        $validated['is_category'] = $request->boolean('is_category');

        // Handle image file upload
        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $uploadDir = public_path('uploads/products');
            if (!File::exists($uploadDir)) {
                File::makeDirectory($uploadDir, 0755, true);
            }
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $validated['featured_image'] = 'uploads/products/' . $filename;
        }

        unset($validated['image_file']);

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', "Product '{$product->name}' updated successfully!");
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        $name = $product->name;
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', "Product '{$name}' deleted successfully.");
    }

    /**
     * Toggle product status between published and draft.
     */
    public function toggleStatus(Product $product)
    {
        $product->status = ($product->status === 'published') ? 'draft' : 'published';
        $product->save();

        $statusLabel = ucfirst($product->status);
        return back()->with('success', "Product '{$product->name}' is now {$statusLabel}.");
    }

    /**
     * Get the validation error messages for product attributes.
     */
    protected function validationMessages(): array
    {
        return [
            'name.required' => 'Product Name is required. Please specify the chemical compound name.',
            'name.max' => 'Product Name may not be greater than 255 characters.',
            'slug.required' => 'A unique URL Slug is required.',
            'slug.unique' => 'The URL Slug ":input" is already taken by another product. Please choose a different slug.',
            'slug.max' => 'URL Slug may not be greater than 255 characters.',
            'category.required' => 'Product Category is required. Select or enter a phosphate series.',
            'category.max' => 'Category name may not be greater than 100 characters.',
            'grade.required' => 'Commercial Grade is required (e.g. Technical / Pure / Food / Pharma).',
            'grade.max' => 'Commercial Grade may not be greater than 100 characters.',
            'excerpt.required' => 'Short Product Summary / Excerpt is required.',
            'description.required' => 'Product Overview & Commercial Description is required.',
            'cas_number.max' => 'CAS Registry Number may not be greater than 100 characters.',
            'chemical_formula.max' => 'Chemical Formula may not be greater than 100 characters.',
            'chemical_name.max' => 'Full Chemical Name may not be greater than 255 characters.',
            'packaging.max' => 'Packaging details may not be greater than 255 characters.',
            'image_file.image' => 'The uploaded file must be a valid image file.',
            'image_file.mimes' => 'The product photo must be a file of type: jpeg, png, jpg, webp, or gif.',
            'image_file.max' => 'The product photo size may not exceed 5MB (5120 KB).',
            'status.required' => 'Please select whether this product is Published or Draft.',
            'status.in' => 'Selected product status must be either published or draft.',
            'meta_title.max' => 'Meta Title should not exceed 255 characters.',
            'canonical_url.url' => 'Canonical URL must be a valid complete URL starting with http:// or https://.',
        ];
    }
}
