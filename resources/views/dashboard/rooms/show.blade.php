<!-- Button trigger modal -->
<a type="button" class="" data-bs-toggle="modal" data-bs-target="#view{{$room->id}}">
<button class="btn darkblue">view</button>
</a>

<!-- Modal -->
@foreach($rooms as $room)
<div class="modal fade" id="view{{$room->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" >
        <div class="container">
        <div class="row">
                <div class="col">
                     <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" value="{{$room->name}}">
                </div>
            </div>
     
            <div class="row">
                <div class="col">
                <label for="des" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="des" value="{{$room->description}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" value="{{$room->price}}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="total" class="form-label">Total</label>
                <input type="text" class="form-control" id="total" value="{{$room->total}}">
                </div>
            </div>

       
 
        </div>
            

            
        </form>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endforeach