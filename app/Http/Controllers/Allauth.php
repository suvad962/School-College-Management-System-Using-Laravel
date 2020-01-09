<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Allauth extends Controller
{
    public function storesession(Request $request){
        $name = $request->input('username');
        $password = $request -> input('password');
        $checkbox = $request -> input('checkbox');
        //echo $name." ".$password. " ".$checkbox;
        if ($password == "admin"){
            return redirect('/admin');
        }
        else{
            return view('/login');
        }
    }
}
