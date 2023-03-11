<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {   
        $songs = Song::all();
        return view('/playlist', compact('songs'));
    }

    public function create()
    {
        return view('addSong');
    }

    public function store(Request $request)
    {
        $songs = new Song();

        $songs->title = $request->title;
        $songs->artist = $request->artist;
        $songs->genre = $request->genre;
        $songs->url = $request->url;
        $songs->image = $request->image;

        $songs->save();

        return redirect()->route('songDescription.show', $songs);
    }

    public function show($id_song)
    {   
        $songs = Song::find($id_song);  
        return view('songDescription', compact('songs'));
    }

    public function edit(Song $songs) 
    {   
        
        return view('editSong', compact('songs'));
    }

    public function update(Request $request, $id)
    {
        $song = Song::findOrFail($id);

        $song->title = $request->input('title');
        $song->artist = $request->input('artist');
        $song->genre = $request->input('genre');
        $song->url = $request->input('url');
        $song->image = $request->input('image');

        $song->save();

        return redirect()->route('songDescription.show', $song);
    }
    public function destroy(Song $song) 
    {   
        $song->delete();
    }
    
}

?>