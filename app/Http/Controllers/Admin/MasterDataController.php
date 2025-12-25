<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\BusinessType;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterDataController extends Controller
{
    /**
     * Display regions management
     */
    public function regions(Request $request)
    {
        $query = Region::query();

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('province', 'like', "%{$search}%")
                  ->orWhere('city', 'like', "%{$search}%")
                  ->orWhere('district', 'like', "%{$search}%");
            });
        }

        // Filter by province
        if ($request->filled('province')) {
            $query->where('province', $request->province);
        }

        $regions = $query->latest()->paginate(15);

        // Get unique provinces for filter
        $provinces = Region::select('province')->distinct()->orderBy('province')->pluck('province');

        // Statistics
        $stats = [
            'total' => Region::count(),
            'provinces' => Region::select('province')->distinct()->count(),
            'cities' => Region::select('city')->distinct()->count(),
        ];

        return view('admin.master-data.regions', compact('regions', 'provinces', 'stats'));
    }

    /**
     * Store new region
     */
    public function storeRegion(Request $request)
    {
        $validated = $request->validate([
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'district' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:10',
        ]);

        Region::create($validated);

        return back()->with('success', 'Wilayah berhasil ditambahkan');
    }

    /**
     * Update region
     */
    public function updateRegion(Request $request, Region $region)
    {
        $validated = $request->validate([
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'district' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:10',
        ]);

        $region->update($validated);

        return back()->with('success', 'Wilayah berhasil diperbarui');
    }

    /**
     * Delete region
     */
    public function destroyRegion(Region $region)
    {
        if ($region->submissions()->count() > 0) {
            return back()->with('error', 'Wilayah tidak dapat dihapus karena masih digunakan');
        }

        $region->delete();

        return back()->with('success', 'Wilayah berhasil dihapus');
    }

    /**
     * Display business types management
     */
    public function businessTypes(Request $request)
    {
        $query = BusinessType::withCount('submissions');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        $businessTypes = $query->latest()->paginate(15);

        // Statistics
        $stats = [
            'total' => BusinessType::count(),
            'active' => BusinessType::has('submissions')->count(),
        ];

        return view('admin.master-data.business-types', compact('businessTypes', 'stats'));
    }

    /**
     * Store new business type
     */
    public function storeBusinessType(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:business_types,name',
            'description' => 'nullable|string',
        ]);

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
            'description' => 'nullable|string',
        ]);

        $businessType->update($validated);

        return back()->with('success', 'Jenis usaha berhasil diperbarui');
    }

    /**
     * Delete business type
     */
    public function destroyBusinessType(BusinessType $businessType)
    {
        if ($businessType->submissions()->count() > 0) {
            return back()->with('error', 'Jenis usaha tidak dapat dihapus karena masih digunakan');
        }

        $businessType->delete();

        return back()->with('success', 'Jenis usaha berhasil dihapus');
    }

    /**
     * Display product types management
     */
    public function productTypes(Request $request)
    {
        $query = ProductType::withCount('products');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        $productTypes = $query->latest()->paginate(15);

        // Statistics
        $stats = [
            'total' => ProductType::count(),
            'active' => ProductType::has('products')->count(),
        ];

        return view('admin.master-data.product-types', compact('productTypes', 'stats'));
    }

    /**
     * Store new product type
     */
    public function storeProductType(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:product_types,name',
            'description' => 'nullable|string',
        ]);

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
            'description' => 'nullable|string',
        ]);

        $productType->update($validated);

        return back()->with('success', 'Tipe produk berhasil diperbarui');
    }

    /**
     * Delete product type
     */
    public function destroyProductType(ProductType $productType)
    {
        if ($productType->products()->count() > 0) {
            return back()->with('error', 'Tipe produk tidak dapat dihapus karena masih digunakan');
        }

        $productType->delete();

        return back()->with('success', 'Tipe produk berhasil dihapus');
    }
}
