@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Items in Tomart</h1>
        </div> 

        <div class="table-responsive col-lg-8 mt-4 ">
            <a href="/dashboard/posts/create" class="btn btn-warning mb-3"> Create New Item </a>

        </div>

        @if(session()-> has('success'))
        <div class="alert alert-primary" role="alert">
            {{session('success') }}
        </div>
        @endif

        @if(session()-> has('deleted'))
        <div class="alert alert-danger" role="alert">
            {{session('deleted') }}
        </div>
        @endif

        @if(session()-> has('updated'))
        <div class="alert alert-success" role="alert">
            {{session('updated') }}
        </div>
        @endif
        
<div class="container mt-4">
    <div class="row">

        
        
        @foreach ($posts-> skip(0) as $post)

        <div class="col-md-5">
        <div class="card">
            @if (str_contains($post->image,"https"))
            <img src="{{$post-> image}}" class="card-img-top" alt="buah" width = "100" height = "250">
            @else
            <img src={{asset ('storage/foto_produk/'.$post->image) }} class="card-img-top" alt="buah" width = "100" height = "250">
            @endif
            <div class="card-body">
            <h5 class="card-title">{{$post-> title}} </h5>
            <p class="card-text">By {{$post->user->name}}</p>
            <p class="card-text">{{$post-> excerpt}}</p>
            <a href="/posts/{{$post -> id}}" class="btn btn-warning"> Cek </a>
            <a href="/dashboard/posts/{{$post -> id}}/edit" class="btn btn-success"> Edit </a>
            <form action="/dashboard/posts/{{$post->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data?')">
                    Delete
                </button>
            </form>
            
            </div>
        </div>
        </div>
        @endforeach

        
    </div>
    



    </div>


    
@endsection

