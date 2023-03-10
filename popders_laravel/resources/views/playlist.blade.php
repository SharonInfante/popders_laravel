@extends('template')

@section('content')
 <div class="div-content">
    <div class="container flex flex-col bg-stone-50/40 rounded-md max-w-8xl ">
    <h1 class="text-white text-4xl font-bold text-center">Lista de Canciones</h1>
    <a href="{{route('addSong.create')}}">Añadir canción</a>
    <div class="grid grid-flow-row auto-rows-max">
          @foreach ($songs as $song)
            <div class="transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg mb-6">
              <div class="bg-white px-4 pt-3 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <a href="{{ route('playlist.index') }}"><img class="rounded-full h-12 w-12" src="{{ asset('img/avatares/natalia.png') }}" alt="avatar"></a>
                  </div>
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-base font-semibold leading-4 text-gray-900" id="modal-title">Canciones de Natalia</h3>
                    <div class="mt-2">
                        <a class="text-sm" href="{{route('songDescription.show', $song->id_song)}}">Título: {{$song->title}}</a>
                        <p class="text-sm">Artista: {{$song->artist}}</p>
                        <p class="text-sm">Género: {{$song->genre}}</p>
                        <a class="text-sm" href="#"> Url: {{$song->url}}</a>
                        <form action="{{ route('addSong.store') }}" method="POST">
                            <div class="flex items-center">
                                <input id="status" name="status" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="status" class="ml-2 block text-sm text-gray-900">Escuchada</label>
                              </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-2 py-1 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" class="mr-3 mt-1 inline-flex w-full justify-center rounded-md bg-slate-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 sm:ml-3 sm:w-auto">Editar</button>
                <button type="button" class="mr-3 mt-1 inline-flex w-full justify-center rounded-md bg-pink-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 sm:ml-3 sm:w-auto">Eliminar</button>
              </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection