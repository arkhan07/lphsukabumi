<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed RBAC first
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
        ]);

        // Seed Dummy Users for testing
        $this->call([
            DummyUsersSeeder::class,
        ]);

        // Seed Master Data
        $this->call([
            RegionSeeder::class,
            BusinessTypeSeeder::class,
            ProductTypeSeeder::class,
        ]);
    }
}
