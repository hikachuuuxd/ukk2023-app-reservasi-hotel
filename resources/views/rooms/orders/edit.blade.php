<!-- Button trigger modal -->
<a type="button" class="" data-bs-toggle="modal" data-bs-target="#view{{$order->id}}">
    @if($order->status == 1)
        <button type="button" class="btn btn-dark rounded-0 bi bi-pencil-square"> Edit</button></a>
    @elseif($order->status == 2)
        <button type="button" class="btn btn-dark rounded-0 bi bi-pencil-square"> Edit</button></a>
    @else
         <button type="button" class="btn btn-dark rounded-0 bi bi-pencil-square"> Edit</button></a>
    @endif
    </a>
    
<!-- Modal -->

<div class="modal fade" id="view{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan Kamar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  
        <form action="/orders/{{ $order->id }}" method="POST" >
            @method('put')
          @csrf
              <div class="mb-3">
                  <label for="Checkin" class="form-label ">Tanggal Check-in</label>
                  <input type="date" class="form-control @error('Checkin')is-invalid @enderror" id="Checkin"  name= "Checkin" value="{{ old('Checkin', $order->Checkin) }}">
  
                  @error('Checkin')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                 
              </div>
              <div class="mb-3">
                  <label for="Checkout" class="form-label">Tanggal Check-out</label>
                  <input type="date" class="form-control @error('Checkout')is-invalid @enderror" id="Checkout"  name="Checkout" value="{{ old('Checkout', $order->Checkout) }}">
  
                  @error('Checkout')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                 
              </div>
              <div class="mb-3">
                  <label for="totalRoom" class="form-label">Jumlah Kamar</label>
                  <input type="number" class="form-control @error('totalRoom')is-invalid @enderror" id="totalRoom"  name="totalRoom" value="{{ old('totalRoom', $order->totalRoom) }}">
  
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
 