<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TindakLanjutController;
use App\Http\Controllers\PenilaianLayananController;
use App\Http\Controllers\KategoriPengaduanController;


// ============================
// PUBLIC
// ============================
Route::get('/', function () {
    return view('pages.home.home');
})->name('home'); // optional


// ============================
// AUTH (LOGIN & REGISTER)
// ============================
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('CekLogin');


// ============================
// PRIVATE (WAJIB LOGIN)
// ============================
Route::middleware(['CekLogin'])->group(function () {

    // Dashboard
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // CRUD
    Route::resource('users', UserController::class);
    Route::resource('warga', WargaController::class);
    Route::resource('kategori', KategoriPengaduanController::class);
    Route::resource('pengaduan', PengaduanController::class);
    Route::resource('tindak', TindakLanjutController::class);
    Route::resource('penilaian', PenilaianLayananController::class);

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // About Page
    Route::view('/about', 'pages.about.index')->name('about');
});
