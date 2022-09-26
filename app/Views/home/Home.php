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
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url("assets/images/ci.png"); ?> " width="100%" height="50" alt=""></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080/Rekrut"><i class="fa-solid fa-calendar"></i> Recruitment</a>
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
                <div class="nav-item nav-login">
                    <a class="nav-link" href="http://localhost:8080/register">
                        BUAT AKUN
                    </a>
                </div>
                <div class="nav-item nav-login">
                    <a class="nav-link" href="http://localhost:8080/login">
                        MASUK
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container" style="margin-top:20px">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url("assets/images/ci.png"); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url("assets/images/rekrutmen.jpg"); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url("assets/images/rekrutmen2.jpg"); ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container" style="margin-top:20px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center pt-4 pb-2">
                        <h2 class="main-content-title tx-26-f mg-b-1 mg-b-lg-1">REKRUTMEN CALON PEGAWAI KOPI KITA</h2>
                        <hr class="hr-custom">
                    </div>
                    <p class="text" style="color:#2a388a"><b>
                            <u>Posisi : </u><br>
                            A. Barista<br>
                            B. Waiters<br>
                            C. Kebersihan<br>
                            D. Kasir</b><br>
                        <br><br>
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="section-title text-center pb-10">
                        <h3 class="title" style="text-align: center;color:#2a388a">PERSYARATAN UMUM</h3><br>
                    </div>
                    <!-- section title-->
                    <p class="text" style="color:#2a388a">
                        a. Pendidikan Minimal SMA/SMK Sederajat;<br>
                        b. Belum memasuki usia 27 tahun per Desember 2022;<br>
                        c. Diutamakan Memiliki Pengalaman Sesuai Biddang Yang Dipiliah Minimal 6 Bulan;<br>
                        d. Memiliki kemampuan berkomunikasi yang baik;<br>
                        e. Dinyatakan sehat jasmani dan rohani serta bebas dari narkoba.<br><br>
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="faq-content mt-45">
                        <div class="section-title text-center pb-25">
                            <h3 class="title" style="text-align: center;color:#2a388a">KUALIFIKASI</h3>

                        </div> <!-- section title -->
                        <div id="accordion">
                            <div class="card">
                                <!--PERSYARATAN BARISTA-->
                                <button class="btn btn-primary col-md6 text-left" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    BARISTA (Klik Untuk Melihat Isi)
                                </button>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    Persyaratan Barista.
                                </div>
                            </div>
                            <!--PERSYARATAN WAITERS-->
                            <div class="card">
                                <button class="btn btn-primary col-md6 text-left" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                    WAITERS (Klik Untuk Melihat Isi)
                                </button>
                            </div>
                            <div class="collapse" id="collapseExample1">
                                <div class="card card-body">
                                    Persyaratan Waiters.
                                </div>
                            </div>
                            <!--PERSYARATAN KEBERSIHAN-->
                            <div class="card">
                                <button class="btn btn-primary col-md6 text-left" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                    KEBERSIHAN (Klik Untuk Melihat Isi)
                                </button>
                            </div>
                            <div class="collapse" id="collapseExample2">
                                <div class="card card-body">
                                    Persyaratan Kebersihan.
                                </div>
                            </div>
                            <!--PERSYARATAN KASIR-->
                            <div class="card">
                                <button class="btn btn-primary col-md6 text-left" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                                    KASIR (Klik Untuk Melihat Isi)
                                </button>
                            </div>

                            <div class="collapse" id="collapseExample3">
                                <div class="card card-body">
                                    Persyaratan Kasir.
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="faq-content mt-45">
                                        <div class="section-title text-center pb-25">
                                        </div> <!-- section title -->
                                        <div class="about-accordion">
                                            <div class="accordion" id="accordionDokumen">
                                                <div class="card">
                                                    <div class="card-header" id="headingDokumen">
                                                        <a href="#" data-toggle="collapse" data-target="#collapseDokumen" aria-expanded="true" aria-controls="collapseDokumen" style="color: #2a388a;font-size: 22px; font-weight: bold;"><b>DOKUMEN YANG HARUS DILENGKAPI :</b></a>
                                                    </div>

                                                    <div id="collapseDokumen" class="collapse show" aria-labelledby="headingDokumen" data-parent="#accordionDokumen">
                                                        <div class="card-body">
                                                            <p class="text" style="text-align: justify;color:#2a388a">
                                                                Sebelum melakukan pendaftaran silahkan menyiapkan dokumen administrasi sebagai berikut :<br>
                                                                1. Pas Foto ukuran 4 x 6 (berwarna) (<i>Photo colored</i>);<br>
                                                                2. Scan KTP Asli (<i>ID Card</i>);<br>
                                                                3. Scan Ijazah / Surat Keterangan Lulus (SKL) (<i>Graduation Certificate</i>);<br>
                                                                4. Scan Transkrip nilai (<i>Transcript</i>);<br>
                                                                5. Scan Kartu Keluarga (<i>Family Card</i>);<br>
                                                                6. CV (<i>Curriculum Vitae</i>);<br>
                                                                7. Scan Surat Keterangan Berbadan Sehat dari Rumah Sakit/Puskesmas/Klinik (pemeriksaan per September 2022) (<i>Certificate of Health</i>);<br>
                                                                8. Scan Surat Referensi Pengalaman Bekerja Asli (apabila ada) (<i>Reference Letter</i>);<br>
                                                                9. Scan Sertifikat Kompetensi/Pelatihan (apabila ada) (<i>Competence Certificate</i>).<br><br>
                                                            </p>
                                                            <p style="color:#2a388a;font-weight: bold;">Keterangan :</p>
                                                            <font color="#2a388a">Harap menggabungkan dokumen sesuai dengan urutan. Dokumen yang diunggah tidak sesuai urutan
                                                                akan berpengaruh pada proses seleksi administrasi.</font><br>


                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div> <!-- card -->
                                            </div>
                                        </div> <!-- faq accordion -->
                                    </div> <!-- faq content -->
                                </div>

                            </div>
                        </div>

                    </div> <!-- faq content -->
                </div>
            </div>
        </div>
        <div class="card-footer text-muted mt-4 text-center">
            Copyright &copy <?= Date('Y') ?> E-Recruitment
        </div>
        <!-- Jquery dan Bootsrap JS -->
        <script src="<?= base_url('assets/js/jquery-3.6.1.min.js') ?>"></script>
        <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>

</body>

</html>
