@extends('layouts.main')
@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 p-2">

        @if(session()->has('success') )
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError') )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        <main class="form-signin w-100 m-auto">
  <form action="/login" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal text-center">LOGIN</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control mb-2 @error('email')is-invalid()  @enderror" id="email" placeholder="name@example.com" autofocus required >
      <label for="email">Email address</label>

      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control mb-2" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>


    <button class="w-100 btn btn-lg btn-dark mt-2" type="submit">Sign in</button>
    <small class="d-block text-center mt-3">Not register? <a href="/register">Register Now! </a></small>
  </form>
</main>
        </div>
    </div>
</div>
@endsection