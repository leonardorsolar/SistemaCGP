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
        factory(AreaProject::class)->create(['name'=>'Informatica']);
        factory(AreaProject::class)->create(['name'=>'Anatomia Veterinária']);
        factory(AreaProject::class)->create(['name'=>'Volume 2']);
        factory(AreaProject::class)->create(['name'=>'Caes e Gatos']);
    }
}
