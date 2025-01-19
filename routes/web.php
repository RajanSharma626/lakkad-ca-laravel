<?php

use App\Http\Controllers\AboutPage;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomePage;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Auth;
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

//=================== Project Finance ===================
Route::get('/project-finance', function () {
    return view('project-finance');
});


// ============ Admin Routes ============
Route::withoutMiddleware([AuthMiddleware::class])->group(function () {
    Route::get('/admin/login', function () {
        return view('admin.login');
    })->name('login');

    Route::post('/login/auth', [AuthController::class, 'login'])->name('login.auth');


});


Route::middleware([AuthMiddleware::class])->group(function () {

    Route::get('/logout', function () {
        Auth::logout();
        session()->invalidate(); // Clear all session data
        session()->regenerateToken(); // Prevent CSRF attacks
        return redirect('/admin/login');
    })->name('logout');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/testimonials', [AdminController::class, 'testimonial']);

    Route::get('/admin/add-testimonials', function () {
        return view('admin.add-testimonial');
    });

    Route::get('/admin/edit-testimonials/{id}', [AdminController::class, 'manageTestimonial']);
    // delete testimonial
    Route::get('/admin/testimonials/delete/{id}', [AdminController::class, 'deleteTestimonial'])->name('admin.testimonials.delete');

    Route::post('/admin/testimonials/update', [AdminController::class, 'addTestimonial'])->name('admin.testimonials.update');
    Route::post('/admin/testimonials/add', [AdminController::class, 'addTestimonial'])->name('admin.testimonials.store');

    // ========== FQA ==========
    Route::get('/admin/faqs', [AdminController::class, 'faq']);
    Route::get('/admin/add-faq', function () {
        return view('admin.add-faq');
    });
    Route::post('/admin/faq/add', [AdminController::class, 'addFaq'])->name('admin.faq.store');
    Route::get('/admin/faqs/delete/{id}', [AdminController::class, 'deleteFaq'])->name('admin.faq.delete');

});