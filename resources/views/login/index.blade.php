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

    <div class="row justify-content-center ">
        <div class="col-md-6 p-2">

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

        @if(session()->has('batas') )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('batas') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


     
        
        <main class="form-signin w-100 m-auto   p-5">
  <form action="/login" method="post">
    @csrf
    <h4 class=" mb-4  fw-normal text-center text-dark " style="letter-spacing: 3px">LOGIN
    </h4>
    <hr class="w-50 d-none mx-auto mb-5">
   

    <div class="form-floating mt-5">
      <input type="email" name="email" class="form-control mb-2 @error('email')is-invalid  @enderror  rounded-0 border-0 border-bottom  bg-transparent border-dark text-dark" id="email" placeholder="name@example.com" autofocus required >
      <label for="email" class="text-dark">Email address</label>

      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating mt-5">
      <input type="password" name="password" class="form-control mb-2 rounded-0 border-0 border-bottom  bg-transparent border-dark text-dark" id="password" placeholder="Password" required>
      <label for="password"class="text-dark" >Password</label>
    </div>

      <div class="row mt-5 mb-5">
        <div class="col">
          <div class=" d-block w-100 h-100 border text-center rounded-0 border-0 ">
            <p class="mt-3 fw-semibold fs-3 text-dark"><?php echo $first_num . " " . $operator . " " . $second_num ?></p>
          </div>
        </div>
        <div class="col">
          <div class="form-floating">
            <input type="number" name="answer" id="answer" class="form-control mb-2 rounded-0 border-0 border-bottom  bg-transparent border-dark  text-dark" id="cap" placeholder="captcha" >
            <label for="captcha" class="text-dark">Captcha</label>
          </div>
        </div>
      </div>
   
   


    <button class="w-100 d-block ms-auto  btn btn-lg  rounded-0  border-dark button-login" style="margin-top:100px"type="submit">Masuk</button>
    <small class="d-block text-end mt-3 text-dark">Not register? <a href="/register" class="text-decoration-none text-black">Register Now!  </a></small>
  </form>
</main>
        </div>
    </div>
</div>
@endsection