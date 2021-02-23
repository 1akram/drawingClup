<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->name('login');
