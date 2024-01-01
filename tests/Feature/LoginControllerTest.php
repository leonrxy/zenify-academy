<?php

namespace Tests\Feature\Api;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function test_login_user()
    {
        // Create a user for testing
        $user = User::factory()->create([
            'email' => 'test@user.com',
            'password' => bcrypt('password123'),
        ]);

        // Attempt to log in with valid credentials
        $loginData = [
            'email' => 'test@user.com', // Correct email
            'password' => 'password123',
        ];

        $response = $this->json('POST', '/api/login', $loginData);

        // Assert the response
        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'message' => 'Login success',
                'data' => [
                    'email' => $user->email,
                ],
            ]);

        // Assert the user is authenticated
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function test_login_invalid_user()
    {
        // Attempt to log in with invalid credentials
        $invalidLoginData = [
            'email' => 'invalid@user.com',
            'password' => 'wrongpassword',
        ];

        $response = $this->json('POST', '/api/login', $invalidLoginData);

        // Assert the response
        $response->assertStatus(401)
            ->assertJson([
                'success' => false,
                'message' => 'Email dan Password Salah!',
                'data' => null,
            ]);

        // Assert the user is not authenticated
        $this->assertGuest();
    }

    /** @test */
    public function test_login_admin()
    {
        // Create a user for testing
        $user = User::factory()->create([
            'email' => 'test@admin.com',
            'password' => bcrypt('password123'),
            'type' => '0',
        ]);

        // Attempt to log in with valid credentials
        $loginData = [
            'email' => 'test@admin.com', // Correct email
            'password' => 'password123',
        ];

        $response = $this->json('POST', '/api/login', $loginData);

        // Assert the response
        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'message' => 'Login success',
                'data' => [
                    'email' => $user->email,
                    'type' => 'admin',
                ],
            ]);

        // Assert the user is authenticated
        $this->assertAuthenticatedAs($user);
    }
}
