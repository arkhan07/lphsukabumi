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
        // ====================================
        // URUTAN PENTING: JANGAN DIUBAH!
        // ====================================

        // 1. Roles & Permissions (HARUS PERTAMA)
        $this->call([
            RolesAndPermissionsSeeder::class,
        ]);

        // 2. Master Data (regions, business types, product types)
        $this->call([
            RegionsSeeder::class,
            BusinessTypesSeeder::class,
            ProductTypesSeeder::class,
            FeeConfigurationsSeeder::class,
        ]);

        // 3. Users (requires roles)
        $this->call([
            UsersSeeder::class,
        ]);

        // 4. Submissions (requires users, regions, business types)
        $this->call([
            SubmissionsSeeder::class,
        ]);

        // 5. Products (requires submissions, product types)
        $this->call([
            ProductsSeeder::class,
        ]);

        // 6. Documents (requires submissions, users)
        $this->call([
            DocumentsSeeder::class,
        ]);

        // 7. Invoices & Payments (requires submissions, users)
        $this->call([
            InvoicesSeeder::class,
            InvoicePaymentsSeeder::class,
        ]);

        $this->command->info('✅ Database seeding completed successfully!');
        $this->command->info('📊 Total users created: 9');
        $this->command->info('📝 Total submissions created: 5');
        $this->command->info('📦 Total products created: 6');
        $this->command->info('💰 Total invoices created: 3');
    }
}
