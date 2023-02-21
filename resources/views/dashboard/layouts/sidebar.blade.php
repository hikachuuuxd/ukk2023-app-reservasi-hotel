<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" >
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
        
          <li class="nav-item ">
            <a class="nav-link {{ Request::is('dashboard')? 'active' : '' }} text-white link-dark border-bottom mb-3 " aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom text-white"></span>
              Dashboard
            </a>
          </li>
        @can('admin')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/rooms*')? 'active' : '' }} text-white link-dark" href="/dashboard/rooms">
              <span data-feather="file" class="align-text-bottom text-white"></span>
              Kamar
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/fasilities*')? 'active' : '' }} text-white link-dark" href="/dashboard/fasilities">
              <span data-feather="file" class="align-text-bottom text-white"></span>
              Fasilitas Kamar
            </a>
          </li>
          @endcan
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/orders*')? 'active' : '' }} text-white link-dark" href="/dashboard/orders">
              <span data-feather="file" class="align-text-bottom text-white"></span>
              Pemesanan
            </a>
          </li>
          @can('admin')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/hotels*')? 'active' : '' }} text-white link-dark" href="/dashboard/hotels">
              <span data-feather="file" class="align-text-bottom text-white"></span>
              Fasilitas Hotel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/users*')? 'active' : '' }} text-white link-dark" href="/dashboard/users">
              <span data-feather="file" class="align-text-bottom text-white"></span>
              Pengguna
            </a>
          </li>
          @endcan

        </ul>

      </div>
    </nav>