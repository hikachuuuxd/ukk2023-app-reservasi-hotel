@extends('layouts.main')
@section('container')
<div class="container mt-5">
  <?php

session_start();
$first_num = rand(1, 10);
$second_num = rand(1, 10);

$operators = array('+', '*');
$operator = rand(0, count($operators) - 1);
$operator = $operators[$operator];

$answer = 0;
switch($operator){
    case "+":
         $answer = $first_num + $second_num;
         break;
    case "*":
        $answer = $first_num * $second_num;
        break;
}

$_SESSION['answer'] = $answer;
?>

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
      <input type="email" name="email" class="form-control mb-2 @error('email')is-invalid  @enderror " id="email" placeholder="name@example.com" autofocus required >
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

      <div class="row">
        <div class="col">
          <div class=" d-block w-100 h-100 border text-center ">
            <p class="mt-3"><?php echo $first_num . " " . $operator . " " . $second_num ?></p>
          </div>
        </div>
        <div class="col">
          <div class="form-floating">
            <input type="number" name="answer" id="answer" class="form-control mb-2" id="cap" placeholder="captcha" >
            <label for="captcha">Captcha</label>
          </div>
        </div>
      </div>
   
   


    <button class="w-100 btn btn-lg btn-dark mt-2" type="submit">Sign in</button>
    <small class="d-block text-center mt-3">Not register? <a href="/register">Register Now! </a></small>
  </form>
</main>
        </div>
    </div>
</div>
@endsection