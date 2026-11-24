<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the admin dashboard overview.
     */
    public function index()
    {
        $totalPosts = Post::count();
        $publishedPosts = Post::where('status', 'published')->count();
        $draftPosts = Post::where('status', 'draft')->count();
        $categoriesCount = Post::whereNotNull('category')->distinct('category')->count('category');

        $totalProducts = Product::count();
        $publishedProducts = Product::where('status', 'published')->count();
        $draftProducts = Product::where('status', 'draft')->count();
        $productCategoriesCount = Product::whereNotNull('category')->distinct('category')->count('category');

        $recentPosts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $recentProducts = Product::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'totalPosts',
            'publishedPosts',
            'draftPosts',
            'categoriesCount',
            'totalProducts',
            'publishedProducts',
            'draftProducts',
            'productCategoriesCount',
            'recentPosts',
            'recentProducts'
        ));
    }
}
