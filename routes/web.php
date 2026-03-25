<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('client')->group(function () {
    Route::get('/conferences', [ClientController::class, 'index']);
    Route::get('/conferences/{id}', [ClientController::class, 'show']);
});