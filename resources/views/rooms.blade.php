@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center align-items-center mt-5 mb-5" >
        <div class="col-md-8">
        <div class="input-group mb-3">
        <input type="text" class="form-control " placeholder="Cari Kamar" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-dark link-white" type="button" id="button-addon2">Button</button>
      </div>
        </div>
  </div>

  <div class="row justify-content-center ">
  @foreach($rooms as $room)
    <div class="col-md-4 mb-5  ">

      <a href="/room/{{$room->slug}}" class ="">
      <div class="card shadow  " style="width: 50;">
      <img src="img/{{ $room->image }}" class="card-img-top" alt="...">
      <div class="card-body bg-dark text-white ">
        <p class="card-text text-center">{{$room->name}}</p>
      </div>
      </div>
      </a>
    
    </div>
  @endforeach
  </div>

</div>
@endsection 