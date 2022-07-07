@extends('layouts.navbar')

@section('container')

<article>
<div class="container-xl ml-4 mt-3">
    <h2>{{$title}}</h2>
    <h5>{{$excerpt}}</h5>
    <p><img src="{{$image}}" width=300px class=img-buled></p>
    <h6>{{$body}}</h6>
</div>

<div class="container ml-4 mb-4">
<a class="btn btn-primary bg-warning text-black" href="/landing">Beli di Tomart!</a>
</div>

</article>
<div class="container ml-4 mb-4">   
<a href="/posts"> Kembali ke Menu </a>
</div>


@endsection
