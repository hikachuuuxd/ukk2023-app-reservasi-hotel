@extends('layouts.main')

@section('container')



 <div class="container mt-5 ">
         <div class="row justify-content-center">
                <div class="col-md-5 mb-5">
                        <h4 class="text-center">RIWAYAT PESANAN</h4>
                        <hr>
                </div>
         </div>

        <div class="row mb-3  justify-content-start " style="width: 25rem; ">

        @foreach($orders as $order)
        @if( auth()->user()->name == $order->user->name)
        <div class="col mb-4 text-center ">

                <div class="card  overflow-hidden rounded-0 ">
                        <img src="{{ asset('storage/' .$order->room->image) }}" class="card-img-top rounded-0" alt="">
                <div class="card-body border-0">
                        <h6 class="card-title">{{ $order->room->name }}</h6>
                       <small class="card-text">{{ $order->Checkin }}-{{$order->Checkout}}</small>
                </div>
                <a href="/orders/{{ $order->id }}" class="text-decoration-none"><div class="riwayat-order d-block lh-lg p-2">Lihat Detail</div></a>
                </div>
        </div>
        @endif
        @endforeach
        </div>
   
 </div>



@endsection