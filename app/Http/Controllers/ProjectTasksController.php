<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class ProjectTasksController extends Controller
{
    //
    public function store(Project $project)
    {

        
        //$this->authorize('update', $project);

        request()->validate(['body' => 'required']);
        
        $project->addTask(request('body'));

        return redirect($project->path());
    }
}
