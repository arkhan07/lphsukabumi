# Database Setup - MySQL

Aplikasi LPH Doa Bangsa Sukabumi menggunakan MySQL sebagai database utama. Berikut adalah panduan lengkap untuk instalasi dan konfigurasi.

## Persyaratan

- MySQL Server 5.7 atau lebih tinggi (direkomendasikan MySQL 8.0+)
- PHP dengan ekstensi PDO MySQL (pdo_mysql)
- Akses terminal/command line

## Metode Instalasi

### Opsi 1: Instalasi MySQL via APT (Ubuntu/Debian)

```bash
# Update package list
sudo apt-get update

# Install MySQL Server
sudo apt-get install mysql-server -y

# Secure MySQL installation (opsional tapi direkomendasikan)
sudo mysql_secure_installation

# Start MySQL service
sudo service mysql start

# Enable MySQL to start on boot
sudo systemctl enable mysql
```

### Opsi 2: Instalasi via Docker (Alternatif)

Jika instalasi via APT gagal atau Anda lebih suka menggunakan Docker:

```bash
# Pull MySQL image
docker pull mysql:8.0

# Run MySQL container
docker run --name lph-mysql \
  -e MYSQL_ROOT_PASSWORD=root_password \
  -e MYSQL_DATABASE=lph_sukabumi \
  -e MYSQL_USER=lph_user \
  -e MYSQL_PASSWORD=lph_password \
  -p 3306:3306 \
  -d mysql:8.0

# Check if container is running
docker ps

# Access MySQL shell
docker exec -it lph-mysql mysql -u root -p
```

Jika menggunakan Docker, update `.env`:
```env
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lph_sukabumi
DB_USERNAME=lph_user
DB_PASSWORD=lph_password
```

### Opsi 3: XAMPP/WAMP (Windows)

1. Download dan install [XAMPP](https://www.apachefriends.org/) atau [WAMP](https://www.wampserver.com/)
2. Start Apache dan MySQL dari control panel
3. Akses phpMyAdmin di `http://localhost/phpmyadmin`
4. MySQL akan berjalan di port 3306

## Konfigurasi Database

### 1. Login ke MySQL

```bash
# Login sebagai root
sudo mysql -u root -p

# Atau jika tidak ada password
sudo mysql
```

### 2. Buat Database dan User

```sql
-- Buat database
CREATE DATABASE lph_sukabumi CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Buat user baru (opsional, bisa pakai root)
CREATE USER 'lph_user'@'localhost' IDENTIFIED BY 'lph_password';

-- Berikan semua privileges
GRANT ALL PRIVILEGES ON lph_sukabumi.* TO 'lph_user'@'localhost';

-- Flush privileges
FLUSH PRIVILEGES;

-- Keluar dari MySQL
EXIT;
```

### 3. Verifikasi Koneksi

```bash
# Test koneksi dengan user baru
mysql -u lph_user -p lph_sukabumi

# Jika berhasil, Anda akan masuk ke MySQL shell
# Keluar dengan perintah: EXIT;
```

### 4. Konfigurasi .env

File `.env` sudah dikonfigurasi untuk MySQL. Verifikasi pengaturan berikut:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lph_sukabumi
DB_USERNAME=root
DB_PASSWORD=
```

**Catatan:**
- Jika MySQL root tanpa password, kosongkan `DB_PASSWORD`
- Jika membuat user `lph_user`, gunakan:
  ```env
  DB_USERNAME=lph_user
  DB_PASSWORD=lph_password
  ```

## Migrasi Database

### 1. Jalankan Migrasi

```bash
# Pastikan berada di folder project
cd /home/user/lphsukabumi

# Clear cache konfigurasi
php artisan config:clear

# Jalankan migrasi
php artisan migrate
```

### 2. Seed Data Awal

```bash
# Seed roles, permissions, dan master data
php artisan db:seed
```

### 3. Refresh Database (Jika Perlu)

```bash
# Drop semua tabel dan migrate ulang
php artisan migrate:fresh

# Migrate fresh + seed
php artisan migrate:fresh --seed
```

## Struktur Database

Aplikasi ini menggunakan **31 tabel** untuk sistem sertifikasi halal:

### Tabel Utama:
- `users` - Data pengguna sistem
- `roles` - Role/peran pengguna (Admin LPH, Pelaku Usaha, dll)
- `permissions` - Hak akses
- `role_user` - Pivot table role dan user
- `permission_role` - Pivot table permission dan role

### Tabel Permohonan:
- `submissions` - Permohonan sertifikasi halal
- `submission_statuses` - Status permohonan
- `submission_status_histories` - Riwayat perubahan status

### Tabel Produk & Material:
- `products` - Produk yang diajukan
- `materials` - Bahan baku produk
- `material_sources` - Sumber bahan baku
- `material_categories` - Kategori bahan (nabati, hewani, dll)

### Tabel Audit:
- `audits` - Data audit
- `audit_schedules` - Jadwal audit
- `audit_assignments` - Penugasan auditor
- `audit_checklists` - Checklist audit
- `audit_findings` - Temuan audit

### Tabel Sertifikat & Dokumen:
- `certificates` - Sertifikat halal
- `documents` - Dokumen pendukung
- `document_types` - Jenis dokumen

### Tabel Lainnya:
- `invoices` - Invoice pembayaran
- `payments` - Pembayaran
- `notifications` - Notifikasi
- `activity_logs` - Log aktivitas
- `business_profiles` - Profil usaha
- `production_facilities` - Fasilitas produksi
- `halal_policies` - Kebijakan halal
- `slaughterhouses` - Rumah potong hewan (RPH)

## Troubleshooting

### Error: "Access denied for user"

```bash
# Reset root password
sudo mysql

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'new_password';
FLUSH PRIVILEGES;
EXIT;
```

### Error: "SQLSTATE[HY000] [2002] Connection refused"

```bash
# Check jika MySQL berjalan
sudo service mysql status

# Start MySQL jika belum running
sudo service mysql start

# Restart MySQL
sudo service mysql restart
```

### Error: "Unknown database 'lph_sukabumi'"

```bash
# Buat database secara manual
sudo mysql -u root -p
CREATE DATABASE lph_sukabumi CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;
```

### Error: "could not find driver"

```bash
# Install PHP MySQL extension
sudo apt-get install php-mysql php-pdo

# Restart web server
sudo service apache2 restart
# atau
sudo service nginx restart
```

### Error: Migration comments tidak berfungsi

MySQL mendukung komentar dalam migrasi dengan baik. Jika ada masalah:

```bash
# Pastikan menggunakan MySQL 5.7+
mysql --version

# Check charset database
mysql -u root -p -e "SELECT SCHEMA_NAME, DEFAULT_CHARACTER_SET_NAME, DEFAULT_COLLATION_NAME FROM information_schema.SCHEMATA WHERE SCHEMA_NAME = 'lph_sukabumi';"
```

## Backup & Restore

### Backup Database

```bash
# Backup dengan mysqldump
mysqldump -u root -p lph_sukabumi > lph_sukabumi_backup_$(date +%Y%m%d).sql

# Backup dengan kompresi
mysqldump -u root -p lph_sukabumi | gzip > lph_sukabumi_backup_$(date +%Y%m%d).sql.gz
```

### Restore Database

```bash
# Restore dari backup
mysql -u root -p lph_sukabumi < lph_sukabumi_backup_20231224.sql

# Restore dari file terkompresi
gunzip < lph_sukabumi_backup_20231224.sql.gz | mysql -u root -p lph_sukabumi
```

## Keamanan Database

### 1. Jangan gunakan root di production

Buat user khusus dengan privileges terbatas:

```sql
CREATE USER 'lph_app'@'localhost' IDENTIFIED BY 'strong_password_here';
GRANT SELECT, INSERT, UPDATE, DELETE ON lph_sukabumi.* TO 'lph_app'@'localhost';
FLUSH PRIVILEGES;
```

### 2. Gunakan password yang kuat

```env
DB_PASSWORD=Str0ng_P@ssw0rd_H3r3!
```

### 3. Batasi akses network (production)

Edit `/etc/mysql/mysql.conf.d/mysqld.cnf`:
```ini
bind-address = 127.0.0.1
```

### 4. Enable SSL connection (production)

```env
MYSQL_ATTR_SSL_CA=/path/to/ca-cert.pem
```

## Performance Optimization

### 1. Index optimization

Database sudah menggunakan index untuk kolom yang sering di-query.

### 2. MySQL Configuration (untuk production)

Edit `/etc/mysql/mysql.conf.d/mysqld.cnf`:

```ini
[mysqld]
innodb_buffer_pool_size = 1G
innodb_log_file_size = 256M
max_connections = 200
query_cache_size = 32M
```

Restart MySQL setelah perubahan:
```bash
sudo service mysql restart
```

## Referensi

- [Laravel Database Documentation](https://laravel.com/docs/8.x/database)
- [MySQL Official Documentation](https://dev.mysql.com/doc/)
- [MySQL Performance Tuning](https://dev.mysql.com/doc/refman/8.0/en/optimization.html)

---

**Catatan Penting:**
- Selalu backup database sebelum melakukan perubahan besar
- Gunakan environment variables untuk credentials
- Jangan commit file `.env` ke version control
- Gunakan `php artisan config:clear` setelah mengubah konfigurasi database
