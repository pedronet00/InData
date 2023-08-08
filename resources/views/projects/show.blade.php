@extends('layouts.main')

@section('title', $project->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div class="col-md-6" id="image-container">
                <img src="/imgs/projects/{{ $project->image}}" class="img-fluid" alt="{{$project->title}}"/>
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$project->projectName}}</h1>
            </div>
        </div>
    </div>

@endsection