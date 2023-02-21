@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <h1 class="h2">Fasilitas Hotel</h1>   </div>

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
              <th scope="col">Nomor Telepon</th>
              <th scope="col">Email</th>
              <th scope="col" colspan="2">Role</th>
  
            </tr>
          </thead>

          <tbody>
        @foreach($users as $user)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->noTelp }}</td>
              <td>{{ $user->email }}</td>
              <td>
                
                @if( $user->role === 0)
                {{ 'Pelanggan' }}
                @elseif($user->role === 2)
                {{ 'Reservasi' }}
                @elseif($user->role === 1)
                {{ 'Admin' }}
                @endif
            
            </td>
              <td>
                
               

                 <div class="dropdown">
                    <p class="d-none">
                        @include('dashboard.users.edit')  
                       </p>
                  <i class="bi bi-three-dots" class=" dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">  </i>     
                    <ul class="dropdown-menu">
                      @include('dashboard.users.edit')                 
                      <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
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
      </div>
@endsection