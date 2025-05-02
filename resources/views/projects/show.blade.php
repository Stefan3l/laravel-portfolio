@extends('layouts.project')

@section('section-title')
    <h1 class="text-center py-5">Project Details</h1>
@endsection



@section('content')
    <div class="container">
        <div class="pb-2 pt-5"> 
            <button class="btn btn-primary mb-3"><a href="{{ route('projects.index') }}" class="text-white text-decoration-none">Torna alla lista</a></button>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="mb-4 d-flex justify-content-between "> 
                    <div>
                        <h2 class="card-title text-primary mb-3">{{ $project->name }}</h2>
                        <div class="card-text">
                            <p class="mb-2"><i class="fas fa-user me-2"></i><strong>Nome Cliente:</strong> {{ $project->nome_cliente }}</p>
                            <p class="mb-3"><i class="fas fa-calendar me-2"></i><strong>Periodo:</strong> {{ $project->periodo }}</p>
                        </div>
                    </div>
                    <div class="text-center px-3"> 
                        <h2 class="card-title text-primary mb-3">Type</h2>
                        <p class="fw-bold fs-3">{{ $project->type->nome}}</p>
                    </div>
                </div>
                <div> 
                    
                        <div class="d-flex flex-wrap justify-content-center mt-3 mb-4"> 
                                @if($project->technologies->isEmpty())
                                    <div class="text-center ">
                                        <p class="text-danger fw-bold fs-4">Nessuna tecnologia selezionata</p>
                                    @else
                                        <p class="text-success fw-bold fs-5">Tecnologie selezionate:</p>
                                    </div>
                                @endif
                                <div class="d-flex flex-wrap justify-content-center">
                            @foreach ($project->technologies as $technology)
                                <span class="badge rounded-pill me-2 mb-2 fw-bold fs-6 " style="background-color: {{$technology->colore}}">{{ $technology->nome }}</span>
                            @endforeach
                                </div>
                        </div>
                </div>
                <div class="border-top pt-3">
                    <h3 class="h5 text-secondary mb-3">Descrizione</h3>
                    <p class="card-text fs-5">{{ $project->riasunto }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection