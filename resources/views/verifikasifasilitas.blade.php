

@extends('layout.master')

@section('content')


        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Selamat Datang di Verifikasi Fasilitas</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <a href="verifinternet" class="fs-4 fw-bold">Verifikasi Internet</a>
                                <ul>
                                <span class="img-1 text-center"><img src="assets/internet.png" class="img-fluid my-4 " /></span>
                                </ul>
                                <p class="mb-0">Kunjungi jika ingin memverifikasi fasilitas Internet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <a href="veriflistrik" class="fs-4 fw-bold">Verifikasi Listrik</a>
                                <ul>
                                <span class="img-1 text-center"><img src="assets/listrik.png" class="img-fluid my-4 " /></span>
                                </ul>
                                <p class="mb-0">Kunjungi jika ingin memverifikasi fasilitas Listrik</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <a href="verifpam" class="fs-4 fw-bold">Verifikasi PAM</a>
                                <span class="img-1 text-center"><img src="assets/air.png" class="img-fluid my-4 " /></span>
                                <p class="mb-0">Kunjungi jika ingin memverifikasi fasilitas PAM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <a href="verifpulsa" class="fs-4 fw-bold">Verifikasi Pulsa</a>
                                <span class="img-1 text-center"><img src="assets/pulsa.png" class="img-fluid my-4 " /></span>
                                <p class="mb-0">Kunjungi jika ingin memverifikasi fasilitas Pulsa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <a href="veriftvkabel" class="fs-4 fw-bold">Verifikasi TV Kabel</a>
                                <span class="img-1 text-center"><img src="assets/tv1.png" class="img-fluid my-4 " /></span>
                                <p class="mb-0">Kunjungi jika ingin memverifikasi fasilitas TV Kabel</p>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

@endsection
</html>