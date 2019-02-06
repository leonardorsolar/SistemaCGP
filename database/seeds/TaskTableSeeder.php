<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Project;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Task::class)->create(['project_id'=>'1','body'=>'Fazer a minha primeira tarefa']);
        factory(Task::class)->create(['project_id'=>'2','body'=>'Fazer a minha segunda tarefa']);
     
    }
}
