<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductTypesSeeder extends Seeder
{
    public function run()
    {
        $productTypes = [
            ['name' => 'Makanan Ringan', 'code' => 'SNACK', 'business_type_id' => 1, 'category' => 'snacks', 'is_active' => true],
            ['name' => 'Kue & Roti', 'code' => 'BAKERY', 'business_type_id' => 1, 'category' => 'bakery', 'is_active' => true],
            ['name' => 'Minuman Segar', 'code' => 'FRESH-BEV', 'business_type_id' => 2, 'category' => 'beverage', 'is_active' => true],
            ['name' => 'Minuman Kemasan', 'code' => 'PACK-BEV', 'business_type_id' => 2, 'category' => 'beverage', 'is_active' => true],
            ['name' => 'Bumbu & Saus', 'code' => 'CONDIMENT', 'business_type_id' => 1, 'category' => 'condiments', 'is_active' => true],
            ['name' => 'Produk Beku', 'code' => 'FROZEN', 'business_type_id' => 1, 'category' => 'frozen', 'is_active' => true],
            ['name' => 'Suplemen', 'code' => 'SUPPLEMENT', 'business_type_id' => 6, 'category' => 'supplement', 'is_active' => true],
        ];

        foreach ($productTypes as $productType) {
            ProductType::create($productType);
        }
    }
}
