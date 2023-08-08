@extends('layouts.main')

@section('title', 'Usuários | Listar')

@section('content')
<h1>Listando Usuários</h1>
@foreach($users as $user)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$user->name}}</h5>
            <p class="card-text">{{$user->email}}</p>
            <p class="card-text">{{$user->projectCompany}}</p>
            <p class="card-text">{{$user->city}}</p>
            <a href="/user/{{$user->id}}" class="btn btn-primary">Saiba Mais</a>
            <form action="/user/{{ $user->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </div>
    </div>
@endforeach

@endsection