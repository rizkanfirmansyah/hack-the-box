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

    <title>Amik Plant -- Konsumen</title>
</head>

<body>

    <div class="main">
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
                            <a class="nav-link" href="./shop.php">Beranda</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" aria-current="page" href="./sayuran.php">Sayuran</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="./consumen.php">Konsumen</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="./about-us.php">Tentang Kami</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" id="active-plant" href="./shop.php">Belanja</a>
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
                                <li><a class="dropdown-item pb-2" href="./logout.php">
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

        <div class="jumbotron" id="jumbotron-konsumen">
            <div class="row justify-content-center">
                <div class="col-md-10 col-12 col-lg-10 my-auto text-center fade-d2">
                    <h5 class="title-jumbotron-konsumen color-light-plant">Menyediakan Kebutuhan <b class="color-primary-plant">Petani</b> dan <b class="color-primary-plant">Konsumen
                            Sayuran</b>
                    </h5>
                    <p class="mx-md-5 px-md-5 mx-lg-5  color-light-plant">Kami menyediakan data akurat dan platform
                        gratis bagi anda petani atau konsumer sayuran lokal dengan kulaitas bagus namun harga terjangkau
                    </p>
                </div>
            </div>

        </div>

        <div id="card">
            <div class="col-md-10 mx-auto col-lg-10">
                <div class="card card-main bg-alternatif-plant px-5 slide-down">
                    <div class="row">
                        <div class="col-md-4 mt-4">
                            <div class="card text-center color-secondary-plant px-3 py-2">
                                <img class="mx-auto icon img-fluid" src="../assets/icons/chart.png" alt="">
                                <small class="title-card my-1">
                                    Supplier Petani Sayuran
                                </small>
                                <b class="color-alternatif-plant subtitle-card">
                                    2500
                                </b>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="card text-center color-secondary-plant px-3 py-2">
                                <img class="mx-auto icon img-fluid" src="../assets/icons/brocolli.png" alt="">
                                <small class="title-card my-1">
                                    Sayuran per Hari (Kg)
                                </small>
                                <b class="color-alternatif-plant subtitle-card">
                                    135.408
                                </b>
                            </div>
                        </div>
                        <div class="col-md-4 my-4">
                            <div class="card text-center color-secondary-plant px-3 py-2">
                                <img class="mx-auto icon img-fluid" src="../assets/icons/users.png" alt="">
                                <small class="title-card my-1">
                                    Konsumen Sayuran
                                </small>
                                <b class="color-alternatif-plant subtitle-card">
                                    10.000
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="chart" class="container">

            <div class="row">
                <div class="col-md-4 mt-5">
                    <div class="card p-4">
                        <h5 class="title-chart-plant slide-down">
                            Sayuran Paling Laris
                        </h5>

                        <div class="charts-plant mt-4 fade-d2">
                            <canvas class="chart-sayuran-plant">

                            </canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-5">
                    <div class="card py-4">
                        <div class="row">
                            <div class="col">
                                <img src="../assets/icons/brocolli.png" class="img-fluid icon-chart-plant ms-4 mb-4" alt="">
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 me-3">
                                <select class="form-control">
                                    <option selected disabled value>Filters</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive slide-down">
                            <table class="table table-borderless">
                                <thead class="thead-line">
                                    <tr>
                                        <th scope="col" class="ps-5">Nama Sayuran</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Tersedia (Kg)</th>
                                        <th scope="col">Presentase</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="ps-5">Kangkung</th>
                                        <td>Rp. 7.500</td>
                                        <td>125</td>
                                        <td>33.5%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-5">Kentang</th>
                                        <td>Rp. 7.500</td>
                                        <td>125</td>
                                        <td>33.5%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-5">Sawi</th>
                                        <td>Rp. 7.500</td>
                                        <td>125</td>
                                        <td>33.5%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-5" uouj <td>33.5%</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="text-end">5 Sayuran ditemukan</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>



        <section id="chart" class="container">

            <div class="row">

                <div class="col-md-7 mt-5">
                    <div class="card py-4 slide-down">
                        <div class="row">
                            <div class="col">
                                <img src="../assets/icons/brocolli.png" class="img-fluid icon-chart-plant ms-4 mb-4" alt="">
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 me-3">
                                <select class="form-control">
                                    <option selected disabled value>Filters</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless slide-down">
                                <thead class="thead-line">
                                    <tr>
                                        <th scope="col" class="ps-5">Nama Kota</th>
                                        <th scope="col">Petani</th>
                                        <th scope="col">Tersedia (Kg)</th>
                                        <th scope="col">Presentase</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="ps-5">Bandung</th>
                                        <td>750</td>
                                        <td>8900</td>
                                        <td>33.5%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-5">Surabaya</th>
                                        <td>557</td>
                                        <td>6680</td>
                                        <td>33.5%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-5">Garut</th>
                                        <td>350</td>
                                        <td>6100</td>
                                        <td>33.5%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-5">Malang</th>
                                        <td>335</td>
                                        <td>4500</td>
                                        <td>33.5%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-5">Semarang</th>
                                        <td>285</td>
                                        <td>5250</td>
                                        <td>33.5%</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="text-end">5 Daerah ditemukan</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mt-5">
                    <div class="card p-4">
                        <h5 class="title-chart-plant slide-up-d2">
                            Daerah Penghasil Sayuran
                        </h5>

                        <div class="charts-plant mt-4">
                            <canvas class="chart-sayuran-plant-2 fade-d2">

                            </canvas>
                        </div>
                    </div>
                </div>

            </div>

        </section>


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



    <script src="../library/jQuery/jquery-3.6.0.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.js" crossorigin="anonymous">
    </script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <script src="../library/chartJs/chart.js"></script>

    <script src="../assets/config/chart.js"></script>

    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>

    <script src="../assets/js/script.js"></script>


</body>

</html>