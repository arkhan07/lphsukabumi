# Panduan Instalasi - LPH Doa Bangsa Sukabumi

## Langkah Instalasi di Server Staging

### 1. Install Composer Dependencies

Jalankan perintah berikut di server:

```bash
cd /www/wwwroot/staging.lp3hdoabangsa.com
composer install --optimize-autoloader --no-dev
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

### Packages yang Diperlukan:

1. **barryvdh/laravel-dompdf** - Untuk generate PDF Invoice
   ```bash
   composer require barryvdh/laravel-dompdf
   ```

2. **Laravel Framework** - Sudah termasuk di composer.json

## Troubleshooting

### Error: Class "Barryvdh\DomPDF\Facade\Pdf" not found

**Solusi:**
```bash
composer require barryvdh/laravel-dompdf
php artisan config:clear
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

- Pastikan PHP version >= 7.3 atau 8.0
- Pastikan extension PHP yang diperlukan terinstall:
  - php-mbstring
  - php-xml
  - php-zip
  - php-gd
  - php-mysql
  - php-curl

## Kontak

Jika ada masalah saat instalasi, hubungi administrator sistem.
