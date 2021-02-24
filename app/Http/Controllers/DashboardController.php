<?php

namespace App\Http\Controllers;

use App\Models\Desiner;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard.home');
    }
    public function designers(){
        $designers = Desiner::all();
        return view('dashboard.designers',[
            "designers"=>$designers
        ]);
    }


}
