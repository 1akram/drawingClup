<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Storage;

use App\Models\Arts;
class ArtController extends Controller
{
     
    public function uploadArts(Request $request){ // you should run  php artisan storage:link command before upload images

        $validator  =Validator::make($request->all(),[
            'title'=>'Required|max:100|string',
            'description'=>'nullable|string',
            'arts'=>'required|array|min:1',// arts = array of images and min size of this array is 1 
            'arts.*'=>'mimes:jpeg,png|max:2050',//max size of each art 2mb=2048kb 
            'year'=>'required|date',//it was should i check if year <= now.year but i was tired 
            'designer'=>'required|array|min:1',
            'designer.*'=>'required|exists:App\Models\Designer,id',//the Designer should be exist in database 
        ]) ;
        if ($validator->fails()) {
            return [
                'success' => false,
                "message" => $validator->errors()->first()
            ];
        }
        
         
        $uploadedArtsCount=0;
        foreach($request->file('arts')as $_art){
            if ($_art->isValid()) {
                $art=new Arts();
                $art->url = $_art->store('arts', 'public' );
                $art->title = $request->title;
                $art->year = $request->year;
                $art->description = $request->description;
                $art->save(); 
                $art->designer()->sync($request->designer);
                $uploadedArtsCount++;
            }
            

        }
       
        return [
            'success' => true,
            "message" => $uploadedArtsCount.' arts uploaded successfully'
        ];



    }

    public function updateArt(Request $request){  
      
        $validator  =Validator::make($request->all(),[
            'id'=>'required|exists:App\Models\Arts,id',
            'title'=>'Required|max:100|string',
            'description'=>'nullable|string',
            'year'=>'required|integer|min:1900|max:3000', 
            'designer'=>'required|array|min:1',
            'designer.*'=>'required|exists:App\Models\Designer,id', 
        ]) ;
        if ($validator->fails()) {
            return [
                'success' => false,
                "message" => $validator->errors()->first()
            ];
        }
        $art=Arts::find($request->id);
        $art->title=$request->title;
        $art->description=$request->description;
        $art->year=$request->year;
        $art->save();
        $art->designer()->sync([]);
        $art->designer()->sync($request->designer);
         
       
        return [
            'success' => true,
            "message" =>"art updated successfully"
        ];



    }

    public function delete(Request $request, Arts $art)
    {   
        $art->designer()->sync([]);
        Storage::disk("public")->delete($art->url);  
        $art->delete(); 
        return [
            'success' => true,
            'message' => 'art deleted successfully.',
        ];
    }
 

}