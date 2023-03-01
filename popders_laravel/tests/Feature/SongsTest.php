<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SongsTest extends TestCase
{
    use WithFaker, RefreshDatabase;



 public function a_user_can_add_a_song()
 {
   $this->withoutExceptionHandling();


   $attributes = [
    'title' => $this->faker->sentence,
    'artist'=> $this->faker->sentence
    ];

    $this->post('/songs', $attributes);

    $this->assertDatabaseHas('songs', $attributes);
 }
}
