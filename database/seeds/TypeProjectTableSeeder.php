<?php


use Illuminate\Database\Seeder;
use App\Entities\TypeProject;


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
        factory(TypeProject::class)->create(['name'=>'Professor Eventual']);
        factory(TypeProject::class)->create(['name'=>'Disciplina']);
        factory(TypeProject::class)->create(['name'=>'Projeto Eventuais']);
    }
}
