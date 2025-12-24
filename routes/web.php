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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/whatsapp', [HomeController::class, 'whatsapp'])->name('whatsapp');
Route::get('/sectionbahasa', [MultiBahasaController::class, 'index'])->name('sectionbahasa');

Route::name('beranda')->group(function () {
    route::get('/', function () {
        return view('beranda', [
            "title" => "Aplikasi SIMRS | Rumah Sakit, Klinik, Rekam Medis dan Lab",
            "description" => "Aplikasi SIMRS dan Rekam Medis dengan fitur lengkap dan harga yang murah untuk membantu Faskes seperti Klinik, Rumah Sakit, dan Laboratorium"
        ]);
    });
});

Route::prefix('fitur')->name('fitur')->group(function () {
    Route::get('/', function () {
        return view('fitur', [
            "title" => "SIMRS - Aplikasi Manajemen Rumah Sakit dan Klinik",
            'description' => 'Aplikasi atau software SIMRS dari SAFFMedic fitur lengkap, harga murah, dan dapat disesuaikan ( Semi custome )'
        ]);
    });
});

Route::prefix('harga')->name('harga')->group(function () {
    Route::get('/', function () {
        return view('harga', [
            "title" => "Software Klinik - SIMRS untuk  Klinik  harga murah",
            'description' => 'Software Klinik dari SAFFMedic dengan fitur lengkap dan harga yang murah serta dapat di custome.'
        ]);
    });
    Route::get('/kso', function () {
        return view('kso', [
            "title" => "Software Klinik - SIMRS untuk  Klinik  harga murah",
            'description' => 'Software Klinik dari SAFFMedic dengan fitur lengkap dan harga yang murah serta dapat di custome.'
        ]);
    })->name('kso');
});

Route::prefix('kontak')->name('kontak')->group(function () {
    Route::get('/', function () {
        return view('kontak', [
            "title" => "Kontak dan alamat Aplikasi SIMRS dan SIM Klinik SAFFMedic",
            'description' => 'Dapatkan informasi dan dukungan untuk Aplikasi dan Software SIMRS dan SIMKlinik SAFFMedic dengan menghubungi Kami'
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

// Solusi //
Route::prefix('klinik')->name('klinik')->group(function () {
    Route::get('/', function () {
        return view('klinik', [
            'title' => 'SIM Klinik | Aplikasi Klinik Berbasis Web & Online',
            'description' => 'Aplikasi SIM Klinik memiliki fitur rawat jalan dengan kemampuan online'
        ]);
    });
});

Route::prefix('rumah-sakit')->name('rumah-sakit')->group(function () {
    Route::get('/', function () {
        return view('rumah-sakit', [
            'title' => 'Software SIMRS - Aplikasi Sistem Manajemen Rumah Sakit',
            'description' => 'Aplikasi Sistem Manajemen Rumah Sakit (SIMRS) yang lengkap dan murah serta dapat di custome'
        ]);
    });
});

Route::prefix('apotek')->name('apotek')->group(function () {
    Route::get('/', function () {
        return view('apotek', [
            'title' => 'SAFFMedic - Software Apotik dan Aplikasi Apotek online',
            'description' => 'Aplikasi Apotek online yang  memiliki fitur lengkap seperti penjualan, pembelian, hingga pengelolaan stok'
        ]);
    });
});

Route::prefix('laboratorium')->name('laboratorium')->group(function () {
    Route::get('/', function () {
        return view('laboratorium', [
            'title' => 'Aplikasi Laboratorium Rumah Sakit dan Klinik | SAFFMedic',
            'description' => 'Aplikasi Laboratorium untuk penunjang Klinik dan Rumah Sakit yang lengkap dan Murah'
        ]);
    });
});

Route::prefix('praktek-dokter')->name('praktek-dokter')->group(function () {
    Route::get('/', function () {
        return view('praktek-dokter', [
            'title' => 'Software aplikasi Rekam Medis Online | Software SIMRS',
            'description' => 'Software Rekam Medis Online untuk praktek dokter yang canggih dan murah'
        ]);
    });
});

Route::prefix('odontogram')->name('odontogram')->group(function () {
    Route::get('/', function () {
        return view('odontogram', [
            'title' => 'SAFFMedic | Solusi untuk Dokter Gigi',
            'description' => 'Lihat disini, aplikasi odontogram untuk dokter dan klinik Gigi'
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
            'title' => 'SIMRS dan SIM Klinik SAFFMedic | Syarat dan ketentuan',
            'description' => 'SAFFMedic menghadirkan SIMRS yang flexible dengan memberikan kententuan customize agar FASKES mudah menggunakannya'
        ]);
    });
});

Route::prefix('mitra')->name('mitra')->group(function () {
    Route::get('/', function () {
        return view('mitra', [
            'title' => 'Vendor SIMRS & SIM Klinik',
            'description' => 'SAFFmedic merupakan vendor SIMRS & SIM Klinik yang dapat di custome'
        ]);
    });
});
// End Foot//

// Form //
Route::prefix('form')->name('form')->group(function () {
    Route::get('/', function () {
        return view('form', [
            'title' => 'Form Pendaftaran Pelanggan Saffmedic',
            'description' => 'Form Pendaftaran Pelanggan Saffmedic'
        ]);
    });
});

Route::prefix('form-demo')->name('form-demo')->group(function () {
    Route::get('/', function () {
        return view('form-demo', [
            'title' => 'Form Pengajuan Demo Saffmedic',
            'description' => 'Form Pengajuan Demo Saffmedic'
        ]);
    });
});

Route::prefix('form-request-demo')->name('form-request-demo')->group(function () {
    Route::get('/', function () {
        return view('form-request-demo', [
            'title' => 'Form Pengajuan Demo Saffmedic',
            'description' => 'Form Pengajuan Demo Saffmedic'
        ]);
    });
});

// Wp //
// Route::get('/artikel', [WpController::class, 'index']);
// Route::get('/artikel/{postName}', [WpController::class, 'show'])->name('blog.show');

Route::prefix('artikel')->name('artikel')->group(function () {
    Route::get('/', [WpController::class, 'index']);
    Route::get('{postName}', [WpController::class, 'show'])->name('.show');
});

// End Dropdowns Link //




// Route::get('/solusi', function () {
//     return view('solusi');
// });
