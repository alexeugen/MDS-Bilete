<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesTest extends TestCase
{
    /**
     * Page returns 200
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /**
     * Page returns 200
     *
     * @return void
     */
    public function testLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    /**
     * Page returns 200
     *
     * @return void
     */
    public function testRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}
