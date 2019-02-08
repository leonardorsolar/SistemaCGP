<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','decription','area_projects_id'];
//    protected $guarded = [];


    public function path()
    {
        return "/projects/{$this->id}";
    }

/**
     * The tasks associated with the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        // projeto vai procurar na tabela tarefas o campo projeto_id
        // quero chegar em todas as tarefas que pertence a esse projeto
        // está em projetos e quer chegar a varias tarefas 
        //hasMany usa-se no lado 1 (projetos)
        return $this->hasMany(Task::class);
    }

    /**
     * Add a task to the project.
     *
     * @param  string $body
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addTask($body)
    {
        return $this->tasks()->create(compact('body'));
    }

}
