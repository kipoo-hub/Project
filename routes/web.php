<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TindakLanjutController;
use App\Http\Controllers\KategoriPengaduanController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/quote', [QuoteController::class, 'index'])->name('quote');


Route::resource('warga', WargaController::class);
Route::resource('kategori', KategoriPengaduanController::class);
Route::resource('pengaduan', PengaduanController::class);
Route::resource('tindak', TindakLanjutController::class);
Route::resource('penilaian', PenilaianLayananController::class);
