<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Facades\Tests\Setup\ProjectFactory;
use App\Entities\Sector;

class ViewTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    /** @test */
    public function testView()
    {

        $this->withoutExceptionHandling();
        //$sectories = factory('App\Entities\Sector')->create();

        $this->get('/')->assertStatus(200);
        $this->get('/')->assertViewHas('Cinegrafia');

    
    }


}
