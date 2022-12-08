<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <!-- Latest compiled JavaScript -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/ciput.css">
</head>
<body>
        <!-- Menu -->
        <nav class="navbar navbar-expand-lg bg-smanet navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logo.png" alt="SMAN 7 WAJO"
                        style="width: 250px; height: auto" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="informasi.html">Informasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Ekstrakurikuler</a></li>
                        <button type="button" class="btn btn-smanet text-white" data-bs-toggle="modal" data-bs-target="#myModal">
                            Login
                        </button>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
    
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Silahkan Login :</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="#" method="post">
                                            <div class="d-flex justify-content-center">
                                                <img src="assets\img\logos\Sman7.png"
                                                    style="width: 200px; align-content: center;">
                                            </div>
                                            <br><br>
                                            <div class="form-group first">
                                                <label for="username">NIP/NIS</label>
                                                <input type="text" class="form-control" id="username">
    
                                            </div>
                                            <div class="form-group last mb-4">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password">
    
                                            </div>
    
                                            <div class="d-flex mb-5 align-items-center">
                                                <label class="control control--checkbox mb-0"><span class="caption">Remember
                                                        me</span>
                                                    <input type="checkbox" checked="checked" />
                                                    <div class="control__indicator"></div>
                                                </label>
                                            </div>
    
                                            <a class="btn btn-smanet text-white" href="guru.html">Masuk</a>
    
                                    </div>
                                    </form>
                                </div>
    
                            </div>
                        </div>
                </div>
                </ul>
            </div>
            </div>
        </nav>

    <section class="page-section">

        <!-- 10 Eskul Pertama -->
    <div class="container-cc align-self-center">
        <div class="card">
            <a href="#osis">
                <img src="assets/img/logos/osis.png" alt="">
                <div class="img-title">
                    <h3>Osis</h3>
                    <p>Organisasi Siswa Intra Sekolah</p>
                </div>
                <div class="overlay" id="osis">
                    <img src="assets/img/logos/Osis.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#pramuka">
                <img src="assets/img/logos/pramuka.png" alt="">
                <div class="img-title">
                    <h3>Pramuka</h3>
                    <p>Praja Muda Karana</p>
                </div>
                <div class="overlay" id="pramuka">
                    <img src="assets/img/logos/pramuka.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#pmr">
                <img src="assets/img/logos/pmr.png" alt="">
                <div class="img-title">
                    <h3>PMR</h3>
                    <p>Palang Merah Remaja</p>
                </div>

                <div class="overlay" id="pmr">
                    <img src="assets/img/logos/pmr.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#paskibra">
                <img src="assets/img/logos/paskibra.png" alt="">
                <div class="img-title">
                    <h3>Paskibra</h3>
                    <p>Pasukang Pengibar Bendera</p>
                </div>

                <div class="overlay" id="paskibra">
                    <img src="assets/img/logos/paskibra.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#rohis">
                <img src="assets/img/logos/rohis.png" alt="">
                <div class="img-title">
                    <h3>Rohis</h3>
                    <p>Rohani Islam</p>
                </div>

                <div class="overlay" id="rohis">
                    <img src="assets/img/logos/rohis.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#koperasi">
                <img src="assets/img/logos/koperasi.png" alt="">
                <div class="img-title">
                    <h3>Koperasi</h3>
                    <p></p>
                </div>

                <div class="overlay" id="koperasi">
                    <img src="assets/img/logos/koperasi.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#lps">
                <img src="assets/img/logos/lps.png" alt="">
                <div class="img-title">
                    <h3>LPS</h3>
                    <p>Lembaga Pers Siswa</p>
                </div>

                <div class="overlay" id="lps">
                    <img src="assets/img/logos/lps.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#pikr">
                <img src="assets/img/logos/pikr.png" alt="">
                <div class="img-title">
                    <h3>PIKR</h3>
                    <p>Pusat Informasi dan Konseling Remaja</p>
                </div>

                <div class="overlay" id="pikr">
                    <img src="assets/img/logos/pikr.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#kir">
                <img src="assets/img/logos/kir.png" alt="">
                <div class="img-title">
                    <h3>KIR</h3>
                    <p>Kelompok Ilmiah Remaja</p>
                </div>

                <div class="overlay" id="kir">
                    <img src="assets/img/logos/kir.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#kasip">
                <img src="assets/img/logos/kasip.png" alt="">
                <div class="img-title">
                    <h3>KASIP</h3>
                    <p>Komunitas Siswa Pencinta Lingkungan Alam Selaras</p>
                </div>

                <div class="overlay" id="kasip">
                    <img src="assets/img/logos/kasip.png" alt="">
                </div>
            </a>
        </div>
    </div>

        <!-- 3 Eskul Terakhir -->
    <div class="container-cc">
        <div class="card">
            <a href="#osis">
                <img src="assets/img/logos/osis.png" alt="">
                <div class="img-title">
                    <h3>Osis</h3>
                    <p>Organisasi Siswa Intra Sekolah</p>
                </div>
                <div class="overlay" id="osis">
                    <img src="assets/img/logos/Osis.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#pramuka">
                <img src="assets/img/logos/pramuka.png" alt="">
                <div class="img-title">
                    <h3>Pramuka</h3>
                    <p>Praja Muda Karana</p>
                </div>
                <div class="overlay" id="pramuka">
                    <img src="assets/img/logos/pramuka.png" alt="">
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#pmr">
                <img src="assets/img/logos/pmr.png" alt="">
                <div class="img-title">
                    <h3>PMR</h3>
                    <p>Palang Merah Remaja</p>
                </div>

                <div class="overlay" id="pmr">
                    <img src="assets/img/logos/pmr.png" alt="">
                </div>
            </a>
        </div>
    </div>
    </section>
    <script src="assets/js/ciput.js"></script>    
</body>
</html>
