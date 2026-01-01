<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('🌱 Seeding test data...');

        // Get or create roles
        $adminRole = Role::firstOrCreate(['slug' => 'admin_lph'], ['name' => 'Admin LPH']);
        $manajerTeknisRole = Role::firstOrCreate(['slug' => 'manajer_teknis'], ['name' => 'Manajer Teknis']);
        $auditorRole = Role::firstOrCreate(['slug' => 'auditor_halal'], ['name' => 'Auditor Halal']);
        $phrRole = Role::firstOrCreate(['slug' => 'pendamping_halal_reguler'], ['name' => 'Pendamping Halal Reguler']);
        $pelakuUsahaRole = Role::firstOrCreate(['slug' => 'pelaku_usaha'], ['name' => 'Pelaku Usaha']);

        $this->command->info('✅ Roles created');

        // 1. Create Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@lphsukabumi.id'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
                'phone' => '081234567890',
                'whatsapp' => '081234567890',
            ]
        );
        if (!$admin->hasRole('admin_lph')) {
            $admin->assignRole($adminRole);
        }
        $this->command->info('✅ Admin user created: admin@lphsukabumi.id / password');

        // 2. Create Manajer Teknis
        $manajerTeknis = User::firstOrCreate(
            ['email' => 'manajer@lphsukabumi.id'],
            [
                'name' => 'Manajer Teknis',
                'password' => Hash::make('password'),
                'phone' => '081234567891',
                'whatsapp' => '081234567891',
            ]
        );
        if (!$manajerTeknis->hasRole('manajer_teknis')) {
            $manajerTeknis->assignRole($manajerTeknisRole);
        }
        $this->command->info('✅ Manajer Teknis created: manajer@lphsukabumi.id / password');

        // 3. Create Auditor
        $auditor = User::firstOrCreate(
            ['email' => 'auditor@lphsukabumi.id'],
            [
                'name' => 'Auditor Halal',
                'password' => Hash::make('password'),
                'phone' => '081234567892',
                'whatsapp' => '081234567892',
            ]
        );
        if (!$auditor->hasRole('auditor_halal')) {
            $auditor->assignRole($auditorRole);
        }
        $this->command->info('✅ Auditor created: auditor@lphsukabumi.id / password');

        // 4. Create Regional Manager PHR
        $regionalManager = User::firstOrCreate(
            ['email' => 'regional@lphsukabumi.id'],
            [
                'name' => 'Regional Manager PHR',
                'password' => Hash::make('password'),
                'phone' => '081234567893',
                'whatsapp' => '081234567893',
                'phr_level' => 'regional_manager',
                'is_phr_active' => true,
                'phr_joined_at' => now()->subYears(2),
                'province' => 'Jawa Barat',
                'city' => 'Sukabumi',
                'district' => 'Gunung Puyuh',
                'phr_recruited_count' => 15,
                'phr_active_recruited_count' => 12,
                'pu_referred_count' => 50,
                'area_managers_count' => 12,
            ]
        );
        if (!$regionalManager->hasRole('pendamping_halal_reguler')) {
            $regionalManager->assignRole($phrRole);
        }
        $regionalManager->ensureReferralCode('PHR');
        $this->command->info('✅ Regional Manager PHR created: regional@lphsukabumi.id / password');
        $this->command->info('   Code: ' . $regionalManager->referral_code);

        // 5. Create Area Manager PHR (recruited by Regional Manager)
        $areaManager = User::firstOrCreate(
            ['email' => 'area@lphsukabumi.id'],
            [
                'name' => 'Area Manager PHR',
                'password' => Hash::make('password'),
                'phone' => '081234567894',
                'whatsapp' => '081234567894',
                'phr_level' => 'area_manager',
                'is_phr_active' => true,
                'phr_joined_at' => now()->subYear(),
                'recruited_by_phr' => $regionalManager->id,
                'province' => 'Jawa Barat',
                'city' => 'Sukabumi',
                'district' => 'Cibeureum',
                'phr_recruited_count' => 25,
                'phr_active_recruited_count' => 22,
                'pu_referred_count' => 35,
            ]
        );
        if (!$areaManager->hasRole('pendamping_halal_reguler')) {
            $areaManager->assignRole($phrRole);
        }
        $areaManager->ensureReferralCode('PHR');
        $this->command->info('✅ Area Manager PHR created: area@lphsukabumi.id / password');
        $this->command->info('   Code: ' . $areaManager->referral_code);

        // 6. Create Regular PHR (recruited by Area Manager)
        $phr = User::firstOrCreate(
            ['email' => 'phr@lphsukabumi.id'],
            [
                'name' => 'PHR Regular',
                'password' => Hash::make('password'),
                'phone' => '081234567895',
                'whatsapp' => '081234567895',
                'phr_level' => 'phr',
                'is_phr_active' => true,
                'phr_joined_at' => now()->subMonths(6),
                'recruited_by_phr' => $areaManager->id,
                'province' => 'Jawa Barat',
                'city' => 'Sukabumi',
                'district' => 'Lembursitu',
                'phr_recruited_count' => 5,
                'phr_active_recruited_count' => 4,
                'pu_referred_count' => 12,
            ]
        );
        if (!$phr->hasRole('pendamping_halal_reguler')) {
            $phr->assignRole($phrRole);
        }
        $phr->ensureReferralCode('PHR');
        $this->command->info('✅ Regular PHR created: phr@lphsukabumi.id / password');
        $this->command->info('   Code: ' . $phr->referral_code);

        // 7. Create Pelaku Usaha (referred by Regular PHR)
        $pelakuUsaha = User::firstOrCreate(
            ['email' => 'pelaku@lphsukabumi.id'],
            [
                'name' => 'PT Makanan Halal',
                'password' => Hash::make('password'),
                'phone' => '081234567896',
                'whatsapp' => '081234567896',
                'referred_by' => $phr->id,
            ]
        );
        if (!$pelakuUsaha->hasRole('pelaku_usaha')) {
            $pelakuUsaha->assignRole($pelakuUsahaRole);
        }
        $pelakuUsaha->ensureReferralCode('PU');
        $this->command->info('✅ Pelaku Usaha created: pelaku@lphsukabumi.id / password');
        $this->command->info('   Referred by: ' . $phr->name . ' (' . $phr->referral_code . ')');

        // 8. Create another Pelaku Usaha without PHR referral
        $pelakuUsaha2 = User::firstOrCreate(
            ['email' => 'pelaku2@lphsukabumi.id'],
            [
                'name' => 'CV Produk Halal',
                'password' => Hash::make('password'),
                'phone' => '081234567897',
                'whatsapp' => '081234567897',
            ]
        );
        if (!$pelakuUsaha2->hasRole('pelaku_usaha')) {
            $pelakuUsaha2->assignRole($pelakuUsahaRole);
        }
        $this->command->info('✅ Pelaku Usaha 2 created: pelaku2@lphsukabumi.id / password (no PHR referral)');

        $this->command->info('');
        $this->command->info('=================================================');
        $this->command->info('🎉 Test data seeding completed!');
        $this->command->info('=================================================');
        $this->command->info('');
        $this->command->info('📝 Login credentials (all passwords: password):');
        $this->command->info('');
        $this->command->info('Admin:           admin@lphsukabumi.id');
        $this->command->info('Manajer Teknis:  manajer@lphsukabumi.id');
        $this->command->info('Auditor:         auditor@lphsukabumi.id');
        $this->command->info('Regional Manager: regional@lphsukabumi.id (Code: ' . $regionalManager->referral_code . ')');
        $this->command->info('Area Manager:    area@lphsukabumi.id (Code: ' . $areaManager->referral_code . ')');
        $this->command->info('PHR Regular:     phr@lphsukabumi.id (Code: ' . $phr->referral_code . ')');
        $this->command->info('Pelaku Usaha 1:  pelaku@lphsukabumi.id (Referred by PHR)');
        $this->command->info('Pelaku Usaha 2:  pelaku2@lphsukabumi.id (No referral)');
        $this->command->info('');
        $this->command->info('🔗 PHR Hierarchy:');
        $this->command->info('Regional Manager → Area Manager → PHR Regular → Pelaku Usaha');
        $this->command->info('');
    }
}
