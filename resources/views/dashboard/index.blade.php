@extends('dashboard.layouts.main')

@section('container')
@php
      use App\Models\Room;
      use App\Models\Order;
      use App\Models\Fasility;
@endphp
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
@auth
<h4 class="">Selamat Datang {{ auth()->user()->name }}</h4>
@endauth

      </div>

<div class="container d-flex ms-0">
@can('admin')
                        <div class="dashboard-partikels bluedark rounded border-bottom mx-2 ">
                              <div class="container">
                                    <div class="row">
                        
                                          <div class="col mt-3 text-white">
                                                <div class="fs-6 fw-semibold">{{  auth()->user()->count()  }}</div>
                                          </div>
                                          <div class="col mt-3 " >
                                                <a href="/dashboard/users" class=" position-absolute top-0 end-0 me-3 text-decoration-none "><button class="bi bi-gear bg-transparent border-0 text-white" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="kelola"></button></a> 
                                          </div>
                                    </div>
                                    <div class="row">
                                                <div class="col text-white">
                                                      <small>Pengguna terdaftar</small>
                                                </div>

                                    </div>
                              </div>
            
                        </div>
 
      
               
                  <div class="dashboard-partikels orange rounded border-bottom mx-2 ">
                              <div class="container">
                                    <div class="row">
                                          <div class="col mt-3 text-white">

                                                <div class="fs-6 fw-semibold">{{  Room::count()  }}</div>
                                          </div>
                                          <div class="col mt-3 ">
                                                <a href="/dashboard/rooms" class="bi bi-gear position-absolute top-0 end-0 me-3 text-decoration-none text-white"></a>
                                          </div>
                                          </div>
                                          <div class="row">
                                                <div class="col text-white">
                                                      <small>Kamar</small>
                                                </div>
                                          </div>

                              </div>
                        </div>
          
@endcan             
                  <div class="dashboard-partikels dark rounded border-bottom  mx-2">
                              <div class="container">
                                    <div class="row">
                                          
                                          <div class="col mt-3 text-white">

                                                <div class="fs-6 fw-semibold">{{ Order::count()  }}</div>
                                          </div>
                                          <div class="col mt-3 ">
                                                <a href="/dashboard/orders" class="bi bi-gear position-absolute top-0 end-0 me-3 text-decoration-none text-white"></a>
                                          </div>
                                          </div>
                                          <div class="row">
                                                <div class="col text-white">
                                                      <small>Pesanan masuk</small>
                                                </div>
                                          </div>

                              </div>
                        </div>

               
 @can('admin')             
                  <div class="dashboard-partikels purple rounded border-bottom mx-2 ">
                              <div class="container">
                                    <div class="row">
                                          <div class="col mt-3 text-white">

                                                <div class="fs-6 fw-semibold">{{  Fasility::count()  }}</div>
                                          </div>
                                          <div class="col mt-3 ">
                                                <a href="/dashboard/hotels" class="bi bi-gear position-absolute top-0 end-0 me-3 text-decoration-none text-white"></a>
                                          </div>
                                          </div>
                                          <div class="row">
                                                <div class="col text-white">
                                                      <small>Fasilitas Kamar</small>
                                                </div>
                                          </div>

                              </div>
                        </div>
@endcan
      </div>
@endsection