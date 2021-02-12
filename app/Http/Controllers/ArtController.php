<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Storage;

use App\Models\Arts;
class ArtController extends Controller
{
     
    public function uploadArts(Request $request){ // you should run  php artisan storage:link command before upload images
      
        $validate =Validator::make($request->all(),[
            'title'=>'Required|max:100|string',
            'description'=>'nullable|string',
            'arts'=>'required|array|min:1',// arts = array of images and min size of this array is 1 
            'arts.*'=>'mimes:jpeg,png|max:2050',//max size of each art 2mb=2048kb 
            'year'=>'required|integer|min:1900|max:3000',//it was should i check if year <= now.year but i was tired 
            'desiners'=>'required|array|min:1',
            'desiners.*'=>'required|exists:App\Models\Desiner,id',//the desiner should be exist in database 
        ])->validate();
        
         
        $uploadedArtsCount=0;
        foreach($request->file('arts')as $_art){
            if ($_art->isValid()) {
                $art=new Arts();
                $art->url = $_art->store('arts', 'public' );
                $art->title = $request->title;
                $art->year = $request->year;
                $art->description = $request->description;
                $art->save(); 
                $art->desiners()->sync($request->desiners);
                $uploadedArtsCount++;
            }
            

        }
        dd($uploadedArtsCount);
        return redirect()->route('backEndIndex')->with('statusMsg',$uploadedArtsCount.' arts uploaded successfully');




    }
}
