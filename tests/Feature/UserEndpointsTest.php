<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserEndpointsTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_index_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token')

        ];
        $payload = [];
        $this->json('GET', '/api/user/index', $payload, $headers)->assertStatus(200);
    }

    public function test_user_create_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token')

        ];
        $payload = [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'password_confirmation' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

        ];
        $this->json('POST', '/api/user/create', $payload, $headers)->assertStatus(201);
    }
}
