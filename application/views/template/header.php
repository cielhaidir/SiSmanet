<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>Beranda</title>

    <!-- Latest compiled and minified CSS -->
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->

    <!-- Latest compiled JavaScript -->
    <script src="assets/js/bootstrap.bundle.js"></script>

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">

</head>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg <?= $bg; ?> navbar-dark fixed-top" id="mainNav">
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
                    <li class="nav-item"><a class="nav-link" href="home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="informasi">Informasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="eskul">Ekstrakurikuler</a></li>
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
                                    <form action="<?= site_url('/login');?>" method="post">
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

                                        <input type="submit" class="btn btn-secondary" href="#"></input>

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
