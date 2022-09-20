<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekrutmen</title>
    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/65b5397c1e.js" crossorigin="anonymous"></script>
    <!--Core Bootsrap JS css -->
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
    <!-- HEADER: MENU + HEROE SECTION -->
    <header>
        <div class="menu">
            <?= include("template/header.php"); ?>
            <?= include('template/navbar.php'); ?>
        </div>
    </header>
    <!-- CONTENT -->
    <?= include('slider/slider.php'); ?>
    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
    <?= include('home/Home.php'); ?>
    <footer>


    </footer>

</body>

</html>