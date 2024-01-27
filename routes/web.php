<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomController;


Route::get('/',[WelcomController::class,'index']);
Route::get('/login', [LoginController::class, 'index']);

