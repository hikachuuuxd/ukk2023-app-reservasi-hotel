

@extends('layouts.main')

@section('container')
<h3 class="text-center mt-5 mb-3">{{ $title }}</h3>


<div class="container">
    <div class="row justify-content-center mt-5 mb-3">
    @foreach($rooms as $room)
        <div class="col-md-4" >
        <div class="card mb-3">
  <img src="img/{{ $room->image }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title ">{{ $room->name }}</h5>
    
    <h6 class="card-title">Fasilitas<ul class=" mt-3"> 
    @foreach($room->fasilities as $fasility)
        <li>{{ $fasility->name }}</li>
    @endforeach
    </ul></h6>

    <p class="card-text d-block">{{ $room->description }}</p>
    <h6 class="card-text d-block">Rp.{{ $room->price }}/Malam</h6>
    <button type="button" class="btn btn-dark w-50" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Pesan
    </button> 
    <p class="card-text d-block"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
        </div>
        @endforeach
    </div>
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form action="" method="post">
          <div class="p-2 mb-2">
            <label for="inputPassword5" class="form-label">JUDUL</label >
            <input type="text" id="inputPassword5" class="form-control" >
          </div>
          <div class="p-2 mb-2">
            <label for="inputPassword5" class="form-label">JUDUL</label >
            <input type="text" id="inputPassword5" class="form-control" >
          </div>
          <div class="p-2 mb-2">
            <label for="inputPassword5" class="form-label">JUDUL</label >
            <input type="text" id="inputPassword5" class="form-control" >
          </div>
          <div class="p-2 mb-2">
            <label for="inputPassword5" class="form-label">JUDUL</label >
            <input type="text" id="inputPassword5" class="form-control" >
          </div>
  
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
        <a href="/order"><button type="button" class="btn btn-dark w-100">Konfirmasi Pemesanan</button></a>
      </div>
    </div>
  </div>
</div>
<!-- endmodal -->
@endsection