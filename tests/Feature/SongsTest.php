<?php
<<<<<<< HEAD
namespace Tests\Feature;
=======

namespace Tests\Feature;

>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Tests\TestCase;
use App\Models\Song;
<<<<<<< HEAD
=======


>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
class SongTests extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;
<<<<<<< HEAD
    public function test_can_displays_songs()
    /**
     * Test that checks if a song can be displayed.
     *
=======

    public function test_can_displays_songs()

    /**
     * Test that checks if a song can be displayed.
     * 
>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
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
<<<<<<< HEAD
=======

>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
        $song2 = new Song([
            'title' => 'November rain',
            'artist' => 'Guns and Roses',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=4_fvXrgAm1A',
            'image' => 'november.png',
        ]);
        $song2->save();
<<<<<<< HEAD
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
=======

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
>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
     */
    {
        $song = Song::create([
            'title' => 'We are the champions',
            'artist' => 'Queen',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=04854XqcfCY',
            'image' => 'champions.png'
        ]);
<<<<<<< HEAD
        $response = $this->get('songDescription/' . $song->id_song);
        $response->assertStatus(200);
=======

        $response = $this->get('songDescription/' . $song->id_song);

        $response->assertStatus(200);

>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
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
<<<<<<< HEAD
    /**
     * Test that checks if a song can be edited.
     *
     */
    {
        $song = Song::create([
            'title'=> 'Sweet Child of Mine',
=======

    /**
     * Test that checks if a song can be edited.
     * 
     */
    {
        $song = Song::create([
            'title' => 'Sweet Child of Mine',
>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
            'artist' => 'Guns and Roses',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=1w7OgIMMRc4',
            'image' => 'child.png',
        ]);
<<<<<<< HEAD
        $response = $this->get(route('editSong.edit', $song->id_song));
        $response->assertStatus(200);
=======

        $response = $this->get(route('editSong.edit', $song->id_song));

        $response->assertStatus(200);

>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
        $response->assertSee($song->title);
        $response->assertSee($song->artist);
        $response->assertSee($song->genre);
        $response->assertSee($song->url);
        $response->assertSee($song->image);
    }
<<<<<<< HEAD
    public function test_can_update_a_song()
    /**
     * Test that checks if a song can be updated.
     *
=======

    public function test_can_update_a_song()

    /**
     * Test that checks if a song can be updated.
     * 
>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
     */
    {
        $song = Song::create([
            'title' => 'Nothing else matters',
            'artist' => 'Metallica',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=tAGnKpE4NCI',
            'image' => 'nothing.png'
        ]);
<<<<<<< HEAD
=======

>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
        $response = $this->put(route('updateSong.update', $song->id_song), [
            'title' => 'Nothing else matters',
            'artist' => 'Metallica',
            'genre' => 'Rock',
            'url' => 'https://www.youtube.com/watch?v=tAGnKpE4NCI',
            'image' => 'nothing.png'
        ]);
<<<<<<< HEAD
=======

>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
        $updatedSong = Song::find($song->id_song);
        $this->assertEquals('Nothing else matters', $updatedSong->title);
        $this->assertEquals('Metallica', $updatedSong->artist);
        $this->assertEquals('Rock', $updatedSong->genre);
        $this->assertEquals('https://www.youtube.com/watch?v=tAGnKpE4NCI', $updatedSong->url);
        $this->assertEquals('nothing.png', $updatedSong->image);
<<<<<<< HEAD
=======

>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
        $response->assertRedirect(route('songDescription.show', $song));
    }
}