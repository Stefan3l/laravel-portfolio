<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        

        return view ('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        //salvo i dati che arrivano dal form
        $data= $request->all();
        // dd($data);

        //creo un nuovo progetto
        $newProject = New Project();
        $newProject-> name = $data['name'];
        $newProject-> nome_cliente = $data['nome_cliente'];
        $newProject-> periodo = $data['periodo'];
        $newProject-> riasunto = $data['riasunto'];
        $newProject->save();

        // dd($newProject);

        return redirect()->route('projects.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //altri metodi per recuperare l'id
        // $project = Project::find($id);
        // $project = Project::where('id', $id)->first();


        return view ('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
