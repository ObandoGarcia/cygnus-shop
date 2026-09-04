<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\PublicProductController;

//HomeController
Route::get('/', [HomeController::class, 'index'])->name('public.index');

//Auth
Route::get('/auth/login', [LoginController::class, 'create'])->name('login.index');
Route::post('/auth/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/auth/logout', [LoginController::class, 'destroy'])->name('login.destroy');

Route::get('/auth/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/auth/register', [RegisterController::class, 'store'])->name('register.store');

//Admin routes
Route::middleware(['auth', 'role:administrator'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::resource('addresses', AddressController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('brands', BrandController::class);
        Route::resource('products', ProductController::class);

       Route::resource(
            'products.images',
            ImageController::class
        );
    });


