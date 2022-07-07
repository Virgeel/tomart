@extends('dashboard.layouts.main')


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
                            <div class="col-lg-7">
                            
                                <div class="card shadow-lg border-0 rounded-lg mt-5 bg-info">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4 text-light">Buat akun</h3></div>
                                    <div class="card-body">
                                    @if(session()-> has('success'))
                                        <div class="alert alert-info" role="alert">
                                            {{session('success')}}
                                        </div>
                                        @endif

                                        @if(session()-> has('hapus'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('hapus') }}
                                        </div>
                                         @endif
                                        <form action="/dashboard/register" method="post">
                                            @csrf
                                            
                                                    <div class="form-floating mb-3 mt-4">
                                                        <input class="form-control @error('name') is-invalid @enderror" name= "name" id="name" type="text" placeholder="name" value="{{old('name')}}" />
                                                        <label for="name">Nama</label>

                                                        @error('name')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                        @enderror
                                                   
                                                </div>
                                           
                                            <div class="form-floating mb-3">
                                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name ="email" placeholder="name@example.com" value="{{old('email')}}"/>
                                                <label for="email">Email address</label>

                                                @error('email')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                        @enderror
                                            </div>

                                            <div class="form-floating mb-3">
                                                <select class="form-select @error('level') is-invalid @enderror" id="level" type="level" name ="level" placeholder="level" value="{{old('level')}}">
                                                <option selected>Pilih jenis user</option>
                                                <option value="admin">admin</option>
                                                <option value="owner">owner</option>
                                                </select>

                                                @error('level')
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
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class = "w-100 btn btn-lg btn-warning mt-3 text-light" type="submit"> Register </button></div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               
                            </div>

                    <div class="card-body"> 
                        <div style="padding:11px;width:14%;margin-left:10px;text-transform: uppercase;font-weight:bold;background-color:#e4c662;border-radius:10px;">
                            Table Aktor
                        </div>
                        <table id="datatablesSimple"> 
                                    <thead>
                                        <tr>
                                            <th>Nama Aktor</th>
                                            <th>Email Aktor</th>
                                            <th>Level Aktor</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach ($admin as $akun)
                                        <tr>
                                            <td>{{$akun -> name}}</td>
                                            <td>{{$akun -> email}}</td>
                                            <td>{{$akun -> level}}</td>
                                            <td>
                                                <form action ="/dashboard/register/{{$akun->id}}" method="post">
                                                @method('delete')    
                                                @csrf
                                                <button class="btn btn-outline-danger" style="padding:15px" onclick="return confirm('Apakah anda ingin menghapus data?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @foreach ($user as $akun)
                                        <tr>
                                            <td>{{$akun -> name}}</td>
                                            <td>{{$akun -> email}}</td>
                                            <td>{{$akun -> level}}</td>
                                            <td>
                                                <form action ="/dashboard/register/{{$akun->id}}" method="post">
                                                @method('delete')    
                                                @csrf
                                                <button class="btn btn-outline-danger" style="padding:15px" onclick="return confirm('Apakah anda ingin menghapus data?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
</div>

                
                            </div>
                    </div>
                </main>
            </div>
</div>

            
            
           
    </body>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/js/dashboard1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/js/datatables-simple-demo.js"></script>
</html>

@endsection