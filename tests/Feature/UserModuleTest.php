<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * Test User Case.
     *
     * @test
     */
    function testsUserRoute()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }
    /**
     * Create new Usaer
     *
     * @test
     */
    function it_creates_a_new_user()
    {
        $this->post('/usuarios/new',[
            'name' => 'Fernanda',
            'email' => 'prueba@gmail.com',
            'password'=> '123456'
        ])->assertSee('procesando información');
    }
}
