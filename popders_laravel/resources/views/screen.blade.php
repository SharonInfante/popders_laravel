@extends('template')

@section('title', 'Video del día')

@section('content')
    <div class="div-content p-10">
       <div class="grid grid-cols-12 gap-1">
                <div></div>
                <div class="col-span-11 pt-10">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/-YtWYotwDHU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
    </div>
@endsection
