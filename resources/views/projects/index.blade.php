@extends('layouts.project')    

@section('title', 'My Projects')

@section('section-title')
    <h1 class="text-center py-5">My Projects</h1>    
@endsection

@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nome Progetto</th>
                    <th scope="col">Nome Cliente</th>
                    <th scope="col">Periodo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->nome_cliente }}</td>
                        <td>{{ $project->periodo }}</td>
                        <td> 
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary fw-bold">Dettagli</a>
                        </td>
                        <td> 
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-outline-warning fw-bold">Modifica</a>
                        </td>
                        <td> 
                            <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-outline-danger fw-bold" value="Cancella">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('projects.create') }}" class="btn btn-success">Crea Nuovo Progetto</a>
        </div>
    </div>
</div>
@endsection