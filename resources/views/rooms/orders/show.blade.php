
@extends('layouts.main')

@section('container')

<div class="container mt-5 text-center">
        <div class="row justify-content-center  ">
                <div class="col-md-8">
               <div class="table-responsiv">
               <table  class="  table border table-borderless caption-top " >
                <caption>Struck Pemesanan</caption>
                        <thead>
                        <tr   class="table-light ">
                                <td class="border-bottom p-4" colspan="2">{{ $order->user->name}}<br>
                                <small>{{ $order->user->email }} | {{ $order->user->noTelp }}</small>

                                </td>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                                <td class="p-4" colspan="2">{{ $order->room->name }} <br>
                                <small>{{ $order->Checkin }} - {{ $order->Checkout}}</small>
                                </td>
                        </tr>

                        <tr >
                                <td class="text-start">Harga Kamar</td>
                                <td class="text-end">Rp. {{ $order->room->price }}/malam</td>
                        </tr>
                        <tr>
                                <td class="text-start">Jumlah Hari</td>
                                @php
                                use Carbon\Carbon;
                                function hari($Checkin, $Checkout){
                                        $awal = new Carbon($Checkin);
                                        $akhir = new Carbon($Checkout);
                                        $selisih = $awal->diffInDays($akhir);
                                        return $selisih;
                                }
                                @endphp
                                <td class="text-end">{{ hari($order->Checkin, $order->Checkout)}} hari</td>
                        </tr>
                        <tr>
                                <td class="text-start">Jumlah Kamar</td>
                                <td class="text-end">{{ $order->totalRoom}} kamar</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr class="border-top">
                                <td class="text-start py-4">Total Harga</td>
                                @php
                                function day($Checkin, $Checkout, $price, $room){
                                        $awal = new Carbon($Checkin);
                                        $akhir = new Carbon($Checkout);
                                        $selisih = $awal->diffInDays($akhir);
                                        $total = ($selisih*$price)*$room;
                                        return $total;
                                }
                                @endphp
                                <td class="text-end">Rp. {{ day( $order->Checkin, $order->Checkout, $order->room->price, $order->totalRoom) }}</td>
                        </tr>
                        <tr>
                       
                                <td colspan="2" class="bg-dark text-white"> 
                                      <small>
                                      @if($order->status === 1)
                                        {{ "Pesanan telah dikonfirmasi" }}
                                        @elseif($order->status === 2)
                                        {{ "Berhasil Checkout" }}
                                        @else
                                        {{ "Pesanan Belum dibayar" }}
                                        @endif
                                      </small>
                                </td>
                        </tr>
                        </tfoot>

                </table>
               </div>
                </div>
        </div>
        <div class="row  mt-3">
                <div class="col ">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example rounded-0">
                                <a href="/orders/cetak/{{ $order->id }}" target="_blank"><button type="button" class="btn btn-primary rounded-0 bi bi-printer"> Print</button></a>
                              @include('rooms.orders.edit')

                        <div>                                
                                <form action="/orders/{{ $order->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        
                                        @if($order->status === 2)
                                        <button class="btn btn-danger rounded-0 bi bi-x-circle" onclick="return confirm('yakin?')"> Hapus </button>
                                        @elseif($order->status === 1)
                                        <button type="button" class="btn btn-secondary rounded-0 bi bi-x-circle" onclick="return confirm('yakin?')"> Batalkan </button>
                                        @else
                                        <button class="btn btn-danger rounded-0 bi bi-x-circle" onclick="return confirm('yakin?')"> Batalkan </button>
                                        @endif
                                  
                                </form>
                                </div>
                                                

                                
                        </div>
                </div>
        </div>
</div>




@endsection