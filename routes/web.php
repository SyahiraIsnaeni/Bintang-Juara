<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('/detail-pengumuman/{slug}', [\App\Http\Controllers\IndexController::class, 'show'])->name('detail-pengumuman');
Route::get('/detail-artikel', [\App\Http\Controllers\IndexController::class, 'index'])->name('detail-artikel');
Route::get('/detail-kegiatan', [\App\Http\Controllers\IndexController::class, 'index'])->name('detail-kegiatan');
Route::get('/detail-berita', [\App\Http\Controllers\IndexController::class, 'index'])->name('detail-berita');
//Route::resource('detail-pengumuman', \App\Http\Controllers\IndexController::class);

