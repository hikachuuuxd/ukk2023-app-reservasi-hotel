@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ">
        <h1 class="h2">Room's Fasilities</h1>   </div>

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
              <th scope="col" colspan="2">Name</th>
            
  
            </tr>
          </thead>

          <tbody>
        @foreach($fasilities as $fasility)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{ $fasility->name }}</td>
              <td>
                
               

                 <div class="dropdown">
                
                  <i class="bi bi-three-dots" class=" dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"">  </i>
                  
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/dashboard/fasilities/{{$fasility->id}}/edit">Edit</a></li>
                      <li>                  
                      <form action="/dashboard/fasilities/{{ $fasility->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="dropdown-item" onclick="return confirm('yakin?')">Delete</span></button>
                    </form>

                      </li>
                    </ul>
                  </div>
              
              </td>
            </tr>
        @endforeach
          </tbody>
        </table>

        <a href="/dashboard/fasilities/create" class="btn btn-dark mt-3">Tambah Fasilitas</a>
      </div>
@endsection