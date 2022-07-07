@extends('layouts.navbar')

@section('container')

<!DOCTYPE html>
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
    <body class="bg-warning">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5 bg-info">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4 text-light">Login</h3></div>
                                    <div class="card-body">

                                        

                                        @if(session()-> has('loginError'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('loginError')}}
                                        </div>
                                        @endif
                                        @if(session()-> has('success'))
                                        <div class="alert alert-info" role="alert">
                                            {{session('success')}}
                                        </div>
                                        @endif
                                        <form action="/loginUser" method="post">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name ="email" placeholder="name@example.com" value="{{old('email')}}" autofocus required>
                                                <label for="email">Email address</label>

                                                @error('email')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                        @enderror
                                            </div>
                                            
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" type="password" placeholder="Password" />
                                                        <label for="password">Password</label>
                                                        @error('password')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                        @enderror
                                                
                                               
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button class = "w-100 btn btn-lg btn-warning mt-3 text-light" type="submit"> Login </button>
                                            </div>
                                            <a href="/registeruser" style="color:white;font-size:14px">Belum mempunyai akun ? Registrasi Sekarang</a>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

@endsection