<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }
    
    public function welcome(Request $request){
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        $nation = $request['nationlist'];
        return view('welcome')
            ->with('firstname', $firstname)
            ->with('lastname', $lastname)
            ->with('nation', $nation);
    }
}
