<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use App\Models\Arts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard.home');
    }
    public function designers(){
        $designers = Designer::all();
        return view('dashboard.designers',[
            "designers"=>$designers
        ]);
    }

    public function arts(){ 
        $arts = Arts::all();
        $designers = Designer::all();
        return view('dashboard.arts',[
            'arts'=>$arts,
            "designers"=>$designers
        ]);
    }
}