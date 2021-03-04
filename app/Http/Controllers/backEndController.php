<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Arts;
use App\Models\Designer;
 

class backEndController extends Controller
{
   public function index(){
       $arts=Arts::paginate(Arts::$ARTS_IN_BACKEND_PAGINATION)->fragment('arts');
       $designers=Designer::all();
       return view('backEnd.home',compact([
           'arts',
           'designers',
       ]));
   }
}
