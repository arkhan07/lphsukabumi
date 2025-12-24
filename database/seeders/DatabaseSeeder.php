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

        // Seed Master Data
        $this->call([
            RegionSeeder::class,
            BusinessTypeSeeder::class,
            ProductTypeSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
