@extends('layouts.navbar')

@section('container')

<div class="card mb-3 align-items-center " style="max-width: 2200px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('images/3.jpeg') }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Tomart</h5>
        <p class="card-text"> Hubungi Kami dan Pesan Sekarang! Kami akan mengantarkan barang belanjaanmu sampai ke tempatmu.</p>
        <p class="card-text">
        <div class="row">
      <div class="col">
        <img src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-1.png" width="35px">
</div>
    <div class="col-11">
        {{$ContactUs}}
</div>
<div class="col">
</div>
        </small></p>
      </div>
    </div>
  </div>
</div>

@endsection

<!-- Bootstrap core JS-->
<script src="/js/scripts.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
       