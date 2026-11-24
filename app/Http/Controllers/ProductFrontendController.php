<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductFrontendController extends Controller
{
    /**
     * Display a product or category page dynamically.
     */
    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)->first();

        if (!$product) {
            abort(404);
        }

        // Only allow authenticated users to preview drafts
        if ($product->status !== 'published' && !auth()->check()) {
            abort(404);
        }

        // If this product is linked to a dedicated customized blade view, render it
        if ($product->blade_view && view()->exists($product->blade_view)) {
            return view($product->blade_view, compact('product'));
        }

        // Otherwise render the dynamic product template
        return view('product_single', compact('product'));
    }
}
