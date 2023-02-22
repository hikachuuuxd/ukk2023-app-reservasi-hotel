@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row mt-5 justify-content-around ">
        <div class="col-md-5 align-self-center ">

        <img src="{{ asset('storage/' .$room->image) }} " class="card-img-top rounded-0" alt="...">
   
        </div>
        <div class="col-md-6 align-self-center mt-3">
        <div class="card-body">
            <h5 class="card-title mb-2 text-uppercase">{{ $room->name }} </h5>
            <p class="fw-semibold"><small>Fasilitas Kamar</small></p>
            @foreach($room->fasilities as $fasility)
            <div class="border border-dark p-2 mb-2 border-opacity-75 d-inline-block"><small>{{ $fasility->name }}</small></div>
            @endforeach 
            <p class="card-text mt-2">{{ $room->description }}</p>
        
            <p class="fs-2"  id="price">Rp {{ $room->price}}/malam</p>
            <a href="/rooms" class=" text-decoration-none "><button class=" btn mt-3 rounded-0" style="background-color:rgb(46, 68, 105) ; color: white;">Kembali</button></a>
            <a href="#" class="text-decoration-none"  data-bs-toggle="modal" data-bs-target="#pesan"><button class=" btn mt-3 rounded-0 mx-2 " style="background-color: rgb(255, 166, 52); color: rgb(37, 37, 37);">Pesan</button></a>
        </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="pesan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan Kamar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="/orders" method="POST" >
        @csrf
            <div class="mb-3">
                <label for="Checkin" class="form-label ">Tanggal Check-in</label>
                <input type="date" class="form-control @error('Checkin')is-invalid @enderror" id="Checkin"  name= "Checkin" value="{{ old('Checkin') }}">

                @error('Checkin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               
            </div>
            <div class="mb-3">
                <label for="Checkout" class="form-label">Tanggal Check-out</label>
                <input type="date" class="form-control @error('Checkout')is-invalid @enderror" id="Checkout"  name="Checkout" value="{{ old('Checkout') }}">

                @error('Checkout')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               
            </div>
            <div class="mb-3">
                <label for="totalRoom" class="form-label">Jumlah Kamar</label>
                <input type="number" class="form-control @error('totalRoom')is-invalid @enderror" id="totalRoom"  name="totalRoom" value="{{ old('totalRoom') }}">

                @error('totalRoom')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kamar" class="form-label">Tipe Kamar</label>
               
                <select class=" form-select"  aria-label="Default select example" name= "room_id">
                    <option value="{{ $room->id }}">{{$room->name}}</option>
                </select>
              
        
            </div>
            <!-- <div class="mb-3">
                <label for="totalPrice" class="form-label">Total Harga</label>
                <input type="number" class="form-control @error('totalPrice')is-invalid @enderror" id="totalPrice" name="totalPrice" value="{{ old('totalRoom') }}" readonly>

                @error('totalPrice')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> -->
            <!-- <div class="mb-3">
                <label for="name" class="form-label">Tipe Kamar</label>
                <input type="text" class="form-control @error('name')is-invalid @enderror " id="name" name="room_id" value="{{ $room->id }}"> </input> 

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> -->

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-dark" >Pesan sekarang</button>
      </div>
      </form>
    </div>
  </div>

</div>

@endsection