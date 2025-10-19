<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Home Page
Route::get('/', [PageController::class, 'index'])->name('home');

// About Page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Services Page
Route::get('/services', [PageController::class, 'services'])->name('services');

// Blog Page
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

// Contact Page
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Features Page
Route::get('/features', [PageController::class, 'features'])->name('features');

// Team Page
Route::get('/team', [PageController::class, 'team'])->name('team');

// FAQ Page
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

// 404 Page
Route::fallback(function () {
    return view('pages.404');
});