<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\Entities\Sector;

class SectorsController extends Controller
{

    public function create()
    {

        return view('projects.createsector');

    }

    //store() – Para salvar a categoria (inserir no banco de dados)
    public function store()
    {

        
        $attributes = request()->validate(['name' => 'required']);

        $task= Sector::create($attributes);
    // redirect
    return redirect ('home'); 
    //return redirect($task->path());   
    }
}
