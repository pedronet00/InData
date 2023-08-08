<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function index(){

        $users = User::all();

        return view('user.list', compact('users'));
    }

    public function register(){

        return view('auth.register');
    }

    public function store(Request $request){

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        

        return redirect('/')->with('msg', 'Usuário cadastrado com sucesso!');
    }
}
