<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the blog listing page.
     */
    public function index(Request $request)
    {
        $posts = Post::published()->orderBy('published_date', 'desc')->get();
        return view('blog', compact('posts'));
    }

    /**
     * Display a single blog article by slug.
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            abort(404);
        }

        // Only allow admins to view draft posts
        if ($post->status !== 'published' && !auth()->check()) {
            abort(404);
        }

        // If a custom blade view is configured and exists, render it
        if ($post->blade_view && view()->exists($post->blade_view)) {
            return view($post->blade_view, compact('post'));
        }

        return view('blog_single', compact('post'));
    }
}
