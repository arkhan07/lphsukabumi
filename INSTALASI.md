# Panduan Instalasi - LPH Doa Bangsa Sukabumi

## Langkah Instalasi di Server Staging

### 1. Install Composer Dependencies

**PENTING:** Package `barryvdh/laravel-dompdf` sudah ada di composer.json dengan versi yang benar (^2.0 untuk Laravel 8).

Jalankan perintah berikut di server:

```bash
cd /www/wwwroot/staging.lp3hdoabangsa.com

# Install semua dependencies
composer install --optimize-autoloader --no-dev

# Atau jika ingin update
composer update
```

**JANGAN jalankan:**
```bash
# ❌ INI AKAN ERROR (mencoba install v3.x yang tidak kompatibel)
composer require barryvdh/laravel-dompdf
```

**ATAU** jika composer belum terinstall:

```bash
# Download composer
curl -sS https://getcomposer.org/installer | php

# Install dependencies
php composer.phar install --optimize-autoloader --no-dev
```

### 2. Generate Application Key (jika belum)

```bash
php artisan key:generate
```

### 3. Setup Database

```bash
# Copy .env.example jika belum ada .env
cp .env.example .env

# Edit .env sesuaikan dengan database server
nano .env

# Jalankan migrasi
php artisan migrate --force

# (Optional) Jalankan seeder
php artisan db:seed --force
```

### 4. Setup Storage Link

```bash
php artisan storage:link
```

### 5. Clear Cache

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan optimize
```

### 6. Set Permissions

```bash
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

## Dependencies Penting

### Packages yang Sudah Terinstall di composer.json:

1. **Laravel Framework 8.83** - Framework utama
2. **barryvdh/laravel-dompdf ^2.0** - Untuk generate PDF Invoice (kompatibel dengan Laravel 8)
3. **Laravel Sanctum** - API authentication
4. **Guzzle HTTP** - HTTP client

**CATATAN PENTING:**
- Project ini menggunakan **Laravel 8.83**
- DomPDF versi yang kompatibel: `^2.0` (SUDAH ADA di composer.json)
- JANGAN install DomPDF v3.x karena memerlukan Laravel 9+

## Troubleshooting

### Error: Class "Barryvdh\DomPDF\Facade\Pdf" not found

**Penyebab:** Dependencies belum terinstall (folder vendor kosong/tidak ada)

**Solusi:**
```bash
# Install semua dependencies (termasuk DomPDF)
composer install

# Clear cache
php artisan config:clear
php artisan cache:clear
php artisan optimize
```

**JANGAN:**
```bash
# ❌ Ini akan error di Laravel 8
composer require barryvdh/laravel-dompdf
```

### Error: Permission denied

**Solusi:**
```bash
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### Error: Failed to open stream vendor/autoload.php

**Solusi:**
```bash
composer install
```

## Verifikasi Instalasi

Setelah instalasi selesai, verifikasi dengan:

```bash
# Cek apakah vendor folder ada
ls -la vendor/

# Cek apakah autoload.php ada
ls -la vendor/autoload.php

# Cek apakah aplikasi bisa diakses
curl http://staging.lp3hdoabangsa.com
```

## Catatan Penting

### Versi Software
- **Laravel:** 8.83
- **PHP:** >= 7.3 atau 8.0 (sesuai composer.json)
- **DomPDF:** ^2.0 (sudah ada di composer.json)

### Extension PHP yang Diperlukan
Pastikan extension PHP berikut terinstall:
- php-mbstring
- php-xml
- php-zip
- php-gd
- php-mysql (atau php-pdo-mysql)
- php-curl

### Periksa Extension PHP
```bash
# Cek extension yang terinstall
php -m

# Atau cek versi PHP
php -v
```

## Kontak

Jika ada masalah saat instalasi, hubungi administrator sistem.
