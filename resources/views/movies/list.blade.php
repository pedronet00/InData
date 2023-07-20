@extends('layouts.main')

@section('title', 'Filmes | Listar')

@section('content')
<h1>Listando filmes</h1>
@foreach($movies as $movie)
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <p class="card-text">{{$movie->synopsis}}</p>
            <a href="#" class="btn btn-primary">Comprar agora</a>
        </div>
    </div>
@endforeach
@endsection