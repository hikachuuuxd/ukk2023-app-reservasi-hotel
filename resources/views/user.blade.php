@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row text-center mt-5 mb-5">
        <div class="col-md-12">

            <nav aria-label="...">
        <ul class="pagination pagination-lg">
        <li class="page-item " aria-current="page">
        <a class="page-link" href="/order">Info Pemesanan</a>
        </li>
        <li class="page-item active"><a class="page-link" href="/user">Data Pribadi</a></li>
        </ul>
            </nav>

        </div>

    </div>
    <div class="row justify-content-center text-center">

        <div class="col">
            {{ $order->user->name }}
        </div>
        <div class="col">
            {{ $order->user->email }}
        </div>
        <div class="col">
        {{ $order->user->noTelp }}
        </div>
    </div>
</div>
@endsection