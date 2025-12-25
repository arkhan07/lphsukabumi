# Cara Import Dummy Data - LPH Doa Bangsa

## 📋 Langkah-langkah Import

### 1. Login ke phpMyAdmin
- Buka aaPanel
- Klik phpMyAdmin
- Login dengan credentials database

### 2. Pilih Database
- Pilih database `db_stagging` di sidebar kiri

### 3. Import Migrations Table (Jika Belum)
- Klik tab "SQL"
- Copy paste isi file `database/seed_migrations.sql`
- Klik "Go"
- Verifikasi: Tabel `migrations` harus ada 31 records

### 4. Import Dummy Data
- Klik tab "SQL"
- Copy paste **SELURUH ISI** file `database/dummy_data.sql`
- Klik "Go"
- Tunggu proses selesai

### 5. Add SoftDeletes Columns (PENTING!)
- Klik tab "SQL"
- Copy paste **SELURUH ISI** file `database/add_soft_deletes.sql`
- Klik "Go"
- Script ini menambahkan kolom `deleted_at` ke semua tabel yang diperlukan
- **WAJIB dijalankan** agar aplikasi tidak error saat login!

### 6. Verifikasi Import
Cek tabel-tabel berikut memiliki data:
- ✅ `users` - 9 users (1 admin, 1 manajer, 2 auditor, 3 pelaku usaha, 2 penyedia)
- ✅ `roles` - 5 roles
- ✅ `role_user` - 9 records (user-role mapping)
- ✅ `regions` - 7 wilayah
- ✅ `business_types` - 6 jenis usaha
- ✅ `product_types` - 7 tipe produk
- ✅ `submissions` - 5 permohonan (berbagai status)
- ✅ `products` - 6 produk
- ✅ `schedules` - 2 jadwal audit
- ✅ `audits` - 1 audit selesai
- ✅ `findings` - 2 temuan
- ✅ `documents` - 4 dokumen
- ✅ `invoices` - 3 invoice
- ✅ `invoice_payments` - 2 pembayaran
- ✅ `fee_configurations` - 5 konfigurasi biaya

## 🔐 Login Credentials

Semua user menggunakan password: **password**

### Admin LPH
- Email: `admin@lph.com`
- Role: Admin LPH (full access)

### Manajer Teknis
- Email: `manajer@lph.com`
- Role: Manajer Teknis

### Auditor Halal
- Email: `auditor1@lph.com` atau `auditor2@lph.com`
- Role: Auditor Halal

### Pelaku Usaha
- Email: `usaha1@example.com`, `usaha2@example.com`, `usaha3@example.com`
- Role: Pelaku Usaha

### Penyedia Halal
- Email: `penyedia1@example.com`, `penyedia2@example.com`
- Role: Penyedia Halal

## 📊 Data Summary

### Submissions (Permohonan)
1. **SUB-202412-00001** - PT Makanan Halal - Status: submitted
2. **SUB-202412-00002** - CV Minuman Sehat - Status: screening
3. **SUB-202412-00003** - UD Berkah Jaya - Status: verification
4. **SUB-202412-00004** - PT Makanan Halal - Status: assigned (ada jadwal audit)
5. **SUB-202412-00005** - CV Minuman Sehat - Status: approved (ada invoice lunas)

### Products (6 produk)
- Kerupuk Udang, Kue Nastar, Jus Jeruk, Jus Mangga, Sambal Pedas, Nugget Ayam
- 2 produk certified, 4 produk pending

### Invoices (3 invoice)
- INV-00001: Rp 2.775.000 - LUNAS
- INV-00002: Rp 3.330.000 - PARTIAL (50%)
- INV-00003: Rp 3.108.000 - PENDING

### Audits
- 1 audit completed dengan 2 temuan (sudah resolved)

## ✅ Test Aplikasi

Setelah import, test dengan:

1. **Login**: https://staging.lp3hdoabangsa.com/login
2. **Gunakan email**: admin@lph.com
3. **Password**: password

### Menu Yang Harus Berfungsi:
- ✅ Dashboard (dengan statistik real)
- ✅ Permohonan (list 5 submissions)
- ✅ Produk (list 6 products)
- ✅ Audit (1 schedule, 1 report, 2 findings)
- ✅ Keuangan (3 invoices, 2 payments, 5 fee configs)
- ✅ Dokumen (4 documents)
- ✅ Laporan (analytics dengan data)
- ✅ Pengguna (9 users, 5 roles)
- ✅ Master Data (7 regions, 6 business types, 7 product types)

## 🔧 Troubleshooting

### Error "Column 'deleted_at' not found"
**Ini error paling umum!** Artinya step 5 (add_soft_deletes.sql) belum dijalankan.

**Solusi:**
1. Login ke phpMyAdmin
2. Pilih database `db_stagging`
3. Klik tab "SQL"
4. Copy paste isi file `database/add_soft_deletes.sql`
5. Klik "Go"
6. Refresh aplikasi

### Error "Duplicate entry"
Artinya data sudah ada. Opsi:
1. **Skip error** dan lanjutkan (data existing tetap ada)
2. **Kosongkan tabel** terlebih dahulu (klik Empty pada setiap tabel data)

### Foreign Key Error
- Pastikan import `seed_migrations.sql` sudah selesai dulu
- Import dummy data harus berurutan (ada SET FOREIGN_KEY_CHECKS)

### Data Tidak Muncul
- Clear browser cache
- Clear Laravel cache via aaPanel Terminal:
  ```bash
  cd /www/wwwroot/staging.lp3hdoabangsa.com
  php artisan config:clear
  php artisan cache:clear
  php artisan view:clear
  ```

## 🎯 Setelah Import Berhasil

Aplikasi LPH siap digunakan dengan data dummy lengkap untuk testing semua fitur!

Dashboard akan menampilkan:
- Total 5 submissions
- Total 6 products  
- Total 9 users
- Total revenue Rp 2.775.000
- Dan statistik lainnya

Semua menu admin sudah fungsional dengan data real! 🚀
