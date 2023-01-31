@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Rooms</h1>   </div>

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
              <th scope="col">Jumlah Kamar</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
  
            </tr>
          </thead>
          <tbody>
        @foreach($rooms as $room)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{ $room->name }}</td>
              <td>{{ $room->total }}</td>
           
              <td>
              @if($room->total == 0)
                {{ "kosong" }}
             @elseif($room->total < 10 )
                {{" hampir penuh" }}
             @else
                {{ "penuh" }}
            @endif          
            
            </td>
              <td>
                 @include('dashboard.rooms.show')
                  <a href="/dashboard/rooms/{{$room->id}}/edit" class="badge bg-warning"><span data-feather="edit" ></span></a>

                  <form action="/dashboard/rooms/{{ $room->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('yakin?')"><span data-feather="x-circle" ></span></button>
                  </form>
              
              </td>
            </tr>
        @endforeach
          </tbody>
        </table>

        <a href="/dashboard/rooms/create" class="btn btn-dark mt-3">Tambah Kamar</a>
      </div>
@endsection