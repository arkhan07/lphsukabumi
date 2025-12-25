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
    Route::resource('submissions', App\Http\Controllers\Admin\SubmissionsController::class);
    Route::post('submissions/{submission}/submit', [App\Http\Controllers\Admin\SubmissionsController::class, 'submit'])->name('submissions.submit');
    Route::post('submissions/{submission}/approve', [App\Http\Controllers\Admin\SubmissionsController::class, 'approve'])->name('submissions.approve');
    Route::post('submissions/{submission}/reject', [App\Http\Controllers\Admin\SubmissionsController::class, 'reject'])->name('submissions.reject');
    Route::post('submissions/{submission}/update-status', [App\Http\Controllers\Admin\SubmissionsController::class, 'updateStatus'])->name('submissions.update-status');

    // Products (Produk)
    Route::resource('products', App\Http\Controllers\Admin\ProductsController::class);
    Route::get('products/categories/manage', [App\Http\Controllers\Admin\ProductsController::class, 'categories'])->name('products.categories');
    Route::post('products/categories', [App\Http\Controllers\Admin\ProductsController::class, 'storeCategory'])->name('products.categories.store');
    Route::put('products/categories/{category}', [App\Http\Controllers\Admin\ProductsController::class, 'updateCategory'])->name('products.categories.update');
    Route::delete('products/categories/{category}', [App\Http\Controllers\Admin\ProductsController::class, 'destroyCategory'])->name('products.categories.destroy');

    // Audits (Audit)
    Route::prefix('audits')->name('audits.')->group(function () {
        Route::get('/schedules', [App\Http\Controllers\Admin\AuditsController::class, 'schedules'])->name('schedules');
        Route::post('/schedules', [App\Http\Controllers\Admin\AuditsController::class, 'storeSchedule'])->name('schedules.store');
        Route::put('/schedules/{schedule}', [App\Http\Controllers\Admin\AuditsController::class, 'updateSchedule'])->name('schedules.update');
        Route::post('/schedules/{schedule}/cancel', [App\Http\Controllers\Admin\AuditsController::class, 'cancelSchedule'])->name('schedules.cancel');

        Route::get('/reports', [App\Http\Controllers\Admin\AuditsController::class, 'reports'])->name('reports');
        Route::post('/reports', [App\Http\Controllers\Admin\AuditsController::class, 'storeReport'])->name('reports.store');

        Route::get('/findings', [App\Http\Controllers\Admin\AuditsController::class, 'findings'])->name('findings');
        Route::post('/findings', [App\Http\Controllers\Admin\AuditsController::class, 'storeFinding'])->name('findings.store');
        Route::put('/findings/{finding}', [App\Http\Controllers\Admin\AuditsController::class, 'updateFinding'])->name('findings.update');
        Route::post('/findings/{finding}/resolve', [App\Http\Controllers\Admin\AuditsController::class, 'resolveFinding'])->name('findings.resolve');
        Route::post('/findings/{finding}/verify', [App\Http\Controllers\Admin\AuditsController::class, 'verifyFinding'])->name('findings.verify');
    });

    // Finance (Keuangan)
    Route::prefix('finance')->name('finance.')->group(function () {
        Route::get('/invoices', [App\Http\Controllers\Admin\FinanceController::class, 'invoices'])->name('invoices');
        Route::get('/invoices/create', [App\Http\Controllers\Admin\FinanceController::class, 'createInvoice'])->name('invoices.create');
        Route::post('/invoices', [App\Http\Controllers\Admin\FinanceController::class, 'storeInvoice'])->name('invoices.store');

        Route::get('/payments', [App\Http\Controllers\Admin\FinanceController::class, 'payments'])->name('payments');
        Route::post('/payments', [App\Http\Controllers\Admin\FinanceController::class, 'storePayment'])->name('payments.store');
        Route::post('/payments/{payment}/verify', [App\Http\Controllers\Admin\FinanceController::class, 'verifyPayment'])->name('payments.verify');
        Route::post('/payments/{payment}/reject', [App\Http\Controllers\Admin\FinanceController::class, 'rejectPayment'])->name('payments.reject');

        Route::get('/fee-settings', [App\Http\Controllers\Admin\FinanceController::class, 'feeSettings'])->name('fee-settings');
        Route::post('/fee-settings', [App\Http\Controllers\Admin\FinanceController::class, 'storeFee'])->name('fees.store');
        Route::put('/fee-settings/{fee}', [App\Http\Controllers\Admin\FinanceController::class, 'updateFee'])->name('fees.update');
        Route::post('/fee-settings/{fee}/toggle', [App\Http\Controllers\Admin\FinanceController::class, 'toggleFee'])->name('fees.toggle');
    });

    // Documents (Dokumen)
    Route::resource('documents', App\Http\Controllers\Admin\DocumentsController::class);
    Route::get('documents/{document}/download', [App\Http\Controllers\Admin\DocumentsController::class, 'download'])->name('documents.download');
    Route::get('documents/{document}/verify', [App\Http\Controllers\Admin\DocumentsController::class, 'verify'])->name('documents.verify');
    Route::post('documents/{document}/approve', [App\Http\Controllers\Admin\DocumentsController::class, 'approve'])->name('documents.approve');
    Route::post('documents/{document}/reject', [App\Http\Controllers\Admin\DocumentsController::class, 'reject'])->name('documents.reject');
    Route::post('documents/{document}/request-revision', [App\Http\Controllers\Admin\DocumentsController::class, 'requestRevision'])->name('documents.request-revision');

    // Reports (Laporan)
    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get('/certification', [App\Http\Controllers\Admin\ReportsController::class, 'certification'])->name('certification');
        Route::get('/financial', [App\Http\Controllers\Admin\ReportsController::class, 'financial'])->name('financial');
        Route::get('/audits', [App\Http\Controllers\Admin\ReportsController::class, 'audits'])->name('audits');
    });

    // Users (Pengguna)
    Route::resource('users', App\Http\Controllers\Admin\UsersController::class);
    Route::get('users/roles/manage', [App\Http\Controllers\Admin\UsersController::class, 'rolesAndPermissions'])->name('users.roles');
    Route::post('users/roles', [App\Http\Controllers\Admin\UsersController::class, 'storeRole'])->name('roles.store');
    Route::put('users/roles/{role}', [App\Http\Controllers\Admin\UsersController::class, 'updateRole'])->name('roles.update');
    Route::delete('users/roles/{role}', [App\Http\Controllers\Admin\UsersController::class, 'destroyRole'])->name('roles.destroy');
    Route::post('users/roles/{role}/permissions', [App\Http\Controllers\Admin\UsersController::class, 'attachPermission'])->name('roles.permissions.attach');
    Route::delete('users/roles/{role}/permissions/{permission}', [App\Http\Controllers\Admin\UsersController::class, 'detachPermission'])->name('roles.permissions.detach');

    // Master Data
    Route::prefix('master-data')->name('master-data.')->group(function () {
        Route::get('/regions', [App\Http\Controllers\Admin\MasterDataController::class, 'regions'])->name('regions');
        Route::post('/regions', [App\Http\Controllers\Admin\MasterDataController::class, 'storeRegion'])->name('regions.store');
        Route::put('/regions/{region}', [App\Http\Controllers\Admin\MasterDataController::class, 'updateRegion'])->name('regions.update');
        Route::delete('/regions/{region}', [App\Http\Controllers\Admin\MasterDataController::class, 'destroyRegion'])->name('regions.destroy');

        Route::get('/business-types', [App\Http\Controllers\Admin\MasterDataController::class, 'businessTypes'])->name('business-types');
        Route::post('/business-types', [App\Http\Controllers\Admin\MasterDataController::class, 'storeBusinessType'])->name('business-types.store');
        Route::put('/business-types/{businessType}', [App\Http\Controllers\Admin\MasterDataController::class, 'updateBusinessType'])->name('business-types.update');
        Route::delete('/business-types/{businessType}', [App\Http\Controllers\Admin\MasterDataController::class, 'destroyBusinessType'])->name('business-types.destroy');

        Route::get('/product-types', [App\Http\Controllers\Admin\MasterDataController::class, 'productTypes'])->name('product-types');
        Route::post('/product-types', [App\Http\Controllers\Admin\MasterDataController::class, 'storeProductType'])->name('product-types.store');
        Route::put('/product-types/{productType}', [App\Http\Controllers\Admin\MasterDataController::class, 'updateProductType'])->name('product-types.update');
        Route::delete('/product-types/{productType}', [App\Http\Controllers\Admin\MasterDataController::class, 'destroyProductType'])->name('product-types.destroy');
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
