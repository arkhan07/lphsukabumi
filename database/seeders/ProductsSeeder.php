<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'submission_id' => 1,
                'product_type_id' => 1, // Makanan Ringan
                'product_name' => 'Kerupuk Udang Premium',
                'product_code' => 'KRP-001',
                'brand_name' => 'Makanan Halal',
                'halal_status' => 'doubtful',
                'is_active' => true,
            ],
            [
                'submission_id' => 1,
                'product_type_id' => 2, // Kue & Roti
                'product_name' => 'Kue Nastar',
                'product_code' => 'KUE-001',
                'brand_name' => 'Makanan Halal',
                'halal_status' => 'doubtful',
                'is_active' => true,
            ],
            [
                'submission_id' => 2,
                'product_type_id' => 3, // Minuman Segar
                'product_name' => 'Jus Jeruk Segar',
                'product_code' => 'JUS-001',
                'brand_name' => 'Minuman Sehat',
                'halal_status' => 'doubtful',
                'is_active' => true,
            ],
            [
                'submission_id' => 2,
                'product_type_id' => 3,
                'product_name' => 'Jus Mangga Segar',
                'product_code' => 'JUS-002',
                'brand_name' => 'Minuman Sehat',
                'halal_status' => 'doubtful',
                'is_active' => true,
            ],
            [
                'submission_id' => 3,
                'product_type_id' => 5, // Bumbu & Saus
                'product_name' => 'Sambal Pedas',
                'product_code' => 'SBL-001',
                'brand_name' => 'Berkah',
                'halal_status' => 'doubtful',
                'is_active' => true,
            ],
            [
                'submission_id' => 5,
                'product_type_id' => 6, // Produk Beku
                'product_name' => 'Nugget Ayam',
                'product_code' => 'NUG-001',
                'brand_name' => 'Minuman Sehat',
                'halal_status' => 'halal',
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
