<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container">
      <a class="navbar-brand mt-2" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav d-flex  mt-2">
    
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kamar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Fasilitas</a>
          </li>
        </ul>

        <ul class="navbar-nav mt-2 ms-auto">
        
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item" >Logout</button>
            </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login" ><i class="bi bi-box-arrow-in-right"></i> LOGIN</a>
        </li>
        @endauth
      </ul>
      </div>
    </div>
  </nav>
