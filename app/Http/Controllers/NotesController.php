<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    
    public function index(){

        $notes = Note::all();

        return view('notes.list', compact('notes'));
    }

    public function create(){

        return view('notes.create');
    }

    public function store(Request $request){

        $note = new Note;

        $note->noteTitle = $request->noteTitle;
        $note->noteText = $request->noteText;

        $note->save();
        

        return redirect('/')->with('msg', 'Nota cadastrada com sucesso!');
    }
}
