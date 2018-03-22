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
            ->assertSee('Listar usuarios');
    }

     /**
     * Test User Case.
     *
     * @test
     */
    function testsEditUserRoute()
    {
        $this->get('/usuarios/update/1')
            ->assertStatus(200)
            ->assertSee('Editar usuario');
    }
}
