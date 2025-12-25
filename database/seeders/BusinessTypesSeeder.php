<?php

namespace Database\Seeders;

use App\Models\BusinessType;
use Illuminate\Database\Seeder;

class BusinessTypesSeeder extends Seeder
{
    public function run()
    {
        $businessTypes = [
            ['name' => 'Industri Makanan', 'code' => 'FOOD-IND', 'category' => 'food', 'description' => 'Industri pengolahan makanan', 'is_active' => true],
            ['name' => 'Industri Minuman', 'code' => 'BEV-IND', 'category' => 'beverage', 'description' => 'Industri pengolahan minuman', 'is_active' => true],
            ['name' => 'Restoran & Katering', 'code' => 'REST-CAT', 'category' => 'food', 'description' => 'Restoran dan jasa katering', 'is_active' => true],
            ['name' => 'Retail & Distribusi', 'code' => 'RET-DIST', 'category' => 'other', 'description' => 'Retail dan distributor produk halal', 'is_active' => true],
            ['name' => 'Industri Kosmetik', 'code' => 'COSM-IND', 'category' => 'cosmetics', 'description' => 'Industri produk kosmetik', 'is_active' => true],
            ['name' => 'Farmasi & Suplemen', 'code' => 'PHARM-SUPP', 'category' => 'pharmaceutical', 'description' => 'Farmasi dan suplemen kesehatan', 'is_active' => true],
        ];

        foreach ($businessTypes as $businessType) {
            BusinessType::create($businessType);
        }
    }
}
