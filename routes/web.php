<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');



Route::get('/stores', [Controllers\StoreController::class, 'index'])->name('stores.index');

Route::middleware('auth')->group(function () {
    Route::middleware('verified')->group(function () {
        Route::resource('stores', Controllers\StoreController::class)->except(['index', 'show']);
    });

    Route::middleware(['verified', 'is_admin'])->group(function () {
        Route::get('/admin/dashboard', [Controllers\Admin\DashboardController::class, 'index'])
            ->name('admin.dashboard');
        Route::get('/admin/users', [Controllers\Admin\DashboardController::class, 'users'])
            ->name('admin.users');
        Route::get('/admin/stores', [Controllers\Admin\DashboardController::class, 'stores'])
            ->name('admin.stores');
        Route::get('/admin/products', [Controllers\Admin\DashboardController::class, 'products'])
            ->name('admin.products');
    });

    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('products', Controllers\ProductController::class);


require __DIR__ . '/auth.php';
