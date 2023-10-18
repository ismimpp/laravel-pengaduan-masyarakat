<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Faceades\DB;
use Illuminate\Support\Faceades\Hash;

class AuthController extends Controller
{
    Function registrasi(){
        Return view('registrasi');
    }

    function store(Request $request){
        var_dump($request->all());
        //Masukan Data

        $data = DB::table("masyarakat")->insert([
            'nik' => $request->nik,
            'Nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'telp' => $request->telp

        ]);
    }
}
