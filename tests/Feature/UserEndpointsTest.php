<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserEndpointsTest extends TestCase
{
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
}
