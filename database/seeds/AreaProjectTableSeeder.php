<?php

use Illuminate\Database\Seeder;
use App\Entities\AreaProject;
use App\Entities\TypeProject;



class AreaProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $um  = factory(TypeProject::class)->create(['name'=>'Lançamentos']);
        factory(AreaProject::class)->create(['name'=>'Administração', 'type_project_id'=> $um]);
        factory(AreaProject::class)->create(['name'=>'Teste', 'type_project_id'=>$um]);
        
        factory(AreaProject::class)->create([
            'name'=>'Anatomia Veterinária',
            'type_project_id'=>factory(TypeProject::class)->create(['name'=>'Veterinária'])
            ]);
        factory(AreaProject::class)->create([
            'name'=>'Volume 1',
            'type_project_id' => factory(TypeProject::class)->create(['name'=>'Professor Eventual'])
            ]);
    }
}
