@extends('layouts.main')

@section('content')


<h1 style="text-align: center; width: 100%; margin-top: 5%;">Seus próximos projetos <span style="text-align: center; background-color: #343a40; color: white; padding: 1%;">desta semana:</span> </h1>

<div class="container" style="margin-top: 5%;">
    <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicadores do carrossel -->
        <ol class="carousel-indicators">
            @foreach($projects as $index => $project)
                <li data-bs-target="#projectCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>

        <!-- Slides do carrossel -->
        <div class="carousel-inner">
            @foreach($projects as $index => $project)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" style="margin: auto;height: 500px;">
                <img src="/imgs/projects/{{$project->image}}" style="width: 100%;" class="card-img-top" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $project->projectName }}</h5>
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Controles do carrossel -->
        <a class="carousel-control-prev" href="#projectCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#projectCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    
    
<iframe src="/notes/list" style="border-radius: 10px; width: 50%; height: 500px; text-align: center; margin-top: 5%;"></iframe>
</div>


        
@endsection