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

    <title>Amik Plant -- Tentang Kami</title>
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

        <div class="jumbotron" id="jumbotron-about-us">
            <div class="row justify-content-center">
                <div class="col-md-10 col-12 col-lg-10 my-auto text-center fade-d2">
                    <h5 class="title-jumbotron-konsumen color-light-plant"> <b class="color-alternatif-plant">Bergabung
                            dengan Tim Kami</b>
                    </h5>
                    <p class="mx-md-5 px-md-5 mt-4 mx-lg-5  color-light-plant">Kami menyediakan data akurat dan platform
                        gratis bagi anda petani atau konsumer sayuran lokal dengan kulaitas bagus namun harga terjangkau
                    </p>
                </div>
            </div>

        </div>

        <div id="card-about-us" class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7">
                    <div class="card card-main px-5">
                        <div class="row ms-3 mb-5 slide-down">
                            <h1 class="color-primary-dark-plant">Perkenalkan Tim <br> dari AmikPlant</h1>
                            <div class="col card-about-us-profile mt-3">
                                <h3 class="mt-3 color-primary-dark-plant ms-3">5 Anggota</h3>
                                <p class="ms-3 color-secondary-plant-65 mt-3">Designer - Developer - Network - Project
                                    Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 slide-down">
                    <h5>AmikPlant Tim</h5>
                    <p class="color-secondary-plant-65 text-justify">Perkenalkan kami merupakan tim pembangun platform
                        AmikPlant ini, beranggotakan 5 orang dengan latar belakang yang berbeda. Kami, bertujuan untuk
                        mengembangkan & meningkatkan hasil dari panen petani lokal dalam sektor ekonomi dan
                        keberlangsungan sayur mayur.</p>
                </div>
            </div>
        </div>


        <section id="profil-tim">
            <div class="container">
                <div class="row text-center mt-5 slide-up-d3">
                    <h1 class="color-primary-plant"><b class="color-primary-dark-plant">Amik</b>Plant</h1>
                    <h1><b>Profil Anggota Kami</b></h1>

                    <div class="row mt-3">
                        <div class="card bg-secondaryv3-plant p-2 slide-up-d2">
                            <div class="row">
                                <div class="col"><button class="shadow btn px-5 btn-light">All</button></div>
                                <div class="col"><button class=" btn px-3 btn-light no-btn-bg">Developer</button></div>
                                <div class="col"><button class=" btn px-3 btn-light no-btn-bg">Designer</button></div>
                                <div class="col"><button class=" btn px-3 btn-light no-btn-bg">Project Manager</button>
                                </div>
                                <div class="col"><button class=" btn px-3 btn-light no-btn-bg">Planner</button></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mt-5 slide-up">
                            <div class="card shadow p-3 align-items-center" id="card-profil-team">
                                <img src="../assets/img/rizkan.png" class="img-fluid my-3" alt="">
                                <h5>Riezkan Aprianda F</h5>
                                <h5 class="color-secondary-plant-50 mb-5">Project Manager</h5>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 slide-up-d2">
                            <div class="card shadow p-3 align-items-center" id="card-profil-team">
                                <img src="../assets/img/yusuf.png" class="img-fluid my-3" alt="">
                                <h5>Maulana Yusuf</h5>
                                <h5 class="color-secondary-plant-50 mb-5">Planner</h5>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 slide-up-d3">
                            <div class="card shadow p-3 align-items-center" id="card-profil-team">
                                <img src="../assets/img/rifqi.png" class="img-fluid my-3" alt="">
                                <h5>Rifqi Ahmad Abiyyi</h5>
                                <h5 class="color-secondary-plant-50 mb-5">Developer</h5>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 slide-up-d4">
                            <div class="card shadow p-3 align-items-center" id="card-profil-team">
                                <img src="../assets/img/teguh.png" class="img-fluid my-3" alt="">
                                <h5>Teguh Iqbal Prayoga</h5>
                                <h5 class="color-secondary-plant-50 mb-5">Designer</h5>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 slide-up-d5">
                            <div class="card shadow p-3 align-items-center" id="card-profil-team">
                                <img src="../assets/img/rian.png" class="img-fluid my-3" alt="">
                                <h5>Rian Alfazri Khoirullah</h5>
                                <h5 class="color-secondary-plant-50 mb-5">Designer</h5>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="card shadow p-3 align-items-center" id="card-profil-team">
                                <img src="../assets/img/person.png" class="img-fluid my-3" alt="">
                                <h5 class="my-5">Siapa Selanjutnya?</h5>
                            </div>
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