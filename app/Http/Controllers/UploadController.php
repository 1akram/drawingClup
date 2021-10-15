<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public static function profileUpload(Request $request){
        $validator  = Validator::make($request->all(),[
            'picture'=>'mimes:jpeg,png|max:2050',//max size of each art 2mb=2048kb 
        ]) ;
    
        if($validator->fails())
            return [400,""];

        $user_id = $request->header('user_id');
        
        $ext = $request->file(('picture'))->extension();
        $url = $request->file('picture')->storeAs('painters', $user_id.".".$ext,'public');
    
        Designer::updateAvatar($user_id,$url);

        return $url;        

    }
}
