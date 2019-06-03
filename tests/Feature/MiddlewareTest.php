<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MiddlewareTest extends TestCase
{
    /**
     * Not admin users can't access dashboard
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'jnuuy@example.com',
            'type' => 'client',
            'password' => Hash::make('secret'),
        ]);
            
        $response = $this->actingAs($user)->get('/manager/dashboard');

        $response->assertRedirect('/');
    }
}
