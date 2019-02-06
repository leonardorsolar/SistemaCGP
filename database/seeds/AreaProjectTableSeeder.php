<?php

use Illuminate\Database\Seeder;
use App\Entities\AreaProject;


class AreaProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AreaProject::class)->create(['name'=>'Administração']);
        factory(AreaProject::class)->create(['name'=>'Anatomia Veterinária']);
        factory(AreaProject::class)->create(['name'=>'Volume 1']);
        
    }
}
