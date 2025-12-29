<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create Roles
        $roles = [
            [
                'name' => 'Admin LPH',
                'slug' => 'admin_lph',
                'description' => 'Administrator LPH dengan akses penuh ke seluruh sistem'
            ],
            [
                'name' => 'Manajer Teknis',
                'slug' => 'manajer_teknis',
                'description' => 'Manajer teknis yang mengelola proses sertifikasi'
            ],
            [
                'name' => 'Auditor Halal',
                'slug' => 'auditor_halal',
                'description' => 'Auditor yang melakukan audit halal'
            ],
            [
                'name' => 'Pelaku Usaha',
                'slug' => 'pelaku_usaha',
                'description' => 'Pelaku usaha yang mengajukan sertifikat halal'
            ],
            [
                'name' => 'Pendamping Halal Reguler (PHR)',
                'slug' => 'pendamping_halal_reguler',
                'description' => 'Pendamping Halal Reguler dengan akses view submission, create, dan view report'
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

        // Create Permissions (optional - can be expanded later)
        $permissions = [
            ['name' => 'view_dashboard', 'slug' => 'view_dashboard', 'description' => 'Lihat dashboard'],
            ['name' => 'manage_submissions', 'slug' => 'manage_submissions', 'description' => 'Kelola permohonan'],
            ['name' => 'manage_audits', 'slug' => 'manage_audits', 'description' => 'Kelola audit'],
            ['name' => 'manage_users', 'slug' => 'manage_users', 'description' => 'Kelola pengguna'],
            ['name' => 'manage_finance', 'slug' => 'manage_finance', 'description' => 'Kelola keuangan'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
