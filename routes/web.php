<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\LogoutController;


Route::get('/', [WelcomController::class, 'index'])->name('home');
Route::get('/produk', [WelcomController::class, 'produk'])->name('produk');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('registrasi', [RegisController::class, 'index'])->name('regis');
Route::post('registrasi', [RegisController::class, 'store'])->name('regis.store');

// routing product
Route::get('/product', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.delete');

Route::resource('keranjang', ProductController::class);

