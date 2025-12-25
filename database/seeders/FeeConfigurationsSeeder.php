<?php

namespace Database\Seeders;

use App\Models\FeeConfiguration;
use Illuminate\Database\Seeder;

class FeeConfigurationsSeeder extends Seeder
{
    public function run()
    {
        $fees = [
            [
                'config_name' => 'Biaya Sertifikasi Dasar',
                'config_code' => 'BASE-CERT-001',
                'description' => 'Biaya dasar sertifikasi halal untuk usaha kecil',
                'fee_type' => 'base_fee',
                'calculation_method' => 'fixed_amount',
                'base_amount' => 2500000,
                'min_amount' => 2500000,
                'max_amount' => 2500000,
                'effective_from' => '2024-01-01',
                'is_active' => true,
                'include_tax' => true,
                'tax_percentage' => 11,
            ],
            [
                'config_name' => 'Biaya Audit Halal',
                'config_code' => 'AUDIT-FEE-001',
                'description' => 'Biaya audit per hari',
                'fee_type' => 'audit_fee',
                'calculation_method' => 'per_day',
                'base_amount' => 1500000,
                'min_amount' => 1500000,
                'max_amount' => 5000000,
                'effective_from' => '2024-01-01',
                'is_active' => true,
                'include_tax' => true,
                'tax_percentage' => 11,
            ],
            [
                'config_name' => 'Biaya Per Produk',
                'config_code' => 'PRODUCT-FEE-001',
                'description' => 'Biaya per produk yang disertifikasi',
                'fee_type' => 'product_fee',
                'calculation_method' => 'per_product',
                'base_amount' => 500000,
                'min_amount' => 500000,
                'max_amount' => 1000000,
                'effective_from' => '2024-01-01',
                'is_active' => true,
                'include_tax' => true,
                'tax_percentage' => 11,
            ],
            [
                'config_name' => 'Biaya Surveillance',
                'config_code' => 'SURV-FEE-001',
                'description' => 'Biaya surveillance tahunan',
                'fee_type' => 'surveillance_fee',
                'calculation_method' => 'fixed_amount',
                'base_amount' => 1500000,
                'min_amount' => 1500000,
                'max_amount' => 3000000,
                'effective_from' => '2024-01-01',
                'is_active' => true,
                'include_tax' => true,
                'tax_percentage' => 11,
            ],
            [
                'config_name' => 'Biaya Re-sertifikasi',
                'config_code' => 'RECERT-FEE-001',
                'description' => 'Biaya perpanjangan sertifikat',
                'fee_type' => 're_certification_fee',
                'calculation_method' => 'fixed_amount',
                'base_amount' => 2000000,
                'min_amount' => 2000000,
                'max_amount' => 4000000,
                'effective_from' => '2024-01-01',
                'is_active' => true,
                'include_tax' => true,
                'tax_percentage' => 11,
            ],
        ];

        foreach ($fees as $fee) {
            FeeConfiguration::create($fee);
        }
    }
}
