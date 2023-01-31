
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand mt-2" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ms-auto">
    
              <li class="nav-item dropdown">
              
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                @auth 
                @if(auth()->user()->role == 1)
                  {{ "Admin" }}
                @elseif(auth()->user()->role == 2)
                  {{ "Reservasi" }}
                @elseif(auth()->user()->role == 0)
                  Welcome {{ auth()->user()->name }}
                @endif
                @else 
                  Home
                  @endauth
                </a>
               
                <ul class="dropdown-menu  bg-dark">
                      <li><a href=" /" class="dropdown-item text-white link-dark">Home</a></li>
                      @can('admin') <li><a class="dropdown-item text-white link-dark" href="/dashboard">Dashboard</a></li> 
                      @endcan
                        <li><hr class="dropdown-divider bg-white"></li>
                        @guest
                        <li><a href=" /login" class="dropdown-item text-white link-dark">Login</a></li>
                        <li><a href=" /register" class="dropdown-item text-white link-dark">Registrasi</a></li>
                        
                        @endguest
                        
                      @auth
                        <li>
                        <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item text-white link-dark" >Logout</button>
                        </form>
                        </li>
                  </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ Request::is('rooms')? 'active' : '' }}" href="/rooms">Kamar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/fasilitas">Fasilitas</a>
              </li>
              @endauth
            
        </ul>


      </div>
    </div>
  </nav>
    <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/login" ><i class="bi bi-box-arrow-in-right"></i> LOGIN</a>
                </li> -->

        <!-- <ul class="navbar-nav">
        
   
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
            
          </a>
          <ul class="dropdown-menu bg-dark">
          
          </ul>
        </li>
     
      </ul> -->