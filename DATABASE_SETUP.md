# Database Setup untuk LPH Doa Bangsa

## Masalah Migration di aaPanel

Karena CLI PHP tidak dapat terhubung ke MySQL di aaPanel environment, migration harus dilakukan secara manual melalui phpMyAdmin.

## Langkah-langkah Setup:

### 1. Database Sudah Ada

Database `db_stagging` sudah dibuat dan berisi semua tabel yang diperlukan. **JANGAN jalankan** `php artisan migrate` karena akan error "table already exists".

### 2. Seed Migrations Table

Untuk menandai bahwa semua migrations sudah dijalankan:

1. **Login ke phpMyAdmin** di aaPanel
2. **Pilih database** `db_stagging`
3. **Klik tab "SQL"**
4. **Copy isi file** `database/seed_migrations.sql`
5. **Paste ke SQL editor**
6. **Klik "Go"** untuk execute

### 3. Verifikasi

Setelah execute SQL script, cek tabel `migrations`:
- Seharusnya ada 31 records
- Semua dengan batch = 1

### 4. Aplikasi Siap Digunakan

Sekarang Laravel akan mengenali bahwa semua migrations sudah dijalankan dan tidak akan mencoba membuat tabel lagi.

## Akses Aplikasi

- **URL**: https://staging.lp3hdoabangsa.com
- **Admin Login**:
  - Email: admin@lph.com
  - Password: password

## Troubleshooting

### Error "Connection refused" di CLI

Ini **NORMAL** di aaPanel. CLI PHP tidak bisa connect ke MySQL, tapi web application bisa. Aplikasi akan berfungsi normal ketika diakses via browser.

### Error "Table already exists"

Jangan jalankan `php artisan migrate`. Database sudah ada. Gunakan SQL script untuk seed migrations table.

## Struktur Database

Database `db_stagging` sudah berisi 31+ tabel:
- users, roles, permissions (authentication)
- submissions, products (core business)
- audits, schedules, findings (audit management)
- invoices, invoice_payments, fee_configurations (finance)
- documents, verifications (document management)
- regions, business_types, product_types (master data)
- notifications, activity_logs, comments (system)
