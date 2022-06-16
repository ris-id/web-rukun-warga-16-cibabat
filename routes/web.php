<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\InfoPentingController;
use App\Http\Controllers\KritikSaranController;

use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\Client\PageKegiatanController;
use App\Http\Controllers\Client\PagePkkController;


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
    Route::get('/organisasi', [PageController::class, 'organisasi'])->name('client.organisasi');
    Route::get('/pelayanan', [PageController::class, 'layanan'])->name('client.layanan');

    // Kegiatan Page Routes
    Route::get('/kegiatan', [PageKegiatanController::class, 'index'])->name('client.kegiatan');
    Route::get('/kegiatan/{id}', [PageKegiatanController::class, 'show'])->name('client.kegiatan.show');

    //PKK Page Routes
    Route::get('/pkk', [PagePkkController::class, 'index'])->name('client.pkk');
    Route::get('/pkk/{id}', [PagePkkController::class, 'show'])->name('client.pkk.show');

});

// Admin Routes
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('admin/kegiatan', KegiatanController::class)->middleware('is_admin');
Route::resource('admin/infoPenting', InfoPentingController::class)->middleware('is_admin');
Route::resource('admin/kritikSaran', KritikSaranController::class)->middleware('is_admin');
