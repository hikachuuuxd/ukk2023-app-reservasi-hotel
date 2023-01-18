
@extends('layouts.main')
@section('container')
<img src="img/deluxe.jpg" class="img-fluid" alt="...">
<section id="pesan">
    <div class="container mt-5 mb-5">
      <div class="row mb-5">
        <div class="col p-2">
          <form action="">
            <label for="" class="form-label">Check in</label>
            <input type="date" name="" id="" class="form-control">
          </form>
        </div>
        <div class="col p-2">
          <form action="">
            <label for="" class="form-label">Check out</label>
            <input type="date" name="" id="" class="form-control">
          </form>
        </div>
        <div class="col p-2">
          <form action="">
            <label for="" class="form-label">Jumlah Pemesan</label>
            <input type="text" name="" id="" class="form-control">
          </form>
        </div>
      </div>
      <div class="row text-center ">
        <div class="col justify-content-end"><a href="/room" class="btn btn-dark w-25">CARI KAMAR</a></div>
      </div>
    </div>
  </section>
@endsection