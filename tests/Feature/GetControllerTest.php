<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetControllerTest extends TestCase
{
   
     /** @test */
    public function testIndex()
    {
        $this->client->request('GET', 'posts');
    }

}
