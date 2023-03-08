@extends('dashboard.layouts.main')

@section('container')

<div class="container  pt-3 pb-2 mb-3 mt-4">
  <div class="row">
    <div class="col">
    <h1 class="h2">Orders</h1> 
    </div>
    <div class="col">
    <form action="/dashboard/orders" method="get">
        <div class="input-group mb-3">
        @csrf
      <button class="bi bi-search  border-0 bg-transparent"></button>
      <input type="search" class="form-control text-decoration-none border-0 bg-transparent" placeholder="Cari Pesanan "  value="{{ request('search')}}" name="search">

    </div>
    </form>
    </div>
  </div>
</div>


        


        @if(session()->has('success') )
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Tipe Kamar</th>
              <th scope="col">Jumlah kamar</th>
              <th scope="col">Check-in</th>
              <th scope="col">Check-out</th>
              <th scope="col" colspan="2">Total</th>
              

  
            </tr>
          </thead>
          <tbody>
          @php
            use Carbon\Carbon;
                    function day($Checkin, $Checkout, $price, $room){
                     $awal = new Carbon($Checkin);
                    $akhir = new Carbon($Checkout);
                    $selisih = $awal->diffInDays($akhir);
                    $total = ($selisih*$price)*$room;
                     return $total;
                }
            @endphp
        @foreach($orders as $order)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{ $order->user->name }}</td>
              <td>{{ $order->room->name}}</td>
              <td>{{ $order->totalRoom }}</td>
              <td>{{ $order->Checkin }}</td>
              <td>{{ $order->Checkout }}</td>

              
              <td>
                  Rp. {{ day( $order->Checkin, $order->Checkout, $order->room->price, $order->totalRoom) }}
              </td>


            
              <td>
                
              <div class="dropdown">
              <i class="bi bi-three-dots-vertical" class=" dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"">  </i>
                  
                    <ul class="dropdown-menu">
                      {{-- <li><a class="dropdown-item" href="/dashboard/orders/{{$order->id}}/edit">Edit</a></li> --}}
                      <li>                  
                      <form action="/dashboard/orders/{{ $order->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="dropdown-item" onclick="return confirm('yakin?')">Delete</button>
                        
                      </form>
                      </li>
                    </ul>
                  </div>

              
              </td>
            </tr>
        @endforeach
          </tbody>
        </table>

      </div>
@endsection