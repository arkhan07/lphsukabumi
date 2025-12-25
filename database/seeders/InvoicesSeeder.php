<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;

class InvoicesSeeder extends Seeder
{
    public function run()
    {
        $invoices = [
            [
                'submission_id' => 5,
                'user_id' => 6, // CV Minuman Sehat
                'created_by' => 1, // Admin LPH
                'invoice_number' => 'INV-202412-00001',
                'invoice_type' => 'full_payment',
                'invoice_title' => 'Invoice Sertifikasi Halal - CV Minuman Sehat',
                'description' => 'Biaya sertifikasi halal untuk CV Minuman Sehat Nusantara',
                'subtotal' => 2500000,
                'tax_percentage' => 11,
                'tax_amount' => 275000,
                'discount_percentage' => 0,
                'discount_amount' => 0,
                'total_amount' => 2775000,
                'paid_amount' => 2775000,
                'outstanding_amount' => 0,
                'currency' => 'IDR',
                'payment_term' => 'net_14',
                'payment_days' => 14,
                'invoice_date' => '2024-12-20',
                'due_date' => '2025-01-03',
                'status' => 'paid',
                'payment_count' => 1,
                'first_payment_at' => '2024-12-21 10:00:00',
                'fully_paid_at' => '2024-12-21 10:00:00',
                'sent_at' => '2024-12-20 14:00:00',
            ],
            [
                'submission_id' => 1,
                'user_id' => 5, // PT Makanan Halal
                'created_by' => 1,
                'invoice_number' => 'INV-202412-00002',
                'invoice_type' => 'full_payment',
                'invoice_title' => 'Invoice Sertifikasi Halal - PT Makanan Halal',
                'description' => 'Biaya sertifikasi halal untuk PT Makanan Halal Indonesia',
                'subtotal' => 3000000,
                'tax_percentage' => 11,
                'tax_amount' => 330000,
                'discount_percentage' => 0,
                'discount_amount' => 0,
                'total_amount' => 3330000,
                'paid_amount' => 1665000,
                'outstanding_amount' => 1665000,
                'currency' => 'IDR',
                'payment_term' => 'net_14',
                'payment_days' => 14,
                'invoice_date' => '2024-12-21',
                'due_date' => '2025-01-04',
                'status' => 'partial_payment',
                'payment_count' => 1,
                'first_payment_at' => '2024-12-22 09:00:00',
                'sent_at' => '2024-12-21 15:00:00',
            ],
            [
                'submission_id' => 2,
                'user_id' => 6, // CV Minuman Sehat
                'created_by' => 1,
                'invoice_number' => 'INV-202412-00003',
                'invoice_type' => 'full_payment',
                'invoice_title' => 'Invoice Sertifikasi Halal - CV Minuman Sehat (2)',
                'description' => 'Biaya sertifikasi halal untuk CV Minuman Sehat Nusantara - Submission 2',
                'subtotal' => 2800000,
                'tax_percentage' => 11,
                'tax_amount' => 308000,
                'discount_percentage' => 0,
                'discount_amount' => 0,
                'total_amount' => 3108000,
                'paid_amount' => 0,
                'outstanding_amount' => 3108000,
                'currency' => 'IDR',
                'payment_term' => 'net_14',
                'payment_days' => 14,
                'invoice_date' => '2024-12-22',
                'due_date' => '2025-01-05',
                'status' => 'sent',
                'payment_count' => 0,
                'sent_at' => '2024-12-22 16:00:00',
            ],
        ];

        foreach ($invoices as $invoice) {
            Invoice::create($invoice);
        }
    }
}
