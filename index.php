<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: pages/login.php");
    exit();
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="./assets/img/logo.png" />

    <!-- Bootstrap CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Css Style -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/reponsif.css">

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="./library/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./library/OwlCarousel/dist/assets/owl.theme.default.min.css">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />

    <title>Amik Plant -- Belanja</title>
</head>

<body>

    <div class="main" id="white-background">
        <div class="e-comerse-navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light my-3">
                <div class="container">
                    <img src="./assets/img/logo.png" class="img-fluid" id="logo" alt="Logo Amik Plant">
                    <a class="navbar-brand ms-3" href="#"><b class="color-primary-dark-plant">Amik</b><b class="color-alternatif-plant">Plant</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item me-4">
                                <a class="nav-link" href="./pages/shop.php">Beranda</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link" aria-current="page" href="./pages/sayuran.php">Sayuran</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link" href="./pages/consumen.php">Konsumen</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link" href="./pages/about-us.php">Tentang Kami</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link" id="active-plant" href="./pages/shop.php">Belanja</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./assets/img/profil.png" alt="">
                                </a>
                                <ul class="dropdown-menu p-2" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <img src="./assets/img/mdi-light_heart.png" alt="">
                                                <span class="my-auto ms-3">Favorit</span>
                                                <span class="ms-auto fw-bold my-auto">5</span>
                                            </div>
                                            <hr class="my-2">
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <img src="./assets/img/mdi-light_cart.png" alt="">
                                                <span class="my-auto ms-3">keranjang</span>
                                                <span class="ms-auto fw-bold my-auto">2</span>
                                            </div>
                                            <hr class="my-2">
                                        </a></li>
                                    <li><a class="dropdown-item pb-2" href="./pages/logout.php">
                                            <div class="d-flex">
                                                <img src="./assets/img/mdi_location-exit.png" alt="">
                                                <span class="my-auto ms-3">Keluar</span>
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <hr>
                <div class="pb-3 d-flex">
                    <input type="text" class="form-control form-control-Ecomerse" id="exampleFormControlInput1" placeholder="Cari sayuran yang anda inginkan">
                    <button class="btn btn-light border"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>

        <!-- header -->
        <div class="container">
            <img src="./assets/img/header-Ecomerse.png" alt="Header" class="w-100 my-5">
        </div>
        <!-- end of header -->

        <!-- kategori -->
        <div class="container">
            <div class="kategori">
                <div class="d-flex mb-4">
                    <h2>Kategori Sayuran</h2>
                    <div class="ms-auto my-auto">
                        <a href=""><img src="./assets/img/arrow kiri.png" alt=""></a>
                        <a href=""><img src="./assets/img/arrow kanan.png" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <!-- kategori item -->
                    <div class="col-md-2 slide-up">
                        <div class="card text-center p-5">
                            <div class="keranjang mb-3 mx-auto"></div>
                            <h6>Daun</h6>
                        </div>
                    </div>
                    <div class="col-md-2 slide-up">
                        <div class="card text-center p-5">
                            <div class="keranjang mb-3 mx-auto"></div>
                            <h6>Batang</h6>
                        </div>
                    </div>
                    <div class="col-md-2 slide-up">
                        <div class="card text-center p-5">
                            <div class="keranjang mb-3 mx-auto"></div>
                            <h6>Bunga</h6>
                        </div>
                    </div>
                    <div class="col-md-2 slide-up">
                        <div class="card text-center p-5">
                            <div class="keranjang mb-3 mx-auto"></div>
                            <h6>Buah</h6>
                        </div>
                    </div>
                    <div class="col-md-2 slide-up">
                        <div class="card text-center p-5">
                            <div class="keranjang mb-3 mx-auto"></div>
                            <h6>Umbi</h6>
                        </div>
                    </div>
                    <div class="col-md-2 slide-up">
                        <div class="card text-center p-5">
                            <div class="keranjang mb-3 mx-auto"></div>
                            <h6>Umbi</h6>
                        </div>
                    </div>
                    <!-- end of kategori item -->
                </div>
            </div>
        </div>
        <!-- end of kategori -->

        <!-- sayuran terlaris -->
        <div class="container">
            <div class="sayuran-terlaris my-5">
                <div class="d-flex mb-3">
                    <h3 class="fw-bold">Sayuran terlaris</h3>
                    <button class="btn btn-secondary-plant ms-auto">Selengkapnya</button>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="bg-laris">
                            <img src="./assets/img/sayuran-terlaris.png" alt="" class="mb-5 mt-4 slide-up">
                            <img src="./assets/img/heart.png" alt="" class="mt-2 slide-up-d2">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="owl-carousel owl-theme owl-loaded" id="myCarousel">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item py-4">
                                        <div class="card-head">
                                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                                            <a href="" class="ms-auto">
                                                <div id="logo-keranjang"></div>
                                            </a>
                                        </div>
                                        <div class="card p-3">
                                            <h6 class="mb-1">Bayam Hijau</h6>
                                            <h6 class="text-black-50">Bandung</h6>
                                            <div class="d-flex">
                                                <h6><b>Rp. 5000</b></h6>
                                                <h6 class="ms-auto">1 KG</h6>
                                            </div>
                                            <div class="d-flex my-2">
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                                <h6 class="my-auto mx-2">1</h6>
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item py-4">
                                        <div class="card-head">
                                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                                            <a href="" class="ms-auto">
                                                <div id="logo-keranjang"></div>
                                            </a>
                                        </div>
                                        <div class="card p-3">
                                            <h6 class="mb-1">Bayam Hijau</h6>
                                            <h6 class="text-black-50">Bandung</h6>
                                            <div class="d-flex">
                                                <h6><b>Rp. 5000</b></h6>
                                                <h6 class="ms-auto">1 KG</h6>
                                            </div>
                                            <div class="d-flex my-2">
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                                <h6 class="my-auto mx-2">1</h6>
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item py-4">
                                        <div class="card-head">
                                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                                            <a href="" class="ms-auto">
                                                <div id="logo-keranjang"></div>
                                            </a>
                                        </div>
                                        <div class="card p-3">
                                            <h6 class="mb-1">Bayam Hijau</h6>
                                            <h6 class="text-black-50">Bandung</h6>
                                            <div class="d-flex">
                                                <h6><b>Rp. 5000</b></h6>
                                                <h6 class="ms-auto">1 KG</h6>
                                            </div>
                                            <div class="d-flex my-2">
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                                <h6 class="my-auto mx-2">1</h6>
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item py-4">
                                        <div class="card-head">
                                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                                            <a href="" class="ms-auto">
                                                <div id="logo-keranjang"></div>
                                            </a>
                                        </div>
                                        <div class="card p-3">
                                            <h6 class="mb-1">Bayam Hijau</h6>
                                            <h6 class="text-black-50">Bandung</h6>
                                            <div class="d-flex">
                                                <h6><b>Rp. 5000</b></h6>
                                                <h6 class="ms-auto">1 KG</h6>
                                            </div>
                                            <div class="d-flex my-2">
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                                <h6 class="my-auto mx-2">1</h6>
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item py-4">
                                        <div class="card-head">
                                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                                            <a href="" class="ms-auto">
                                                <div id="logo-keranjang"></div>
                                            </a>
                                        </div>
                                        <div class="card p-3">
                                            <h6 class="mb-1">Bayam Hijau</h6>
                                            <h6 class="text-black-50">Bandung</h6>
                                            <div class="d-flex">
                                                <h6><b>Rp. 5000</b></h6>
                                                <h6 class="ms-auto">1 KG</h6>
                                            </div>
                                            <div class="d-flex my-2">
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                                <h6 class="my-auto mx-2">1</h6>
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item py-4">
                                        <div class="card-head">
                                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                                            <a href="" class="ms-auto">
                                                <div id="logo-keranjang"></div>
                                            </a>
                                        </div>
                                        <div class="card p-3">
                                            <h6 class="mb-1">Bayam Hijau</h6>
                                            <h6 class="text-black-50">Bandung</h6>
                                            <div class="d-flex">
                                                <h6><b>Rp. 5000</b></h6>
                                                <h6 class="ms-auto">1 KG</h6>
                                            </div>
                                            <div class="d-flex my-2">
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                                <h6 class="my-auto mx-2">1</h6>
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item py-4">
                                        <div class="card-head">
                                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                                            <a href="" class="ms-auto">
                                                <div id="logo-keranjang"></div>
                                            </a>
                                        </div>
                                        <div class="card p-3">
                                            <h6 class="mb-1">Bayam Hijau</h6>
                                            <h6 class="text-black-50">Bandung</h6>
                                            <div class="d-flex">
                                                <h6><b>Rp. 5000</b></h6>
                                                <h6 class="ms-auto">1 KG</h6>
                                            </div>
                                            <div class="d-flex my-2">
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                                <h6 class="my-auto mx-2">1</h6>
                                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of sayuran terlaris -->

        <!-- rekomendasi sayuran -->
        <div class="container">
            <div class="rekomendasi">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h3 class="fw-bold">Rekomendasi sayuran</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="filter">
                            <button class="btn btn-secondary-plant px-5" id="btn-filter">Sesuai</button>
                            <button class="btn btn-secondary-plant px-5" id="btn-filter">Terbaru</button>
                            <button class="btn btn-primary-plant px-5" id="btn-filter">Termurah</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 slide-up-d2">
                        <div class="card-head">
                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                            <a href="" class="ms-auto">
                                <div id="logo-keranjang"></div>
                            </a>
                        </div>
                        <div class="card p-3">
                            <h6 class="mb-1">Bayam Hijau</h6>
                            <h6 class="text-black-50">Bandung</h6>
                            <div class="d-flex">
                                <h6><b>Rp. 5000</b></h6>
                                <h6 class="ms-auto">1 KG</h6>
                            </div>
                            <div class="d-flex my-2">
                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                <h6 class="my-auto mx-2">1</h6>
                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 slide-up-d2">
                        <div class="card-head">
                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                            <a href="" class="ms-auto">
                                <div id="logo-keranjang"></div>
                            </a>
                        </div>
                        <div class="card p-3">
                            <h6 class="mb-1">Bayam Hijau</h6>
                            <h6 class="text-black-50">Bandung</h6>
                            <div class="d-flex">
                                <h6><b>Rp. 5000</b></h6>
                                <h6 class="ms-auto">1 KG</h6>
                            </div>
                            <div class="d-flex my-2">
                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                <h6 class="my-auto mx-2">1</h6>
                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 slide-up-d2">
                        <div class="card-head">
                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                            <a href="" class="ms-auto">
                                <div id="logo-keranjang"></div>
                            </a>
                        </div>
                        <div class="card p-3">
                            <h6 class="mb-1">Bayam Hijau</h6>
                            <h6 class="text-black-50">Bandung</h6>
                            <div class="d-flex">
                                <h6><b>Rp. 5000</b></h6>
                                <h6 class="ms-auto">1 KG</h6>
                            </div>
                            <div class="d-flex my-2">
                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                <h6 class="my-auto mx-2">1</h6>
                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 slide-up-d2">
                        <div class="card-head">
                            <img src="./assets/img/img-bayam.jpg" alt="" class="w-100">
                            <a href="" class="ms-auto">
                                <div id="logo-keranjang"></div>
                            </a>
                        </div>
                        <div class="card p-3">
                            <h6 class="mb-1">Bayam Hijau</h6>
                            <h6 class="text-black-50">Bandung</h6>
                            <div class="d-flex">
                                <h6><b>Rp. 5000</b></h6>
                                <h6 class="ms-auto">1 KG</h6>
                            </div>
                            <div class="d-flex my-2">
                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">-</button>
                                <h6 class="my-auto mx-2">1</h6>
                                <button class="btn btn-outline-dark px-2 py-0 color-alternatif-plant">+</button>
                                <button class="btn btn-outline-success btn-alternatif-plant px-4 btn-sm ms-auto rounded">Masuk</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end of rekomendasi sayuran -->

        <!-- another CTA -->
        <div class="container">
            <div class="cta-background mt-5">
                <h3 class="fw-bold">
                    Cek Informasi terbaru <br>
                    mengenai <span class="color-alternatif-plant">sayuran</span>
                </h3>
                <button class="btn btn-orange-plant mt-3">Selengkapnya</button>
            </div>
        </div>
        <!-- another CTA -->

        <!-- Informasi Lapangan -->
        <div class="informasi-lapangan-plant mt-5">
            <div class="container text-center">
                <h2 class="fw-bolder">Informasi Lapangan</h2>
                <hr class="green-line mx-auto" id="short-green-line">
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card-detail-plant slide-up">
                            <img src="./assets/img/package.png" alt="">
                            <h4 class="fw-bold mt-3">Bubble Wrap</h4>
                            <hr class="green-line mx-auto" id="short-green-line">
                            <p>Ketahanan dan kesegaran Sayuran setelah di buka dari kemasan bisa sampai 7jam kesegarannya</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-detail-plant slide-up-d2">
                            <img src="./assets/img/truck.png" alt="">
                            <h4 class="fw-bold mt-3">Jarak Transport</h4>
                            <hr class="green-line mx-auto" id="short-green-line">
                            <p>Jarak transport dari lahan panen ke
                                konsumen berjarak 2km </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-detail-plant slide-up-d3">
                            <img src="./assets/img/list.png" alt="">
                            <h4 class="fw-bold mt-3">Kelengkapan</h4>
                            <hr class="green-line mx-auto" id="short-green-line">
                            <p>kelengkapan kuantitas sayuran
                                pada saat sampai ketujuan
                                bisa sampai 97%-100%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF Informasi Lapangan -->

        <!-- CTA button -->
        <section id="banner">

            <div class="row banner-plant align-content-center text-center mx-auto my-auto">
                <div class="banner-detail-plant">
                    <h3 class="title-banner-plant">
                        Siap memanfaatkan Data untuk <br> menambah pendapatan?
                    </h3>
                    <button class="btn bg-primary-plant mt-3">Daftar & Raih Kesempatan</button>
                </div>
            </div>

        </section>
    </div>
    <!-- END OF CTA Button -->

    <footer id="footer">

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="./assets/img/logo.png" class="img-fluid footer-logo-plant" alt="Logo Amik Plant">
                    <a class="footer-brand ms-3" href="#"><b class="color-primary-dark-plant">Amik</b><b class="color-alternatif-plant">Plant</b></a>
                    <p class="description-footer-plant my-5">Web terbaik untuk mencari tau data
                        mengenai sayuran untuk anda</p>
                    <small class="copyright-plant color-secondaryv2-plant pb-5">Copyright &copy; 2021 AMIK PLANT</small>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <b class="ms-1">Lainnya</b>
                    <ul class="list-footer-plant">
                        <li class="my-4"><a>Tentang Kami</a></li>
                        <li class="my-4"><a>Sayuran</a></li>
                        <li class="my-4"><a>Lelang</a></li>
                    </ul>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <b class="ms-1">Kontak Kami</b>
                    <div class="row">
                        <div class="col-2 mt-3">
                            <img src="./assets/img/facebook.png" class="img-fluid social-media-plant" alt="">
                        </div>
                        <div class="col-2 mt-3">
                            <img src="./assets/img/twitter.png" class="img-fluid social-media-plant" alt="">
                        </div>
                        <div class="col-2 mt-3">
                            <img src="./assets/img/instagram.png" class="img-fluid social-media-plant" alt="">
                        </div>
                        <div class="col-2 mt-3"></div>
                        <div class="col-4">
                            <img src="./assets/icons/ceri-2.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    </div>


    <script src="./library/jQuery/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
    <script src="./library/OwlCarousel/dist/owl.carousel.min.js"></script>
    <script src="./assets/js/script.js"></script>

    <script src="./assets/js/bootstrap.bundle.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="./assets/js/bootstrap.min.js"></script>

</body>

</html>