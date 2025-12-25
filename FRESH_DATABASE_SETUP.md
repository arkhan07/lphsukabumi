# Fresh Database Setup - LPH Doa Bangsa 🚀

## 📋 Overview

Panduan ini untuk melakukan **fresh install** database dari awal menggunakan Laravel migrations dan seeders. Metode ini lebih baik daripada import manual karena:

✅ Tidak ada error "duplicate entry"
✅ Tidak ada error "column not found"
✅ Semua foreign keys ter-setup dengan benar
✅ Bisa dijalankan via SSH/CLI
✅ Repeatable dan consistent

---

## ⚙️ Metode 1: Via SSH (Recommended)

### Step 1: Login ke SSH

```bash
ssh user@staging.lp3hdoabangsa.com
cd /www/wwwroot/staging.lp3hdoabangsa.com
```

### Step 2: Drop & Recreate Database

**HATI-HATI**: Command ini akan **menghapus SEMUA data** yang ada!

```bash
php artisan migrate:fresh --seed
```

Command ini akan:
1. ✅ Drop semua tabel yang ada
2. ✅ Jalankan semua migrations (membuat tabel baru)
3. ✅ Jalankan semua seeders (insert dummy data)

### Step 3: Verify

```bash
# Check migrations status
php artisan migrate:status

# Check database connection
php artisan tinker
>>> \App\Models\User::count()
>>> \App\Models\Submission::count()
>>> exit
```

Expected hasil:
- Users: 9
- Submissions: 5
- Products: 6
- Invoices: 3

---

## 🖥️ Metode 2: Via phpMyAdmin (Jika SSH Tidak Bisa)

### Step 1: Drop All Tables

1. Login ke **phpMyAdmin**
2. Pilih database **`db_stagging`**
3. Klik tab **"Structure"**
4. Scroll ke bawah, centang **"Check all"**
5. Pilih dropdown **"With selected:"** → **"Drop"**
6. Confirm dengan klik **"Yes"**

### Step 2: Run Migrations via SSH

```bash
cd /www/wwwroot/staging.lp3hdoabangsa.com
php artisan migrate --seed
```

ATAU jika SSH tidak bisa connect ke MySQL, import via phpMyAdmin:

### Alternative: Import SQL Manually

1. Generate migration SQL:
   ```bash
   php artisan migrate --pretend > migrations.sql
   ```

2. Import `migrations.sql` via phpMyAdmin

3. Import dummy data dengan menjalankan setiap seeder individual via tinker:
   ```bash
   php artisan tinker
   >>> (new \Database\Seeders\RolesAndPermissionsSeeder)->run();
   >>> (new \Database\Seeders\RegionsSeeder)->run();
   >>> (new \Database\Seeders\BusinessTypesSeeder)->run();
   >>> (new \Database\Seeders\ProductTypesSeeder)->run();
   >>> (new \Database\Seeders\FeeConfigurationsSeeder)->run();
   >>> (new \Database\Seeders\UsersSeeder)->run();
   >>> (new \Database\Seeders\SubmissionsSeeder)->run();
   >>> (new \Database\Seeders\ProductsSeeder)->run();
   >>> (new \Database\Seeders\DocumentsSeeder)->run();
   >>> (new \Database\Seeders\InvoicesSeeder)->run();
   >>> (new \Database\Seeders\InvoicePaymentsSeeder)->run();
   >>> exit
   ```

---

## 🔐 Login Credentials

Setelah database di-seed, gunakan credentials berikut:

### Admin LPH
- Email: `admin@lph.com`
- Password: `password`
- Role: Admin LPH (full access)

### Manajer Teknis
- Email: `manajer@lph.com`
- Password: `password`

### Auditor Halal
- Email: `auditor1@lph.com` atau `auditor2@lph.com`
- Password: `password`

### Pelaku Usaha
- Email: `usaha1@example.com`, `usaha2@example.com`, `usaha3@example.com`
- Password: `password`

### Penyedia Halal
- Email: `penyedia1@example.com`, `penyedia2@example.com`
- Password: `password`

---

## 📊 Data yang Di-seed

### Users: 9 total
- 1 Admin LPH
- 1 Manajer Teknis
- 2 Auditor Halal
- 3 Pelaku Usaha
- 2 Penyedia Halal

### Submissions: 5 total
1. **SUB-202412-00001** - PT Makanan Halal - Status: `submitted`
2. **SUB-202412-00002** - CV Minuman Sehat - Status: `screening`
3. **SUB-202412-00003** - UD Berkah Jaya - Status: `verification`
4. **SUB-202412-00004** - PT Makanan Halal (renewal) - Status: `assigned`
5. **SUB-202412-00005** - CV Minuman Sehat - Status: `approved`

### Products: 6 total
- Kerupuk Udang Premium
- Kue Nastar
- Jus Jeruk Segar
- Jus Mangga Segar
- Sambal Pedas
- Nugget Ayam

### Invoices: 3 total
- **INV-202412-00001**: Rp 2.775.000 - **LUNAS** ✅
- **INV-202412-00002**: Rp 3.330.000 - **PARTIAL** (50% paid)
- **INV-202412-00003**: Rp 3.108.000 - **PENDING**

### Master Data
- **Regions**: 7 (Jawa Barat, Sukabumi, Bogor, Bandung, Bekasi, Depok, Cirebon)
- **Business Types**: 6 (Food, Beverage, Restaurant, Retail, Cosmetics, Pharma)
- **Product Types**: 7 (Snacks, Bakery, Fresh Beverage, Packaged Beverage, Condiments, Frozen, Supplements)
- **Fee Configurations**: 5 (Base fee, Audit fee, Product fee, Surveillance fee, Re-certification fee)

---

## 🧪 Testing Aplikasi

### 1. Login Test
```
URL: https://staging.lp3hdoabangsa.com/login
Email: admin@lph.com
Password: password
```

### 2. Dashboard Test
Setelah login, dashboard harus menampilkan:
- ✅ Total 5 submissions
- ✅ Total 6 products
- ✅ Total 9 users
- ✅ Total 2 auditors
- ✅ Total revenue Rp 2.775.000 (dari invoice yang lunas)
- ✅ Recent submissions (5 entries)
- ✅ Recent audits

### 3. Menu Navigation Test
Pastikan semua menu berfungsi tanpa error:
- ✅ Dashboard
- ✅ Permohonan (Submissions)
- ✅ Produk (Products)
- ✅ Audit Management
- ✅ Keuangan (Invoices & Payments)
- ✅ Dokumen
- ✅ Laporan
- ✅ Pengguna & Role
- ✅ Master Data (Regions, Business Types, Product Types)

---

## 🔧 Troubleshooting

### Error: "Access denied for user"
**Solusi:** Cek file `.env` untuk kredensial database:
```env
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=db_stagging
DB_USERNAME=db_stagging
DB_PASSWORD=WE7XtWL66Ld7PGmf
DB_SOCKET=/tmp/mysql.sock
```

### Error: "Column 'deleted_at' not found"
**Root Cause:** Migrations belum dijalankan dengan benar.

**Solusi:**
```bash
php artisan migrate:fresh --seed
```

### Error: "Class RolesAndPermissionsSeeder not found"
**Root Cause:** Autoload belum di-refresh.

**Solusi:**
```bash
composer dump-autoload
php artisan migrate:fresh --seed
```

### Error: "SQLSTATE[42S02]: Base table or view not found"
**Root Cause:** Migrations belum dijalankan.

**Solusi:**
```bash
php artisan migrate
```

### SSH bisa akses tapi `php artisan migrate` error "Connection refused"
**Ini NORMAL di aaPanel!** CLI PHP tidak bisa connect ke MySQL socket.

**Solusi:** Gunakan metode phpMyAdmin atau tambahkan `DB_SOCKET=/tmp/mysql.sock` di `.env`

---

## 📝 Important Notes

1. **SELALU backup database** sebelum menjalankan `migrate:fresh`
2. Command `migrate:fresh` akan **menghapus SEMUA data**
3. Jangan jalankan di production tanpa backup!
4. Semua password dummy adalah: `password`
5. Untuk production, ganti semua password dengan yang secure

---

## 🚀 Quick Start (TL;DR)

Untuk fresh install database dengan dummy data:

```bash
# SSH ke server
ssh user@staging.lp3hdoabangsa.com
cd /www/wwwroot/staging.lp3hdoabangsa.com

# Fresh install (HATI-HATI: hapus semua data!)
php artisan migrate:fresh --seed

# Test login
# URL: https://staging.lp3hdoabangsa.com/login
# Email: admin@lph.com
# Password: password
```

Done! 🎉

---

## 📞 Support

Jika ada masalah:
1. Cek log error: `storage/logs/laravel.log`
2. Cek database connection: `php artisan tinker` → `DB::connection()->getPdo();`
3. Clear cache: `php artisan config:clear && php artisan cache:clear`

