@if(auth()->user()->level=='owner')

<header class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/home">Home</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-light w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <form action="/logout" method="post">
      @csrf
    <button type="submit" style="font-family:Varela Round;background-color:transparent;border-style:none;padding:15px;color:white;"> Logout </button>
    </form>
  </div>
</header>
@endif

@if(auth()->user()->level=='admin')

<header class="navbar navbar-dark sticky-top bg-warning flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/home">Home</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <form action="/logout" method="post">
      @csrf
    <button type="submit" style="font-family:Varela Round;background-color:transparent;border-style:none;padding:15px;color:white;"> Logout </button>
    </form>
  </div>
</header>
@endif

