<?php

namespace App\Http\Controllers;

use App\Entities\TypeProject;
use Illuminate\Http\Request;
use App\Entities\AreaProject;

class AreaProjectsController extends Controller
{
    public function create()
    {
        $typeProjects = TypeProject::all();
        return view('projects.createareaproject', compact(['typeProjects']));
    }

    //store() – Para salvar a categoria (inserir no banco de dados)
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'type_project_id' => 'required'
        ]);
        AreaProject::create($attributes);
    // redirect
    return redirect ('home'); 
    //return redirect($task->path());   
    }
}
