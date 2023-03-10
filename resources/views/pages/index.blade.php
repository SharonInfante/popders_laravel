@extends('layouts.theme')

@section('title', 'Song')

@section('content')
    <h1>Bienvenido a la página principal</h1>
    <a href="{{route('todoForm.create')}}">Crea tus lista de tareas</a>
    <ul>
        @foreach ($songList as $song)
        <li>
            <a href="{{route('songList.show', $song->id)}}">{{$song->name}}</a>
        </li>
        @endforeach
    </ul>
@endsection
