<?php

namespace Tests\Feature\Api;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_register_user()
    {
        $userData = [
            'name' => 'Test Register User',
            'email' => 'test@user.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $response = $this->json('POST', '/api/register', $userData);

        $response->assertStatus(201)
            ->assertJson([
                'status' => 'success',
                'message' => 'Registration successful! You can now log in.',
                'user' => [
                    'name' => $userData['name'],
                    'email' => $userData['email'],
                ],
            ]);

        $this->assertDatabaseHas('users', [
            'email' => $userData['email'],
        ]);
    }
}
