
<header class="navbar sticky-top  flex-md-nowrap p-0 shadow navbar-expand-lg navbar-dark p-2 bg-dark">
  <div class="container">
    <a class="navbar-brand px-5 w-100 position-absolute top-0 start-0"  href="#">HOTEL HEBAT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav  " style="margin-left : 1300px">
  
            <li class="nav-item dropdown">
            
              <a class="nav-link dropdown-toggle {{ Request::is('/')? 'active' : '' }} " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" > 
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
             
              <ul class="dropdown-menu bg-dark">
                <li><a href=" /" class="dropdown-item text-white link-dark" >Home</a></li>
                      <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item text-white link-dark" >Logout</button>
                      </form>
                      </li>
                </ul>
            </li>

          
      </ul>


    </div>
</div>
</header>
