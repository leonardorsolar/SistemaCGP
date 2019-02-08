<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use Illuminate\Support\Facades\Auth;

class ProjectTasksController extends Controller
{
    //
    public function store(Project $project)
    {
        //$this->authorize('update', $project);

        // Recuperando o id do usuário logado em tarefas
        $id = Auth::user()->id;

        $attributes = request()->validate(['body' => 'required']);
        $attributes["user_id"] = $id;
        $project->addTask($attributes);

        return redirect($project->path());
    }

    public function update(Project $project, Task $task)
    {

        $task->update([
            'body' => request('body'),
            'completed' => request()->has('completed'),

        ]);

        return redirect($project->path());
    }


}
