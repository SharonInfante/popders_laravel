<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Song;

class ViewsTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function can_display_add_song_view()

    /** Test that checks if the add song view can be displayed*/
    {
        $response = $this->get(route('addSong.create'));

        $response->assertStatus(200);
        $response->assertViewIs('addSong');
    }

    /** @test */
    public function can_display_edit_song_view()
    {
        $song = Song::factory()->create();

        $response = $this->get(route('editSong.edit', $song->id));

        $response->assertStatus(200);
        $response->assertViewIs('editSong');
    }
}
