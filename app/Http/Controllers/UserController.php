<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function register(){

        return view('user.register');
    }

    public function store(Request $request){

        $user = new User;

        $user->name = $request->name;
        $user->city = $request->city;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        

        return redirect('/')->with('msg', 'Usuário cadastrado com sucesso!');
    }
}
