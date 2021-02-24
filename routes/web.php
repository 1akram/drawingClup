<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\backEndController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontEndController::class,'index'])->name('index');

Route::post('/arts/upload',[ArtController::class,'uploadArts'])->name('uploadArts');

Route::get('/admin/index',[backEndController::class,'index'])->name('backEndIndex');
