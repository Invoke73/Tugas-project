<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;



Route::get('register', [AuthenticationController::class, 'registerForm'])->name('registerForm');
Route::get('login', [AuthenticationController::class, 'loginForm']);
Route::get('/', [LandingController::class, 'index']);
