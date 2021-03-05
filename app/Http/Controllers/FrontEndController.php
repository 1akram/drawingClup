<?php

namespace App\Http\Controllers;
 
 
use Illuminate\Http\Request;
use App\Models\Arts;
class FrontEndController extends Controller
{
    public function index(Request $request){
   
       if($request->filled("search")){
           $arts=Arts::where("title","LIKE",'%'.$request->search.'%')->paginate(Arts::$ARTS_IN_FRONTEND_PAGINATION)
                    ->withQueryString()->fragment('gallery') ; 
       }else{
           $arts=Arts::paginate(Arts::$ARTS_IN_FRONTEND_PAGINATION)->fragment('gallery') ; 
       }
        
        $randomArts=Arts::randomArts() ;
        
        return view('home',compact([
            'arts',
            'randomArts',
        ]));
    }
}
 





 
