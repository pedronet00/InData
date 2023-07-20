@extends('layouts.main')

@section('title', 'Projetos | Listar')

@section('content')
<h1>Listando Projetos</h1>
@foreach($projects as $project)
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$project->projectName}}</h5>
            <p class="card-text">{{$project->projectDescription}}</p>
            <p class="card-text">{{$project->projectCompany}}</p>
            <a href="#" class="btn btn-primary">Comprar agora</a>
        </div>
    </div>
@endforeach
@endsection