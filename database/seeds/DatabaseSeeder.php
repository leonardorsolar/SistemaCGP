<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // chamar a classe seeder
        
        $this->call(UsersTableSeeder::class);
        $this->call(SectorTableSeeder::class);
        $this->call(TypeProjectTableSeeder::class);
        $this->call(AreaProjectTableSeeder::class);
    }
}
