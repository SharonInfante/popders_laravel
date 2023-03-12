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

    public function test_sends_data_to_registration_form()
    {

        $user = User::create([
            'name' => 'Maria Teresa',
            'email' => 'mariate@gmail.com',
            'password' => '123456789',          
        ]);

        $response = $this->post('register',[
            'name' => 'Maria Teresa',
            'email' => 'mariate@gmail.com',
            'password' => '123456789',                      
        ]);
 
        $response->assertRedirect('login');
       
    }
}
