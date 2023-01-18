@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row text-center mt-5 mb-5">
        <div class="col-md-12">

            <nav aria-label="...">
        <ul class="pagination pagination-lg">
        <li class="page-item active" aria-current="page">
        <span class="page-link">Info Pemesanan</span>
        </li>
        <li class="page-item"><a class="page-link" href="/user">Data Pribadi</a></li>
        </ul>
            </nav>

        </div>

    </div>
    <div class="row justify-content-evenly">
        <div class="col-md-6">
        
            <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="img/{{ $order->room->name }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $order->room->name }}</h5>
                    <small><p class="card-text">{{ $order->room->description }}</p></small>
                    <h6 class="card-text d-block">Rp.{{ $order->room->price }}/Malam</h6>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <table cellpadding="10px" cellspacing="0">
                <tr>
                    <td>Check-In</td>
                    <td>:</td>
                    <td>{{ $order->Checkin }}</td>
                </tr>
                <tr>
                    <td>Check-Out</td>
                    <td>:</td>
                    <td>{{ $order->Checkout }}</td>
                </tr>
                <tr>
                    <td>Jumlah Kamar</td>
                    <td>:</td>
                    <td>{{ $order->totalRoom }}</td>
                </tr>
                <tr>        
                    <td>Jenis Kamar</td>
                    <td>:</td>
                    <td>{{ $order->room->name }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection