@extends('layouts.main')

@section('title', 'Projetos | Listar')

@section('content')
<h1 style="text-align: center; width: 100%; font-size: 50px; margin-top: 2%;">Listando Projetos</h1>

@foreach($projects as $project)
    <div class="card" style="width: 30%; margin-top: 5%; margin-left: 2%;">
        <img src="/imgs/projects/{{$project->image}}" style="width: 100%; height: 300px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$project->projectName}}</h5>
            <p class="card-text">{{$project->projectDescription}}</p>
            <p class="card-text">{{$project->projectCompany}}</p>
            <p class="card-text">{{$project->startDate}}</p>
            <div class="acoes" style="display: flex;">
                <a href="/projects/{{$project->id}}" class="btn btn-primary" style="background-color: #343a40; color: white; border: none;">Saiba Mais</a>
                <form action="/projects/{{ $project->id}}" method="POST" style="width: 100%;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary" style="background-color: red; color: white;  border: none; margin-left: 70%;"><i class="fa-solid fa-trash" style="margin-right: 10%;"></i>Deletar</button>
                </form>
            </div>
        </div>
    </div>
@endforeach

@if(count($projects) == 0)
    <p>Não há projetos cadastrados!</p>
@endif
@endsection