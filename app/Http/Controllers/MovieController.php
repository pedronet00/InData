<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('movies.list', compact('movies'));
    }

    public function create(){

        return view('movies.create');
    }

    public function store(Request $request){

        $movie = new Movie;

        $movie->title = $request->title;
        $movie->timelasting = $request->timelasting;
        $movie->synopsis = $request->synopsis;

        $movie->save();
        

        return redirect('/')->with('msg', 'Filme cadastrado com sucesso!');

    }
}
