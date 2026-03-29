<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('client')->group(function () {
    Route::get('/conferences', [ClientController::class, 'index']);
    Route::get('/conferences/{id}', [ClientController::class, 'show']);
});

Route::prefix('employee')->group(function () {
    Route::get('/conferences', [EmployeeController::class, 'index']);
    Route::get('/conferences/{id}', [EmployeeController::class, 'show']);
});

Route::prefix('admin')->group(function () {
    Route::get('/', [ConferenceController::class, 'adminIndex']);

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}/edit', [UserController::class, 'edit']);
    Route::post('/users/{id}', [UserController::class, 'update']);

    Route::get('/conferences', [ConferenceController::class, 'index']);
    Route::get('/conferences/create', [ConferenceController::class, 'create']);
    Route::post('/conferences', [ConferenceController::class, 'store']);
    Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit']);
    Route::post('/conferences/{id}', [ConferenceController::class, 'update']);
    Route::post('/conferences/{id}/delete', [ConferenceController::class, 'destroy']);
});