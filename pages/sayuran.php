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
    <link rel="icon" type="image/png" href="../assets/img/logo.png" />

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Css Style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/reponsif.css">

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
                    <img src="../assets/img/logo.png" class="img-fluid" id="logo" alt="Logo Amik Plant">
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
                                    <img src="../assets/img/profil.png" alt="">
                                </a>
                                <ul class="dropdown-menu p-2" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <img src="../assets/img/mdi-light_heart.png" alt="">
                                                <span class="my-auto ms-3">Favorit</span>
                                                <span class="ms-auto fw-bold my-auto">5</span>
                                            </div>
                                            <hr class="my-2">
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <img src="../assets/img/mdi-light_cart.png" alt="">
                                                <span class="my-auto ms-3">keranjang</span>
                                                <span class="ms-auto fw-bold my-auto">2</span>
                                            </div>
                                            <hr class="my-2">
                                        </a></li>
                                    <li><a class="dropdown-item pb-2" href="logout.php">
                                            <div class="d-flex">
                                                <img src="../assets/img/mdi_location-exit.png" alt="">
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

        <!-- Header-list-item -->
        <div class="header-list">
            <div class="bg-header-list">
                <div class="container text-center">
                    <div class="header-list-text fade-d1">
                        <h1 class="text-light display-4">Daftar <span class="color-alternatif-plant"> Sayuran </span> Hasil Panen</h1>
                        <p class="text-light">Temukan segala jenis sayuran dan hasil panen dari petani lokal apa yang kalian <br> butuhkan dibawah sini</p>
                    </div>
                    <div class="header-list-cta p-4">
                        <div class="row fade-d1">
                            <div class="col-md-6">
                                <div class="mb-3 d-flex">
                                    <button class="btn btn-light border"><i class="fas fa-search"></i></button>
                                    <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Cari sayuran yang anda inginkan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 d-flex">
                                    <button class="btn btn-light border"><i class="fas fa-search"></i></button>
                                    <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Cari daerah yang anda inginkan">
                                </div>
                            </div>
                        </div>
                        <div class="tags-list text-start d-flex w-100 fade-d1">
                            <div class="btn btn-primary-plant me-3">All</div>
                            <div class="row">
                                <div class="col px-2">
                                    <select class="form-select w-auto mx-auto" aria-label="Default select example">
                                        <option selected>Tersedia</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col px-2">
                                    <select class="form-select w-auto mx-auto" aria-label="Default select example">
                                        <option selected>Termurah</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col px-2">
                                    <select class="form-select w-auto mx-auto" aria-label="Default select example">
                                        <option selected>Termahal</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col px-2">
                                    <select class="form-select w-auto mx-auto" aria-label="Default select example">
                                        <option selected>Paling Laku</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="btn btn-primary-plant ms-auto">Cari</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF Header-list-item -->

        <!-- list-item -->
        <div class="container">
            <div class="row">

                <div class="col-md-4 my-3 slide-up">
                    <div class="list-item">
                        <div class="d-flex p-3">
                            <div class="horizontal-hr"></div>
                            <img src="../assets/img/bayam.png" class="py-3 px-2" alt="">
                            <div class="list-item-text p-3 my-auto">
                                <hr class="green-line mt-1 mb-2" id="short-green-line">
                                <h3 class="fw-600">Bayam</h3>
                                <h6 class="text-black-50">Kota Solo</h6>
                                <h6 class="color-aditional-plant fw-600">Mulai Dari Rp. 2000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-3 slide-up">
                    <div class="list-item">
                        <div class="d-flex p-3">
                            <div class="horizontal-hr"></div>
                            <img src="../assets/img/terong.png" class="py-3 px-2" alt="">
                            <div class="list-item-text p-3 my-auto">
                                <hr class="green-line mt-1 mb-2" id="short-green-line">
                                <h3 class="fw-600">Terong</h3>
                                <h6 class="text-black-50">Kota Bandung</h6>
                                <h6 class="color-aditional-plant fw-600">Mulai Dari Rp. 3000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-3 slide-up">
                    <div class="list-item">
                        <div class="d-flex p-3">
                            <div class="horizontal-hr"></div>
                            <img src="../assets/img/kol.png" class="py-3 px-2" alt="">
                            <div class="list-item-text p-3 my-auto">
                                <hr class="green-line mt-1 mb-2" id="short-green-line">
                                <h3 class="fw-600">Kubis</h3>
                                <h6 class="text-black-50">Kota Tasikmalaya</h6>
                                <h6 class="color-aditional-plant fw-600">Mulai Dari Rp. 2000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-3 slide-up">
                    <div class="list-item">
                        <div class="d-flex p-3">
                            <div class="horizontal-hr"></div>
                            <img src="../assets/img/timun-list.png" class="py-3 px-2" alt="">
                            <div class="list-item-text p-3 my-auto">
                                <hr class="green-line mt-1 mb-2" id="short-green-line">
                                <h3 class="fw-600">Timun</h3>
                                <h6 class="text-black-50">Kota Yogyakarta</h6>
                                <h6 class="color-aditional-plant fw-600">Mulai Dari Rp. 2500</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-3 slide-up">
                    <div class="list-item">
                        <div class="d-flex p-3">
                            <div class="horizontal-hr"></div>
                            <img src="../assets/img/cabe.png" class="py-3 px-2" alt="">
                            <div class="list-item-text p-3 my-auto">
                                <hr class="green-line mt-1 mb-2" id="short-green-line">
                                <h3 class="fw-600">Cabai</h3>
                                <h6 class="text-black-50">Kota Bandung</h6>
                                <h6 class="color-aditional-plant fw-600">Mulai Dari Rp. 3500</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-3 slide-up">
                    <div class="list-item">
                        <div class="d-flex p-3">
                            <div class="horizontal-hr"></div>
                            <img src="../assets/img/wortel.png" class="py-3 px-2" alt="">
                            <div class="list-item-text p-3 my-auto">
                                <hr class="green-line mt-1 mb-2" id="short-green-line">
                                <h3 class="fw-600">Wortel</h3>
                                <h6 class="text-black-50">Kota Banjaran</h6>
                                <h6 class="color-aditional-plant fw-600">Mulai Dari Rp. 5000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-3 slide-up">
                    <div class="list-item">
                        <div class="d-flex p-3">
                            <div class="horizontal-hr"></div>
                            <img src="../assets/img/tomat-list.png" class="py-3 px-2" alt="">
                            <div class="list-item-text p-3 my-auto">
                                <hr class="green-line mt-1 mb-2" id="short-green-line">
                                <h3 class="fw-600">Tomat</h3>
                                <h6 class="text-black-50">Kota Aceh</h6>
                                <h6 class="color-aditional-plant fw-600">Mulai Dari Rp. 2500</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-3 slide-up">
                    <div class="list-item">
                        <div class="d-flex p-3">
                            <div class="horizontal-hr"></div>
                            <img src="../assets/img/kentang.png" class="py-3 px-2" alt="">
                            <div class="list-item-text p-3 my-auto">
                                <hr class="green-line mt-1 mb-2" id="short-green-line">
                                <h3 class="fw-600">Kentang</h3>
                                <h6 class="text-black-50">Kota Yogyakarta</h6>
                                <h6 class="color-aditional-plant fw-600">Mulai Dari Rp. 3000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-3 slide-up">
                    <div class="list-item">
                        <div class="d-flex p-3">
                            <div class="horizontal-hr"></div>
                            <img src="../assets/img/jagung.png" class="py-3 px-2" alt="">
                            <div class="list-item-text p-3 my-auto">
                                <hr class="green-line mt-1 mb-2" id="short-green-line">
                                <h3 class="fw-600">Jagung</h3>
                                <h6 class="text-black-50">Kota Solo</h6>
                                <h6 class="color-aditional-plant fw-600">Mulai Dari Rp. 4000</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END OF list-item -->

        <div class="container">
            <div class="list-sayuran-pages d-flex">
                <div class="d-flex my-auto ms-auto me-2">
                    <h6 class="me-2 mb-0">Pages: </h6>
                    <h6 class="color-alternatif-plant mb-0">1/4</h6>
                </div>
                <a href=""><img src="../assets/img/arrow kiri.png" alt=""></a>
                <a href=""><img src="../assets/img/arrow kanan.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- END OF CTA Button -->

    <footer id="footer">

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="../assets/img/logo.png" class="img-fluid footer-logo-plant" alt="Logo Amik Plant">
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
                            <img src="../assets/img/facebook.png" class="img-fluid social-media-plant" alt="">
                        </div>
                        <div class="col-2 mt-3">
                            <img src="../assets/img/twitter.png" class="img-fluid social-media-plant" alt="">
                        </div>
                        <div class="col-2 mt-3">
                            <img src="../assets/img/instagram.png" class="img-fluid social-media-plant" alt="">
                        </div>
                        <div class="col-2 mt-3"></div>
                        <div class="col-4">
                            <img src="../assets/icons/ceri-2.png" class="img-fluid" alt="">
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
    <script src="../assets/js/script.js"></script>

    <script src="../assets/js/bootstrap.bundle.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>