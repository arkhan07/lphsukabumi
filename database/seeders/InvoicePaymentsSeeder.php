<?php

namespace Database\Seeders;

use App\Models\InvoicePayment;
use Illuminate\Database\Seeder;

class InvoicePaymentsSeeder extends Seeder
{
    public function run()
    {
        $payments = [
            [
                'invoice_id' => 1, // INV-00001 (fully paid)
                'user_id' => 6, // CV Minuman Sehat
                'verified_by' => 1, // Admin LPH
                'payment_number' => 'PAY-202412-00001',
                'amount' => 2775000,
                'currency' => 'IDR',
                'payment_method' => 'bank_transfer',
                'bank_name' => 'Bank Mandiri',
                'account_number' => '1370012345678',
                'account_holder_name' => 'CV Minuman Sehat Nusantara',
                'transfer_reference_number' => 'TRF-20241221-001',
                'payment_date' => '2024-12-21',
                'payment_time' => '2024-12-21 10:00:00',
                'payment_proof_path' => 'payments/proof_payment_1.jpg',
                'notes' => 'Pembayaran lunas via transfer bank',
                'status' => 'verified',
                'verified_at' => '2024-12-21 14:00:00',
                'verification_notes' => 'Pembayaran telah diverifikasi dan sesuai',
                'receipt_sent' => true,
                'receipt_sent_at' => '2024-12-21 15:00:00',
            ],
            [
                'invoice_id' => 2, // INV-00002 (partial payment)
                'user_id' => 5, // PT Makanan Halal
                'verified_by' => 1,
                'payment_number' => 'PAY-202412-00002',
                'amount' => 1665000, // 50% payment
                'currency' => 'IDR',
                'payment_method' => 'bank_transfer',
                'bank_name' => 'BCA',
                'account_number' => '1234567890',
                'account_holder_name' => 'PT Makanan Halal Indonesia',
                'transfer_reference_number' => 'TRF-20241222-002',
                'payment_date' => '2024-12-22',
                'payment_time' => '2024-12-22 09:00:00',
                'payment_proof_path' => 'payments/proof_payment_2.jpg',
                'notes' => 'Pembayaran pertama 50%',
                'status' => 'verified',
                'verified_at' => '2024-12-22 13:00:00',
                'verification_notes' => 'Pembayaran 50% telah diverifikasi',
                'receipt_sent' => true,
                'receipt_sent_at' => '2024-12-22 14:00:00',
            ],
        ];

        foreach ($payments as $payment) {
            InvoicePayment::create($payment);
        }
    }
}
