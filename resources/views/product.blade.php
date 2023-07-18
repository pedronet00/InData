@extends('layouts.main')

@section('title', 'Produto')


@if($id != null)
    <p>Exibindo produto id: {{$id}}</p>
@endif


@if($busca != " ")
    <p>Usuario procurando por: {{$busca}}</p>
@endif



@section('content')



@endsection