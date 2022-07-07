@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Item Baru</h1>

</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/posts" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Nama Item</label>
    <input type="text" class="form-control @error ('title') is-invalid @enderror " id="title" name="title" value="{{ old ('title') }}">
    @error('title')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror

  </div>

  <div class="mb-3">
    <label for="users_id" class="form-label">Nama Admin</label>
    <input type="text" class="form-control @error ('users_id') is-invalid @enderror " id="users_id" name="users_id" value="{{ auth()->user()->name}}">
    @error('users_id')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror

  </div>

  
  
    <div class="mb-3">
    <label for="category_id" class="form-label">Nomor barang</label>
    <input type="text" class="form-control @error ('category_id') is-invalid @enderror " id="category_id" name="category_id" value="{{ old('category_id')}}">
    @error('category_id')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror

  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Deskripsi</label>
    <input type="text" class="form-control @error ('body') is-invalid @enderror " id="body" name="body" value="{{old('body')}}">
    @error('body')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
    
  </div>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4>Silahkan pilih cara upload foto</h4>

</div>

  <div class="mb-3">
    <label for="image" class="form-label">Link Foto</label>
    <input type="text" class="form-control @error ('image') is-invalid @enderror " id="image" name="foto" value="{{old('image')}}">
    @error('foto')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror

  </div>

  <div class="mb-3">
  <label for="image" class="form-label">Upload Foto</label>
  <input class="form-control @error ('image') is-invalid @enderror " type="file" id="image" name="image" value="{{old('image')}}">
  @error('image')
  <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror

</div>
  
  <button type="submit" class="btn btn-warning">Buat Item</button>
</form>
</div>
@endsection