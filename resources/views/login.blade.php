@extends('template')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
  {{ $errors->first() }}
</div>
@endif

<form method="POST" action="{{route('login')}}" class="container aling-center p-5">
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name/e-mail</label>
      <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection