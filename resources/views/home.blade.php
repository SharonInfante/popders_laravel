@extends('template')

@section('content')

<a href="{{route('login')}}">Longin</a>
<a href="{{route('register')}}">Register</a>

<h1>POPDERS HOME</h1>

@if (Auth::check())
    <p>Estás logueado como {{ Auth::user()->name }}</p>
@else
    <p>No has iniciado sesión</p>
@endif

@auth
   <p>Hols {{auth()->user()->name}} Esta es una prueba para ver si se mantiene la sesión pero no funciona</p> 

  <a href="{{route('logout')}}">Logout</a>
@endauth

@guest
  <p>Esta es una prueba sino estoy logueado debo <a href="{{route('login')}}">Iniciar Sesión</a></p>  
@endguest

<a href="{{route('playlist.index')}}">Playlist</a>

@endsection