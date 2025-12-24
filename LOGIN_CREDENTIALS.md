# Login Credentials - LPH Doa Bangsa Sukabumi

Berikut adalah kredensial login untuk testing aplikasi dengan semua role yang tersedia.

## Portal Login

Aplikasi memiliki **2 portal login terpisah**:

### 1. Portal Pelaku Usaha (Public)
**URL:** `/login` atau `http://localhost/login`

Portal ini untuk pelaku usaha yang ingin mengajukan sertifikasi halal.

**Login Credentials:**
```
Email    : pelaku@test.com
Password : password
```

**Fitur yang tersedia:**
- Membuat pengajuan sertifikasi halal
- Upload dokumen pendukung
- Monitoring status permohonan
- Melihat jadwal audit
- Menerima notifikasi
- Melakukan pembayaran

---

### 2. Portal Staff Lembaga (Internal)
**URL:** `/login/staff` atau `http://localhost/login/staff`

Portal ini khusus untuk staff dan manajemen LPH Doa Bangsa Sukabumi. Saat login, pilih role yang sesuai dari dropdown.

#### a) Admin LPH
```
Role     : Admin LPH
Email    : admin@lph.test
Password : password
```

**Tanggung Jawab:**
- Screening administrasi permohonan
- Normalisasi data pelaku usaha
- Koordinasi lintas role
- Penerbitan invoice
- Penerusan ke Komite Fatwa/BPJPH
- Monitoring keseluruhan sistem

---

#### b) Penyedia Halal
```
Role     : Penyedia Halal
Email    : penyedia@lph.test
Password : password
```

**Tanggung Jawab:**
- Verifikasi kelengkapan dokumen pra-audit
- Audit internal dokumen
- Menghasilkan hasil verifikasi
- Mengunci hasil verifikasi

---

#### c) Manajer Teknis
```
Role     : Manajer Teknis
Email    : manajer@lph.test
Password : password
```

**Tanggung Jawab:**
- Penugasan auditor ke permohonan
- Pengaturan jadwal audit
- Kontrol kapasitas auditor
- Monitoring beban kerja auditor
- Distribusi tugas audit

---

#### d) Auditor Halal
```
Role     : Auditor Halal
Email    : auditor@lph.test
Password : password
```

**Tanggung Jawab:**
- Melaksanakan audit eksternal
- Membuat temuan audit
- Upload bukti dan dokumentasi
- Menyusun laporan audit final
- Submit hasil audit

---

## Cara Menggunakan

### Setup Awal

1. **Jalankan Database Migration** (jika belum):
   ```bash
   php artisan migrate
   ```

2. **Jalankan Database Seeder**:
   ```bash
   php artisan db:seed
   ```

   Atau jika hanya ingin seed dummy users:
   ```bash
   php artisan db:seed --class=DummyUsersSeeder
   ```

3. **Jalankan Development Server**:
   ```bash
   php artisan serve
   ```

4. **Akses Portal Login**:
   - Pelaku Usaha: `http://localhost:8000/login`
   - Staff Lembaga: `http://localhost:8000/login/staff`

### Testing Login

**Untuk Pelaku Usaha:**
1. Buka `/login`
2. Masukkan email: `pelaku@test.com`
3. Masukkan password: `password`
4. Klik "Masuk"
5. Akan diarahkan ke dashboard Pelaku Usaha

**Untuk Staff Lembaga:**
1. Buka `/login/staff`
2. Pilih role dari dropdown (misalnya: Admin LPH)
3. Masukkan email sesuai role (misalnya: `admin@lph.test`)
4. Masukkan password: `password`
5. Klik "Masuk"
6. Akan diarahkan ke dashboard sesuai role

---

## Informasi Tambahan

### Desain Login
Desain login menggunakan template dari [laratemplate](https://github.com/arkhan07/laratemplate) dengan adaptasi untuk kebutuhan LPH:
- Bootstrap 5 untuk CSS framework
- Remix Icons untuk ikon
- Iconify untuk ikon tambahan
- Responsive design untuk mobile dan desktop

### Keamanan
- Semua password di-hash menggunakan bcrypt
- Email verification tersedia untuk registrasi baru
- Password reset functionality included
- Remember me functionality tersedia
- CSRF protection aktif

### Catatan Penting
- **Jangan gunakan credentials ini di production!**
- Ganti semua password default sebelum deployment
- Setup email verification untuk production
- Implementasikan rate limiting untuk login attempts
- Gunakan HTTPS di production
- Pertimbangkan 2FA untuk akun admin

---

## Troubleshooting

### Login Gagal
1. Pastikan database sudah di-migrate dan di-seed
2. Clear cache: `php artisan config:clear`
3. Check database connection di `.env`
4. Pastikan role sudah ter-attach ke user

### Role Tidak Muncul di Dropdown
1. Jalankan `php artisan db:seed --class=RoleSeeder`
2. Check tabel `roles` di database

### Redirect Loop setelah Login
1. Check RouteServiceProvider::HOME
2. Pastikan route dashboard tersedia untuk role tersebut
3. Clear cache: `php artisan route:clear`

---

**Last Updated:** 2024-12-24
**Version:** 1.0.0
