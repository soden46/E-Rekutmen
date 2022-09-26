<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Recruitment</title>
    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/65b5397c1e.js" crossorigin="anonymous"></script>
    <!--Core Bootsrap css -->
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">
    <!--Core Bootsrap Jquery -->
    <script src="<?php echo base_url("assets/js/jquery-3.6.1.min.js"); ?>"></script>
    <!--Core Bootsrap popper -->
    <script src="<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
    <!--Core Bootsrap JS -->
    <script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="/"><img src="<?php echo base_url("assets/images/ci.png"); ?> " width="50" height="50" alt=""></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-calendar"></i> Recruitment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-chart-line"></i>Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"><i class="fa-solid fa-circle-question"></i> FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"><i class="fa-solid fa-headphones-simple"></i> Hubungi Kami</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <div class="container" style="margin-top:20px">
        <div class="text-center pt-4 pb-2">
            <h2 class="main-content-title tx-26-f mg-b-1 mg-b-lg-1">Daftar Lowongan</h2>
            <p class="tx-18 des-jalur">Silahkan Memilih Lowongan kerja Dibawah.</p>
            <hr class="hr-custom">
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card pricing-card ">
                    <div class="card-body text-center">
                        <div class="card-category" style="font-size: 15px">
                            caffe 1
                        </div>
                        <div class="my-4">
                            <img class="img-jalur" src="<?php echo base_url("assets/images/kopi1.jpg"); ?>" width="150" height="150">
                        </div>
                        <ul class="list-unstyled leading-loose">
                            <li>
                                <i class="fe fe-check text-success mr-2"></i>
                                Barista
                            </li>
                            <li><i class="fe fe-check text-success mr-2"></i>
                                Waiters
                            </li>
                            <li><i class="fe fe-x text-danger  mr-2"></i>
                                Kebersihan</li>
                            <li><i class="fe fe-x text-danger  mr-2"></i>
                                Kasir</li>
                        </ul>
                        <div class="text-center mt-6">
                            <a href="<?php echo base_url("login"); ?>" class="btn btn-success btn-block">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card pricing-card ">
                    <div class="card-body text-center">
                        <div class="card-category" style="font-size: 15px">
                            caffe 2
                        </div>
                        <div class="my-4">
                            <img class="img-jalur" src="<?php echo base_url("assets/images/kopi2.png"); ?>" width="150" height="150">
                        </div>
                        <ul class="list-unstyled leading-loose">
                            <li>
                                <i class="fe fe-check text-success mr-2"></i>
                                Barista
                            </li>
                            <li><i class="fe fe-check text-success mr-2"></i>
                                Waiters
                            </li>
                            <li><i class="fe fe-x text-danger  mr-2"></i>
                                Kebersihan</li>
                            <li><i class="fe fe-x text-danger  mr-2"></i>
                                Kasir</li>
                        </ul>
                        <div class="text-center mt-6">
                            <a href="<?php echo base_url("login"); ?>" class="btn btn-success btn-block">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card pricing-card ">
                    <div class="card-body text-center">
                        <div class="card-category" style="font-size: 15px">
                            caffe 3
                        </div>
                        <div class="my-4">
                            <img class="img-jalur" src="<?php echo base_url("assets/images/siger.jpeg"); ?>" width="150" height="150"">
                            </div>
                            <ul class=" list-unstyled leading-loose">
                            <li>
                                <i class="fe fe-check text-success mr-2"></i>
                                Barista
                            </li>
                            <li><i class="fe fe-check text-success mr-2"></i>
                                Waiters
                            </li>
                            <li><i class="fe fe-x text-danger  mr-2"></i>
                                Kebersihan</li>
                            <li><i class="fe fe-x text-danger  mr-2"></i>
                                Kasir</li>
                            </ul>
                            <div class="text-center mt-6">
                                <a href="<?php echo base_url("login"); ?>" class="btn btn-success btn-block">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
            <div class="container text-center">Copyright &copy <?= Date('Y') ?> E Rekrutmen</div>
        </footer>

        <!-- Jquery dan Bootsrap JS -->
        <script src="<?= base_url('public/assets/js/jquery-3.6.1.min.js') ?>"></script>
        <script src="<?= base_url('public/assets/bootstrap/js/bootstrap.min.js') ?>"></script>

</body>

</html>