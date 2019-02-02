<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

      /** @test */
      public function test_user_DatabaseTest()
      {
          $this->assertDatabaseHas('users', [
              'email' => 'julianabsf@gmail.com'
          ]);   
      
      }

      /** @test */
      public function test_sector_DatabaseTest()
      {
          $this->assertDatabaseHas('sectors', [
            'name'=>'Cinegrafia'
          ]);  

          $atributos = factory('App\Entities\Sector')->create();
          

          $this->get('/home')->assertViewHas($atributos);
          
      }

         
     
        

}
