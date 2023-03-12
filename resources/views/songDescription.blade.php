@extends('template')

@section('content')

<h1>Descripción</h1><br>
<a href="{{route('editSong.edit', $songs)}}">Editar canción</a><br><br><br>
<a href="{{route('deleteSong.destroy', $songs)}}">Eliminar canción</a><br><br><br>
<p><strong>Title:</strong>{{$songs->title}}</p>
<p><strong>Artist:</strong>{{$songs->artist}}</p>
<p><strong>Genre:</strong>{{$songs->genre}}</p>
<p><strong>URL:</strong>{{$songs->url}}</p>
<p><strong>Image:</strong>{{$songs->image}}</p>
<p><strong>Status:</strong>{{$songs->status}}</p>

@endsection
