<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|max:255',
            'password' => 'required'
        ];

        $this->validate($request,$rules);

        if(!auth()->attempt($request->only('email', 'password')))
            return Redirect::back()->withErrors(['form'=> 'Votre email ou mot de passe invalid.']);
        else 
            return Redirect::back();

    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
