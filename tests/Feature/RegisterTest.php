<?php

namespace Tests\Feature;

use App\Models\TestUser;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;


class RegisterTest extends TestCase
{
    protected $connection = 'testing';

    /**
     * A basic feature test example.
     */

    public function test_sample_registration_form()
    {
        $response = $this->get('register');

        $response->assertStatus(200);

        $response->assertViewIs('register');
    }

    public function test_register_to_a_user()
    {
        // $user = User::create([
        //     'name' => 'Paula',
        //     'email' => 'paula@gmail.com',
        //     'password' => bcrypt('123456789'),
        //     'avatar' => 'foto.jpg'
        // ]);

        $this->get('register')->assertSee('register');

        $credentials = [
            'name' => 'Paula',
            'email' => 'paula@gmail.com',
            'password' => '123456789',
            'password_confirmation' => '123456789',
            'avatar' => 'foto.jpg'
        ];

        $response = $this->post('register', $credentials);
        $response->assertRedirect('login');

        $this->get('login')->assertOk();
    }
}
