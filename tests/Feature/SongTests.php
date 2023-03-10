<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Tests\TestCase;
use App\Models\Song;


class SongTests extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;

    public function test_can_displays_songs()

    /**
     * Test that checks if a song can be displayed.
     * 
     */
    {
        $song1 = new Song([
            'title' => 'Cryin',
            'artist' => 'Aerosmith',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=qfNmyxV2Ncw',
            'image' => 'crying.png',
        ]);
        $song1->save();

        $song2 = new Song([
            'title' => 'November rain',
            'artist' => 'Guns and Roses',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=4_fvXrgAm1A',
            'image' => 'november.png',
        ]);
        $song2->save();

        $response = $this->get('/playlist');

        $response->assertOk();

        $response->assertSee('Cryin');
        $response->assertSee('November rain');
    }

    public function test_can_create_a_song()

    /**
     * Test that checks if a song can be created.
     * 
     */

    {
        $response = $this->get('/addSong');

        $response->assertStatus(200);

        $response->assertViewIs('addSong');
    }

    public function test_can_show_a_created_song()

    /**
     * Test that checks if a song can be show when created.
     * 
     */
    {
        $song = Song::create([
            'title' => 'We are the champions',
            'artist' => 'Queen',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=04854XqcfCY',
            'image' => 'champions.png'
        ]);

        $response = $this->get('songDescription/' . $song->id_song);

        $response->assertStatus(200);

        $response->assertViewHas('songs', function ($songs) use ($song) {
            return $songs->id_song === $song->id_song &&
                $songs->title === $song->title &&
                $songs->artist === $song->artist &&
                $songs->genre === $song->genre &&
                $songs->url === $song->url &&
                $songs->image === $song->image;
        });
    }
    public function test_can_edit_a_song()

    /**
     * Test that checks if a song can be edited.
     * 
     */
    {
        $song = Song::create([
            'title' => 'Sweet Child of Mine',
            'artist' => 'Guns and Roses',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=1w7OgIMMRc4',
            'image' => 'child.png',
        ]);

        $response = $this->get(route('editSong.edit', $song->id_song));

        $response->assertStatus(200);

        $response->assertSee($song->title);
        $response->assertSee($song->artist);
        $response->assertSee($song->genre);
        $response->assertSee($song->url);
        $response->assertSee($song->image);
    }

    public function test_can_update_a_song()

    /**
     * Test that checks if a song can be updated.
     * 
     */
    {
        $song = Song::create([
            'title' => 'Nothing else matters',
            'artist' => 'Metallica',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=tAGnKpE4NCI',
            'image' => 'nothing.png'
        ]);

        $response = $this->put(route('updateSong.update', $song->id_song), [
            'title' => 'Nothing else matters',
            'artist' => 'Metallica',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=tAGnKpE4NCI',
            'image' => 'nothing.png'
        ]);

        $updatedSong = Song::find($song->id_song);
        $this->assertEquals('Nothing else matters', $updatedSong->title);
        $this->assertEquals('Metallica', $updatedSong->artist);
        $this->assertEquals('Rock', $updatedSong->genre);
        $this->assertEquals('https://www.youtube.com/watch?v=tAGnKpE4NCI', $updatedSong->url);
        $this->assertEquals('nothing.png', $updatedSong->image);

        $response->assertRedirect(route('songDescription.show', $song));
    }
}