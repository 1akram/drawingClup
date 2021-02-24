<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

Route::get('/', [DashboardController::class, 'index'])->name('dash_home');
Route::get('/designers', [DashboardController::class, 'designers'])->name('designers');



