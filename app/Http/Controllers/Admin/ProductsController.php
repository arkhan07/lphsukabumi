<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of products
     */
    public function index(Request $request)
    {
        $query = Product::with(['productType', 'submission']);

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('sku', 'like', "%{$search}%")
                  ->orWhere('brand', 'like', "%{$search}%");
            });
        }

        // Filter by product type
        if ($request->filled('product_type_id')) {
            $query->where('product_type_id', $request->product_type_id);
        }

        // Filter by halal status
        if ($request->filled('halal_status')) {
            $query->where('halal_status', $request->halal_status);
        }

        $products = $query->latest()->paginate(15);
        $productTypes = ProductType::all();

        // Statistics
        $stats = [
            'total' => Product::count(),
            'certified' => Product::where('halal_status', 'certified')->count(),
            'pending' => Product::where('halal_status', 'pending')->count(),
            'expired' => Product::where('halal_status', 'expired')->count(),
        ];

        return view('admin.products.index', compact('products', 'productTypes', 'stats'));
    }

    /**
     * Show the form for creating a new product
     */
    public function create()
    {
        $productTypes = ProductType::all();
        $submissions = Submission::whereIn('status', ['approved', 'completed'])->get();

        return view('admin.products.create', compact('productTypes', 'submissions'));
    }

    /**
     * Store a newly created product
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'submission_id' => 'required|exists:submissions,id',
            'product_type_id' => 'required|exists:product_types,id',
            'name' => 'required|string|max:255',
            'sku' => 'nullable|string|max:100',
            'brand' => 'nullable|string|max:255',
            'variant' => 'nullable|string|max:255',
            'packaging' => 'nullable|string|max:255',
            'weight' => 'nullable|numeric|min:0',
            'weight_unit' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'ingredients' => 'nullable|string',
            'halal_certificate_number' => 'nullable|string|max:255',
            'certificate_issue_date' => 'nullable|date',
            'certificate_expiry_date' => 'nullable|date',
            'halal_status' => 'required|in:pending,certified,expired,rejected',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        DB::beginTransaction();
        try {
            // Handle image upload
            if ($request->hasFile('image')) {
                $validated['image_path'] = $request->file('image')->store('products', 'public');
            }

            $product = Product::create($validated);

            DB::commit();

            return redirect()->route('admin.products.index')
                           ->with('success', 'Produk berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal menambahkan produk: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified product
     */
    public function show(Product $product)
    {
        $product->load(['productType', 'submission', 'materials']);

        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product
     */
    public function edit(Product $product)
    {
        $productTypes = ProductType::all();
        $submissions = Submission::whereIn('status', ['approved', 'completed'])->get();

        return view('admin.products.edit', compact('product', 'productTypes', 'submissions'));
    }

    /**
     * Update the specified product
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'submission_id' => 'required|exists:submissions,id',
            'product_type_id' => 'required|exists:product_types,id',
            'name' => 'required|string|max:255',
            'sku' => 'nullable|string|max:100',
            'brand' => 'nullable|string|max:255',
            'variant' => 'nullable|string|max:255',
            'packaging' => 'nullable|string|max:255',
            'weight' => 'nullable|numeric|min:0',
            'weight_unit' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'ingredients' => 'nullable|string',
            'halal_certificate_number' => 'nullable|string|max:255',
            'certificate_issue_date' => 'nullable|date',
            'certificate_expiry_date' => 'nullable|date',
            'halal_status' => 'required|in:pending,certified,expired,rejected',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        DB::beginTransaction();
        try {
            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete old image
                if ($product->image_path) {
                    Storage::disk('public')->delete($product->image_path);
                }
                $validated['image_path'] = $request->file('image')->store('products', 'public');
            }

            $product->update($validated);

            DB::commit();

            return redirect()->route('admin.products.index')
                           ->with('success', 'Produk berhasil diperbarui');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal memperbarui produk: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified product
     */
    public function destroy(Product $product)
    {
        DB::beginTransaction();
        try {
            // Delete image
            if ($product->image_path) {
                Storage::disk('public')->delete($product->image_path);
            }

            $product->delete();

            DB::commit();

            return redirect()->route('admin.products.index')
                           ->with('success', 'Produk berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menghapus produk: ' . $e->getMessage());
        }
    }

    /**
     * Manage product categories
     */
    public function categories()
    {
        $categories = ProductType::withCount('products')->latest()->paginate(15);

        return view('admin.products.categories', compact('categories'));
    }

    /**
     * Store new product category
     */
    public function storeCategory(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:product_types,name',
            'description' => 'nullable|string',
        ]);

        ProductType::create($validated);

        return back()->with('success', 'Kategori produk berhasil ditambahkan');
    }

    /**
     * Update product category
     */
    public function updateCategory(Request $request, ProductType $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:product_types,name,' . $category->id,
            'description' => 'nullable|string',
        ]);

        $category->update($validated);

        return back()->with('success', 'Kategori produk berhasil diperbarui');
    }

    /**
     * Delete product category
     */
    public function destroyCategory(ProductType $category)
    {
        if ($category->products()->count() > 0) {
            return back()->with('error', 'Kategori tidak dapat dihapus karena masih memiliki produk');
        }

        $category->delete();

        return back()->with('success', 'Kategori produk berhasil dihapus');
    }
}
