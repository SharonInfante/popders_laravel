@extends('template')

@section('content')

<h1>Descripción</h1><br>
<a href="{{route('editSong.edit', $songs)}}">Editar canción</a><br><br><br>
<<<<<<< HEAD
=======
<a href="{{route('deleteSong.destroy', $songs)}}">Eliminar canción</a><br><br><br>
>>>>>>> 040f1116d0d82be028ad9f89a16c38565aee5c8a
<p><strong>Title:</strong>{{$songs->title}}</p>
<p><strong>Artist:</strong>{{$songs->artist}}</p>
<p><strong>Genre:</strong>{{$songs->genre}}</p>
<p><strong>URL:</strong>{{$songs->url}}</p>
<p><strong>Image:</strong>{{$songs->image}}</p>
<p><strong>Status:</strong>{{$songs->status}}</p>

@endsection
