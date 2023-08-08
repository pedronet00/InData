@extends('layouts.main')

@section('title', 'Cadastrar Projeto')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre um Projeto:</h1>
    <form action="/projects" method="POST" enctype="multipart/form-data">
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
            <label for="startDate">Data do início do projeto:</label>
            <input type="date" id="startDate" name="startDate" placeholder="Data de início do Projeto" class="form-control">
        </div>

        <div class="form-group">
            <label for="endDate">Data do fim do projeto:</label>
            <input type="date" id="endDate" name="endDate" placeholder="Data de finalização do Projeto" class="form-control">
        </div>

        <div class="form-group">
            <label for="title">Empresa:</label>
            <input type="text" id="companyProject" name="companyProject" placeholder="Para qual empresa é o projeto?" class="form-control"></input>
        </div>

        <div class="form-group">
            <label for="title">Capa do Projeto:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        
        <input type="submit" value="Cadastrar Projeto" class="btn btn-primary">
    </form>
    </div>

@endsection