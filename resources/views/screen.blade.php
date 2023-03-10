@extends('template')

@section('title', 'Video del día')

@section('content')
    <div class="div-content flex justify-center items-center">
        <span class="menu flex flex-col justify-between bg-white  place-self-center">
            <a href="{{ route('home') }}"><img class="w-14 my-3" src="{{ asset('img/icons/logo-popCoder-multicolor.png') }}" alt="logo"></a>
            <a href="{{route('screen')}}"><img class="w-14"  src="{{ asset('img/icons/icono-musica.png') }}" alt="icono-musica"></a>
            <a href="{{route('playlist.index')}}"><img class="w-14"  src="{{ asset('img/icons/icono-gatito.png') }}" alt="logo"></a>
            <a href="{{route('playlist.index')}}"><img class="w-14"  src="{{ asset('img/icons/icono-patito.png') }}" alt="logo"></a>
        </span>
        <span class="d-menu bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500"><button></button></span>
                <div class="screen w-full">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/-YtWYotwDHU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
    </div>
@endsection
