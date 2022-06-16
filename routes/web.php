<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\InfoPentingController;
use App\Http\Controllers\KritikSaranController;

use App\Http\Controllers\client\PageInfoPentingController;
use App\Http\Controllers\Client\OrganisasiController;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\Client\PageKegiatanController;

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



Auth::routes();

// Client Routes
Route::namespace('Client')->group(function () {
    // Main Page Routes
    Route::get('/', [PageController::class, 'index'])->name('client.home');
    Route::get('/profile', [PageController::class, 'profile'])->name('client.profile');

    // Organisasi Page Routes
    Route::get('/organisasi', [OrganisasiController::class, 'organisasi'])->name('client.organisasi');

    // Infromasi Penting Page Routes
    Route::get('/infopenting', [PageInfoPentingController::class, 'index'])->name('client.infopenting');
    Route::get('/infopenting/{id}', [PageInfoPentingController::class, 'show'])->name('client.infopenting.show');

    // Kegiatan Page Routes
    Route::get('/kegiatan', [PageKegiatanController::class, 'index'])->name('client.kegiatan');
    Route::get('/kegiatan/{id}', [PageKegiatanController::class, 'show'])->name('client.kegiatan.show');
});

// Admin Routes
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('admin/kegiatan', KegiatanController::class)->middleware('is_admin');
Route::resource('admin/infoPenting', InfoPentingController::class)->middleware('is_admin');
Route::resource('admin/kritikSaran', KritikSaranController::class)->middleware('is_admin');
