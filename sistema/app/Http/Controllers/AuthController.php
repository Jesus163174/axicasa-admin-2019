<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function formLogin(){
        return view('auth.login');
    }
    public function login(Request $request){
        $credenciales = $request->only(['email','password']);
        if(Auth::attempt($credenciales)){
            return redirect('/inmuebles');
        }
        return redirect('/')->withErrors(['email'=>trans('auth.failed')])->withInputs(request('email'));
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
