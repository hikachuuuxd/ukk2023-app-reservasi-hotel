@extends('layouts.main')
@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 p-2">
        <main class="form-register w-100 m-auto">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal text-center">REGISTRASI</h1>
    <div class="form-floating">
      <input type="name" class="form-control rounded-top @error('name')is-invalid @enderror" name="name" id="floatingInput" placeholder="Hikari Mizu" required value="{{ old('name') }}">
      <label for="floatingInput">Nama Lengkap</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="email" class="form-control @error('email')is-invalid @enderror " name=email" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
      <label for="floatingInput">Email</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="number" class="form-control @error('noTelp')is-invalid @enderror" name="noTelp" id="floatingPassword" placeholder="086543456899" required value="{{ old('noTelp') }}">
      <label for="floatingPassword">Nomor Telepon</label>
      @error('noTelp')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>


    <div class="form-floating">
      <input type="password" class="form-control @error('pass')is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" class="form-control mb-2 rounded-bottom @error('password')is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password"  required>
      <label for="floatingPassword">Konfirmasi Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button class="w-100 btn btn-lg btn-dark mt-2" type="submit">Sign in</button>
    <small class="d-block text-center mt-3">Already Register? <a href="/login">Login</a></small>
  </form>
</main>
        </div>
    </div>
</div>
@endsection