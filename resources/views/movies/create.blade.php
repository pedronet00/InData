@extends('layouts.main')

@section('title', 'Cadastrar Filme')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre um Filme:</h1>
    <form action="/movies" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Nome do Filme:</label>
            <input type="text" id="title" name="title" placeholder="Nome do Filme" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Duração (em min):</label>
            <input type="number" id="timelasting" name="timelasting" placeholder="Duração do Evento" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Sinopse:</label>
            <textarea id="synopsis" name="synopsis" placeholder="Sinopse do Filme" class="form-control"></textarea>
        </div>
        
        <input type="submit" value="Cadastrar Filme" class="btn btn-primary">
    </form>
    </div>

@endsection