<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use App\Models\Arts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
        return view('dashboard.home');
    }

    
    public function designers(Request $request){
        $designers = Designer::getDesignersOrSearch($request);
        return view('dashboard.designers',[
            "designers"=>$designers
        ]);
    }

    public function singleDesigner(Request $request,Designer $designer){
        // dd($designer);
        return view('dashboard.designer',[
            "designer"=>$designer
        ]);
    }


}