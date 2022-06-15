<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\InfoPentingController;
use App\Http\Controllers\KritikSaranController;

use App\Http\Controllers\Client\PageController;

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

// Client Route
Route::namespace('Client')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('client.home');
    Route::get('/profile', [PageController::class, 'profile'])->name('client.profile');
});

// Admin Routes
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('admin/kegiatan', KegiatanController::class)->middleware('is_admin');
Route::resource('admin/infoPenting', InfoPentingController::class)->middleware('is_admin');
Route::resource('admin/kritikSaran', KritikSaranController::class)->middleware('is_admin');
