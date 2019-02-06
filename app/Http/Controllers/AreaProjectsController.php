<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\AreaProject;

class AreaProjectsController extends Controller
{
    public function create()
    {

        return view('projects.createareaproject');

    }

    //store() – Para salvar a categoria (inserir no banco de dados)
    public function store()
    {
        
        $attributes = request()->validate(['name' => 'required']);

        $typeproject=AreaProject::create($attributes);
    // redirect
    return redirect ('home'); 
    //return redirect($task->path());   
    }
}
