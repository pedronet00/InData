@extends('layouts.main')

@section('title', 'Filmes | Listar')

@section('content')
<h1>Listando filmes</h1>
@foreach($movies as $movie)
    <p>{{ $movie -> title }} -- {{ $movie -> synopsis }}</p>
@endforeach
@endsection