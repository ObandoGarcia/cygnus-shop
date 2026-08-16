<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddressController;

//HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

//AddressController
Route::get('/address', [AddressController::class, 'index'])->name('address.index');


//CategoryController
