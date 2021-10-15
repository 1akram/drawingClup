<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;





Route::prefix(('/auth'))->name('auth.')->group(__DIR__ . '/auth.php');   // routes authetification (login/logout)


Route::prefix(('/v1'))->middleware('auth')->name('api.')->group(__DIR__ . '/v1/api.php');    // routes api


Route::prefix(('/dashboard'))->middleware('auth')->name('dashboard.')->group(__DIR__ . '/dashboard.php');    // dashboard routes

Route::get('/ad-login', function () {
    return view('login');
})->middleware('guest')->name('login');




Route::get('/', [FrontEndController::class, 'index'])->name('index');


