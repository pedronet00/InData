@extends('layouts.main')

@section('title', 'Cadastrar Anotação')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre uma Anotação:</h1>
    <form action="/notes" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" id="noteTitle" name="noteTitle" placeholder="Título da Anotação" class="form-control">
        </div>

        <div class="form-group">
            <label for="title">Texto:</label>
            <input type="text" id="noteText" name="noteText" placeholder="Texto da Anotação" class="form-control">
        </div>
        
        <input type="submit" value="Cadastrar Anotação" class="btn btn-primary">
    </form>
    </div>

@endsection