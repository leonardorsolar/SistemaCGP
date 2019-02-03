<?php

namespace Tests\Feature;

use Facades\Tests\Setup\ProjectFactory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{

    use WithFaker, RefreshDatabase;
    
    /** @test */
    public function a_user_can_create_a_project()
    {

        //$this->withoutExceptionHandling();

    $attributes = [
            'name' => $this->faker->sentence
        ];

        
        // verifica a rota do envio da requisição  
        $this->post('/projects',$attributes)->assertRedirect('/projects'); 

       // Verifica no banco se os atributos foram criado na tabela projets
       $this->assertDatabaseHas('projects',$attributes);

       // recupera = verifica se recebe a requisição do banco
       $this->get('/projects')->assertSee($attributes['name']);
    }

       
         /** @test */
         public function a_project_require_a_name() 
         {
             
      
             $this->post('/projects', [])->assertSessionHasErrors('name');
         }  
       


}
