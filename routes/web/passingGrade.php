<?php

use App\Http\Controllers\PassingGradeController;
use App\Http\Controllers\SinglePageController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware'    => 'auth',
    'prefix'        => 'passing-grade'
], function () {
    Route::get('/', [PassingGradeController::class, 'index']);
    Route::get('/{id}', [PassingGradeController::class, 'show']);
    Route::post('/', [PassingGradeController::class, 'store']);
    Route::post('/{id}', [PassingGradeController::class, 'update']);
    Route::delete('/{id}', [PassingGradeController::class, 'destroy']);
});
