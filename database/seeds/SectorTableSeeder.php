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
    }
}
