

@section('container')
<!DOCTYPE html>


    <body id="page-top">
        <!-- Navigation-->
        @extends('layouts.navbar')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        
                        <h2 class="text-black mx-auto mt-5 mb-5">Your Favorite E-Market</h2>
                        <a class="btn btn-primary bg-info" href="/landing">Mulai Belanja</a>
                    </div>
                </div>
            </div>
        </header>
                    
                </div>
            </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-black mb-4">Tentang kami</h2>
                        <p class="text-black-50">
                        Tomart adalah toko yang menjual beraneka buah dan sayur, serta bahan dapur terbaik untuk semua. Kami memanen dan menyediakan Sayuran dan Buah Segar tanpa pestisida dari petani lokal secara online dan offline.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="https://assets.bonappetit.com/photos/57d6f59fc204478524d874a8/16:9/w_2560%2Cc_limit/13065314334_a2a3178590_k.jpg" alt="..." width="500" height="700" >
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="https://images.unsplash.com/photo-1609780447631-05b93e5a88ea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZnJ1aXQlMjBzaG9wfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="..." width="600" height="600"/></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Manfaat Sayur dan Buah</h4>
                            <p class="text-black-50 mb-0">Sayur dan Buah banyak memilki kandungan vitamin, mineral, aktioksidan, serta serat yang tinggi dibanding jenis makanan lainnya. Sudah diketahui dan dibuktikan bahwa buah buhan dan sayuran memilki manfaat yang sangat baik untuk kesehatan tubuh. Tomart menyediakan Sayur dan Buah segar setiap hari untuk kebutuhan kesehatan tubuh Anda.</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="https://us.123rf.com/450wm/sonulkaster/sonulkaster1609/sonulkaster160900216/63336891-vegetables-and-fruits-product-seller-at-the-counter-and-stall-vector-shop-in-flat-style-kiosk-with-f.jpg?ver=6" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-success text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Offline market</h4>
                                    <p class="mb-0 text-white-50">Bingung mau masak apa? Biar Kami yang datang ke rumah! Anda dapat memilih Sayur dan Buah kebutuhan Anda secara langsung lho!</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkD0FLEp61ivWYKGJYXLBgIo2WxZlciI03cw&usqp=CAU" alt="..." wdith="200px" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-success text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Online Market</h4>
                                    <p class="mb-0 text-white-50">Mager ke pasar? Biar Kami yang kirim langsung ke rumah! Bisa bayar di tempat, produknya dijamin segar & berkualitas!</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-info">
            <div class="container px-4 px-lg-5 ">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Jl. Banaran, Kecamatan Pesantren, Kota Kediri</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">tomart.kdr@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">0812-4995-4526</div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-sm center">
                    <a class="btn btn-primary mt-5 bg-warning text-dark " href="/login" role="button"> Admin ? Login</a>
                    </div>
                    
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2 mb-5 bg-dark" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2 mb-5 bg-dark" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2 mb-5 bg-dark" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        
        <!-- Bootstrap core JS-->
        <script src="/js/scripts.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

@endsection