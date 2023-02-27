@extends('layouts.main')
@section('container')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 ">
                <h4 class="text-center">Fasilitas Hotel</h4>
                <hr>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($hotels as $hotel)   
            <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/' .$hotel->image) }}" class="card-img-top" style=" height: 250px" alt="...">
                    <div class="card-body">
                      <p class="card-text text-center">{{ $hotel->name }}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection