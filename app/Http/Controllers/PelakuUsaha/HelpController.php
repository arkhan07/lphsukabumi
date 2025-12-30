<?php

namespace App\Http\Controllers\PelakuUsaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    /**
     * Display help center.
     */
    public function index()
    {
        // FAQ categories
        $faqs = [
            [
                'category' => 'Permohonan Sertifikasi',
                'icon' => 'ti-file-text',
                'questions' => [
                    [
                        'question' => 'Bagaimana cara mengajukan permohonan sertifikasi halal?',
                        'answer' => 'Anda dapat mengajukan permohonan melalui menu "Permohonan" > "Buat Permohonan Baru". Isi semua data yang diperlukan dengan lengkap dan benar, lalu submit permohonan Anda.'
                    ],
                    [
                        'question' => 'Dokumen apa saja yang diperlukan untuk permohonan?',
                        'answer' => 'Dokumen yang diperlukan meliputi: Profil Perusahaan, Izin Usaha, NIB, NPWP, Spesifikasi Produk, Alur Proses Produksi, Layout Fasilitas, Daftar Bahan Baku, dan dokumen pendukung lainnya.'
                    ],
                    [
                        'question' => 'Berapa lama proses sertifikasi halal?',
                        'answer' => 'Proses sertifikasi halal biasanya memakan waktu 3-6 bulan tergantung kelengkapan dokumen dan hasil audit. Anda dapat memantau status permohonan melalui dashboard.'
                    ],
                ]
            ],
            [
                'category' => 'Produk & Dokumen',
                'icon' => 'ti-package',
                'questions' => [
                    [
                        'question' => 'Bagaimana cara menambah produk?',
                        'answer' => 'Produk akan otomatis ditambahkan saat Anda membuat permohonan sertifikasi. Jumlah produk sesuai dengan yang Anda input di form permohonan.'
                    ],
                    [
                        'question' => 'Bagaimana cara upload dokumen?',
                        'answer' => 'Kunjungi menu "Dokumen Saya" > "Upload Dokumen". Pilih permohonan terkait, jenis dokumen, dan upload file Anda. Maksimal ukuran file adalah 10MB.'
                    ],
                    [
                        'question' => 'Format file apa yang didukung untuk upload dokumen?',
                        'answer' => 'Kami mendukung format PDF, DOC, DOCX, JPG, dan PNG. Untuk dokumen resmi, kami sarankan menggunakan format PDF.'
                    ],
                ]
            ],
            [
                'category' => 'Pembayaran & Invoice',
                'icon' => 'ti-currency-dollar',
                'questions' => [
                    [
                        'question' => 'Bagaimana cara melakukan pembayaran?',
                        'answer' => 'Buka menu "Keuangan" > "Invoice Saya", pilih invoice yang ingin dibayar, klik "Bayar Sekarang". Lakukan transfer sesuai instruksi dan upload bukti pembayaran.'
                    ],
                    [
                        'question' => 'Berapa lama verifikasi pembayaran?',
                        'answer' => 'Verifikasi pembayaran biasanya memakan waktu 1-3 hari kerja setelah Anda upload bukti pembayaran. Anda akan mendapat notifikasi setelah pembayaran terverifikasi.'
                    ],
                    [
                        'question' => 'Apa yang harus dilakukan jika pembayaran ditolak?',
                        'answer' => 'Jika pembayaran ditolak, silakan periksa catatan penolakan di detail pembayaran. Anda dapat menghubungi admin atau melakukan pembayaran ulang dengan informasi yang benar.'
                    ],
                ]
            ],
            [
                'category' => 'Akun & Keamanan',
                'icon' => 'ti-shield-check',
                'questions' => [
                    [
                        'question' => 'Bagaimana cara mengubah password?',
                        'answer' => 'Klik profil Anda di pojok kanan atas > "Pengaturan" > "Ubah Password". Masukkan password lama dan password baru Anda.'
                    ],
                    [
                        'question' => 'Lupa password, apa yang harus dilakukan?',
                        'answer' => 'Klik "Lupa Password" di halaman login, masukkan email Anda. Kami akan mengirimkan link reset password ke email Anda.'
                    ],
                    [
                        'question' => 'Bagaimana cara mengubah email atau nomor HP?',
                        'answer' => 'Buka menu "Pengaturan" dari dropdown profil, lalu update email atau nomor HP Anda di form "Informasi Profil".'
                    ],
                ]
            ],
        ];

        return view('pelaku-usaha.help.index', compact('faqs'));
    }

    /**
     * Show contact support page.
     */
    public function contact()
    {
        return view('pelaku-usaha.help.contact');
    }
}
