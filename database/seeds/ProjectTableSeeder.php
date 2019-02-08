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
        
        factory(Project::class)->create(['name'=>'Aula 01 Sistema Nervoso dos Animais','area_projects_id'=>'1' ]);
        factory(Project::class)->create(['name'=>'Aula 02','area_projects_id'=>'2' ]);
    }
}
