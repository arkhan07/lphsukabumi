<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WpController;
use App\Http\Controllers\MultiBahasaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda', [
        "title" => "LPH Doa Bangsa Sukabumi - Lembaga Pemeriksa Halal Terpercaya",
        "description" => "Lembaga Pemeriksa Halal terpercaya di Sukabumi yang menyediakan layanan sertifikasi halal, audit halal, konsultasi, dan pelatihan halal"
    ]);
})->name('home');

Route::get('/whatsapp', [HomeController::class, 'whatsapp'])->name('whatsapp');
Route::get('/sectionbahasa', [MultiBahasaController::class, 'index'])->name('sectionbahasa');

Route::prefix('fitur')->name('fitur')->group(function () {
    Route::get('/', function () {
        return view('fitur', [
            "title" => "Tentang LPH Doa Bangsa - Lembaga Pemeriksa Halal Sukabumi",
            'description' => 'LPH Doa Bangsa Sukabumi adalah Lembaga Pemeriksa Halal yang terdaftar dan diakui oleh BPJPH untuk sertifikasi halal produk Anda'
        ]);
    });
});

Route::prefix('harga')->name('harga')->group(function () {
    Route::get('/', function () {
        return view('harga', [
            "title" => "Biaya Sertifikasi Halal - LPH Doa Bangsa Sukabumi",
            'description' => 'Informasi biaya sertifikasi halal yang terjangkau dan transparan dari LPH Doa Bangsa Sukabumi'
        ]);
    });
    Route::get('/kso', function () {
        return view('kso', [
            "title" => "Kerjasama Sertifikasi Halal - LPH Doa Bangsa",
            'description' => 'Program kerjasama sertifikasi halal untuk pelaku usaha bersama LPH Doa Bangsa Sukabumi'
        ]);
    })->name('kso');
});

Route::prefix('kontak')->name('kontak')->group(function () {
    Route::get('/', function () {
        return view('kontak', [
            "title" => "Kontak LPH Doa Bangsa - Lembaga Pemeriksa Halal Sukabumi",
            'description' => 'Hubungi LPH Doa Bangsa Sukabumi untuk konsultasi dan informasi sertifikasi halal produk Anda'
        ]);
    });
});

// Dropdowns Link //
// Fitur //

Route::prefix('keuangan')->name('keuangan')->group(function () {
    Route::get('/', function () {
        return view('keuangan', [
            "title" => "SIMRS dan SIM Klinik SAFFMedic lengkap dengan Fitur Keuangan",
            'description' => 'Fitur Keuangan,pembukuan, dan akuntansi yang terdapat dalam Aplikasi  SIMRS dan SIM Klinik SAFFMedic sangat berguna bagi FASKES'
        ]);
    });
});

Route::prefix('antrian')->name('antrian')->group(function () {
    Route::get('/', function () {
        return view('antrian', [
            'title' => 'Aplikasi Manajemen Rumah Sakit dengan Sistim Antrian',
            'description' => 'Aplikasi Rumah Sakit yang telah dilengkapi dengan software antrian yang terintegrasi'
        ]);
    });
});

Route::prefix('farmasi')->name('farmasi')->group(function () {
    Route::get('/', function () {
        return view('farmasi', [
            'title' => 'Aplikasi SIMRS & SIM Klinik | Lengkap dengan FARMASI',
            'description' => 'Modul Farmasi yang terdapat pada SIMRS dan SIM Klinik SAFFMedic dapat digunakan secara online dan murah oleh FASKES dan Praktek Dokter'
        ]);
    });
});

Route::prefix('penunjang')->name('penunjang')->group(function () {
    Route::get('/', function () {
        return view('penunjang', [
            'title' => 'Aplikasi Klinik dan Rumah Sakit - SIMRS Rekam Medis Online',
            'description' => 'Aplikasi untuk klinik termasuk Rekam Medis online, Sistim antrian, dan apotik'
        ]);
    });
});

Route::prefix('mcu')->name('mcu')->group(function () {
    Route::get('/', function () {
        return view('mcu', [
            'title' => 'Aplikasi MCU - Aplikasi Medical Check Up untuk Klinik',
            'description' => 'Aplikasi atau software untuk Klinik atau Rumah Sakit yang melakukan MCU'
        ]);
    });
});

Route::prefix('rekammediselektronik')->name('rekammediselektronik')->group(function () {
    Route::get('/', function () {
        return view('rekammediselektronik', [
            'title' => 'Aplikasi E-Rekam Medis',
            'description' => 'Aplikasi Rekam Medis elektronik untuk Klinik dan Rumah Sakit'
        ]);
    });
});

// End Fitur //

// Layanan //
Route::prefix('klinik')->name('klinik')->group(function () {
    Route::get('/', function () {
        return view('klinik', [
            'title' => 'Sertifikasi Halal - LPH Doa Bangsa Sukabumi',
            'description' => 'Layanan sertifikasi halal untuk produk makanan, minuman, kosmetik, dan obat-obatan dari LPH Doa Bangsa'
        ]);
    });
});

Route::prefix('rumah-sakit')->name('rumah-sakit')->group(function () {
    Route::get('/', function () {
        return view('rumah-sakit', [
            'title' => 'Audit Halal - LPH Doa Bangsa Sukabumi',
            'description' => 'Layanan audit halal komprehensif untuk memastikan proses produksi sesuai standar halal yang ditetapkan'
        ]);
    });
});

Route::prefix('apotek')->name('apotek')->group(function () {
    Route::get('/', function () {
        return view('apotek', [
            'title' => 'Konsultasi Halal - LPH Doa Bangsa Sukabumi',
            'description' => 'Konsultasi ahli untuk persiapan sertifikasi halal dan pemahaman persyaratan yang diperlukan'
        ]);
    });
});

Route::prefix('laboratorium')->name('laboratorium')->group(function () {
    Route::get('/', function () {
        return view('laboratorium', [
            'title' => 'Pelatihan Halal - LPH Doa Bangsa Sukabumi',
            'description' => 'Program pelatihan sistem jaminan halal untuk tim internal perusahaan Anda'
        ]);
    });
});

Route::prefix('praktek-dokter')->name('praktek-dokter')->group(function () {
    Route::get('/', function () {
        return view('praktek-dokter', [
            'title' => 'Produk Halal - LPH Doa Bangsa Sukabumi',
            'description' => 'Informasi tentang berbagai jenis produk yang dapat disertifikasi halal oleh LPH Doa Bangsa'
        ]);
    });
});

Route::prefix('odontogram')->name('odontogram')->group(function () {
    Route::get('/', function () {
        return view('odontogram', [
            'title' => 'Prosedur Sertifikasi - LPH Doa Bangsa Sukabumi',
            'description' => 'Tahapan dan prosedur lengkap untuk mendapatkan sertifikasi halal dari LPH Doa Bangsa'
        ]);
    });
});
Route::get('/sectionbahasa', function () {
    return view('sectionbahasa', [
        'title' => 'Multi Bahasa SIMRS dan SIM Klinik',
        'description' => 'Aplikasi SIMRS dan SIM Klinik dari SAFFMedic mendukung multi bahasa agar mudah digunakan di berbagai negara'
    ]);
})->name('sectionbahasa');


// End Solusi //

// Foot //
Route::prefix('ketentuan')->name('ketentuan')->group(function () {
    Route::get('/', function () {
        return view('ketentuan', [
            'title' => 'Syarat dan Ketentuan - LPH Doa Bangsa Sukabumi',
            'description' => 'Syarat dan ketentuan layanan sertifikasi halal dari LPH Doa Bangsa Sukabumi'
        ]);
    });
});

Route::prefix('mitra')->name('mitra')->group(function () {
    Route::get('/', function () {
        return view('mitra', [
            'title' => 'Mitra LPH Doa Bangsa - Kerjasama Sertifikasi Halal',
            'description' => 'Program kemitraan dan kerjasama dengan LPH Doa Bangsa untuk sertifikasi halal'
        ]);
    });
});
// End Foot//

// Form //
Route::prefix('form')->name('form')->group(function () {
    Route::get('/', function () {
        return view('form', [
            'title' => 'Form Pendaftaran Sertifikasi Halal - LPH Doa Bangsa',
            'description' => 'Form pendaftaran untuk mengajukan sertifikasi halal produk Anda'
        ]);
    });
});

Route::prefix('form-demo')->name('form-demo')->group(function () {
    Route::get('/', function () {
        return view('form-demo', [
            'title' => 'Form Konsultasi Halal - LPH Doa Bangsa',
            'description' => 'Ajukan konsultasi gratis untuk sertifikasi halal produk Anda'
        ]);
    });
});

Route::prefix('form-request-demo')->name('form-request-demo')->group(function () {
    Route::get('/', function () {
        return view('form-request-demo', [
            'title' => 'Form Pengajuan Sertifikasi - LPH Doa Bangsa',
            'description' => 'Formulir pengajuan sertifikasi halal untuk produk Anda'
        ]);
    });
});

// Wp //
Route::prefix('artikel')->name('artikel')->group(function () {
    Route::get('/', [WpController::class, 'index']);
    Route::get('{postName}', [WpController::class, 'show'])->name('.show');
});

// End Dropdowns Link //

// Main Dashboard (redirect based on role)
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

// Pelaku Usaha Routes
Route::middleware(['auth', 'role:pelaku_usaha'])->prefix('pelaku-usaha')->name('pelaku_usaha.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\PelakuUsaha\DashboardController::class, 'index'])->name('dashboard');
});

// Penyedia Halal Routes
Route::middleware(['auth', 'role:penyedia_halal'])->prefix('penyedia-halal')->name('penyedia_halal.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\PenyediaHalal\DashboardController::class, 'index'])->name('dashboard');
});

// Admin LPH Routes
Route::middleware(['auth', 'role:admin_lph'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Submissions (Permohonan)
    Route::prefix('submissions')->name('submissions.')->group(function () {
        Route::get('/', function () { return view('admin.submissions.index'); })->name('index');
        Route::get('/create', function () { return view('admin.submissions.create'); })->name('create');
        Route::get('/{id}', function ($id) { return view('admin.submissions.show', compact('id')); })->name('show');
        Route::get('/{id}/edit', function ($id) { return view('admin.submissions.edit', compact('id')); })->name('edit');
    });

    // Products (Produk)
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', function () { return view('admin.products.index'); })->name('index');
        Route::get('/create', function () { return view('admin.products.create'); })->name('create');
        Route::get('/{id}/edit', function ($id) { return view('admin.products.edit', compact('id')); })->name('edit');
        Route::get('/categories', function () { return view('admin.products.categories'); })->name('categories');
    });

    // Audits (Audit)
    Route::prefix('audits')->name('audits.')->group(function () {
        Route::get('/schedule', function () { return view('admin.audits.schedule'); })->name('schedule');
        Route::get('/reports', function () { return view('admin.audits.reports'); })->name('reports');
        Route::get('/findings', function () { return view('admin.audits.findings'); })->name('findings');
    });

    // Finance (Keuangan)
    Route::prefix('finance')->name('finance.')->group(function () {
        Route::get('/invoices', function () { return view('admin.finance.invoices'); })->name('invoices');
        Route::get('/payments', function () { return view('admin.finance.payments'); })->name('payments');
        Route::get('/fee-settings', function () { return view('admin.finance.fee-settings'); })->name('fee-settings');
    });

    // Documents (Dokumen)
    Route::prefix('documents')->name('documents.')->group(function () {
        Route::get('/', function () { return view('admin.documents.index'); })->name('index');
        Route::get('/upload', function () { return view('admin.documents.upload'); })->name('upload');
        Route::get('/verify', function () { return view('admin.documents.verify'); })->name('verify');
    });

    // Reports (Laporan)
    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get('/certification', function () { return view('admin.reports.certification'); })->name('certification');
        Route::get('/financial', function () { return view('admin.reports.financial'); })->name('financial');
        Route::get('/audits', function () { return view('admin.reports.audits'); })->name('audits');
    });

    // Users (Pengguna)
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', function () { return view('admin.users.index'); })->name('index');
        Route::get('/create', function () { return view('admin.users.create'); })->name('create');
        Route::get('/{id}/edit', function ($id) { return view('admin.users.edit', compact('id')); })->name('edit');
        Route::get('/roles', function () { return view('admin.users.roles'); })->name('roles');
    });

    // Master Data
    Route::prefix('master-data')->name('master-data.')->group(function () {
        Route::get('/regions', function () { return view('admin.master-data.regions'); })->name('regions');
        Route::get('/business-types', function () { return view('admin.master-data.business-types'); })->name('business-types');
        Route::get('/product-types', function () { return view('admin.master-data.product-types'); })->name('product-types');
    });

    // Settings (Pengaturan)
    Route::get('/settings', function () { return view('admin.settings'); })->name('settings');

    // Help (Bantuan)
    Route::get('/help', function () { return view('admin.help'); })->name('help');
});

// Manajer Teknis Routes
Route::middleware(['auth', 'role:manajer_teknis'])->prefix('manajer-teknis')->name('manajer_teknis.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\ManajerTeknis\DashboardController::class, 'index'])->name('dashboard');
});

// Auditor Halal Routes
Route::middleware(['auth', 'role:auditor_halal'])->prefix('auditor')->name('auditor.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Auditor\DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
