<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title><?php echo $judul ?></title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.css') ?>">
    <!-- slick slider -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/slick/slick.css') ?>">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/themify-icons/themify-icons.css') ?>">

    <!-- Main Stylesheet -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" type="image/x-icon">

</head>


<!-- preloader -->
<div class="preloader">
    <div class="loader">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- /preloader -->

<header class="navigation">
    <nav class="navbar fixed navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand" href="index.html"><img class="img-fluid" src="<?php echo base_url('assets/images/logo.png') ?>" alt="parsa"></a>

        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navogation" aria-controls="navogation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navogation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-dark" href="<?php echo base_url(); ?>">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-dark" href="<?php echo base_url('Cariwarga'); ?>">WARGA</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-uppercase text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PELAYANAN
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Suket Tidak Mampu</a>
                        <a class="dropdown-item" href="#">Suket Nikah </a>
                        <a class="dropdown-item" href="#">Suket Belum Nikah</a>
                        <a class="dropdown-item" href="#">Suket Domisili</a>
                        <a class="dropdown-item" href="#">Suket Lahir</a>
                        <a class="dropdown-item" href="#">Suket Usaha</a>
                        <a class="dropdown-item" href="#">Suket Penghasilan</a>
                        <a class="dropdown-item" href="#">Suket Kendaraan</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-dark" href="contact.html">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-dark" href="<?php echo base_url('admin') ?>">ADMIN</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>
    <div class="container">
        <section>
            <div class="container">
                <div class="row mt-3">