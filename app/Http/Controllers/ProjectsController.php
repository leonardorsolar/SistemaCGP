<?php

namespace App\Http\Controllers;

use App\Entities\AreaProject;
use App\Entities\TypeProject;
use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\Entities\Sector;

class ProjectsController extends Controller
{
    //

    //index() – Para listar as categorias
    public function index()
    {

    // recupero todos os projetos no banco
    $projects= Project::all();
    //para listar
    $type_projects = TypeProject::all();
    $sectories = Sector::all();

    //
    return view ('projects.index', compact('projects','type_projects','sectories'));

    }

    public function create()
    {
        $type_projects = TypeProject::all();
        return view('projects.create', compact('type_projects'));

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

        try{
            $attributes = request()->validate([
                'name' => 'required',
                'description' => 'required',
                'area_projects_id'=> 'required'
            ]);
            $project = Project::create($attributes);
            return redirect($project->path());
        }catch (\Exception $e){
            dd($e);
        }

    // redirect
    //return redirect ('projects'); 

        
    }

    public function status(Project $project)
    {
        //select sum(valor) from task group by cliente;

        $tarefas = Task::all();
        $total_tarefas = $tarefas->sum('id');

        //public function tasks() do model Project.php
        // hasMany relacao de 1 para muitos 
        $total= $project->tasks;
        

        return view ('projects.status', compact('project','total_tarefas','total'));
        //return redirect($project->path()); 

    }

}
