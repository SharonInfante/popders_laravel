<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
=======
@extends('template')

@section('content')

<a href="{{route('login')}}">Longin</a>
<a href="{{route('register')}}">Register</a>

<h1>POPDERS HOME</h1>

<a href="{{route('playlist.index')}}">Playlist</a>

@endsection
>>>>>>> 320000b8a4333f5990bd4b236930c687c9283583
