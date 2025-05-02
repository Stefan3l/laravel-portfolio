@extends('layouts.project')

@section('title', 'Edit Project')

@section('section-title')
    <h1 class="text-center py-5">Modifica il tuo progetto</h1>
    <hr>
@endsection

@section('content')

   <div class="container py-5">
    <div>
        <form class="py-5 shadow-lg px-3 rounded-3" method="POST" action="{{ route('projects.update', $project->id) }}">
            @csrf
            @method('PUT')


            <div class="d-fle flex-column gap-1 mb-3">
                <label for="name" class="form-label fw-bold">Nome Progetto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}" >
            </div>
            <div class="d-fle flex-column gap-1 mb-3">
                <label for="nome_cliente" class="form-label fw-bold">Nome Cliente</label>
                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" value="{{ $project->nome_cliente }}" >
            </div>
            <div class="d-fle flex-column gap-1 mb-3">
                <label for="periodo" class="form-label fw-bold">Nome Progetto</label>
                <input type="date" class="form-control" id="periodo" name="periodo" value="{{ $project->periodo }}" >
            </div>
            <div class="d-fle flex-column gap-1 mb-3">
                <label for="type_id" class="form-label fw-bold">Seleziona il type</label>
                <select class="form-select fw-bold text-uppercase" id="type_id" name="type_id">
                    @foreach ($types as $type)
                        <option class="fw-bold text-uppercase" value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>{{ $type->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex flex-wrap  mb-3"> 
                @foreach ($technologies as $technology)
                    <div class="form-check me-3 mb-2">
                        <input type="checkbox" class="form-check-input" id="{{ $technology->id }}" name="technologies[]" value="{{$technology->id}}" {{ $project->technologies->contains($technology) ? 'checked' : '' }}>
                        <label class="form-check-label fw-bold text-uppercase" for="{{$technology->id}}">{{ $technology->nome }}</label>
                    </div>
                @endforeach
            </div>
            <div class="d-fle flex-column gap-1 mb-3">
                <label for="riasunto" class="form-label fw-bold">Nome Progetto</label>
                <textarea type="text" class="form-control" id="riasunto" name="riasunto">{{ $project->riasunto }}</textarea>
            </div>
            <div class="mt-4 d-flex justify-content-center">
                <input type="submit" class="btn btn-outline-warning shadow-lg fw-bold" value="Modifica Progetto">
            </div>
        </form>
    </div>
   </div>


@endsection