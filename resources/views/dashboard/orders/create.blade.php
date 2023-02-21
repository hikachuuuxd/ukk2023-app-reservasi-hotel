@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Order</h1>   </div>

        <div class="col-md-6">
        <form action="/dashboard/orders" method="post"  ">
        @csrf
        <div class="mb-3">
                <label for="rooms" class="form-label">Nama Pemesan</label>

                <div class="form-check">
                <select class="selectpicker" data-live-search="true"  aria-label="Default select example" name= "user_id">
                    @foreach($users as $user)
                    <option class ="w-25" value="{{ $user->id }}">{{$user->name}}</option>
                    @endforeach
                    </select>
                </div>
        
            </div>
        <div class="mb-3">
                <label for="rooms" class="form-label">Tipe Kamar</label>

                <div class="form-check">
                <select class="selectpicker" aria-label="Default select example  data-live-search="true"  name= "room_id">
                    @foreach($rooms as $room)
                    <option class ="w-25" value="{{ $room->id }}">{{$room->name}}</option>
                    @endforeach
                    </select>
                </div>
        
            </div>

            <div class="mb-3">
                <label for="Checkout" class="form-label">Tanggal Check-in</label>
                <input type="date" class="form-control @error('Checkin')is-invalid @enderror" id="Checkin" name="Checkin" value="{{ old('Checkin') }}">

                @error('Checkin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               
            </div>

            <div class="mb-3">
                <label for="Checkout" class="form-label">Tanggal Check-out</label>
                <input type="date" class="form-control @error('Checkout')is-invalid @enderror" id="Checkout" name="Checkout" value="{{ old('Checkout') }}">

                @error('Checkout')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               
            </div>
            <div class="mb-3">
                <label for="totalRoom" class="form-label">Jumlah Kamar</label>
                <input type="number" class="form-control @error('totalRoom')is-invalid @enderror" id="totalRoom" name="totalRoom" value="{{ old('totalRoom') }}">

                @error('totalRoom')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-dark mt-4">Submit</button>
        </form>
        </div>
        
      </div>

@endsection