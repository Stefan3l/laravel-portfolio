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
                            <button type="button" class="btn btn-outline-danger fw-bold" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $project->id }}">
                                Cancella
                            </button>

                            <!-- Modal per ogni progetto -->
                            <div class="modal fade" id="deleteModal-{{ $project->id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $project->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel-{{ $project->id }}">Conferma eliminazione</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Sei sicuro di voler eliminare il progetto "{{ $project->name }}"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                            <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger">Conferma eliminazione</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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