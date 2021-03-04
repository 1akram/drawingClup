<?php


use App\Http\Controllers\DesignerController;
use App\Models\Designer;
use App\Models\Arts;
use Illuminate\Support\Facades\Route;



Route::post('/designer', [DesignerController::class, 'createUpdate'])->name('designer');

Route::delete('/designer/{designer}', [DesignerController::class, 'delete'])->name('designer_remove');



Route::post('/art', [ArtController::class, 'uploadArts'])->name('art');/*
        request should include 
            title,
            description ,
            arts[], 
            year,
            designers[],  // designers ids  */

Route::post('/art/update', [ArtController::class, 'updateArt'])->name('art_update'); 
/*      same form of uploadArts  just hide arts input , add id input  and change the route 


        request should include 
            id,
            title,
            description ,
            year,
            designers[],  // designers ids  */

Route::delete('/art/{art}', [ArtController::class, 'delete'])->name('art_remove');
 

 