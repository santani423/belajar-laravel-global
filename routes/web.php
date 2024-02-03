<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomController;
use App\Http\Controllers\ProductController;


Route::get('/', [WelcomController::class, 'index'])->name('home');
Route::get('/produk', [WelcomController::class, 'produk'])->name('produk');
Route::get('/login', [LoginController::class, 'index']);

// routing product
Route::get('/product', [ProductController::class, 'create'])->name('product.create');

