# Panduan Setup User Roles & Permissions - LPH Doa Bangsa Sukabumi

## 📋 Daftar Isi
1. [Ringkasan Sistem](#ringkasan-sistem)
2. [5 User Roles](#5-user-roles)
3. [Instalasi & Setup](#instalasi--setup)
4. [Struktur Database](#struktur-database)
5. [Cara Penggunaan](#cara-penggunaan)
6. [Contoh Implementasi](#contoh-implementasi)

---

## 🎯 Ringkasan Sistem

Sistem RBAC (Role-Based Access Control) ini dibuat untuk aplikasi web LPH Doa Bangsa Sukabumi dengan 5 user roles utama yang mendukung alur end-to-end pemeriksaan sertifikasi halal.

### Fitur Utama:
- ✅ 5 User Roles dengan permissions terpisah
- ✅ 100+ Permissions terorganisir berdasarkan modul
- ✅ Middleware untuk proteksi route
- ✅ Helper methods di User model
- ✅ Seeder otomatis untuk roles & permissions

---

## 👥 5 User Roles

### 1. **Pelaku Usaha** (`pelaku_usaha`)
**Deskripsi:** Client yang mengajukan sertifikasi halal

**Akses:**
- ✅ Membuat dan mengelola pengajuan
- ✅ Upload dokumen
- ✅ Respon permintaan revisi
- ✅ Lihat dan konfirmasi jadwal audit
- ✅ Lihat invoice dan upload bukti pembayaran
- ✅ Komunikasi dengan admin/auditor

**Dashboard:** Status pengajuan, progress checklist, notifikasi tindakan

---

### 2. **Penyedia Halal** (`penyedia_halal`)
**Deskripsi:** Melakukan audit internal dan verifikasi kelengkapan pra-audit

**Akses:**
- ✅ Verifikasi kelengkapan dokumen
- ✅ Checklist readiness
- ✅ Catat temuan audit internal
- ✅ Kirim permintaan revisi ke Pelaku Usaha
- ✅ Lock/unlock hasil verifikasi

**Dashboard:** Antrian verifikasi, prioritas, ringkasan temuan terbuka

---

### 3. **Admin LPH** (`admin_lph`)
**Deskripsi:** Admin operasional dengan akses paling luas

**Akses:**
- ✅ Screening & verifikasi administrasi
- ✅ Normalisasi data
- ✅ Review dan approve laporan auditor
- ✅ Penerbitan invoice (client & auditor)
- ✅ Kalkulasi dan distribusi sharing fee
- ✅ Penerusan ke Komite Fatwa/BPJPH
- ✅ Manajemen master data
- ✅ Settings & RBAC
- ✅ Monitoring & laporan

**Dashboard:** KPI, pengajuan per status, SLA, notifikasi kritikal

---

### 4. **Manajer Teknis** (`manajer_teknis`)
**Deskripsi:** Mengelola penugasan auditor dan scheduling

**Akses:**
- ✅ Assign auditor ke pengajuan
- ✅ Buat dan kelola jadwal audit
- ✅ Monitor beban kerja auditor
- ✅ Deteksi konflik jadwal
- ✅ Lock/unlock penugasan
- ✅ Buat surat tugas (PDF)

**Dashboard:** Antrian penugasan, beban auditor, konflik jadwal

---

### 5. **Auditor Halal** (`auditor_halal`)
**Deskripsi:** Melaksanakan audit eksternal dan menyusun laporan

**Akses:**
- ✅ Lihat tugas audit yang ditugaskan
- ✅ Usulkan jadwal audit
- ✅ Input observasi & temuan (NC/Observasi)
- ✅ Upload bukti audit
- ✅ Buat dan submit laporan audit
- ✅ Lock laporan final
- ✅ Lihat invoice payout

**Dashboard:** Tugas aktif, jadwal terdekat, pengingat laporan

---

## 🚀 Instalasi & Setup

### Step 1: Install Dependencies
```bash
composer install
```

### Step 2: Setup Database
Edit file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lph_sukabumi
DB_USERNAME=root
DB_PASSWORD=
```

### Step 3: Generate App Key
```bash
php artisan key:generate
```

### Step 4: Run Migrations & Seeders
```bash
php artisan migrate:fresh --seed
```

Ini akan membuat:
- Table `roles` dengan 5 roles
- Table `permissions` dengan 100+ permissions
- Table `role_user` (pivot)
- Table `permission_role` (pivot)
- Automatic assignment permissions ke roles

---

## 🗄️ Struktur Database

### Table: `roles`
```sql
- id (bigint, auto_increment)
- name (string, unique)
- slug (string, unique)
- description (text, nullable)
- is_active (boolean, default: true)
- created_at, updated_at
```

### Table: `permissions`
```sql
- id (bigint, auto_increment)
- name (string, unique)
- slug (string, unique)
- description (text, nullable)
- module (string, nullable)
- is_active (boolean, default: true)
- created_at, updated_at
```

### Table: `role_user`
```sql
- id (bigint, auto_increment)
- role_id (foreign key -> roles.id)
- user_id (foreign key -> users.id)
- created_at, updated_at
- unique(role_id, user_id)
```

### Table: `permission_role`
```sql
- id (bigint, auto_increment)
- permission_id (foreign key -> permissions.id)
- role_id (foreign key -> roles.id)
- created_at, updated_at
- unique(permission_id, role_id)
```

---

## 💡 Cara Penggunaan

### 1. Assign Role ke User
```php
use App\Models\User;

$user = User::find(1);

// Assign single role
$user->assignRole('pelaku_usaha');

// Assign multiple roles
$user->assignRole('admin_lph');
$user->assignRole('manajer_teknis');

// Remove role
$user->removeRole('pelaku_usaha');
```

### 2. Check User Role
```php
// Check single role
if ($user->hasRole('admin_lph')) {
    // User is Admin LPH
}

// Check multiple roles (OR)
if ($user->hasAnyRole(['admin_lph', 'manajer_teknis'])) {
    // User is Admin OR Manajer Teknis
}

// Check multiple roles (AND)
if ($user->hasAllRoles(['admin_lph', 'manajer_teknis'])) {
    // User is both Admin AND Manajer Teknis
}
```

### 3. Check User Permission
```php
// Check single permission
if ($user->hasPermission('pengajuan.create')) {
    // User can create pengajuan
}

// Check multiple permissions (OR)
if ($user->hasAnyPermission(['invoice_client.create', 'invoice_auditor.create'])) {
    // User can create client invoice OR auditor invoice
}

// Check multiple permissions (AND)
if ($user->hasAllPermissions(['dokumen.upload', 'dokumen.verify'])) {
    // User can upload AND verify documents
}
```

### 4. Get All User Permissions
```php
$permissions = $user->getAllPermissions();

foreach ($permissions as $permission) {
    echo $permission->name . "\n";
}
```

### 5. Protect Routes with Middleware

**Protect by Role:**
```php
// routes/web.php

use App\Http\Controllers\PengajuanController;

// Single role
Route::middleware(['auth', 'role:pelaku_usaha'])
    ->group(function () {
        Route::get('/pengajuan/create', [PengajuanController::class, 'create']);
    });

// Multiple roles (OR)
Route::middleware(['auth', 'role:admin_lph,manajer_teknis'])
    ->group(function () {
        Route::get('/monitoring', [MonitoringController::class, 'index']);
    });
```

**Protect by Permission:**
```php
// Single permission
Route::middleware(['auth', 'permission:pengajuan.create'])
    ->post('/pengajuan', [PengajuanController::class, 'store']);

// Multiple permissions (OR)
Route::middleware(['auth', 'permission:invoice_client.create,invoice_auditor.create'])
    ->get('/invoice/create', [InvoiceController::class, 'create']);
```

### 6. Protect in Controller
```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function create()
    {
        // Check role
        if (!auth()->user()->hasRole('pelaku_usaha')) {
            abort(403, 'Hanya Pelaku Usaha yang dapat membuat pengajuan');
        }

        // Check permission
        if (!auth()->user()->hasPermission('pengajuan.create')) {
            abort(403, 'Anda tidak memiliki izin untuk membuat pengajuan');
        }

        return view('pengajuan.create');
    }
}
```

### 7. Protect in Blade Template
```blade
@auth
    {{-- Check role --}}
    @if(auth()->user()->hasRole('admin_lph'))
        <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
    @endif

    {{-- Check permission --}}
    @if(auth()->user()->hasPermission('pengajuan.create'))
        <a href="{{ route('pengajuan.create') }}" class="btn btn-primary">
            Buat Pengajuan Baru
        </a>
    @endif

    {{-- Check multiple roles --}}
    @if(auth()->user()->hasAnyRole(['admin_lph', 'manajer_teknis']))
        <a href="{{ route('monitoring') }}">Monitoring</a>
    @endif
@endauth
```

---

## 📝 Contoh Implementasi

### Contoh 1: Protect Route Group by Role
```php
// routes/web.php

// Pelaku Usaha Routes
Route::middleware(['auth', 'role:pelaku_usaha'])->prefix('pelaku-usaha')->group(function () {
    Route::get('/dashboard', [PelakuUsahaController::class, 'dashboard'])->name('pelaku_usaha.dashboard');
    Route::resource('pengajuan', PengajuanController::class);
    Route::post('/invoice/upload-payment', [InvoiceController::class, 'uploadPayment'])->name('invoice.upload_payment');
});

// Penyedia Halal Routes
Route::middleware(['auth', 'role:penyedia_halal'])->prefix('penyedia-halal')->group(function () {
    Route::get('/dashboard', [PenyediaHalalController::class, 'dashboard'])->name('penyedia_halal.dashboard');
    Route::get('/verifikasi', [VerifikasiController::class, 'index'])->name('verifikasi.index');
    Route::post('/verifikasi/{id}/lock', [VerifikasiController::class, 'lock'])->name('verifikasi.lock');
});

// Admin LPH Routes
Route::middleware(['auth', 'role:admin_lph'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('master-data', MasterDataController::class);
    Route::get('/screening', [ScreeningController::class, 'index'])->name('screening.index');
    Route::post('/invoice/client', [InvoiceController::class, 'createClient'])->name('invoice.create_client');
    Route::post('/penerusan/fatwa', [PenerusanController::class, 'submitFatwa'])->name('penerusan.submit_fatwa');
});

// Manajer Teknis Routes
Route::middleware(['auth', 'role:manajer_teknis'])->prefix('manajer-teknis')->group(function () {
    Route::get('/dashboard', [ManajerTeknisController::class, 'dashboard'])->name('manajer_teknis.dashboard');
    Route::get('/penugasan', [PenugasanController::class, 'index'])->name('penugasan.index');
    Route::post('/penugasan/assign', [PenugasanController::class, 'assign'])->name('penugasan.assign');
});

// Auditor Halal Routes
Route::middleware(['auth', 'role:auditor_halal'])->prefix('auditor')->group(function () {
    Route::get('/dashboard', [AuditorController::class, 'dashboard'])->name('auditor.dashboard');
    Route::get('/tugas', [AuditorController::class, 'tasks'])->name('auditor.tasks');
    Route::post('/laporan/{id}/submit', [LaporanController::class, 'submit'])->name('laporan.submit');
});
```

### Contoh 2: Dynamic Menu Berdasarkan Role
```php
// app/Http/Controllers/HomeController.php

public function index()
{
    $user = auth()->user();
    $menuItems = [];

    if ($user->hasRole('pelaku_usaha')) {
        $menuItems = [
            ['title' => 'Dashboard', 'route' => 'pelaku_usaha.dashboard', 'icon' => 'home'],
            ['title' => 'Pengajuan', 'route' => 'pengajuan.index', 'icon' => 'file-text'],
            ['title' => 'Jadwal Audit', 'route' => 'jadwal.index', 'icon' => 'calendar'],
            ['title' => 'Invoice & Pembayaran', 'route' => 'invoice.index', 'icon' => 'dollar-sign'],
        ];
    } elseif ($user->hasRole('admin_lph')) {
        $menuItems = [
            ['title' => 'Dashboard Admin', 'route' => 'admin.dashboard', 'icon' => 'home'],
            ['title' => 'Inbox Pengajuan', 'route' => 'screening.index', 'icon' => 'inbox'],
            ['title' => 'Monitoring', 'route' => 'monitoring.index', 'icon' => 'bar-chart'],
            ['title' => 'Master Data', 'route' => 'master.index', 'icon' => 'database'],
            ['title' => 'Settings', 'route' => 'settings.index', 'icon' => 'settings'],
        ];
    }

    return view('home', compact('menuItems'));
}
```

### Contoh 3: Permission-Based Button Visibility
```blade
{{-- resources/views/pengajuan/show.blade.php --}}

<div class="card">
    <div class="card-header">
        <h3>Detail Pengajuan #{{ $pengajuan->id }}</h3>
    </div>
    <div class="card-body">
        {{-- Konten detail pengajuan --}}
    </div>
    <div class="card-footer">
        @can('pengajuan.edit')
            <a href="{{ route('pengajuan.edit', $pengajuan->id) }}" class="btn btn-primary">
                Edit Pengajuan
            </a>
        @endcan

        @can('pengajuan.submit')
            <form method="POST" action="{{ route('pengajuan.submit', $pengajuan->id) }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-success">Submit Pengajuan</button>
            </form>
        @endcan

        @can('verifikasi.lock')
            <form method="POST" action="{{ route('verifikasi.lock', $pengajuan->id) }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-warning">Lock Verifikasi</button>
            </form>
        @endcan
    </div>
</div>
```

---

## 📊 Daftar Lengkap Permissions

### Dashboard (2)
- `dashboard.view`
- `dashboard.statistics`

### Pengajuan (6)
- `pengajuan.view`, `pengajuan.create`, `pengajuan.edit`, `pengajuan.delete`, `pengajuan.submit`, `pengajuan.duplicate`

### Dokumen (7)
- `dokumen.view`, `dokumen.upload`, `dokumen.download`, `dokumen.delete`, `dokumen.verify`, `dokumen.lock`, `dokumen.unlock`

### Verifikasi (7)
- `verifikasi.view`, `verifikasi.create`, `verifikasi.edit`, `verifikasi.submit`, `verifikasi.lock`, `verifikasi.unlock`, `verifikasi.request_revision`

### Penugasan & Jadwal (10)
- `penugasan.view`, `penugasan.create`, `penugasan.edit`, `penugasan.assign`, `penugasan.lock`, `penugasan.unlock`
- `jadwal.view`, `jadwal.create`, `jadwal.edit`, `jadwal.confirm`

### Audit (7)
- `audit.view`, `audit.create`, `audit.edit`, `audit.submit`, `audit.view_temuan`, `audit.create_temuan`, `audit.upload_bukti`

### Laporan (9)
- `laporan.view`, `laporan.create`, `laporan.edit`, `laporan.submit`, `laporan.review`, `laporan.accept`, `laporan.lock`, `laporan.unlock`, `laporan.export`

### Invoice (11)
- Client: `invoice_client.view`, `invoice_client.create`, `invoice_client.edit`, `invoice_client.issue`, `invoice_client.void`, `invoice_client.upload_payment`, `invoice_client.verify_payment`
- Auditor: `invoice_auditor.view`, `invoice_auditor.create`, `invoice_auditor.issue`, `invoice_auditor.pay`

### Sharing Fee (5)
- `sharing_fee.view`, `sharing_fee.calculate`, `sharing_fee.approve`, `sharing_fee.distribute`, `sharing_fee.configure`

### Penerusan (3)
- `penerusan.view`, `penerusan.submit_fatwa`, `penerusan.submit_bpjph`

### Administrasi (4)
- `screening.view`, `screening.process`, `screening.approve`, `screening.reject`

### Master Data (4)
- `master.view`, `master.create`, `master.edit`, `master.delete`

### Settings & RBAC (5)
- `settings.view`, `settings.edit`, `rbac.manage_roles`, `rbac.manage_permissions`, `rbac.assign_roles`

### Monitoring (3)
- `monitoring.view`, `monitoring.reports`, `monitoring.export`

### Komunikasi (3)
- `komunikasi.view`, `komunikasi.send`, `komunikasi.reply`

### Audit Trail (1)
- `audit_trail.view`

**Total: 100+ Permissions** terorganisir dalam 15+ modul

---

## 🔧 Troubleshooting

### Error: "SQLSTATE[HY000] [2002] Connection refused"
**Solusi:** Pastikan MySQL/MariaDB sudah running dan konfigurasi `.env` sudah benar.

```bash
# Start MySQL service
sudo service mysql start

# Atau jika menggunakan XAMPP
sudo /opt/lampp/lampp start
```

### Error: "Class 'Role' not found"
**Solusi:** Jalankan composer autoload dump
```bash
composer dump-autoload
```

### Ingin reset semua roles & permissions
```bash
php artisan migrate:fresh --seed
```

---

## 📞 Support

Jika ada pertanyaan atau issue, silakan buat issue di repository atau hubungi tim development.

**Dokumen ini dibuat tanggal:** 24 Desember 2025

**Versi:** 1.0.0
