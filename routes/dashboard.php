<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

Route::get('/', [DashboardController::class, 'index'])->name('dash_home');
Route::get('/designers', [DashboardController::class, 'designers'])->name('designers');// for search by name or email just add '?search=XXX' to url
Route::get('/arts', [DashboardController::class, 'arts'])->name('arts');//// for search by title  or year just add '?search=XXX' to url




