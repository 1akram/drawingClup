<?php


use App\Http\Controllers\DesignerController;
use App\Models\Desiner;
use Illuminate\Support\Facades\Route;



Route::post('/designer', [DesignerController::class, 'createUpdate'])->name('designer');

Route::delete('/designer/{desiner}', [DesignerController::class, 'delete'])->name('designer_remove');
