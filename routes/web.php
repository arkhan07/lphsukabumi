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

Route::prefix('tentang')->name('tentang')->group(function () {
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

// Layanan Halal //
Route::prefix('sertifikasi-halal')->name('sertifikasi-halal')->group(function () {
    Route::get('/', function () {
        return view('sertifikasi-halal', [
            'title' => 'Sertifikasi Halal - LPH Doa Bangsa Sukabumi',
            'description' => 'Layanan sertifikasi halal untuk produk makanan, minuman, kosmetik, dan obat-obatan dari LPH Doa Bangsa'
        ]);
    });
});

Route::prefix('audit-halal')->name('audit-halal')->group(function () {
    Route::get('/', function () {
        return view('audit-halal', [
            'title' => 'Audit Halal - LPH Doa Bangsa Sukabumi',
            'description' => 'Layanan audit halal komprehensif untuk memastikan proses produksi sesuai standar halal yang ditetapkan'
        ]);
    });
});

Route::prefix('konsultasi-halal')->name('konsultasi-halal')->group(function () {
    Route::get('/', function () {
        return view('konsultasi-halal', [
            'title' => 'Konsultasi Halal - LPH Doa Bangsa Sukabumi',
            'description' => 'Konsultasi ahli untuk persiapan sertifikasi halal dan pemahaman persyaratan yang diperlukan'
        ]);
    });
});

Route::prefix('pelatihan-halal')->name('pelatihan-halal')->group(function () {
    Route::get('/', function () {
        return view('pelatihan-halal', [
            'title' => 'Pelatihan Halal - LPH Doa Bangsa Sukabumi',
            'description' => 'Program pelatihan sistem jaminan halal untuk tim internal perusahaan Anda'
        ]);
    });
});

// End Layanan Halal //

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
Route::middleware(['auth', 'role:pelaku_usaha,penyedia_halal,pendamping_halal_reguler'])->prefix('pelaku-usaha')->name('pelaku_usaha.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\PelakuUsaha\DashboardController::class, 'index'])->name('dashboard');

    // Submissions
    Route::get('/submissions', [App\Http\Controllers\PelakuUsaha\SubmissionController::class, 'index'])->name('submissions.index');
    Route::get('/submissions/create', [App\Http\Controllers\PelakuUsaha\SubmissionController::class, 'create'])->name('submissions.create');
    Route::post('/submissions', [App\Http\Controllers\PelakuUsaha\SubmissionController::class, 'store'])->name('submissions.store');
    Route::get('/submissions/{submission}', [App\Http\Controllers\PelakuUsaha\SubmissionController::class, 'show'])->name('submissions.show');

    // Products
    Route::get('/products', [App\Http\Controllers\PelakuUsaha\ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [App\Http\Controllers\PelakuUsaha\ProductController::class, 'show'])->name('products.show');

    // Documents
    Route::get('/documents', [App\Http\Controllers\PelakuUsaha\DocumentController::class, 'index'])->name('documents.index');
    Route::get('/documents/create', [App\Http\Controllers\PelakuUsaha\DocumentController::class, 'create'])->name('documents.create');
    Route::post('/documents', [App\Http\Controllers\PelakuUsaha\DocumentController::class, 'store'])->name('documents.store');
    Route::get('/documents/{document}', [App\Http\Controllers\PelakuUsaha\DocumentController::class, 'show'])->name('documents.show');
    Route::get('/documents/{document}/download', [App\Http\Controllers\PelakuUsaha\DocumentController::class, 'download'])->name('documents.download');
    Route::delete('/documents/{document}', [App\Http\Controllers\PelakuUsaha\DocumentController::class, 'destroy'])->name('documents.destroy');

    // Invoices
    Route::get('/invoices', [App\Http\Controllers\PelakuUsaha\InvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/invoices/{invoice}', [App\Http\Controllers\PelakuUsaha\InvoiceController::class, 'show'])->name('invoices.show');
    Route::get('/invoices/{invoice}/download', [App\Http\Controllers\PelakuUsaha\InvoiceController::class, 'download'])->name('invoices.download');
    Route::get('/invoices/{invoice}/payment/create', [App\Http\Controllers\PelakuUsaha\InvoiceController::class, 'createPayment'])->name('invoices.payment.create');
    Route::post('/invoices/{invoice}/payment', [App\Http\Controllers\PelakuUsaha\InvoiceController::class, 'storePayment'])->name('invoices.payment.store');

    // Payments
    Route::get('/payments', [App\Http\Controllers\PelakuUsaha\PaymentController::class, 'index'])->name('payments.index');
    Route::get('/payments/{payment}', [App\Http\Controllers\PelakuUsaha\PaymentController::class, 'show'])->name('payments.show');
    Route::get('/payments/{payment}/proof', [App\Http\Controllers\PelakuUsaha\PaymentController::class, 'downloadProof'])->name('payments.proof');
    Route::get('/payments/{payment}/receipt', [App\Http\Controllers\PelakuUsaha\PaymentController::class, 'downloadReceipt'])->name('payments.receipt');

    // Profile & Settings
    Route::get('/profile', [App\Http\Controllers\PelakuUsaha\ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [App\Http\Controllers\PelakuUsaha\ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/password', [App\Http\Controllers\PelakuUsaha\ProfileController::class, 'updatePassword'])->name('profile.password');

    // Help & Support
    Route::get('/help', [App\Http\Controllers\PelakuUsaha\HelpController::class, 'index'])->name('help.index');
    Route::get('/help/contact', [App\Http\Controllers\PelakuUsaha\HelpController::class, 'contact'])->name('help.contact');
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
        // Index and Create Routes (must come before specific routes)
        Route::get('/', [App\Http\Controllers\Admin\AuditsController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\AuditsController::class, 'create'])->name('create');
        Route::post('/', [App\Http\Controllers\Admin\AuditsController::class, 'store'])->name('store');

        // Schedule Routes (must come before /{audit})
        Route::get('/schedules', [App\Http\Controllers\Admin\AuditsController::class, 'schedules'])->name('schedules.index');
        Route::post('/schedules', [App\Http\Controllers\Admin\AuditsController::class, 'storeSchedule'])->name('schedules.store');
        Route::get('/schedules/{schedule}', [App\Http\Controllers\Admin\AuditsController::class, 'showSchedule'])->name('schedules.show');
        Route::get('/schedules/{schedule}/edit', [App\Http\Controllers\Admin\AuditsController::class, 'editSchedule'])->name('schedules.edit');
        Route::put('/schedules/{schedule}', [App\Http\Controllers\Admin\AuditsController::class, 'updateSchedule'])->name('schedules.update');
        Route::post('/schedules/{schedule}/cancel', [App\Http\Controllers\Admin\AuditsController::class, 'cancelSchedule'])->name('schedules.cancel');
        Route::post('/schedules/{schedule}/complete', [App\Http\Controllers\Admin\AuditsController::class, 'completeSchedule'])->name('schedules.complete');

        // Report Routes (must come before /{audit})
        Route::get('/reports', [App\Http\Controllers\Admin\AuditsController::class, 'reports'])->name('reports.index');
        Route::post('/reports', [App\Http\Controllers\Admin\AuditsController::class, 'storeReport'])->name('reports.store');
        Route::get('/reports/{report}', [App\Http\Controllers\Admin\AuditsController::class, 'showReport'])->name('reports.show');
        Route::get('/reports/{report}/edit', [App\Http\Controllers\Admin\AuditsController::class, 'editReport'])->name('reports.edit');
        Route::put('/reports/{report}', [App\Http\Controllers\Admin\AuditsController::class, 'updateReport'])->name('reports.update');
        Route::get('/reports/{report}/download', [App\Http\Controllers\Admin\AuditsController::class, 'downloadReport'])->name('reports.download');
        Route::post('/reports/{report}/approve', [App\Http\Controllers\Admin\AuditsController::class, 'approveReport'])->name('reports.approve');

        // Finding Routes (must come before /{audit})
        Route::get('/findings', [App\Http\Controllers\Admin\AuditsController::class, 'findings'])->name('findings');
        Route::get('/findings/create', [App\Http\Controllers\Admin\AuditsController::class, 'createFinding'])->name('findings.create');
        Route::post('/findings', [App\Http\Controllers\Admin\AuditsController::class, 'storeFinding'])->name('findings.store');
        Route::get('/findings/{finding}', [App\Http\Controllers\Admin\AuditsController::class, 'showFinding'])->name('findings.show');
        Route::put('/findings/{finding}', [App\Http\Controllers\Admin\AuditsController::class, 'updateFinding'])->name('findings.update');
        Route::post('/findings/{finding}/resolve', [App\Http\Controllers\Admin\AuditsController::class, 'resolveFinding'])->name('findings.resolve');
        Route::post('/findings/{finding}/verify', [App\Http\Controllers\Admin\AuditsController::class, 'verifyFinding'])->name('findings.verify');
        Route::post('/findings/{finding}/close', [App\Http\Controllers\Admin\AuditsController::class, 'closeFinding'])->name('findings.close');

        // Audit Resource Routes with wildcard (must come last)
        Route::get('/{audit}', [App\Http\Controllers\Admin\AuditsController::class, 'show'])->name('show');
        Route::get('/{audit}/edit', [App\Http\Controllers\Admin\AuditsController::class, 'edit'])->name('edit');
        Route::put('/{audit}', [App\Http\Controllers\Admin\AuditsController::class, 'update'])->name('update');
        Route::delete('/{audit}', [App\Http\Controllers\Admin\AuditsController::class, 'destroy'])->name('destroy');
    });

    // Invoices/Quotations (Surat Penawaran) - NEW SYSTEM
    Route::prefix('invoices')->name('invoices.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\InvoicesController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\InvoicesController::class, 'create'])->name('create');
        Route::post('/', [App\Http\Controllers\Admin\InvoicesController::class, 'store'])->name('store');
        Route::get('/{invoice}', [App\Http\Controllers\Admin\InvoicesController::class, 'show'])->name('show');
        Route::get('/{invoice}/preview', [App\Http\Controllers\Admin\InvoicesController::class, 'preview'])->name('preview');
        Route::post('/{invoice}/generate-pdf', [App\Http\Controllers\Admin\InvoicesController::class, 'generatePdf'])->name('generate-pdf');
        Route::post('/{invoice}/send', [App\Http\Controllers\Admin\InvoicesController::class, 'send'])->name('send');
        Route::post('/{invoice}/mark-as-paid', [App\Http\Controllers\Admin\InvoicesController::class, 'markAsPaid'])->name('mark-as-paid');
        Route::post('/{invoice}/cancel', [App\Http\Controllers\Admin\InvoicesController::class, 'cancel'])->name('cancel');
    });

    // PHR Management (Pendamping Halal Reguler)
    Route::prefix('phr')->name('phr.')->group(function () {
        // Dashboard
        Route::get('/', [App\Http\Controllers\Admin\PhrController::class, 'index'])->name('index');

        // PHR List
        Route::get('/list', [App\Http\Controllers\Admin\PhrController::class, 'list'])->name('list');

        // Promotions
        Route::get('/promotions', [App\Http\Controllers\Admin\PhrController::class, 'promotions'])->name('promotions');
        Route::post('/promotions/{promotion}/approve', [App\Http\Controllers\Admin\PhrController::class, 'approvePromotion'])->name('promotions.approve');
        Route::post('/promotions/{promotion}/reject', [App\Http\Controllers\Admin\PhrController::class, 'rejectPromotion'])->name('promotions.reject');

        // Fees
        Route::get('/fees', [App\Http\Controllers\Admin\PhrController::class, 'fees'])->name('fees');
        Route::post('/fees/{fee}/approve', [App\Http\Controllers\Admin\PhrController::class, 'approveFee'])->name('fees.approve');
        Route::post('/fees/{fee}/pay', [App\Http\Controllers\Admin\PhrController::class, 'payFee'])->name('fees.pay');

        // Criteria Settings
        Route::get('/criteria', [App\Http\Controllers\Admin\PhrController::class, 'criteria'])->name('criteria');
        Route::put('/criteria/{criteria}', [App\Http\Controllers\Admin\PhrController::class, 'updateCriteria'])->name('criteria.update');

        // PHR Detail & Actions (MUST BE LAST - wildcard routes)
        Route::get('/{user}', [App\Http\Controllers\Admin\PhrController::class, 'show'])->name('show');
        Route::post('/{user}/activate', [App\Http\Controllers\Admin\PhrController::class, 'activate'])->name('activate');
        Route::post('/{user}/deactivate', [App\Http\Controllers\Admin\PhrController::class, 'deactivate'])->name('deactivate');
        Route::post('/{user}/promote', [App\Http\Controllers\Admin\PhrController::class, 'manualPromote'])->name('promote');
    });

    // Auditor Fees Management
    Route::prefix('auditor-fees')->name('auditor-fees.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\AuditorFeesController::class, 'index'])->name('index');
        Route::get('/{fee}', [App\Http\Controllers\Admin\AuditorFeesController::class, 'show'])->name('show');
        Route::post('/{fee}/approve', [App\Http\Controllers\Admin\AuditorFeesController::class, 'approve'])->name('approve');
        Route::post('/{fee}/pay', [App\Http\Controllers\Admin\AuditorFeesController::class, 'pay'])->name('pay');
        Route::post('/{fee}/cancel', [App\Http\Controllers\Admin\AuditorFeesController::class, 'cancel'])->name('cancel');
    });

    // Finance (Keuangan) - OLD SYSTEM (Keep for backward compatibility)
    Route::prefix('finance')->name('finance.')->group(function () {
        Route::get('/invoices', [App\Http\Controllers\Admin\FinanceController::class, 'invoices'])->name('invoices');
        Route::get('/invoices/create', [App\Http\Controllers\Admin\FinanceController::class, 'createInvoice'])->name('invoices.create');
        Route::post('/invoices', [App\Http\Controllers\Admin\FinanceController::class, 'storeInvoice'])->name('invoices.store');
        Route::get('/invoices/{invoice}', [App\Http\Controllers\Admin\FinanceController::class, 'showInvoice'])->name('invoices.show');
        Route::get('/invoices/{invoice}/edit', [App\Http\Controllers\Admin\FinanceController::class, 'editInvoice'])->name('invoices.edit');
        Route::put('/invoices/{invoice}', [App\Http\Controllers\Admin\FinanceController::class, 'updateInvoice'])->name('invoices.update');
        Route::delete('/invoices/{invoice}', [App\Http\Controllers\Admin\FinanceController::class, 'destroyInvoice'])->name('invoices.destroy');
        Route::post('/invoices/{invoice}/send', [App\Http\Controllers\Admin\FinanceController::class, 'sendInvoice'])->name('invoices.send');
        Route::get('/invoices/{invoice}/pdf', [App\Http\Controllers\Admin\FinanceController::class, 'downloadPdf'])->name('invoices.pdf');
        Route::get('/invoices/{invoice}/download', [App\Http\Controllers\Admin\FinanceController::class, 'downloadInvoice'])->name('invoices.download');
        Route::post('/invoices/{invoice}/reminder', [App\Http\Controllers\Admin\FinanceController::class, 'sendReminder'])->name('invoices.reminder');

        Route::get('/payments', [App\Http\Controllers\Admin\FinanceController::class, 'payments'])->name('payments');
        Route::post('/payments', [App\Http\Controllers\Admin\FinanceController::class, 'storePayment'])->name('payments.store');
        Route::get('/payments/{payment}', [App\Http\Controllers\Admin\FinanceController::class, 'showPayment'])->name('payments.show');
        Route::post('/payments/{payment}/verify', [App\Http\Controllers\Admin\FinanceController::class, 'verifyPayment'])->name('payments.verify');
        Route::post('/payments/{payment}/reject', [App\Http\Controllers\Admin\FinanceController::class, 'rejectPayment'])->name('payments.reject');

        Route::get('/fee-settings', [App\Http\Controllers\Admin\FinanceController::class, 'feeSettings'])->name('fee-settings');
        Route::post('/fee-settings', [App\Http\Controllers\Admin\FinanceController::class, 'storeFee'])->name('fees.store');
        Route::get('/fee-settings/{fee}/edit', [App\Http\Controllers\Admin\FinanceController::class, 'editFee'])->name('fees.edit');
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
        Route::get('/product', [App\Http\Controllers\Admin\ReportsController::class, 'product'])->name('product');
        Route::get('/phr', [App\Http\Controllers\Admin\ReportsController::class, 'phr'])->name('phr');
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
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('index');
        Route::post('/update', [App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('update');
        Route::post('/general', [App\Http\Controllers\Admin\SettingsController::class, 'updateGeneral'])->name('update-general');
        Route::post('/email', [App\Http\Controllers\Admin\SettingsController::class, 'updateEmail'])->name('update-email');
        Route::post('/certification', [App\Http\Controllers\Admin\SettingsController::class, 'updateCertification'])->name('update-certification');
        Route::post('/notifications', [App\Http\Controllers\Admin\SettingsController::class, 'updateNotifications'])->name('update-notifications');
        Route::post('/logo', [App\Http\Controllers\Admin\SettingsController::class, 'uploadLogo'])->name('upload-logo');
        Route::post('/test-email', [App\Http\Controllers\Admin\SettingsController::class, 'testEmail'])->name('test-email');
        Route::post('/test-smtp', [App\Http\Controllers\Admin\SettingsController::class, 'testSmtp'])->name('test-smtp');
        Route::post('/test-whatsapp', [App\Http\Controllers\Admin\SettingsController::class, 'testWhatsapp'])->name('test-whatsapp');
        Route::get('/system-info', [App\Http\Controllers\Admin\SettingsController::class, 'systemInfo'])->name('system-info');
    });

    // Profile (Profil)
    Route::prefix('profile')->name('profile')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\ProfileController::class, 'index']);
        Route::post('/update', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('.update');
        Route::post('/password', [App\Http\Controllers\Admin\ProfileController::class, 'updatePassword'])->name('.password');
        Route::delete('/photo', [App\Http\Controllers\Admin\ProfileController::class, 'deletePhoto'])->name('.delete-photo');
    });

    // Help (Bantuan)
    Route::get('/help', function () { return view('admin.help'); })->name('help');
});

// Manajer Teknis Routes
Route::middleware(['auth', 'role:manajer_teknis'])->prefix('manajer-teknis')->name('manajer_teknis.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\ManajerTeknis\DashboardController::class, 'index'])->name('dashboard');

    // Auditor Management
    Route::get('/auditor-workload', [App\Http\Controllers\ManajerTeknis\DashboardController::class, 'auditorWorkload'])->name('auditor-workload');
    Route::get('/auditors', [App\Http\Controllers\ManajerTeknis\DashboardController::class, 'getAuditors'])->name('auditors');

    // Timeline & Monitoring
    Route::get('/timeline', [App\Http\Controllers\ManajerTeknis\DashboardController::class, 'timeline'])->name('timeline');
    Route::get('/certification-status', [App\Http\Controllers\ManajerTeknis\DashboardController::class, 'certificationStatus'])->name('certification-status');
});

// Auditor Halal Routes
Route::middleware(['auth', 'role:auditor_halal'])->prefix('auditor')->name('auditor.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Auditor\DashboardController::class, 'index'])->name('dashboard');

    // Jadwal Audit
    Route::get('/schedules', [App\Http\Controllers\Auditor\DashboardController::class, 'schedules'])->name('schedules');
    Route::get('/schedules/{schedule}', [App\Http\Controllers\Auditor\DashboardController::class, 'showSchedule'])->name('schedules.show');
    Route::post('/schedules/{schedule}/start', [App\Http\Controllers\Auditor\DashboardController::class, 'startAudit'])->name('schedules.start');
    Route::post('/schedules/{schedule}/complete', [App\Http\Controllers\Auditor\DashboardController::class, 'completeAudit'])->name('schedules.complete');

    // Laporan Audit
    Route::get('/reports', [App\Http\Controllers\Auditor\DashboardController::class, 'reports'])->name('reports');
    Route::get('/reports/create', [App\Http\Controllers\Auditor\DashboardController::class, 'createReport'])->name('reports.create');
    Route::post('/reports', [App\Http\Controllers\Auditor\DashboardController::class, 'storeReport'])->name('reports.store');
    Route::get('/reports/{report}', [App\Http\Controllers\Auditor\DashboardController::class, 'showReport'])->name('reports.show');
    Route::get('/reports/{report}/edit', [App\Http\Controllers\Auditor\DashboardController::class, 'editReport'])->name('reports.edit');
    Route::put('/reports/{report}', [App\Http\Controllers\Auditor\DashboardController::class, 'updateReport'])->name('reports.update');
    Route::post('/reports/{report}/submit', [App\Http\Controllers\Auditor\DashboardController::class, 'submitReport'])->name('reports.submit');

    // Temuan Audit
    Route::get('/findings', [App\Http\Controllers\Auditor\DashboardController::class, 'findings'])->name('findings');
    Route::get('/findings/create', [App\Http\Controllers\Auditor\DashboardController::class, 'createFinding'])->name('findings.create');
    Route::post('/findings', [App\Http\Controllers\Auditor\DashboardController::class, 'storeFinding'])->name('findings.store');
    Route::get('/findings/{finding}', [App\Http\Controllers\Auditor\DashboardController::class, 'showFinding'])->name('findings.show');
    Route::put('/findings/{finding}', [App\Http\Controllers\Auditor\DashboardController::class, 'updateFinding'])->name('findings.update');

    // Fee Tracking (30%)
    Route::get('/fees', [App\Http\Controllers\Auditor\FeesController::class, 'index'])->name('fees');
    Route::get('/fees/{fee}', [App\Http\Controllers\Auditor\FeesController::class, 'show'])->name('fees.show');
});

// PHR (Pendamping Halal Reguler) Routes
Route::middleware(['auth', 'role:pendamping_halal_reguler'])->prefix('phr')->name('phr.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Phr\DashboardController::class, 'index'])->name('dashboard');
    Route::post('/generate-code', [App\Http\Controllers\Phr\DashboardController::class, 'generateCode'])->name('generate-code');

    // Recruitment
    Route::get('/recruitment', [App\Http\Controllers\Phr\RecruitmentController::class, 'index'])->name('recruitment.index');
    Route::get('/recruitment/invite', [App\Http\Controllers\Phr\RecruitmentController::class, 'invite'])->name('recruitment.invite');
    Route::post('/recruitment/send-invitation', [App\Http\Controllers\Phr\RecruitmentController::class, 'sendInvitation'])->name('recruitment.send');

    // Referrals (Pelaku Usaha yang direferensikan)
    Route::get('/referrals', [App\Http\Controllers\Phr\ReferralsController::class, 'index'])->name('referrals.index');
    Route::get('/referrals/{user}', [App\Http\Controllers\Phr\ReferralsController::class, 'show'])->name('referrals.show');

    // Downlines (PHR yang direkrut)
    Route::get('/downlines', [App\Http\Controllers\Phr\DownlinesController::class, 'index'])->name('downlines.index');
    Route::get('/downlines/{user}', [App\Http\Controllers\Phr\DownlinesController::class, 'show'])->name('downlines.show');

    // Fees (10%, 3%, 2%)
    Route::get('/fees', [App\Http\Controllers\Phr\FeesController::class, 'index'])->name('fees.index');
    Route::get('/fees/{fee}', [App\Http\Controllers\Phr\FeesController::class, 'show'])->name('fees.show');

    // Promotions & Achievements
    Route::get('/achievements', [App\Http\Controllers\Phr\AchievementsController::class, 'index'])->name('achievements.index');
    Route::get('/promotions', [App\Http\Controllers\Phr\AchievementsController::class, 'promotions'])->name('promotions.index');

    // Profile & Settings
    Route::get('/profile', [App\Http\Controllers\Phr\ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [App\Http\Controllers\Phr\ProfileController::class, 'update'])->name('profile.update');
});

// PHR Registration (Public - with referral code)
Route::get('/register/phr', [App\Http\Controllers\PhrRegistrationController::class, 'showRegistrationForm'])->name('register.phr');
Route::post('/register/phr', [App\Http\Controllers\PhrRegistrationController::class, 'register'])->name('register.phr.submit');
Route::get('/register/phr/validate-code', [App\Http\Controllers\PhrRegistrationController::class, 'validateReferralCode'])->name('register.phr.validate');

require __DIR__.'/auth.php';
