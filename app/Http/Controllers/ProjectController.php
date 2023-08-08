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

    public function welcome()
    {
        $projects = Project::all();
        return view('welcome', compact('projects'));
    }

    public function store(Request $request){

        $projects = new Project;

        $projects->projectName = $request->projectName;
        $projects->startDate = $request->startDate;
        $projects->endDate = $request->endDate;
        $projects->projectDescription = $request->projectDescription;
        $projects->companyProject = $request->companyProject;

        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")) . ".". $extension;

            $requestImage->move(public_path('imgs/projects'), $imageName);

            $projects->image = $imageName;
        }

        $projects->save();
        

        return redirect('/')->with('msg', 'Projeto criado com sucesso!');

    }

    public function show($id){

        $project = Project::findOrFail($id);

        return view('projects.show', ['project' => $project]);
    }

    public function destroy($id){

        Project::findOrFail($id) -> delete();

        return redirect('/')->with('msg', 'Deletado com sucesso!');
    }
}

