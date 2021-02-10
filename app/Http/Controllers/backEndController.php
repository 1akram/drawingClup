<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Arts;
use App\Models\Desiner;
 

class backEndController extends Controller
{
   public function index(){
       $arts=Arts::all();
       $desiners=Desiner::all();
       return view('backEnd.home',compact([
           'arts',
           'desiners',
       ]));
   }
}
