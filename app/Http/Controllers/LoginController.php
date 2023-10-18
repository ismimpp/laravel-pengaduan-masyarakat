<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index(){
        return view("Login");
    }
    function login(Request $request){
        $dataLogin = $request->only("username","password"); //ambil data
        if(Auth::attempt($dataLogin)){
            return redirect ("/home");
        } else {
            return redirect ("/login");
        }
    }

    function logout(){
        Auth::logout();

        return redirect('/logout');
    }
}
