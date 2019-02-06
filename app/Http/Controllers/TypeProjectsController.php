<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\Entities\TypeProject;

class TypeProjectsController extends Controller
{
    public function create()
    {

        return view('projects.createtypeproject');

    }

    //store() – Para salvar a categoria (inserir no banco de dados)
    public function store()
    {

        
        $attributes = request()->validate(['name' => 'required']);

        $typeproject=TypeProject::create($attributes);
    // redirect
    return redirect ('home'); 
    //return redirect($task->path());   
    }
}
