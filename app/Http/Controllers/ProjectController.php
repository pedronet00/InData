<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){

        $projects = Project::all();

        return view('projects.list', compact('projects'));
    }

    public function create(){

        return view('projects.create');
    }

    public function store(Request $request){

        $projects = new Project;

        $projects->projectName = $request->projectName;
        $projects->projectDescription = $request->projectDescription;
        $projects->companyProject = $request->companyProject;

        $projects->save();
        

        return redirect('/')->with('msg', 'Projeto criado com sucesso!');

    }
}

