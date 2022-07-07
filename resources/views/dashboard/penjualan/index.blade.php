@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pemesanan</h1>
        
      </div>

      <div class="table-responsive col-lg-8 mt-4 ">
    @if(auth()->user()->level=='owner')
    <a href="/dashboard/penjualan/createdata" class="btn btn-success mb-3"> Buat pesanan </a>
    @elseif(auth()->user()->level=='admin')
    <a href="/dashboard/penjualan/createdata" class="btn btn-warning mb-3"> Buat pesanan </a>
    @endif

</div>

        @if(session()-> has('berhasil'))
        <div class="alert alert-success" role="alert">
            {{session('berhasil') }}
        </div>
        @endif

        @if(session()-> has('terhapus'))
        <div class="alert alert-danger" role="alert">
            {{session('terhapus') }}
        </div>
        @endif

      <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    
                <main>
                    
                    

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nomor Transaksi</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Nama Pemesan</th>
                                            <th>Alamat</th>
                                            <th>Pesanan</th>
                                            <th>Kuantitas</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                        
                                        <tr>
                                            <th>Nomor Transaksi</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Nama Pembeli</th>
                                            <th>Alamat</th>
                                            <th>Pesanan</th>
                                            <th>Kuantitas</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($penjualan as $data)
                                        <tr>
                                            <td>{{$data -> nomortransaksi}}</td>
                                            <td>{{$data -> tanggal}}</td>
                                            <td>{{$data -> namaPembeli}}</td>
                                            
                                            <td>{{$data -> alamat}}</td>
                                            
                                            <td>{{$data -> pesanan}}</td>
                                            <td>{{$data -> kuantitas}}</td>
                                            <td>
                                                <form action ="/dashboard/penjualan/{{$data->id}}" method="post">
                                                @method('delete')    
                                                @csrf
                                                <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda ingin menghapus data?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/js/dashboard1.js"></script>
       
        
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/js/datatables-simple-demo.js"></script>

        
    </body>



@endsection