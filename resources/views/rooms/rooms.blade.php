@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center align-items-center mt-5 mb-5" >
        <div class="col-md-6">
        <form action="/rooms" method="get">
        <div class="input-group mb-3">
       <input type="text" class="form-control rounded-0 "style="border:1px solid rgb(46, 68, 105);" placeholder="Cari Kamar" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"  value="{{ request('search')}}">
        <button class="btn bi bi-search  link-white rounded-0" type="button" id="button-addon2" style="border:1px solid rgb(46, 68, 105);"></button>
      </div>
      </form>
        </div>
  </div>

  <div class="row justify-content-center ">
  @foreach($rooms as $room)
    <div class="col-md-4 mb-5  ">

      
      <div class="card rounded-0   " style="width: 50;">
      <a href="/rooms/{{ $room->slug }}" class ="text-decoration-none">
        @if ($room->image)
        <img src="{{ asset('storage/'. $room->image) }}" class="card-img-top rounded-0" alt="...">
        @else
        <img src="https://api.unsplash.com/photos" class="card-img-top rounded-0" alt="...">
        @endif
      <div class="card-body text-dark  shadow">
        <p class="card-text text-center">{{$room->name}}</p>
      </div></a>
      </div>
      
    
    </div>
  @endforeach
  </div>

</div>
@endsection 