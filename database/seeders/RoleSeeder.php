<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Pelaku Usaha',
                'slug' => 'pelaku_usaha',
                'description' => 'Client yang mengajukan sertifikasi halal. Dapat membuat pengajuan, melengkapi dokumen, menindaklanjuti revisi, memantau status, dan melakukan pembayaran.',
                'is_active' => true,
            ],
            [
                'name' => 'Penyedia Halal',
                'slug' => 'penyedia_halal',
                'description' => 'Melakukan verifikasi kelengkapan pra-audit dan audit internal. Menghasilkan hasil verifikasi yang dapat dikunci.',
                'is_active' => true,
            ],
            [
                'name' => 'Admin LPH',
                'slug' => 'admin_lph',
                'description' => 'Admin operasional yang melakukan screening administrasi, normalisasi data, koordinasi lintas role, penerbitan invoice, penerusan ke Komite Fatwa/BPJPH, serta monitoring keseluruhan.',
                'is_active' => true,
            ],
            [
                'name' => 'Manajer Teknis',
                'slug' => 'manajer_teknis',
                'description' => 'Melakukan penugasan auditor, pengaturan jadwal, dan kontrol kapasitas/beban kerja.',
                'is_active' => true,
            ],
            [
                'name' => 'Auditor Halal',
                'slug' => 'auditor_halal',
                'description' => 'Melaksanakan audit eksternal, membuat temuan, mengunggah bukti, dan menyusun laporan audit final.',
                'is_active' => true,
            ],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['slug' => $role['slug']],
                $role
            );
        }
    }
}
