@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Fasilitas</h1>   </div>

        <div class="col-md-6">
        <form action="/dashboard/hotels" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="name" class="form-label ">Nama Fasilitas Kamar</label>
                <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name= "name" value="{{ old('name') }}">

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               
            </div>
            <div class="mb-3">
                    <label for="image" class="form-label"> Image</label>
                    <input class="form-control @error('image')is-invalid @enderror" type="file" id="image" name="image" accept="image/*">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            

            <button type="submit" class="btn btn-dark mt-4">Submit</button>
        </form>
        </div>
        
      </div>

      
@endsection