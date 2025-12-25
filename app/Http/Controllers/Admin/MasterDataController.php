<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\BusinessType;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MasterDataController extends Controller
{
    // ========================================
    // REGIONS MANAGEMENT
    // ========================================

    /**
     * Display regions management
     */
    public function regions(Request $request)
    {
        $query = Region::with('parent')->withCount('submissions');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('code', 'like', "%{$search}%");
            });
        }

        // Filter by type
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        // Filter by parent
        if ($request->filled('parent_id')) {
            $query->where('parent_id', $request->parent_id);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status === 'active');
        }

        $regions = $query->latest()->paginate(15);

        // Get parent regions for filter (provinces and cities)
        $parentRegions = Region::whereIn('type', ['province', 'city'])
            ->orderBy('name')
            ->get(['id', 'name', 'type']);

        // Statistics
        $stats = [
            'total' => Region::count(),
            'active' => Region::where('is_active', true)->count(),
            'inactive' => Region::where('is_active', false)->count(),
            'provinces' => Region::where('type', 'province')->count(),
            'cities' => Region::where('type', 'city')->count(),
            'regencies' => Region::where('type', 'regency')->count(),
        ];

        return view('admin.master-data.regions', compact('regions', 'parentRegions', 'stats'));
    }

    /**
     * Store new region
     */
    public function storeRegion(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:regions,code',
            'type' => 'required|in:province,city,regency',
            'parent_id' => 'nullable|exists:regions,id',
            'is_active' => 'boolean',
        ]);

        // Auto-generate code if not provided or sanitize it
        if (empty($validated['code'])) {
            $validated['code'] = Str::slug($validated['name']);
        }

        // Set default is_active
        $validated['is_active'] = $validated['is_active'] ?? true;

        // Validate parent relationship
        if (isset($validated['parent_id'])) {
            $parent = Region::find($validated['parent_id']);
            if ($validated['type'] === 'city' && $parent->type !== 'province') {
                return back()->withErrors(['parent_id' => 'Kota harus berada di bawah Provinsi'])->withInput();
            }
            if ($validated['type'] === 'regency' && !in_array($parent->type, ['province', 'city'])) {
                return back()->withErrors(['parent_id' => 'Kabupaten harus berada di bawah Provinsi atau Kota'])->withInput();
            }
        }

        Region::create($validated);

        return back()->with('success', 'Wilayah berhasil ditambahkan');
    }

    /**
     * Update region
     */
    public function updateRegion(Request $request, Region $region)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:regions,code,' . $region->id,
            'type' => 'required|in:province,city,regency',
            'parent_id' => 'nullable|exists:regions,id',
            'is_active' => 'boolean',
        ]);

        // Validate not setting self as parent
        if (isset($validated['parent_id']) && $validated['parent_id'] == $region->id) {
            return back()->withErrors(['parent_id' => 'Wilayah tidak dapat menjadi induk dari dirinya sendiri'])->withInput();
        }

        // Validate parent relationship
        if (isset($validated['parent_id'])) {
            $parent = Region::find($validated['parent_id']);
            if ($validated['type'] === 'city' && $parent->type !== 'province') {
                return back()->withErrors(['parent_id' => 'Kota harus berada di bawah Provinsi'])->withInput();
            }
            if ($validated['type'] === 'regency' && !in_array($parent->type, ['province', 'city'])) {
                return back()->withErrors(['parent_id' => 'Kabupaten harus berada di bawah Provinsi atau Kota'])->withInput();
            }
        }

        $region->update($validated);

        return back()->with('success', 'Wilayah berhasil diperbarui');
    }

    /**
     * Delete region
     */
    public function destroyRegion(Region $region)
    {

        // Check if has children
        if ($region->children()->count() > 0) {
            return back()->with('error', 'Wilayah tidak dapat dihapus karena masih memiliki wilayah anak');
        }

        // Check if used in submissions
        if ($region->submissions()->count() > 0) {
            return back()->with('error', 'Wilayah tidak dapat dihapus karena masih digunakan dalam pengajuan');
        }

        $region->delete();

        return back()->with('success', 'Wilayah berhasil dihapus');
    }

    // ========================================
    // BUSINESS TYPES MANAGEMENT
    // ========================================

    /**
     * Display business types management
     */
    public function businessTypes(Request $request)
    {
        $query = BusinessType::withCount(['submissions', 'productTypes']);

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('code', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status === 'active');
        }

        $businessTypes = $query->latest()->paginate(15);

        // Statistics
        $stats = [
            'total' => BusinessType::count(),
            'active' => BusinessType::where('is_active', true)->count(),
            'inactive' => BusinessType::where('is_active', false)->count(),
            'with_submissions' => BusinessType::has('submissions')->count(),
            'with_products' => BusinessType::has('productTypes')->count(),
        ];

        // Category breakdown
        $categories = BusinessType::select('category', DB::raw('count(*) as count'))
            ->groupBy('category')
            ->pluck('count', 'category');

        return view('admin.master-data.business-types', compact('businessTypes', 'stats', 'categories'));
    }

    /**
     * Store new business type
     */
    public function storeBusinessType(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:business_types,name',
            'code' => 'required|string|max:255|unique:business_types,code',
            'description' => 'nullable|string',
            'category' => 'required|in:food,beverage,cosmetics,pharmaceutical,other',
            'is_active' => 'boolean',
        ]);

        // Auto-generate code if empty or sanitize it
        if (empty($validated['code'])) {
            $validated['code'] = Str::slug($validated['name']);
        }

        // Set default is_active
        $validated['is_active'] = $validated['is_active'] ?? true;

        BusinessType::create($validated);

        return back()->with('success', 'Jenis usaha berhasil ditambahkan');
    }

    /**
     * Update business type
     */
    public function updateBusinessType(Request $request, BusinessType $businessType)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:business_types,name,' . $businessType->id,
            'code' => 'required|string|max:255|unique:business_types,code,' . $businessType->id,
            'description' => 'nullable|string',
            'category' => 'required|in:food,beverage,cosmetics,pharmaceutical,other',
            'is_active' => 'boolean',
        ]);

        $businessType->update($validated);

        return back()->with('success', 'Jenis usaha berhasil diperbarui');
    }

    /**
     * Delete business type
     */
    public function destroyBusinessType(BusinessType $businessType)
    {

        // Check if used in submissions
        if ($businessType->submissions()->count() > 0) {
            return back()->with('error', 'Jenis usaha tidak dapat dihapus karena masih digunakan dalam ' . $businessType->submissions()->count() . ' pengajuan');
        }

        // Check if has product types
        if ($businessType->productTypes()->count() > 0) {
            return back()->with('error', 'Jenis usaha tidak dapat dihapus karena masih memiliki ' . $businessType->productTypes()->count() . ' tipe produk');
        }

        $businessType->delete();

        return back()->with('success', 'Jenis usaha berhasil dihapus');
    }

    // ========================================
    // PRODUCT TYPES MANAGEMENT
    // ========================================

    /**
     * Display product types management
     */
    public function productTypes(Request $request)
    {
        $query = ProductType::with('businessType')->withCount('products');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('code', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Filter by business type
        if ($request->filled('business_type_id')) {
            $query->where('business_type_id', $request->business_type_id);
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status === 'active');
        }

        $productTypes = $query->latest()->paginate(15);

        // Get business types for filter
        $businessTypes = BusinessType::where('is_active', true)
            ->orderBy('name')
            ->get(['id', 'name']);

        // Statistics
        $stats = [
            'total' => ProductType::count(),
            'active' => ProductType::where('is_active', true)->count(),
            'inactive' => ProductType::where('is_active', false)->count(),
            'with_products' => ProductType::has('products')->count(),
        ];

        return view('admin.master-data.product-types', compact('productTypes', 'businessTypes', 'stats'));
    }

    /**
     * Store new product type
     */
    public function storeProductType(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:product_types,name',
            'code' => 'required|string|max:255|unique:product_types,code',
            'description' => 'nullable|string',
            'business_type_id' => 'nullable|exists:business_types,id',
            'category' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        // Auto-generate code if empty or sanitize it
        if (empty($validated['code'])) {
            $validated['code'] = Str::slug($validated['name']);
        }

        // Set default is_active
        $validated['is_active'] = $validated['is_active'] ?? true;

        ProductType::create($validated);

        return back()->with('success', 'Tipe produk berhasil ditambahkan');
    }

    /**
     * Update product type
     */
    public function updateProductType(Request $request, ProductType $productType)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:product_types,name,' . $productType->id,
            'code' => 'required|string|max:255|unique:product_types,code,' . $productType->id,
            'description' => 'nullable|string',
            'business_type_id' => 'nullable|exists:business_types,id',
            'category' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $productType->update($validated);

        return back()->with('success', 'Tipe produk berhasil diperbarui');
    }

    /**
     * Delete product type
     */
    public function destroyProductType(ProductType $productType)
    {

        // Check if used in products
        if ($productType->products()->count() > 0) {
            return back()->with('error', 'Tipe produk tidak dapat dihapus karena masih digunakan dalam ' . $productType->products()->count() . ' produk');
        }

        $productType->delete();

        return back()->with('success', 'Tipe produk berhasil dihapus');
    }
}
