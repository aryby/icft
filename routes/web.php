<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CallForPapersController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PaperController as AdminPaperController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

// Placeholder controllers using single-action closures for simple static pages

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Existing pages
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/call-for-papers', [CallForPapersController::class, 'index'])->name('call-for-papers');
Route::view('/author-instructions', 'author-instructions')->name('author-instructions');
Route::view('/important-dates', 'important-dates')->name('important-dates');
Route::get('/committee', [CommitteeController::class, 'index'])->name('committee');
Route::get('/submission', [SubmissionController::class, 'index'])->name('submission');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::view('/program', 'program')->name('program'); // Static view for program page :::

// New navbar pages (placeholders for now)
Route::view('/committees', 'committees')->name('committees');
Route::view('/speakers', 'speakers')->name('speakers');
Route::view('/calls', 'calls')->name('calls');
Route::view('/registration', 'registration')->name('registration');
Route::view('/publication', 'publication')->name('publication');
Route::view('/dates-news', 'dates-news')->name('dates-news');
Route::view('/attendees', 'attendees')->name('attendees');
Route::view('/history', 'history')->name('history');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration');
Route::post('/registration', [App\Http\Controllers\RegistrationController::class, 'store'])->name('registration.store');

// Author Dashboard Routes (protected by authentication)
Route::prefix('author')->name('author.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AuthorDashboardController::class, 'index'])->name('dashboard');
    Route::get('/papers/create', [App\Http\Controllers\AuthorDashboardController::class, 'createPaper'])->name('papers.create');
    Route::get('/papers', [App\Http\Controllers\AuthorDashboardController::class, 'indexPapers'])->name('papers.index');
    Route::post('/papers', [App\Http\Controllers\AuthorDashboardController::class, 'storePaper'])->name('papers.store');
    Route::get('/papers/{paper}', [App\Http\Controllers\AuthorDashboardController::class, 'showPaper'])->name('papers.show');
});

// Admin Area (protected by authentication middleware)
Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');

    // Papers
    Route::get('/papers', [AdminPaperController::class, 'index'])->name('papers.index');
    Route::get('/papers/create', [AdminPaperController::class, 'create'])->name('papers.create');
    Route::post('/papers', [AdminPaperController::class, 'store'])->name('papers.store');
    Route::get('/papers/{paper}', [AdminPaperController::class, 'show'])->name('papers.show');
    Route::get('/papers/{paper}/edit', [AdminPaperController::class, 'edit'])->name('papers.edit');
    Route::put('/papers/{paper}', [AdminPaperController::class, 'update'])->name('papers.update');
    Route::delete('/papers/{paper}', [AdminPaperController::class, 'destroy'])->name('papers.destroy');

    // Users
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('users.create');
    Route::post('/users', [AdminUserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [AdminUserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [AdminUserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('users.destroy');

    // Registrations
    Route::get('/registrations', [App\Http\Controllers\Admin\RegistrationController::class, 'index'])->name('registrations.index');
    Route::get('/registrations/{registration}', [App\Http\Controllers\Admin\RegistrationController::class, 'show'])->name('registrations.show');
    Route::post('/registrations/{registration}/verify', [App\Http\Controllers\Admin\RegistrationController::class, 'verify'])->name('registrations.verify');

    // Reviews
    Route::post('/papers/{paper}/reviews', [App\Http\Controllers\Admin\ReviewController::class, 'store'])->name('reviews.store');
});
