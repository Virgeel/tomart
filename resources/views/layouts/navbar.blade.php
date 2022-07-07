<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tomart | Your Favorite E-Market</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>

    
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav" style="background-color:green;padding-top:1px;padding-bottom:1px;">
            
            <div class="container px-4 px-lg-5">
                @auth
                    @if(auth()->user()->level=='admin')
                    <a class="navbar-brand " href="/dashboard"><img src={{asset ('images/logo.png') }} width="45"> Welcome to Home, Admin {{auth() ->user() -> name}}!</a>
                    @elseif(auth()->user()->level=='owner')
                    <a class="navbar-brand " href="/dashboard"><img src={{asset ('images/logo.png') }} width="45"> Welcome to Home, Owner {{auth() ->user() -> name}}!</a>  
                    @elseif(auth()->user()->level=='user')
                    <a class="navbar-brand " href="/dashboard"><img src={{asset ('images/logo.png') }} width="45"> Welcome to Home, user {{auth() ->user() -> name}}!</a>
                    @endif    
                @else
                <a class="navbar-brand " href="/home"><img src={{asset ('images/logo.png') }} width="45">Welcome to Tomart</a>
                @endauth
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/posts">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="/landing">How to Order</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div>
    @yield('container')
<div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/js/scripts.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js">
 
  </body>
</html>