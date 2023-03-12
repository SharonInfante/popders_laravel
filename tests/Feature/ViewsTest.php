<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Song;
use App\Models\User;

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
    public function can_display_form_in_edit_view()
    /** Test that checks if the edit view form can be displayed*/
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $song = Song::factory()->create([
            'id_user' => $user->id
        ]);

        $response = $this->get(route('editSong.edit', $song));

        $response->assertStatus(200);

        $response->assertSee('Editar Canción');
        $response->assertSee($song->title);
        $response->assertSee($song->artist);
        $response->assertSee($song->genre);
        $response->assertSee($song->url);
        $response->assertSee($song->image);
    }

    /** @test */
    public function can_playlist_view_contains_song_titles()
    /** Test that checks if the playlist view can be displayed with an input of songs*/
    {
        $songs = [];

        $song1 = new Song([
            'title' => 'Cryin',
            'artist' => 'Aerosmith',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=qfNmyxV2Ncw',
            'image' => 'crying.png',
        ]);
        $song1->save();
        array_push($songs, $song1);

        $song2 = new Song([
            'title' => 'November rain',
            'artist' => 'Guns and Roses',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=4_fvXrgAm1A',
            'image' => 'november.png',
        ]);
        $song2->save();
        array_push($songs, $song2);

        $song3 = Song::create([
            'title' => 'We are the champions',
            'artist' => 'Queen',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=04854XqcfCY',
            'image' => 'champions.png'
        ]);
        $song3->save();
        array_push($songs, $song3);

        $response = $this->get(route('playlist.index'));

        $response->assertStatus(200);
        $response->assertSee('Lista de Canciones');
        $response->assertSee('Añadir canción');

        foreach ($songs as $song) {
            $response->assertSee($song->title);
            $response->assertSee(route('songDescription.show', $song->id_song));
        }
    }
}
