<?php

use App\Entities\TypeProject;
use Illuminate\Database\Seeder;
class TypeProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TypeProject::class)->create(['name'=>'Lançamentos']);
        factory(TypeProject::class)->create(['name'=>'Veterinária']);
    }
}
