@extends('layouts.main')

@section('title', 'Cadastrar Filme')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre um Projeto:</h1>
    <form action="/projects" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Nome do Projeto:</label>
            <input type="text" id="projectName" name="projectName" placeholder="Nome do Projeto" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Descrição do Projeto:</label>
            <input type="text" id="projectDescription" name="projectDescription" placeholder="Descrição do Projeto" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Empresa:</label>
            <textarea id="companyProject" name="companyProject" placeholder="Para qual empresa é o projeto?" class="form-control"></textarea>
        </div>
        
        <input type="submit" value="Cadastrar Filme" class="btn btn-primary">
    </form>
    </div>

@endsection