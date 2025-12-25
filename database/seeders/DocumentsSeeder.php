<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Seeder;

class DocumentsSeeder extends Seeder
{
    public function run()
    {
        $documents = [
            [
                'submission_id' => 1,
                'uploaded_by' => 5, // PT Makanan Halal
                'document_type' => 'company_profile',
                'document_category' => 'company',
                'document_name' => 'Profil Perusahaan PT Makanan Halal',
                'file_path' => 'documents/company_profile_1.pdf',
                'file_name' => 'company_profile_1.pdf',
                'file_extension' => 'pdf',
                'file_size' => 1024000,
                'mime_type' => 'application/pdf',
                'status' => 'approved',
                'reviewed_by' => 1,
                'reviewed_at' => '2024-12-21 10:00:00',
                'version' => 1,
                'is_latest_version' => true,
                'is_required' => true,
            ],
            [
                'submission_id' => 1,
                'uploaded_by' => 5,
                'document_type' => 'npwp',
                'document_category' => 'company',
                'document_name' => 'NPWP PT Makanan Halal',
                'file_path' => 'documents/npwp_1.pdf',
                'file_name' => 'npwp_1.pdf',
                'file_extension' => 'pdf',
                'file_size' => 512000,
                'mime_type' => 'application/pdf',
                'status' => 'pending_review',
                'version' => 1,
                'is_latest_version' => true,
                'is_required' => true,
            ],
            [
                'submission_id' => 2,
                'uploaded_by' => 6, // CV Minuman Sehat
                'document_type' => 'company_profile',
                'document_category' => 'company',
                'document_name' => 'Profil Perusahaan CV Minuman Sehat',
                'file_path' => 'documents/company_profile_2.pdf',
                'file_name' => 'company_profile_2.pdf',
                'file_extension' => 'pdf',
                'file_size' => 1536000,
                'mime_type' => 'application/pdf',
                'status' => 'approved',
                'reviewed_by' => 1,
                'reviewed_at' => '2024-12-22 11:00:00',
                'version' => 1,
                'is_latest_version' => true,
                'is_required' => true,
            ],
            [
                'submission_id' => 3,
                'uploaded_by' => 7, // UD Berkah Jaya
                'document_type' => 'business_permit',
                'document_category' => 'company',
                'document_name' => 'Izin Usaha UD Berkah Jaya',
                'file_path' => 'documents/business_permit_3.pdf',
                'file_name' => 'business_permit_3.pdf',
                'file_extension' => 'pdf',
                'file_size' => 768000,
                'mime_type' => 'application/pdf',
                'status' => 'approved',
                'reviewed_by' => 2,
                'reviewed_at' => '2024-12-23 09:00:00',
                'version' => 1,
                'is_latest_version' => true,
                'is_required' => true,
            ],
        ];

        foreach ($documents as $document) {
            Document::create($document);
        }
    }
}
