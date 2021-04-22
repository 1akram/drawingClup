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
    public function designers(Request $request){
        if($request->filled("search")){
            $designers=Designer::where("full_name","LIKE",'%'.$request->search.'%')
            ->orWhere("email","LIKE",'%'.$request->search.'%')->get();
        }else{
            $designers = Designer::all();
        }
       
        return view('dashboard.designers',[
            "designers"=>$designers
        ]);
    }

    public function arts(Request $request){ 
        if($request->filled("search")){
            $arts=Arts::whereYear('year', $request->search)->orwhere("title","LIKE",'%'.$request->search.'%')->get();
        }else{
            $arts = Arts::all();
        }

        
        $designers = Designer::all();
        return view('dashboard.arts',[
            'arts'=>$arts,
            "designers"=>$designers
        ]);
    }
}