<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DesignerController extends Controller
{
    //
    public function createUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => "string|required|min:5",
            'email' => "email|required|min:5",// email must be unique ??? 
        ]);
        if ($validator->fails()) {
            return [
                'success' => false,
                "message" => $validator->errors()->first()
            ];
        }


        if ($request->id != "-1")
            return $this->updateDesigner($request);
        else
            return $this->createDesigner($request);
    }

    public function delete(Request $request, Designer $designer)
    {
        // $designer->arts()->sync([]); must delete  arts of the  designer before delete this designer  
        $designer->delete();
        return [
            'success' => true,
            'message' => 'Dessinateur supprimé avec success.',
        ];
    }


    private function createDesigner(Request $request)
    {

        Designer::create($request->only('full_name', 'email'));
        return [
            'success' => true,
            "message" => "Dessinateur a été cree avec success."
        ];
    }

    private function updateDesigner(Request $request)
    {
        $designer = Designer::where('id', $request->id)->first();
        if (!$designer) {
            return [
                'success' => false,
                "message" => "Bad Request."
            ];
        }
        $designer->full_name = $request->full_name;
        $designer->email = $request->email;
        $designer->save();
        return [
            'success' => true,
            "message" => "Dessinateur mise a jour avec success."
        ];
    }
}
