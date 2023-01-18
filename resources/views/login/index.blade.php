@extends('layouts.main')
@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 p-2">
        <main class="form-signin w-100 m-auto">
  <form>
    <h1 class="h3 mb-3 fw-normal text-center">LOGIN</h1>

    <div class="form-floating">
      <input type="email" class="form-control mb-2" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control mb-2" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>


    <button class="w-100 btn btn-lg btn-dark mt-2" type="submit">Sign in</button>
    <small class="d-block text-center mt-3">Not register? <a href="/register">Register Now! </a></small>
  </form>
</main>
        </div>
    </div>
</div>
@endsection