
    @extends('template')

@section('title', 'Añade tu canción')

@section('content')
    <div class="div-content p-10">
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
<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">

      <div class="mt-5 md:col-span-2 md:mt-0">

        <form action="{{ route('addSong.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="shadow sm:overflow-hidden sm:rounded-md">
            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

                <div class="col-span-6 sm:col-span-4">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Título</label>
                    <input type="text" name="title" id="title" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>

                  <div class="col-span-6 sm:col-span-4">
                    <label for="artist" class="block text-sm font-medium leading-6 text-gray-900">Artist</label>
                    <input type="text" name="artist" id="artist" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>

                  <div class="col-span-6 sm:col-span-4">
                    <label for="genre" class="block text-sm font-medium leading-6 text-gray-900">Género</label>
                    <input type="text" name="genre" id="genre" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>

                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="url" class="block text-sm font-medium leading-6 text-gray-900">Url</label>
                      <div class="mt-2 flex rounded-md shadow-sm">
                        <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 px-3 text-gray-500 sm:text-sm">http://</span>
                        <input type="text" name="url" id="url" class="block w-full flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="www.example.com">
                      </div>
                    </div>
                  </div>
  
                  <div>
                    <label class="block text-sm font-medium leading-6 text-gray-900">Imagen de tu canción</label>
                    <div class="mt-2 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                      <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="file" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span>Añade imagen</span>
                            <input id="file" name="image" type="file" class="sr-only" accept="image/*">
                          </label>
                          <p class="pl-1">o arrástrala aquí</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                      </div>
                    </div>
                    @error('file')
                    <small class="text-rose-500">{{ $message }}</small>
                    @enderror
                  </div>
            </div>
            <button type="submit" class="group relative flex w-full justify-center rounded-md py-2 px-3 text-sm mb-10 font-semibold text-white bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Añadir
              </button>
            
          </div>
        </form>
      </div>
    </div>
  </div>
    </div>
@endsection
