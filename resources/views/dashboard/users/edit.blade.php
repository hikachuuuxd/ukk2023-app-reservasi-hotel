<!-- Button trigger modal -->
<a type="button" class="" data-bs-toggle="modal" data-bs-target="#view{{$user->id}}">
    <button class="dropdown-item" >Edit</span></button>
    </a>
    
    <!-- Modal -->
    @foreach($users as $user)
    <div class="modal fade" id="view{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Role</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <div class="modal-body">
            <form action="/dashboard/users/{{ $user->id }}" method="POST" >
                @method('put')
                @csrf
            <div class="container">
            <div class="row">
                    <div class="col">
                         <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" value="{{$user->name}}" readonly>
                    </div>
                </div>
         
                <div class="row">
                    <div class="col">
                    <label for="noTelp" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="noTelp" value="{{$user->noTelp}}" readonly>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" value="{{$user->email}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" aria-label="Default select example" name="role">

                        <option value="0">Pelanggan</option>
                        <option value="1">Admin</option>
                        <option value="2">Reservasi</option>
                      </select>
                    </div>
                </div>
    
           
     
            </div>
                
    
                
           
          </div>
    
    
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach