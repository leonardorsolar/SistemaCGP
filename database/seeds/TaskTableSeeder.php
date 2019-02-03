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
        
        factory(Task::class)->create(['project_id'=>'1','body'=>'fazer a aula 01']);
        factory(Task::class)->create(['project_id'=>'2','body'=>'fazer a aula 02']);
     
    }
}
