<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'guest'
], function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/auth/login', [AuthController::class, 'login']);
});

Route::group([
    'middleware'    => 'auth',
    'prefix'        => 'auth'
], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
});
