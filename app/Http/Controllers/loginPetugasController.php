<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginPetugasController extends Controller
{
    public function index(){
        
        return view('login_petugas');
    }

    public function login_petugas(Request $request){

        $data = $request->only('username','password');
       if(Auth::guard("petugas")->attempt($data)){
        echo "berhasil login";
       }else{
        echo redirect("/petugas/login_petugas")->with("error","username atau password salah");
       }
    }

    function logout(){
        Auth::guard("petugas")->logout();
        return redirect("/petugas/login_petugas");
    }

    public function home_petugas(){
        return view('home_petugas');
    }
}
