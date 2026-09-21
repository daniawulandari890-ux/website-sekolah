<?php

use App\Http\Controllers\GuruController;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KompetensiKeahlianController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Halaman Publik (bisa diakses siapa saja)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/kompetensi-keahlian', [KompetensiKeahlianController::class, 'index'])->name('kompetensi');
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler');
Route::get('/data-guru', [DataGuruController::class, 'index'])->name('guru.index');
Route::get('/data-siswa', [DataSiswaController::class, 'index'])->name('siswa');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

/*
|--------------------------------------------------------------------------
| Autentikasi (Login / Logout)
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Dashboard Admin (wajib login)
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\GuruAdminController;
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::prefix('dashboard/guru')->name('admin.guru.')->middleware('auth')->group(function () {
        Route::get('/', [GuruAdminController::class, 'index'])->name('index');
        Route::get('/tambah', [GuruAdminController::class, 'create'])->name('create');
        Route::post('/', [GuruAdminController::class, 'store'])->name('store');
        Route::get('/{guru}/edit', [GuruAdminController::class, 'edit'])->name('edit');
        Route::put('/{guru}', [GuruAdminController::class, 'update'])->name('update');
        Route::delete('/{guru}', [GuruAdminController::class, 'destroy'])->name('destroy');
    });
    use App\Http\Controllers\Admin\ProfilAdminController;

Route::prefix('dashboard/profil')->name('admin.profil.')->middleware('auth')->group(function () {
    Route::get('/', [ProfilAdminController::class, 'edit'])->name('edit');
    Route::put('/', [ProfilAdminController::class, 'update'])->name('update');
});
use App\Http\Controllers\Admin\BeritaAdminController;

Route::prefix('dashboard/berita')->name('admin.berita.')->middleware('auth')->group(function () {
    Route::get('/', [BeritaAdminController::class, 'index'])->name('index');
    Route::get('/tambah', [BeritaAdminController::class, 'create'])->name('create');
    Route::post('/', [BeritaAdminController::class, 'store'])->name('store');
    Route::get('/{berita}/edit', [BeritaAdminController::class, 'edit'])->name('edit');
    Route::put('/{berita}', [BeritaAdminController::class, 'update'])->name('update');
    Route::delete('/{berita}', [BeritaAdminController::class, 'destroy'])->name('destroy');
});
use App\Http\Controllers\Admin\EkstrakurikulerAdminController;

Route::prefix('dashboard/ekstrakurikuler')->name('admin.ekstrakurikuler.')->middleware('auth')->group(function () {
    Route::get('/', [EkstrakurikulerAdminController::class, 'index'])->name('index');
    Route::get('/tambah', [EkstrakurikulerAdminController::class, 'create'])->name('create');
    Route::post('/', [EkstrakurikulerAdminController::class, 'store'])->name('store');
    Route::get('/{ekstrakurikuler}/edit', [EkstrakurikulerAdminController::class, 'edit'])->name('edit');
    Route::put('/{ekstrakurikuler}', [EkstrakurikulerAdminController::class, 'update'])->name('update');
    Route::delete('/{ekstrakurikuler}', [EkstrakurikulerAdminController::class, 'destroy'])->name('destroy');
});
use App\Http\Controllers\Admin\KompetensiKeahlianAdminController;

Route::prefix('dashboard/kompetensi')->name('admin.kompetensi.')->middleware('auth')->group(function () {
    Route::get('/', [KompetensiKeahlianAdminController::class, 'index'])->name('index');
    Route::get('/tambah', [KompetensiKeahlianAdminController::class, 'create'])->name('create');
    Route::post('/', [KompetensiKeahlianAdminController::class, 'store'])->name('store');
    Route::get('/{kompetensi}/edit', [KompetensiKeahlianAdminController::class, 'edit'])->name('edit');
    Route::put('/{kompetensi}', [KompetensiKeahlianAdminController::class, 'update'])->name('update');
    Route::delete('/{kompetensi}', [KompetensiKeahlianAdminController::class, 'destroy'])->name('destroy');
});