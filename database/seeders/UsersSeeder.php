<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Admin LPH',
                'email' => 'admin@lph.com',
                'password' => Hash::make('password'),
                'phone' => '081234567890',
                'role_slugs' => ['admin_lph']
            ],
            [
                'name' => 'Manajer Teknis',
                'email' => 'manajer@lph.com',
                'password' => Hash::make('password'),
                'phone' => '081234567891',
                'role_slugs' => ['manajer_teknis']
            ],
            [
                'name' => 'Ahmad Auditor',
                'email' => 'auditor1@lph.com',
                'password' => Hash::make('password'),
                'phone' => '081234567892',
                'role_slugs' => ['auditor_halal']
            ],
            [
                'name' => 'Siti Auditor',
                'email' => 'auditor2@lph.com',
                'password' => Hash::make('password'),
                'phone' => '081234567893',
                'role_slugs' => ['auditor_halal']
            ],
            [
                'name' => 'PT Makanan Halal Indonesia',
                'email' => 'usaha1@example.com',
                'password' => Hash::make('password'),
                'phone' => '081234567894',
                'role_slugs' => ['pelaku_usaha']
            ],
            [
                'name' => 'CV Minuman Sehat Nusantara',
                'email' => 'usaha2@example.com',
                'password' => Hash::make('password'),
                'phone' => '081234567895',
                'role_slugs' => ['pelaku_usaha']
            ],
            [
                'name' => 'UD Berkah Jaya',
                'email' => 'usaha3@example.com',
                'password' => Hash::make('password'),
                'phone' => '081234567896',
                'role_slugs' => ['pelaku_usaha']
            ],
            [
                'name' => 'PT Supplier Bahan Halal',
                'email' => 'penyedia1@example.com',
                'password' => Hash::make('password'),
                'phone' => '081234567897',
                'role_slugs' => ['penyedia_halal']
            ],
            [
                'name' => 'CV Bahan Baku Terpercaya',
                'email' => 'penyedia2@example.com',
                'password' => Hash::make('password'),
                'phone' => '081234567898',
                'role_slugs' => ['penyedia_halal']
            ],
        ];

        foreach ($users as $userData) {
            $roleSlugs = $userData['role_slugs'];
            unset($userData['role_slugs']);

            $user = User::create($userData);

            // Attach roles
            $roleIds = \App\Models\Role::whereIn('slug', $roleSlugs)->pluck('id');
            $user->roles()->attach($roleIds);
        }
    }
}
