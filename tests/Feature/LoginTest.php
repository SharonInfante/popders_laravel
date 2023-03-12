<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_sample_login_form()
    {
        $response = $this->get('login');

        $response->assertStatus(200);

        $response->assertViewIs('login');
    }

    public function test_authenticated_to_a_user()
    {
        $user = User::firstOrCreate([
            "name" => "name",
            "email" => "user@gmail.com",
            "password" => bcrypt("123456789")
        ]);

        $this->get('login')->assertSee('login');

        $credentials = [
            "email" => "user@gmail.com",
            "password" => "123456789"
        ];

        $response = $this->post('login', $credentials);
        $response->assertRedirect('/');

        $this->assertAuthenticated();
        $this->get('/')->assertOk();
    }
}
