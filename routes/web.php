<?php

use Illuminate\Support\Facades\Route;

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
    return view('beranda');
})->name('home');

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
