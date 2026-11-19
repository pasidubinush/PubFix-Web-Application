<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Booking\BookingController;
use App\Http\Controllers\Handyman\HandymanController;
use App\Http\Controllers\Review\ReviewController;
use App\Http\Controllers\User\CustomerProfileController;
use App\Http\Controllers\Worker\WorkerController;
use Illuminate\Support\Facades\Route;

// ─── Public pages ────────────────────────────────────────────────────────────

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/find-handyman', [HandymanController::class, 'index'])->name('handymen.index');

// ─── Worker workspace preview pages ─────────────────────────────────────────

Route::prefix('worker')->name('worker.')->middleware(['auth', 'role:handyman'])->group(function () {
    Route::get('/', [WorkerController::class, 'dashboard'])->name('dashboard');
    Route::get('/bookings', [WorkerController::class, 'bookings'])->name('bookings');
    Route::get('/bookings/{booking}', [WorkerController::class, 'showBooking'])->defaults('action', 'viewAsWorker')->name('bookings.show');
    Route::post('/bookings/{booking}/accept', [WorkerController::class, 'acceptBooking'])->defaults('action', 'accept')->name('bookings.accept');
    Route::post('/bookings/{booking}/decline', [WorkerController::class, 'declineBooking'])->defaults('action', 'decline')->name('bookings.decline');
    Route::post('/bookings/{booking}/complete', [WorkerController::class, 'completeBooking'])->defaults('action', 'complete')->name('bookings.complete');
    Route::get('/earnings', [WorkerController::class, 'earnings'])->name('earnings');
    Route::get('/profile', [WorkerController::class, 'profile'])->name('profile');
    Route::get('/schedule', [WorkerController::class, 'schedule'])->name('schedule');
    Route::get('/service-area', [WorkerController::class, 'serviceArea'])->name('service-area');
    Route::get('/settings', [WorkerController::class, 'settings'])->name('settings');
    Route::put('/profile', [WorkerController::class, 'updateProfile'])->name('profile.update');
});

Route::middleware('guest')->group(function () {
    Route::get('/worker/sign-in', [WorkerController::class, 'signInUp'])->name('worker.sign-in');
    Route::get('/worker/sign-up', [WorkerController::class, 'signInUp'])->name('worker.sign-up');
});

// ─── Google OAuth (accessible to guests, redirect to home if logged in) ────────
Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('auth.google.callback');

// ─── Guest-only auth pages (redirect home when already logged in) ─────────────

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::get('/customer-signin', [LoginController::class, 'create'])->name('customer.signin');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    Route::get('/customer-registration', [RegisterController::class, 'create'])->name('customer.registration');
    Route::post('/customer-registration', [RegisterController::class, 'store'])->name('customer.registration.submit');

    // Forgot & Reset Password
    Route::get('/forgot-password', [PasswordResetController::class, 'showForgotForm'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
    Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.update');
});

// ─── Authenticated customer routes ────────────────────────────────────────────

Route::middleware(['auth', 'role:customer'])->group(function () {
    // Customer profile & settings
    Route::get('/customer/profile', [CustomerProfileController::class, 'show'])->name('customer.profile');
    Route::put('/customer/profile', [CustomerProfileController::class, 'update'])->name('customer.profile.update');
    Route::put('/customer/profile/password', [CustomerProfileController::class, 'updatePassword'])->name('customer.profile.password');

    // Customer bookings
    Route::resource('bookings', BookingController::class)->only(['index', 'store', 'show']);
    Route::patch('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

    // Customer reviews
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});

// ─── Logout (any authenticated user) ─────────────────────────────────────────

Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');
