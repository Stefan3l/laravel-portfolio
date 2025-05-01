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
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->nome_cliente }}</td>
                        <td>{{ $project->periodo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection