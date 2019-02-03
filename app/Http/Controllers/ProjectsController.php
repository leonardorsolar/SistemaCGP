<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

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

}
