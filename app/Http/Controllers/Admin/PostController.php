<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of posts.
     */
    public function index(Request $request)
    {
        $query = Post::query();

        // Search filter
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%")
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

        $posts = $query->orderBy('published_date', 'desc')
                      ->orderBy('id', 'desc')
                      ->paginate(15)
                      ->withQueryString();

        $categories = Post::whereNotNull('category')
                          ->distinct('category')
                          ->pluck('category');

        return view('admin.posts.index', compact('posts', 'categories'));
    }

    /**
     * Show form for creating a new post.
     */
    public function create()
    {
        $post = new Post([
            'author' => 'S R Chemicals',
            'read_time' => '5 min read',
            'status' => 'published',
            'published_date' => now()->toDateString(),
            'category' => 'Industry Insight'
        ]);

        $existingCategories = Post::whereNotNull('category')->distinct('category')->pluck('category');

        return view('admin.posts.form', compact('post', 'existingCategories'));
    }

    /**
     * Store a newly created post in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:posts,slug',
            'category' => 'required|string|max:100',
            'author' => 'required|string|max:100',
            'read_time' => 'nullable|string|max:50',
            'published_date' => 'required|date',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'featured_image' => 'nullable|string|max:255',
            'image_alt' => 'nullable|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
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

        // Generate or clean slug
        $slug = !empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['title']);
        $originalSlug = $slug;
        $counter = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }
        $validated['slug'] = $slug;

        // Handle image upload
        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $uploadDir = public_path('uploads/blog');
            if (!File::exists($uploadDir)) {
                File::makeDirectory($uploadDir, 0755, true);
            }
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $validated['featured_image'] = 'uploads/blog/' . $filename;
        }

        // Auto-generate smart SEO defaults if not provided
        if (empty($validated['meta_title'])) {
            $validated['meta_title'] = $validated['title'] . ' | S R Chemicals';
        }
        if (empty($validated['meta_description'])) {
            $validated['meta_description'] = !empty($validated['excerpt']) 
                ? Str::limit(strip_tags($validated['excerpt']), 160)
                : Str::limit(strip_tags($validated['content']), 160);
        }
        if (empty($validated['canonical_url'])) {
            $validated['canonical_url'] = 'https://srchems.com/blog/' . $validated['slug'];
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

        $post = Post::create($validated);

        return redirect()->route('admin.posts.index')->with('success', "Post '{$post->title}' created successfully!");
    }

    /**
     * Show form for editing an existing post.
     */
    public function edit(Post $post)
    {
        $existingCategories = Post::whereNotNull('category')->distinct('category')->pluck('category');
        return view('admin.posts.form', compact('post', 'existingCategories'));
    }

    /**
     * Update an existing post.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $post->id,
            'category' => 'required|string|max:100',
            'author' => 'required|string|max:100',
            'read_time' => 'nullable|string|max:50',
            'published_date' => 'required|date',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'featured_image' => 'nullable|string|max:255',
            'image_alt' => 'nullable|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
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

        // Handle image upload
        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $uploadDir = public_path('uploads/blog');
            if (!File::exists($uploadDir)) {
                File::makeDirectory($uploadDir, 0755, true);
            }
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $validated['featured_image'] = 'uploads/blog/' . $filename;
        }

        unset($validated['image_file']);

        $post->update($validated);

        return redirect()->route('admin.posts.index')->with('success', "Post '{$post->title}' updated successfully!");
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(Post $post)
    {
        $title = $post->title;
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', "Post '{$title}' deleted successfully.");
    }

    /**
     * Toggle post status between published and draft.
     */
    public function toggleStatus(Post $post)
    {
        $post->status = ($post->status === 'published') ? 'draft' : 'published';
        $post->save();

        $statusLabel = ucfirst($post->status);
        return back()->with('success', "Post '{$post->title}' is now {$statusLabel}.");
    }

    /**
     * Upload an inline image from rich text editor.
     */
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:5120'
        ], [
            'image.required' => 'Please choose an image file to upload.',
            'image.image' => 'The uploaded file must be a valid image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, webp, or gif.',
            'image.max' => 'The image size may not exceed 5MB (5120 KB).',
        ]);

        $file = $request->file('image');
        $uploadDir = public_path('uploads/blog');
        if (!File::exists($uploadDir)) {
            File::makeDirectory($uploadDir, 0755, true);
        }

        $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
        $file->move($uploadDir, $filename);

        return response()->json([
            'url' => asset('uploads/blog/' . $filename)
        ]);
    }

    /**
     * Get the validation error messages for post attributes.
     */
    protected function validationMessages(): array
    {
        return [
            'title.required' => 'Article Title is required. Please provide a headline for this post.',
            'title.max' => 'Article Title may not be greater than 255 characters.',
            'slug.required' => 'A unique URL Slug is required.',
            'slug.unique' => 'The URL Slug ":input" is already taken by another article. Please choose a different slug.',
            'slug.max' => 'URL Slug may not be greater than 255 characters.',
            'category.required' => 'Category Name is required. Please select or enter a category.',
            'category.max' => 'Category name may not be greater than 100 characters.',
            'excerpt.required' => 'Short Excerpt / Summary is required. Please provide a brief description.',
            'content.required' => 'Article Body Content is required. Please write the article content.',
            'author.required' => 'Author Name is required.',
            'author.max' => 'Author name may not be greater than 100 characters.',
            'read_time.max' => 'Estimated read time text may not be greater than 50 characters.',
            'published_date.required' => 'Publication Date is required.',
            'published_date.date' => 'Publication Date must be a valid calendar date format.',
            'image_file.image' => 'The uploaded file must be a valid image file.',
            'image_file.mimes' => 'The featured image must be a file of type: jpeg, png, jpg, webp, or gif.',
            'image_file.max' => 'The featured image size may not exceed 5MB (5120 KB).',
            'status.required' => 'Please select whether this article is Published or Draft.',
            'status.in' => 'Selected post status must be either published or draft.',
            'meta_title.max' => 'Meta Title should not exceed 255 characters.',
            'canonical_url.url' => 'Canonical URL must be a valid complete URL starting with http:// or https://.',
        ];
    }
}
