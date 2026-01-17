<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hotels', [HomeController::class, 'hotels'])->name('hotels');
Route::get('/hotels/{id}', [HomeController::class, 'hotelDetails'])->name('hotel.details');
Route::post('/bookings', [HomeController::class, 'createBooking'])->name('bookings.create');

// Admin Authentication Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/hotels', [AdminController::class, 'hotels'])->name('admin.hotels');
Route::get('/admin/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');

Route::get('/welcome', function () {
    return view('welcome');
});