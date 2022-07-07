@extends('layouts.navbar')

@section('container')

<script src="/js/scripts.js"></script>
<div style="margin-left:40px">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="font-weight:bold">Buat Data Baru</h1>

</div>

<div class="col-lg-8">
<form method="post" action="/buatpesanan" enctype="multipart/form-data">
    @csrf

    <div>
    <input name="nomortransaksi" style="display:none;" type="text" id="nomortransaksi" value="" MAXLENGTH=16 SIZE=16>
    </div>
    
  <!-- <div class="mb-3">
    <label for="nomortransaksi" class="form-label">Nomor Transaksi</label>
    <input type="text" class="form-control @error ('nomortransaksi') is-invalid @enderror" id="nomortransaksi" name="nomortransaksi" value="{{ old ('nomortransaksi') }}">
    @error('nomortransaksi')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror

  </div> -->
  <div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal Pemesanan</label>
    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old ('tanggal') }}">
  @error('tanggal')
  <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror

  
  </div>
  <div class="mb-3">
    <label for="namaPembeli" class="form-label">Nama Pemesan</label>
    <input type="text" class="form-control @error('namaPembeli') is-invalid @enderror" id="namaPembeli" name="namaPembeli" value="{{auth() ->user() -> name }}">
    @error('namaPembeli')
  <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror

  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat Pemesan</label>
    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old ('alamat') }}">
    @error('alamat')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
<div class="row">
  <div class="col-md-6 mb-3">
    <label for="pesanan" class="form-label">Pesanan</label>
    <input type="text" class="form-control @error('pesanan') is-invalid @enderror" id="pesanan" name="pesanan" value="{{ old ('pesanan') }}">
    @error('pesanan')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="col-md-2 mb-3">
    <label for="kuantitas" class="form-label">Kuantitas</label>
    <input class="form-control @error('kuantitas') is-invalid @enderror" id="kuantitas" name="kuantitas" value="{{ old ('kuantitas') }}">
    
    @error('kuantitas')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
</div>
  
  <button type="submit" class="btn btn-warning">Buat Item</button>
</form>
</div>
</div>
@endsection