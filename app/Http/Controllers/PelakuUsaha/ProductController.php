<?php

namespace App\Http\Controllers\PelakuUsaha;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the user's products.
     */
    public function index()
    {
        $user = auth()->user();

        // Get all products from user's submissions
        $products = Product::whereHas('submission', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
        ->with(['submission'])
        ->orderBy('created_at', 'desc')
        ->paginate(15);

        return view('pelaku-usaha.products.index', compact('products'));
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        // Ensure user owns this product through their submission
        if ($product->submission->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $product->load(['submission.region', 'submission.businessType']);

        return view('pelaku-usaha.products.show', compact('product'));
    }
}
