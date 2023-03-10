@extends('layouts.theme')

@section('title','Canción ' . $song->name)

@section('content')
  <h2>Lista de canciones {{$song->name}}</h2>
  <a href="{{route('songList.index')}}">Volver a la lista de tareas</a>
  <p><strong>{{$song->artist}}</strong></p>
  <p>{{$son->url}}</p>
@endsection