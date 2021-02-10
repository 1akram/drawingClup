<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arts;
class FrontEndController extends Controller
{
    public function index(){
        $arts=Arts::orderBy('created_at','desc')->limit(6)->get();
        
         return view('home',compact([
            'arts',
        ]));
    }
}
/*







    public function uploadIMG(Request $request,$hotelId,$id){
         if ($request->hasFile('imgs')) {
                
            $validate=Validator::make($request->all(), [
                'imgs.*' => 'mimes:jpeg,png|max:2050',
                ])->validate();
                $room=Room::find($id);
                foreach($request->file('imgs')as $img){
                    if ($img->isValid()) {
                        $url=  $img->store('images', 'public' );
                        $img= new Img();
                        $img->url=$url;
                        $room->imgs()->save($img);
                     }
                }
                return redirect()->route('showRoom',['hotel_id'=>$hotelId,'id'=>$id])->with('statusMsg','images uploaded successfully');
        }
        return redirect()->route('showRoom',['hotel_id'=>$hotelId,'id'=>$id])->with('statusMsg','could not upload images') ->with('statusError','error');
 
    }

    public function deleteIMG(Request $request,$hotelId,$roomId,$id){
        $room=Room::find($roomId);
        $img=$room->imgs->find($id);
         
        if(!empty($img))
        {

           if( Storage::disk('public')->delete($img->url) ){
               $img->delete();
               return redirect()->route('showRoom',['hotel_id'=>$hotelId,'id'=> $roomId])->with('statusMsg','image deleted successfully') ;
           }
            
        }
        return redirect()->route('showRoom',['hotel_id'=>$hotelId,'id'=>$roomId])->with('statusMsg','could not delete image ') ->with('statusError','error');

    }








*/