@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

        <h1>Princípios de Laravel</h1>

        @if(10 > 50)
            <p>A condição é true</p>
        @endif
        
        @if($nome == "Pedro")
            <p>O nome é Pedro</p>
            <p>Sua idade é {{$idade}}</p>
        @else
            <p>O nome não é Pedro</p>
            <p>Sua idade não é {{$idade}}</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == 2)
                <p>O $i é 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>Nome: {{$nome}}</p>
        @endforeach

@endsection

    
