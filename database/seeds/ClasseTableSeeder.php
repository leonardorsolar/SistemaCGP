<?php

use Illuminate\Database\Seeder;
use App\Entities\Classe;

class ClasseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Classe::class)->create(['name'=>'Aula boca']);
    }
}
