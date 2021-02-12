<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Arts;
use App\Models\Desiner;
 

class backEndController extends Controller
{
   public function index(){
       $arts=Arts::paginate(Arts::$ARTS_IN_BACKEND_PAGINATION)->fragment('arts');
       $desiners=Desiner::all();
       return view('backEnd.home',compact([
           'arts',
           'desiners',
       ]));
   }
}
