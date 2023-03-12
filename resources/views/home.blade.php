@extends('template')

@section('content')

<a href="{{route('login')}}">Longin</a>
<a href="{{route('register')}}">Register</a>

<h1>POPDERS HOME</h1>


<a href="{{route('playlist.index')}}">Playlist</a>

@endsection