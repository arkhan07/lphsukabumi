<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Creates dummy users for testing each role.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin LPH',
                'email' => 'admin@lph.test',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'role_slug' => 'admin_lph',
            ],
            [
                'name' => 'Pelaku Usaha Demo',
                'email' => 'pelaku@test.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'role_slug' => 'pelaku_usaha',
            ],
            [
                'name' => 'Penyedia Halal Demo',
                'email' => 'penyedia@lph.test',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'role_slug' => 'penyedia_halal',
            ],
            [
                'name' => 'Manajer Teknis Demo',
                'email' => 'manajer@lph.test',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'role_slug' => 'manajer_teknis',
            ],
            [
                'name' => 'Auditor Halal Demo',
                'email' => 'auditor@lph.test',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'role_slug' => 'auditor_halal',
            ],
        ];

        foreach ($users as $userData) {
            $roleSlug = $userData['role_slug'];
            unset($userData['role_slug']);

            // Create or update user
            $user = User::updateOrCreate(
                ['email' => $userData['email']],
                $userData
            );

            // Attach role to user
            $role = Role::where('slug', $roleSlug)->first();
            if ($role && !$user->roles->contains($role->id)) {
                $user->roles()->attach($role->id);
            }

            $this->command->info("Created user: {$user->email} with role: {$roleSlug}");
        }

        $this->command->info('');
        $this->command->info('✓ Dummy users created successfully!');
        $this->command->info('');
        $this->command->info('Login credentials:');
        $this->command->info('==================');
        $this->command->info('1. Admin LPH:       admin@lph.test / password');
        $this->command->info('2. Pelaku Usaha:    pelaku@test.com / password');
        $this->command->info('3. Penyedia Halal:  penyedia@lph.test / password');
        $this->command->info('4. Manajer Teknis:  manajer@lph.test / password');
        $this->command->info('5. Auditor Halal:   auditor@lph.test / password');
        $this->command->info('');
    }
}
