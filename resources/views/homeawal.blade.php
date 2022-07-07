@extends('layouts.main')

@section('container')

<body id='page-top'>
<header class="masthead">
<div class="container px-4 px-lg-5 d-flex h-1000 align-items-center justify-content-center bg-success">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <img src={{asset ('images/2.png') }} class="figure-img img-fluid rounded" alt="...">
                        <h1 class="mx-auto my-0 text-uppercase">TOMART</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Your Favorite E-Market</h2>
                        <a class="btn btn-primary" href="/posts">Mulai Belanja</a>
                    </div>
                </div>
            </div>
</header>
<section class="about-section text-center bg-success" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Built with Bootstrap 5</h2>
                        <p class="text-white-50">
                            Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                            <a href="https://startbootstrap.com/theme/grayscale/">the preview page.</a>
                            The theme is open source, and you can use it for any purpose, personal or commercial.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
            </div>
        </section>

</body>

@endsection

<link href="/css/styles.css" rel="stylesheet" />
<script src="/js/scripts.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>