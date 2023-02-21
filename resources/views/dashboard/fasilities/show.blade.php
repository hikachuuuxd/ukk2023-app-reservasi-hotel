<!-- Button trigger modal -->
<a type="button" class="" data-bs-toggle="modal" data-bs-target="#view{{$fasility->id}}">
<span data-feather="eye" >
</a>

<!-- Modal -->
@foreach($fasilities as $fasility)
<div class="modal fade" id="view{{$fasility->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="text" class="form-control" id="nama" value="{{$fasility->name}}">
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