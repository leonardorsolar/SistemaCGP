<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class ProjectsController extends Controller
{
    //

    //index() – Para listar as categorias
    public function index()
    {

    // recupero todos os projetos no banco
    $projects= Project::all();

    //
    return view ('projects.index', compact('projects'));

    }

    public function create()
    {

        return view('projects.create');

    }

    public function show(Project $project)
    {
    //$project = Project::find(request('project'));
    // $project = Project::findOrFail(request('project'));
    return view ('projects.show', compact('project'));
    }


    public function edit(Project $project)
    {
    
    return view ('projects.edit', compact('project'));
    }

    /**
     * Update the project.
     *
     * @param  Project $project
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Project $project)
    {
        //$this->authorize('update', $project);

        //$project->update($this->validateRequest());

        $attributes = request()->validate(['name' => 'required']);

        $project->update($attributes);

        return redirect($project->path());
    }


    //store() – Para salvar a categoria (inserir no banco de dados)
    public function store()
    {

        // insert no banco persist
    //Project::create(request(['name']));

    // função (método) validate  função validate() passando o array com todos os campos que eu vou validar. 
        //Se o atributo required (requerido) estiver presente, o campo deve conter um valor quando o formulário for enviado.
        $attributes = request()->validate(['name' => 'required']);

        $project= Project::create($attributes);
    // redirect
    //return redirect ('projects'); 
    return redirect($project->path()); 
        
    }

    public function status(Project $project)
    {
        //select sum(valor) from task group by cliente;

        $tarefas = Task::all();
        $total_tarefas = $tarefas->sum('id');

        //public function tasks() do model Project.php
        // hasMany relacao de 1 para muitos 
        $total= $project->tasks;
        

        return view ('projects.status', compact('project','tarefas','total'));
        //return redirect($project->path()); 

    }

}
