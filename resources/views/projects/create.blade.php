@extends('layouts.project')

@section('title', 'Create Project')

@section('section-title')
    <h1 class="text-center py-5">Create a New Project</h1>
@endsection

@section('content')
    
<div class="container">
    <form class="mb-5 shadow-lg px-3 py-5 rounded-3" method="POST" action="{{ route('projects.store')}}">
        @csrf

        <div> 
            <label for="name" class="form-label">Nome Progetto</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div> 
            <label for="nome_cliente" class="form-label">Nome Cliente</label>
            <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" required>
        </div>
        <div> 
            <label for="periodo" class="form-label">Data Progetto</label>
            <input type="date" class="form-control" id="periodo" name="periodo" required>
        </div>
        <div> 
            <label for="riasunto" class="form-label">Riasunto del Progetto</label>
            <textarea type="text" class="form-control" id="riasunto" name="riasunto" required></textarea>
        </div>
        <div class="mt-4">
            <input type="submit" class="btn btn-success" value="Crea Progetto">
        </div>
    </form>
</div>


@endsection