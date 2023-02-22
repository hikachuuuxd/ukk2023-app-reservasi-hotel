@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Rooms</h1>   </div>

        <div class="col-md-6">
        <form action="/dashboard/rooms/{{ $room->id}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
            <div class="mb-3">
                <label for="name" class="form-label ">Tipe Kamar</label>
                <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name = "name" value="{{ old('name', $room->name) }}">

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug')is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $room->slug) }}">

                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="text" class="form-control @error('price')is-invalid @enderror" id="price" name="price" value="{{ old('price',  $room->price) }}">

                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Jumlah Kamar</label>
                <input type="text" class="form-control @error('total')is-invalid @enderror" id="total" name="total" value="{{ old('total', $room->total) }}">

                @error('total')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label"> Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $room->image }}">
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image')is-invalid @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
            <div class="mb-3">
                <label for="fasility" class="form-label">Fasilitas</label>

                <div class="form-check">
                <select class=" selectpicker" multiple  data-live-search="true" aria-label="Default select example" name= "fasility_id[]">
     
                
                @foreach($fasilities as $fasility)
                    <option class ="w-25" value="{{$fasility->id}}"   @foreach($room->fasilities as $rooms) {{ old('fasility_id[]', $rooms->id ) == $fasility->id? 'selected':null}} @endforeach > {{$fasility->name}} </option> 
                    @endforeach
                    </select>
                </div>
        
            </div>
            <div class="mb-3">
                <label for="description" class="form-label ">Deskripsi</label>
                <input type="text" class="form-control @error('description')is-invalid @enderror" id="description" name= "description" value="{{ old('description', $room->description)}}">

                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               
            </div>
            <!-- <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                @error('description')
                   <p class="text-danger">
                   {{ $message }}
                   </p>
                @enderror
                <input type="hidden" class="form-control" id="description" name="description"  value="{{ old('description') }}">
                <trix-editor input="description "></trix-editor>
            </div> -->

            <button type="submit" class="btn btn-dark mt-4">Submit</button>
        </form>
        </div>
        
      </div>

      <script>
          const name = document.querySelector('#name');
          const slug = document.querySelector('#slug');

          name.addEventListener('change', function(){
                fetch('/dashboard/rooms/checkSlug?name=' + name.value)
                .then((response) => response.json())
                .then((data )=> slug.value = data.slug)
          });

          document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
          });
      </script>
@endsection