 @extends('template')

    @section('title', 'Video del día')
    
    @section('content')
        <div class="div-content p-10">
           <div class="container flex flex-col bg-white rounded-md max-w-4xl">
            <!--
      This example requires some changes to your config:
      
      ```
      // tailwind.config.js
      module.exports = {
        // ...
        plugins: [
          // ...
          require('@tailwindcss/forms'),
        ],
      }
      ```
    -->
    <!--
      This example requires updating your template:
    
      ```
      <html class="h-full bg-gray-50">
      <body class="h-full">
      ```
    -->
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
          <div class="w-full max-w-md space-y-8">
            <div>
              <a href="{{ route('home') }}"> <img class="mx-auto h-24 w-auto" src="{{ asset('img/icons/logo-popCoder-multicolor.png') }}" alt="logo"></a>
              <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-indigo-600">Crea tu usuario</h2>
          </div>
          <form class="mt-8 space-y-6" action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="-space-y-5px rounded-md shadow-sm">
                <div class="mb-5">
                    <label for="name" class="sr-only">Tu nombre</label>
                    <input id="name" name="name" type="text" autocomplete="name" required class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Tu nombre">
                </div>
                <div class="mb-5">
                  <label for="email-address" class="sr-only">Tu email</label>
                  <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Email address">
                </div>
                <div class="mb-5">
                  <label for="password" class="sr-only">Tu contraseña</label>
                  <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Password">
                </div>
                <div>
                  <label for="email-address" class="sr-only">Tu avatar</label>
                  <input id="avatar" name="file" type="file" required accept="image/*" class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Tu avatar">
                  @error('file')
                  <small class="text-rose-500">{{$message}}</small>
                  @enderror
                </div>
            </div>
      
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                <label for="remember-me" class="ml-2 block text-sm text-gray-900">Recuérdame</label>
              </div>
            </div>
            <div>
              <button type="submit" class="group relative flex w-full justify-center rounded-md py-2 px-3 text-sm font-semibold text-white bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                  </svg>
                </span>
                Crea tu usuario
              </button>
            </div>
          </form>
        </div>
      </div>
      
           </div>
        </div>
    @endsection
    

{{-- <h1>Descripción</h1><br>
<a href="{{route('editSong.edit', $songs)}}">Editar canción</a><br><br><br>
<p><strong>Title:</strong>{{$songs->title}}</p>
<p><strong>Artist:</strong>{{$songs->artist}}</p>
<p><strong>Genre:</strong>{{$songs->genre}}</p>
<p><strong>URL:</strong>{{$songs->url}}</p>
<p><strong>Image:</strong>{{$songs->image}}</p>
<p><strong>Status:</strong>{{$songs->status}}</p> --}}
