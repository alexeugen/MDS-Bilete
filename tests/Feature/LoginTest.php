<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * Logged in users can see their name
     *
     * @return void
     */
    public function testUserLogin()
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'ouuhn@example.com',
            'type' => 'manager',
            'password' => Hash::make('secret'),
        ]);
            
        $response = $this->actingAs($user)->get('/');

        $response->assertSee($user['name']);
    }
}
