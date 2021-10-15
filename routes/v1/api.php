<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UploadController;
use App\Models\Designer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


/* Upload API */
Route::post('/upload/painter', function (Request $request) {
    $res = UploadController::profileUpload($request);
    return Response($res);
});
/* Todo Upload ARt */



/* Designer API ROUTES */
Route::post('/designer/', function (Request $request) {
    $response = Designer::updateInfo($request);
    return Response($response);
});