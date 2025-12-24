<?php

namespace Database\Seeders;

use App\Models\ProductType;
use App\Models\BusinessType;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get business type IDs
        $foodInd = BusinessType::where('code', 'FOOD-IND')->first();
        $foodMicro = BusinessType::where('code', 'FOOD-MICRO')->first();
        $bevInd = BusinessType::where('code', 'BEV-IND')->first();
        $cosmInd = BusinessType::where('code', 'COSM-IND')->first();
        $pharmInd = BusinessType::where('code', 'PHARM-IND')->first();

        $productTypes = [
            // Food Products
            [
                'name' => 'Makanan Olahan Daging',
                'code' => 'FOOD-MEAT',
                'description' => 'Sosis, nugget, bakso, dll',
                'business_type_id' => $foodInd?->id,
                'category' => 'Protein',
            ],
            [
                'name' => 'Makanan Olahan Ayam',
                'code' => 'FOOD-CHICKEN',
                'description' => 'Produk olahan ayam',
                'business_type_id' => $foodInd?->id,
                'category' => 'Protein',
            ],
            [
                'name' => 'Makanan Ringan',
                'code' => 'FOOD-SNACK',
                'description' => 'Keripik, kue kering, dll',
                'business_type_id' => $foodMicro?->id,
                'category' => 'Snack',
            ],
            [
                'name' => 'Roti & Kue',
                'code' => 'FOOD-BREAD',
                'description' => 'Roti, cake, pastry',
                'business_type_id' => $foodMicro?->id,
                'category' => 'Bakery',
            ],
            [
                'name' => 'Mie & Pasta',
                'code' => 'FOOD-NOODLE',
                'description' => 'Mie instan, pasta, dll',
                'business_type_id' => $foodInd?->id,
                'category' => 'Carbohydrate',
            ],
            [
                'name' => 'Produk Susu',
                'code' => 'FOOD-DAIRY',
                'description' => 'Susu, yogurt, keju, dll',
                'business_type_id' => $foodInd?->id,
                'category' => 'Dairy',
            ],
            [
                'name' => 'Bumbu & Saus',
                'code' => 'FOOD-SAUCE',
                'description' => 'Kecap, saus, bumbu masak',
                'business_type_id' => $foodInd?->id,
                'category' => 'Seasoning',
            ],
            [
                'name' => 'Makanan Beku',
                'code' => 'FOOD-FROZEN',
                'description' => 'Frozen food, makanan siap saji',
                'business_type_id' => $foodInd?->id,
                'category' => 'Frozen',
            ],

            // Beverage Products
            [
                'name' => 'Minuman Ringan',
                'code' => 'BEV-SOFT',
                'description' => 'Soft drink, soda',
                'business_type_id' => $bevInd?->id,
                'category' => 'Carbonated',
            ],
            [
                'name' => 'Jus & Sirup',
                'code' => 'BEV-JUICE',
                'description' => 'Jus buah, sirup, konsentrat',
                'business_type_id' => $bevInd?->id,
                'category' => 'Juice',
            ],
            [
                'name' => 'Teh & Kopi',
                'code' => 'BEV-TEA',
                'description' => 'Teh kemasan, kopi instant',
                'business_type_id' => $bevInd?->id,
                'category' => 'Hot Beverage',
            ],
            [
                'name' => 'Minuman Energi',
                'code' => 'BEV-ENERGY',
                'description' => 'Energy drink, sport drink',
                'business_type_id' => $bevInd?->id,
                'category' => 'Energy',
            ],
            [
                'name' => 'Minuman Susu',
                'code' => 'BEV-MILK',
                'description' => 'Susu UHT, susu pasteurisasi',
                'business_type_id' => $bevInd?->id,
                'category' => 'Dairy Beverage',
            ],

            // Cosmetic Products
            [
                'name' => 'Skincare',
                'code' => 'COSM-SKIN',
                'description' => 'Serum, cream, lotion',
                'business_type_id' => $cosmInd?->id,
                'category' => 'Skincare',
            ],
            [
                'name' => 'Makeup',
                'code' => 'COSM-MAKEUP',
                'description' => 'Foundation, lipstick, eyeshadow',
                'business_type_id' => $cosmInd?->id,
                'category' => 'Makeup',
            ],
            [
                'name' => 'Haircare',
                'code' => 'COSM-HAIR',
                'description' => 'Shampo, conditioner, hair serum',
                'business_type_id' => $cosmInd?->id,
                'category' => 'Haircare',
            ],
            [
                'name' => 'Parfum & Fragrance',
                'code' => 'COSM-FRAG',
                'description' => 'Parfum, cologne, body mist',
                'business_type_id' => $cosmInd?->id,
                'category' => 'Fragrance',
            ],

            // Pharmaceutical Products
            [
                'name' => 'Vitamin & Suplemen',
                'code' => 'PHARM-VIT',
                'description' => 'Multivitamin, suplemen kesehatan',
                'business_type_id' => $pharmInd?->id,
                'category' => 'Supplement',
            ],
            [
                'name' => 'Obat Herbal',
                'code' => 'PHARM-HERB',
                'description' => 'Jamu, obat tradisional',
                'business_type_id' => $pharmInd?->id,
                'category' => 'Herbal',
            ],
            [
                'name' => 'Obat-obatan',
                'code' => 'PHARM-MED',
                'description' => 'Obat resep, obat bebas',
                'business_type_id' => $pharmInd?->id,
                'category' => 'Medicine',
            ],
        ];

        foreach ($productTypes as $type) {
            ProductType::create($type);
        }
    }
}
