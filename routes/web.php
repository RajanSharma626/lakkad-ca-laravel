<?php

use App\Http\Controllers\AboutPage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomePage;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePage::class, 'index']);
Route::get('/home', [HomePage::class, 'index']);

// ============ About Page ============
Route::get('/about', [AboutPage::class, 'index']);

// ============ Contact Page ============
Route::get('/contact-us', [ContactController::class, 'index']);

// ============ faq Page ============
Route::get('/faq', [FaqController::class, 'index']);

// ============ Terms & Condition Page ============
Route::get('/terms-and-conditions', function () {
    return view('terms');
});

// ============ Privacy Policy Page ============
Route::get('/privacy-policy', function () {
    return view('privacy');
});


// ============ Admin Routes ============
Route::withoutMiddleware([AuthMiddleware::class])->group(function () {
    Route::get('/admin/login', function () {
        return view('admin.login');
    })->name('login');

    Route::post('/login/auth', [AuthController::class, 'login'])->name('login.auth');

});


Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
});