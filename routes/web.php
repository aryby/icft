<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CallForPapersController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PaperController as AdminPaperController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Password Reset Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


// Placeholder controllers using single-action closures for simple static pages

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Existing pages
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/call-for-papers', [CallForPapersController::class, 'index'])->name('call-for-papers');
Route::get('/committee', [CommitteeController::class, 'index'])->name('committee');
Route::get('/submission', [SubmissionController::class, 'index'])->name('submission');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// New navbar pages (placeholders for now)
Route::view('/committees', 'committees')->name('committees');
Route::view('/speakers', 'speakers')->name('speakers');
Route::view('/calls', 'calls')->name('calls');
Route::view('/registration', 'registration')->name('registration');
Route::view('/publication', 'publication')->name('publication');
Route::view('/program', 'program')->name('program');
Route::view('/dates-news', 'dates-news')->name('dates-news');
Route::view('/attendees', 'attendees')->name('attendees');
Route::view('/history', 'history')->name('history');

// Admin Area (similar structure to ijimds)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');

    // Papers
    Route::get('/papers', [AdminPaperController::class, 'index'])->name('papers.index');
    Route::get('/papers/create', [AdminPaperController::class, 'create'])->name('papers.create');
    Route::post('/papers', [AdminPaperController::class, 'store'])->name('papers.store');
    Route::get('/papers/{id}', [AdminPaperController::class, 'show'])->name('papers.show');
    Route::get('/papers/{id}/edit', [AdminPaperController::class, 'edit'])->name('papers.edit');
    Route::put('/papers/{id}', [AdminPaperController::class, 'update'])->name('papers.update');
    Route::delete('/papers/{id}', [AdminPaperController::class, 'destroy'])->name('papers.destroy');

    // Users
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('users.create');
    Route::post('/users', [AdminUserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [AdminUserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [AdminUserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('users.destroy');
});
