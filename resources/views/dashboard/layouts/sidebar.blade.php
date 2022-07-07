<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}} " aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/dashboard/posts">
              <span data-feather="box"></span>
              Items
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/penjualan*') ? 'active' : ''}} " href="/dashboard/penjualan">
              <span data-feather="shopping-cart"></span>
              Pemesanan
            </a>
          </li>
          @if (auth()->user()->level=="owner")
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/register*') ? 'active' : ''}} " href="/dashboard/register">
              <span data-feather="user"></span>
              Akun
            </a>
          </li>
          @endif
          
        </ul>

        
      </div>
    </nav>