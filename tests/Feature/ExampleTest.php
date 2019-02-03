<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        //$this->withoutExceptionHandling();
        //$sectories = factory('App\Entities\Sector')->create();

        //$this->get('/')->assertStatus(200);
        //$this->get('/')->assertViewHas('Cinegrafia');
    }

  
}
