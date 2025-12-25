<?php

namespace Database\Seeders;

use App\Models\Submission;
use Illuminate\Database\Seeder;

class SubmissionsSeeder extends Seeder
{
    public function run()
    {
        $submissions = [
            [
                'submission_number' => 'SUB-202412-00001',
                'user_id' => 5, // PT Makanan Halal Indonesia
                'company_name' => 'PT Makanan Halal Indonesia',
                'company_email' => 'info@makananhalal.com',
                'company_phone' => '0218765432',
                'company_address' => 'Jl. Industri No. 123, Sukabumi',
                'region_id' => 2, // Sukabumi
                'business_type_id' => 1, // Industri Makanan
                'npwp' => '01.234.567.8-901.000',
                'nib' => '1234567890123',
                'production_location' => 'Kawasan Industri Sukabumi',
                'employee_count' => 50,
                'production_capacity' => 1000,
                'production_capacity_unit' => 'kg/hari',
                'certification_type' => 'new',
                'submission_date' => '2024-12-20',
                'status' => 'submitted',
                'submitted_at' => '2024-12-20 10:00:00',
                'profile_completed' => true,
                'products_completed' => true,
                'materials_completed' => false,
                'processes_completed' => false,
                'documents_completed' => true,
                'completeness_percentage' => 60,
            ],
            [
                'submission_number' => 'SUB-202412-00002',
                'user_id' => 6, // CV Minuman Sehat
                'company_name' => 'CV Minuman Sehat Nusantara',
                'company_email' => 'info@minumansehat.com',
                'company_phone' => '0218765433',
                'company_address' => 'Jl. Sehat No. 45, Bogor',
                'region_id' => 3, // Bogor
                'business_type_id' => 2, // Industri Minuman
                'npwp' => '02.234.567.8-902.000',
                'nib' => '1234567890124',
                'production_location' => 'Kawasan Industri Bogor',
                'employee_count' => 30,
                'production_capacity' => 2000,
                'production_capacity_unit' => 'liter/hari',
                'certification_type' => 'new',
                'submission_date' => '2024-12-21',
                'status' => 'screening',
                'submitted_at' => '2024-12-21 11:00:00',
                'profile_completed' => true,
                'products_completed' => true,
                'materials_completed' => true,
                'processes_completed' => false,
                'documents_completed' => true,
                'completeness_percentage' => 75,
            ],
            [
                'submission_number' => 'SUB-202412-00003',
                'user_id' => 7, // UD Berkah Jaya
                'company_name' => 'UD Berkah Jaya',
                'company_email' => 'berkah@example.com',
                'company_phone' => '0218765434',
                'company_address' => 'Jl. Berkah No. 78, Bandung',
                'region_id' => 4, // Bandung
                'business_type_id' => 1, // Industri Makanan
                'npwp' => '03.234.567.8-903.000',
                'nib' => '1234567890125',
                'production_location' => 'Kawasan Industri Bandung',
                'employee_count' => 20,
                'production_capacity' => 500,
                'production_capacity_unit' => 'kg/hari',
                'certification_type' => 'new',
                'submission_date' => '2024-12-22',
                'status' => 'verification',
                'submitted_at' => '2024-12-22 09:00:00',
                'screening_completed_at' => '2024-12-23 14:00:00',
                'profile_completed' => true,
                'products_completed' => true,
                'materials_completed' => true,
                'processes_completed' => true,
                'documents_completed' => true,
                'completeness_percentage' => 100,
            ],
            [
                'submission_number' => 'SUB-202412-00004',
                'user_id' => 5, // PT Makanan Halal Indonesia (submission ke-2)
                'company_name' => 'PT Makanan Halal Indonesia',
                'company_email' => 'info@makananhalal.com',
                'company_phone' => '0218765432',
                'company_address' => 'Jl. Industri No. 123, Sukabumi',
                'region_id' => 2,
                'business_type_id' => 1,
                'npwp' => '01.234.567.8-901.000',
                'nib' => '1234567890123',
                'production_location' => 'Kawasan Industri Sukabumi',
                'employee_count' => 50,
                'production_capacity' => 1000,
                'production_capacity_unit' => 'kg/hari',
                'certification_type' => 'renewal',
                'submission_date' => '2024-12-18',
                'status' => 'assigned',
                'submitted_at' => '2024-12-18 10:00:00',
                'screening_completed_at' => '2024-12-19 15:00:00',
                'verification_completed_at' => '2024-12-20 16:00:00',
                'assigned_at' => '2024-12-21 10:00:00',
                'profile_completed' => true,
                'products_completed' => true,
                'materials_completed' => true,
                'processes_completed' => true,
                'documents_completed' => true,
                'completeness_percentage' => 100,
            ],
            [
                'submission_number' => 'SUB-202412-00005',
                'user_id' => 6, // CV Minuman Sehat (submission ke-2)
                'company_name' => 'CV Minuman Sehat Nusantara',
                'company_email' => 'info@minumansehat.com',
                'company_phone' => '0218765433',
                'company_address' => 'Jl. Sehat No. 45, Bogor',
                'region_id' => 3,
                'business_type_id' => 2,
                'npwp' => '02.234.567.8-902.000',
                'nib' => '1234567890124',
                'production_location' => 'Kawasan Industri Bogor',
                'employee_count' => 30,
                'production_capacity' => 2000,
                'production_capacity_unit' => 'liter/hari',
                'certification_type' => 'new',
                'submission_date' => '2024-12-15',
                'status' => 'approved',
                'submitted_at' => '2024-12-15 10:00:00',
                'screening_completed_at' => '2024-12-16 15:00:00',
                'verification_completed_at' => '2024-12-17 16:00:00',
                'assigned_at' => '2024-12-18 10:00:00',
                'audit_completed_at' => '2024-12-20 17:00:00',
                'report_submitted_at' => '2024-12-21 10:00:00',
                'approved_at' => '2024-12-22 14:00:00',
                'profile_completed' => true,
                'products_completed' => true,
                'materials_completed' => true,
                'processes_completed' => true,
                'documents_completed' => true,
                'completeness_percentage' => 100,
            ],
        ];

        foreach ($submissions as $submission) {
            Submission::create($submission);
        }
    }
}
