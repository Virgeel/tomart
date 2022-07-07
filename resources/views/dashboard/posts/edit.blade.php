@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Item</h1>

</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/posts/{{$post->id}}/edit" enctype="multipart/form-data">
    @method('post')
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Nama Item</label>
    <input type="text" class="form-control @error ('title') is-invalid @enderror " id="title" name="title" value="{{ old ('title', $post -> title) }}">
    @error('title')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror

  </div>
  
    <div class="mb-3">
    <label for="category_id" class="form-label">Nomor barang</label>
    <input type="text" class="form-control @error ('category_id') is-invalid @enderror " id="category_id" name="category_id" value="{{ old('category_id', $post -> category_id)}}">
    @error('category_id')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror

  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Deskripsi</label>
    <input type="text" class="form-control @error ('body') is-invalid @enderror " id="body" name="body" value="{{old('body', $post -> body)}}">
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
    <input type="text" class="form-control @error ('image') is-invalid @enderror " id="image" name="image" value="{{old('image',$post->image)}}">
    @error('image')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror

  </div>

  <div class="mb-3">
  <label for="image" class="form-label">Upload Foto</label>
  <input class="form-control @error ('image') is-invalid @enderror " type="file" id="image" name="image" value="{{old('image',$post->image)}}">
  @error('image')
  <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror
</div>

  <button type="submit" class="btn btn-warning">Update Item</button>
</form>
</div>
@endsection