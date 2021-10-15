<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Designer extends Model
{
    protected $table = 'designer';
    protected $guarded = [];
    protected $fillable = [
        'full_name',
        'email'         
    ];

    use HasFactory;

    public function arts()
    {
        return $this->belongsToMany(Arts::class, 'arts_designer', 'designer_id', 'art_id');
    }


    public static function getDesignersOrSearch(Request $request){
        if($request->filled("search")){
            $designers = Designer::where("name","LIKE",'%'.$request->search.'%')
            ->orWhere("email","LIKE",'%'.$request->search.'%')->get();
        }else{
            $designers = Designer::all();
        }
        return $designers;       
    }


    public static function updateAvatar($user_id,$url){
        $designer = Designer::find($user_id);
        $designer->picture = $url;
        $designer->save();    
    }

    public static function updateInfo($request){
        $validator = Validator::make($request->only(['name','email','descreption']), [
            'name' => "string|required|min:5",
            'email' => "email|required|min:5",
            'descreption' => "string|required|min:5",
        ]);
        if ($validator->fails()) {
            return [
                'success' => false,
                "message" => $validator->errors()->first()
            ];
        }
        $user_id = $request->user_id;

        $designer = Designer::find($user_id);
        $designer->name = $request->name;
        $designer->email = $request->email;
        $designer->descreption = $request->descreption;
        $designer->save();    


        return [
            'success' => true,
            "message" => "Painter updated Successfully"
        ];
    }



}
