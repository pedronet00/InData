@extends('layouts.general')

@section('title', 'Registre-se')

@section('content')

<form action="/user/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Nome</label>
            <input type="text" id="name" name="name" placeholder="" class="form-control">

            <label for="title">Cidade</label>
            <input type="text" id="city" name="city" placeholder="" class="form-control">

            <label for="title">Email</label>
            <input type="email" id="email" name="email" placeholder="" class="form-control">

            <label for="title">Senha</label>
            <input type="password" id="password" name="password" placeholder="" class="form-control">
        </div>
        
        
        <input type="submit" value="Registrar" class="btn btn-primary">
    </form>

@endsection