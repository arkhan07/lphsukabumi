<?php

namespace Database\Seeders;

use App\Models\BusinessType;
use Illuminate\Database\Seeder;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businessTypes = [
            // Food Industry
            [
                'name' => 'Industri Makanan',
                'code' => 'FOOD-IND',
                'description' => 'Industri pengolahan makanan skala besar',
                'category' => 'food',
            ],
            [
                'name' => 'Usaha Mikro Makanan',
                'code' => 'FOOD-MICRO',
                'description' => 'UMKM pengolahan makanan',
                'category' => 'food',
            ],
            [
                'name' => 'Restoran & Katering',
                'code' => 'FOOD-REST',
                'description' => 'Usaha restoran, rumah makan, dan katering',
                'category' => 'food',
            ],
            [
                'name' => 'Bakery & Pastry',
                'code' => 'FOOD-BAKERY',
                'description' => 'Usaha roti, kue, dan pastry',
                'category' => 'food',
            ],

            // Beverage Industry
            [
                'name' => 'Industri Minuman',
                'code' => 'BEV-IND',
                'description' => 'Industri pengolahan minuman skala besar',
                'category' => 'beverage',
            ],
            [
                'name' => 'Usaha Minuman Kemasan',
                'code' => 'BEV-PACK',
                'description' => 'Usaha minuman dalam kemasan',
                'category' => 'beverage',
            ],
            [
                'name' => 'Kafe & Coffee Shop',
                'code' => 'BEV-CAFE',
                'description' => 'Usaha kafe dan kedai kopi',
                'category' => 'beverage',
            ],

            // Cosmetics
            [
                'name' => 'Industri Kosmetik',
                'code' => 'COSM-IND',
                'description' => 'Industri kosmetik dan produk kecantikan',
                'category' => 'cosmetics',
            ],
            [
                'name' => 'Produk Perawatan Kulit',
                'code' => 'COSM-SKIN',
                'description' => 'Produk skincare dan perawatan kulit',
                'category' => 'cosmetics',
            ],
            [
                'name' => 'Produk Perawatan Rambut',
                'code' => 'COSM-HAIR',
                'description' => 'Shampo, conditioner, dan perawatan rambut',
                'category' => 'cosmetics',
            ],

            // Pharmaceutical
            [
                'name' => 'Industri Farmasi',
                'code' => 'PHARM-IND',
                'description' => 'Industri obat-obatan dan farmasi',
                'category' => 'pharmaceutical',
            ],
            [
                'name' => 'Produk Suplemen',
                'code' => 'PHARM-SUPP',
                'description' => 'Produk suplemen dan vitamin',
                'category' => 'pharmaceutical',
            ],
            [
                'name' => 'Jamu & Herbal',
                'code' => 'PHARM-HERB',
                'description' => 'Produk jamu tradisional dan herbal',
                'category' => 'pharmaceutical',
            ],

            // Other
            [
                'name' => 'Rumah Potong Hewan (RPH)',
                'code' => 'OTHER-RPH',
                'description' => 'Fasilitas pemotongan hewan',
                'category' => 'other',
            ],
            [
                'name' => 'Logistik & Distribusi',
                'code' => 'OTHER-LOG',
                'description' => 'Jasa logistik dan distribusi produk halal',
                'category' => 'other',
            ],
        ];

        foreach ($businessTypes as $type) {
            BusinessType::create($type);
        }
    }
}
