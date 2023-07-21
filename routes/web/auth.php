<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginView'])->middleware('guest')->name('login');
Route::post('/auth/login', [AuthController::class, 'login'])->middleware('guest');
