<?php

use Illuminate\Database\Seeder;
use App\Entities\Sector;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sector::class)->create(['name'=>'Cinegrafia']);
        factory(Sector::class)->create(['name'=>'Sonoplastia']);
        factory(Sector::class)->create(['name'=>'Computação Gráfica']);
        factory(Sector::class)->create(['name'=>'Edição']);
        factory(Sector::class)->create(['name'=>'Controle de Qualidade']);
        factory(Sector::class)->create(['name'=>'Autoração']);
        factory(Sector::class)->create(['name'=>'Entrega']);
    }
}
