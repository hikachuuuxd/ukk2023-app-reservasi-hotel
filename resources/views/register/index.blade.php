@extends('login.main')
@section('container')
<div class="container mt-5 w-25 m-auto mt-5 bg-light p-5 shadow p-3 mb-5 bg-body rounded">
    <div class="row justify-content-center">
        <div class="col p-2">
        <main class="form-register w-100 m-auto">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal text-center">REGISTRASI</h1>
    <div class="form-floating mt-3">
      <input type="name" class="form-control rounded-top @error('name')is-invalid @enderror mb-1 rounded-0 border-0 border-bottom  bg-transparent border-dark text-dark" name="name" id="floatingInput" placeholder="Hikari Mizu" required value="{{ old('name') }}">
      <label for="floatingInput">Nama Lengkap</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating mt-3">
      <input type="email" class="form-control @error('email')is-invalid @enderror mb-1 rounded-0 border-0 border-bottom  bg-transparent border-dark text-dark" name="email" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
      <label for="floatingInput">Email</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating mt-3">
      <input type="number" class="form-control @error('noTelp')is-invalid @enderror mb-1 rounded-0 border-0 border-bottom  bg-transparent border-dark text-dark" name="noTelp" id="floatingPassword" placeholder="086543456899" required value="{{ old('noTelp') }}">
      <label for="floatingPassword">Nomor Telepon</label>
      @error('noTelp')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>


    <div class="form-floating mt-3">
      <input type="password" class="form-control @error('pass')is-invalid @enderror mb-1 rounded-0 border-0 border-bottom  bg-transparent border-dark text-dark" name="password" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-floating mt-3">
      <input type="password" class="form-control mb-2 rounded-bottom @error('password')is-invalid @enderror mb-1 rounded-bottom-0 border-0 border-bottom  bg-transparent border-dark text-dark" name="password_confirmation" id="floatingPassword" placeholder="Password"  required>
      <label for="floatingPassword">Konfirmasi Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button class="w-100 btn btn-lg mt-2 button-login" type="submit">Sign in</button>
    <small class="d-block text-center mt-3">Already Register? <a href="/login">Login</a></small>
  </form>
</main>
        </div>
    </div>
</div>
@endsection
