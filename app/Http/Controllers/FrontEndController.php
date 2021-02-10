<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arts;
class FrontEndController extends Controller
{
    public function index(){
        $arts=Arts::orderBy('created_at','desc')->limit(6)->get();
        
         return view('home',compact([
            'arts',
        ]));
    }
}
