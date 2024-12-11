<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [Controllers\Admin\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified', 'is_admin'])
    ->name('admin.dashboard');
Route::get('/admin/users', [Controllers\Admin\DashboardController::class, 'users'])
    ->middleware(['auth', 'verified', 'is_admin'])
    ->name('admin.users');
Route::get('/admin/stores', [Controllers\Admin\DashboardController::class, 'stores'])
    ->middleware(['auth', 'verified', 'is_admin'])
    ->name('admin.stores');
Route::get('/admin/products', [Controllers\Admin\DashboardController::class, 'products'])
    ->middleware(['auth', 'verified', 'is_admin'])
    ->name('admin.products');

Route::get('/stores', [Controllers\StoreController::class, 'index'])->name('stores.index');

Route::middleware('auth')->group(function () {
    Route::middleware('verified')->group(function () {
        Route::resource('stores', Controllers\StoreController::class)->except(['index', 'show']);
    });

    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('products', Controllers\ProductController::class);


require __DIR__ . '/auth.php';
