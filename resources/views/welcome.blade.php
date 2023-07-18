<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
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
    </body>
</html>
