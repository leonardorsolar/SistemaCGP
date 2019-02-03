<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Project::class)->create(['name'=>'Aula 01']);
        factory(Project::class)->create(['name'=>'Curso 02']);
        
    }
}
