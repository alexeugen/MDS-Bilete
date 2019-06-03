<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use WithFaker;
    /**
     * Test events in database
     *
     * @return void
     */
    public function testEventInDatabase()
    {
        $this->assertDatabaseHas('events', [
            'title' => 'Ut laboris recusanda'
        ]);
    }
}
