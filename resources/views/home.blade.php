<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sanggar Rias Idean</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('navbar.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-1">Sanggar Rias Idean</h1>
                            <a href="/about" class="btn btn-primary py-md-3 px-md-5 mt-2">Informasi Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/ten5.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="display-3 text-white mb-md-1">RIAS PENGANTIN & TENDA DEKORASI</h1>
                            <a href="/about" class="btn btn-primary py-md-3 px-md-5 mt-2">Informasi Lengkap</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-2">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Sanggar Rias Idean Di dirikan Pada Tahun 2012</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-10" align="justify">Sanggar rias idean adalah sebuah badan usaha rias pengantin yang bersertifikat, profesion, terlatih dan juga harga murah.</h5>
                    <p align="justify">Sanggar rias idean tidak hanya membuka untuk rias pengantin saja tapi sanggar rias idean juga menerima jasa pemasangan tenda pengantin atau sunatan dan hajatan acara. Sanggar Rias Idean Ini Selalu Melayani Setiap Permintaan Costumer Untuk Membuat Dekorasi Berbagai .......</p>
                    <a href="/about" class="btn btn-secondary mt-2">Informasi Lengkap</a>
                </div>
                <div class="col-lg-4" style="min-height: 200px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-10 h-10" src="img/idean.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Features Model Rias</h4>
                    <p>Sanggar Rias Idean Memiliki Beberapa Motif Model Rias Pengantin Dan Tenda Dekorasi Pelaminan</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Nasional</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Daerah</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Modern</h5>
                    <a href="" class="btn btn-primary mt-2">Informasi Lengkap</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Promotion Start -->
    {{-- <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/promotion.jpg" style="object-fit: cover;">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">$199</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Chocolate Ice Cream</h3>
                    <p class="text-white mb-4">Lorem justo clita dolor ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                    <a href="" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Promotion End -->


    <!-- Video Modal Start -->
    {{-- <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-1">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">List Paket Sanggar Rias Idean <a href="" class="btn btn-primary mt-2">Semua List Paket</a></h1>  
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="iqshan/hus7.png" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">All Paket Rias Pengantin Sanggar Rias Idean</h5>
                                <p align="justify">Sanggar Rias Idean Memiliki Beberapa Paket Rias Pengantin Tersedia Mulai Dari Termurah Hingga Termahal</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">LIHAT SEMUA PAKET</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="iqshan/ten2.png" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">All Paket Tenda Dekorasi Tenda</h5>
                                <p align="justify">Sanggar Rias Idean Memiliki Beberapa Paket Dekorasi Tenda Pelaminan Atau Acara, Mulai Dari Harga Termurah Hingga Termahal</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Lihat Semua Paket</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="iqshan/wd.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">All Sewa Alat-Alat Dekorasi Tenda</h5>
                                <p align="justify">Sanggar Rias Idean Menerima Sewa Alat-Alat Dekorasi Tenda Segala Jenis Barang-Barang Dekorasi Tenda Tersedia</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">LIHAT SEMUA PAKET</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/12.png" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">List Bahan-Bahan Dekorasi Tenda</h5>
                                <p align="justify">Pada Halaman Ini Menampilkan Semua List-List Alat-Alat Dekorasi Tenda Berseta Harga Pada Masing-Masing Alat</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Lihat Semua List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid my-5 py-3 px-0">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">Beberapa Foto Rias Pengantin Dan Tenda Dekorasi </h1>
            </div>
        </div>
        <div class="row m-0 portfolio-container">
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio/01.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio/01.jpg" data-lightbox="portfolio">
                        <i class="fa fa-image text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio/02.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio/02.jpg" data-lightbox="portfolio">
                        <i class="fa fa-image text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio/03.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio/03.jpg" data-lightbox="portfolio">
                        <i class="fa fa-image text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio/04.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio/04.jpg" data-lightbox="portfolio">
                        <i class="fa fa-image text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio/05.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio/05.jpg" data-lightbox="portfolio">
                        <i class="fa fa-image text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio/06.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio/06.jpg" data-lightbox="portfolio">
                        <i class="fa fa-image text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio/07.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio/07.jpg" data-lightbox="portfolio">
                        <i class="fa fa-image text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio/08.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio/08.jpg" data-lightbox="portfolio">
                        <i class="fa fa-image text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio/09.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio/09.jpg" data-lightbox="portfolio">
                        <i class="fa fa-image text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Products Start -->
    <div class="container-fluid py-1">
        <div class="container py-1">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Beberapa Paket Paling Favorit Dan Laris Sanggar Rias Idean</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel product-carousel">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-5">
                            <div class="bg-primary mt-n5 py-4" style="width: 118px;">
                                <a href="iqshan/p6.jpg"><h4 class="font-weight-bold text-white mb-0">Lihat Foto</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="iqshan/p61.jpg" style="object-fit: cover;">
                               </a>
                            </div>
                            <h5 class="font-weight-bold mb-4">Paket F Rias Pengantin</h5>
                            <h5 class="font-weight-bold mb-4">Rp. 2.000.000</h5>
                            <a href="" class="btn btn-sm btn-secondary">Lihat Paket</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-4" style="width: 118px;" >
                                <a href="iqshan/p15.jpg">  <h4 class="font-weight-bold text-white mb-0">Lihat Foto</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                               <img class="rounded-circle w-100 h-100" src="iqshan/p151.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Paket O Rias Pengantin</h5>
                            <h5 class="font-weight-bold mb-4">Rp. 18.000.000</h5>
                            <a href="" class="btn btn-sm btn-secondary">Lihat Foto</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-4" style="width: 118px;">
                                <a href="iqshan/paketA.png"> <h4 class="font-weight-bold text-white mb-0">Lihat Foto</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                              <img class="rounded-circle w-100 h-100" src="iqshan/paketA1.png" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">paket A Dekorasi Aula</h5>
                            <h5 class="font-weight-bold mb-4">Rp. 9.000.000</h5>
                            <a href="" class="btn btn-sm btn-secondary">Lihat Paket</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-4" style="width: 118px;">
                                <a href="iqshan/paketD.png">     <h4 class="font-weight-bold text-white mb-0">Lihat Foto</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                             <img class="rounded-circle w-100 h-100" src="iqshan/paketD1.png" style="object-fit: cover;"></a> 
                            </div>
                            <h5 class="font-weight-bold mb-4">Paket D Dekorasi</h5>
                            <h5 class="font-weight-bold mb-4">Rp. 93.000.000</h5>
                            <a href="" class="btn btn-sm btn-secondary">Lihat Paket</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-4">
                            <div class="bg-primary mt-n5 py-3" style="width: 118px;">
                                <a href="iqshan/p8.jpg">   <h4 class="font-weight-bold text-white mb-0">Lihat Foto</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                              <img class="rounded-circle w-100 h-100" src="iqshan/p81.jpg" style="object-fit: cover;"></a>
                            </div>
                            <h5 class="font-weight-bold mb-4">Paket H Rias Pengantin</h5>
                            <h5 class="font-weight-bold mb-4">Rp. 5.000.000</h5>
                            <a href="" class="btn btn-sm btn-secondary">Lihat Paket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Pemilik Sanggar Rias Idean</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/maryani.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Maryani</h3>
                                <h6 class="text-uppercase text-muted mb-4">Pemilik Sanggar Rias Idean</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/6.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Iqshan</h3>
                                <h6 class="text-uppercase text-muted mb-4">Pembuat Website</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Review Pelanggan Sanggar Rias Idean</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 align="justify">Terima Kasih Ibu Maryani Sanggar Rias Idean, Sudah Make Up Saya, Suami Saya Dan Keluarga Besar Saya. Hasilnya Memuas Sekali Banyak Temen-Temen Saya Yang Memuji Saya Tambah Cantik</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/01.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Intan</h5>
                            <span>Pelanggan</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4" align="justify">Terima Kasih Kepada Sanggar Rias Idean Dan Ibu Maryani Sudah Merias Saya, Suami Saya Dan Keluarga Saya Pada Acara Nikahan Saya. Terima Kasih Juga Harga Murah & Bagus</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/20.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Nabila Putri Endut</h5>
                            <span>Pelanggan</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4" align="justify">Terima Kasi Ibu Maryani Sanggar Rias Idean Sudah Makeup Saya Dan Suami Saya & Mendekorasi Tenda Hasil Keduanya Bagus, Tidak Menyesal Saya Memesan Di Sanggar Rias Idean</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/23.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Ayu Lestari</h5>
                            <span>Pelanggan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('footer.footer')
    <!-- Footer End -->


    <!-- Back to Top -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <style type="text/css">
        * {
            cursor: url(http://cur.cursors-4u.net/anime/ani-12/ani1159.ani), url(http://cur.cursors-4u.net/anime/ani-12/ani1159.gif), auto !important;
        }
    </style>
    <a href="http://www.cursors-4u.com/cursor/2012/01/01/zora-one-piece.php" target="_blank" title="Zora - One Piece"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Zora - One Piece" style="position:absolute; top: 0px; right: 0px;" /></a>
    <div style="display:scroll;position:fixed;bottom:0;right:0;">
    <a href="http://www.cursors-4u.com/cursor/2012/01/01/zora-one-piece.html" target="_blank" title="Zora - One Piece"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Zora - One Piece" style="position:absolute; top: 0px; right: 0px;" /></a><div style="display:scroll;position:fixed;bottom:0;right:0;">
                                  <strong>
                             <p style="color:blue">
                       <a href="https://api.whatsapp.com/send?phone=628161913978&text=Halo Mohon Di Bantu" target="_blank">
                           <img src="iqshan/anjay2.jpg" height="100" width="130" /></a>
                              </a>
</body>

</html>