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

//HomeController
Route::get('/', [HomeController::class, 'index'])->name('public.index');
Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

//AuthController
Route::get('/auth/login', [LoginController::class, 'login'])->name('login');
Route::get('/auth/register', [RegisterController::class, 'register'])->name('register');

//AddressController
Route::get('admin/addresses', [AddressController::class, 'index'])->name('addresses.index');

//CategoryController
Route::get('admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('admin/categories', [CategoryController::class, 'store'])->name('categories.store');

//BrandController
Route::get('admin/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('admin/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('admin/brands', [BrandController::class, 'store'])->name('brands.store');

//ProductController
Route::get('admin/products', [ProductController::class, 'index'])->name('products.index');
Route::get('admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('admin/products', [ProductController::class, 'store'])->name('products.store');

//ProductImages
Route::get('admin/products/{product}/images', [ImageController::class, 'index'])->name('products.images.index');
Route::get('admin/products/{product}/images/create', [ImageController::class, 'create'])->name('products.images.create');
Route::post('admin/products/{product}/images/store', [ImageController::class, 'store'])->name('products.images.store');
