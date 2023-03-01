

<!-- Button trigger modal -->
<a type="button" class="" data-bs-toggle="modal" data-bs-target="#view{{$order->id}}">
    @if($order->status == 1)
        <button type="button" class="btn btn-dark rounded-0 bi bi-pencil-square d-none"> Edit</button></a>
    @elseif($order->status == 2)
        <button type="button" class="btn btn-dark rounded-0 bi bi-pencil-square d-none"> Edit</button></a>
    @else
         <button type="button" class="btn btn-dark rounded-0 bi bi-pencil-square"> Edit</button></a>
    @endif
    </a>
    
<!-- Modal -->

<div class="modal fade" id="view{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan Kamar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  
        <form action="/orders/{{ $order->id }}" method="POST" >
            @method('put')
          @csrf

          <div class="row">
            <div class="col">
                <div class="form-floating mb-3 ">
                
                    <input type="date" class="form-control @error('Checkin')is-invalid @enderror rounded-0" id="Checkin"  name= "Checkin" value="{{ old('Checkin', $order->Checkin) }}" placeholder="Check-in">
                    <label for="Checkin"  >Tanggal Check-in</label>
                    @error('Checkin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                   
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="date" class="form-control @error('Checkout')is-invalid @enderror rounded-0" id="Checkout"  name="Checkout" value="{{ old('Checkout', $order->Checkout) }}">
                    <label for="Checkout" >Tanggal Check-out</label>
                    @error('Checkout')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                   
                </div>
            </div>
          </div>

              <div class="form-floating mb-3">
                  <input type="number" class="form-control @error('totalRoom')is-invalid @enderror rounded-0" id="totalRoom"  name="totalRoom" value="{{ old('totalRoom', $order->totalRoom) }}">
                  <label for="totalRoom" class="form-label">Jumlah Kamar</label>
                  @error('totalRoom')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>

  
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-dark" >Edit</button>
        </div>
        </form>
      </div>
    </div>
  
  </div>
 