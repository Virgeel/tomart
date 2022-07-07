@extends ('layouts.navbar')

@section('container')
<div style="backgrund: url('/images/bgtomart.png')">
<div class="container mt-4">
<h1><center> Tomart's Menu </center></h1>
</div>

                                

<div style="margin-left:115px;padding-top:30px">

<a href="/loginuser" class="btn btn-success"> Punya pesanan khusus ? Pesan sekarang ! </a>
</div>



<div class="container mt-4">
    <div class="row">
        
        @foreach ($posts-> skip(0) as $post)

        <div class="col-md-5">
        <div class="card">
            <img src="{{$post-> image}}" class="card-img-top" alt="buah" width="100" height="250">
            <div class="card-body">
            <h5 class="card-title">{{$post-> title}} </h5>
            <p class="card-text">{{$post-> excerpt}}</p>
            <a href="/posts/{{$post -> id}}" class="btn btn-warning"> Cek </a>
            </div>
        </div>
        </div>
        @endforeach
    </div>
    
</div>
</div>



@endsection