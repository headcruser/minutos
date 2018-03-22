<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserWelcomeTest extends TestCase
{
    /**
     * Check main Text Test.
     *
     * @return void
     */
    public function testWelcomeHome()
    {
         $this->get('/')
            ->assertStatus(200)
            ->assertSee('Vista principal');
    }

     /**
     * Search element List check
     *
     * @return void
     */
    public function testListItem()
    {
         $this->get('/')
            ->assertStatus(200)
            ->assertSee('Daniel');
    }
}
