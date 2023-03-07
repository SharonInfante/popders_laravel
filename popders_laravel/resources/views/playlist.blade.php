@extends('template')

@section('content')
    <h1>Lista de Canciones</h1>
    <a href="{{route('addSong.create')}}">Añadir canción</a>
    <ul>
        @foreach ($songs as $song)
            <ul>
                <li>
                    <a href="{{route('songDescription.show', $song->id_song)}}">{{$song->title}}</a>
                <li>
            </ul>        
        @endforeach
    </ul>
    
@endsection