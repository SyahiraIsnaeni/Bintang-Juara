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
Route::get('/detail-pengumuman', [\App\Http\Controllers\IndexController::class, 'detailPengumuman']);
Route::get('/detail-artikel', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('/detail-kegiatan', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('/detail-berita', [\App\Http\Controllers\IndexController::class, 'index']);
