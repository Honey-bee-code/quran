<?php
require_once "_config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qur'an Digital</title>
    <link rel="icon" href="<?=base_url('_assets/img/quran.png')?>">
    <link rel="stylesheet" href="<?=base_url('_assets/css/bootstrap.min.css')?>">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="<?=base_url('_assets/css/fontarab.css')?>" rel="stylesheet">
    <link href="http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css" rel="stylesheet" type="text/css" />

    <style>
        .arabic{  font-family: 'Droid Arabic Naskh', 'Monda', sans-serif; }
    </style>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">
            <img src="<?=base_url('_assets/img/quran.png')?>" width="30" height="30" alt="" loading="lazy">
        </a>
        <a class="navbar-brand" href="<?=base_url()?>">Al-Quran Digital</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tafsir Bahasa Indonesia
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?=base_url('tafsir_id/jalalain.php')?>">Jalalain</a>
                    <a class="dropdown-item" href="<?=base_url('tafsir_id/q_syihab.php')?>">Quraisy Syihab</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Tafsir lainnya dalam proses</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tafsir Bahasa Inggris
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?=base_url('tafsir_en/yusufali.php')?>">Yusuf Ali</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Tafsir lainnya masih dalam proses</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tafsir Bahasa Arab
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?=base_url('tafsir_ar/jalalayn.php')?>">Jalalayn</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Tafsir lainnya masih dalam proses</a>
                    </div>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>

    <div class="container">
        <p></p>
    </div>

