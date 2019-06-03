<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewTest extends TestCase
{
    /**
     * Test first page app name display
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertSee('Eventino');
    }
}
