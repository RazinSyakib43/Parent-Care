<?php

include 'koneksi.php';
session_start();

$query =
    "SELECT * from tb_dokter";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$query_test =
    "SELECT * FROM tb_testimoni LEFT JOIN tb_user
    ON tb_testimoni.id_user = tb_user.id WHERE tb_testimoni.id_user = tb_user.id";

$result_test = mysqli_query($conn, $query_test);
$row_test = mysqli_fetch_assoc($result_test);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tes Kesehatan Mental | Parent Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 bgcolor" data-aos="fade-down">
            <div class="container">
                <a class="navbar-brand" href="../../index.php">Parent<span>Care</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
                        <a class="nav-link" href="../Article/article.php">Artikel</a>
                        <a class="nav-link" href="../FAQ/faq.php">FAQ</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../Transaksi/konsultasi.php">Konsultasi</a></li>
                                <li><a class="dropdown-item" href="tes-mental-health.php">Tes Minat Bakat</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="../Forum Discussion/forum.php">Discuss</a>
                        <a class="nav-login btn btn-success px-4 text-white btn-login" id="login" href="../pages/login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="article mt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-once="true">
                    <h2 class="section-heading">Tes kesehatan mental anda</h2>
                </div>
            </div>
            <div class="row mt-4 question-list">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card">
                        <div class="col-12 mb-3">
                            <div class="ques" id="test"></div>
                        </div>
                        <div class="col-12 mb-3">
                            <input type="radio" name="options" id="skor0"><span id="skorr0"></span>
                        </div>
                        <div class="col-12 mb-3">
                            <input type="radio" name="options" id="skor1"><span id="skorr1"></span>
                        </div>
                        <div class="col-12 mb-3">
                            <input type="radio" name="options" id="skor2"><span id="skorr2"></span>
                        </div>
                        <div class="col-12 mb-3">
                            <input type="radio" name="options" id="skor3"><span id="skorr3"></span>
                        </div>
                        <div class="col-3"> <button type="submit" class="btn btn-send" onclick="countAnswer()">Next</button>
                        </div>
                    </div>
                </div>
                <div class=" col-1"></div>
            </div>
            <div class="row mt-2 ">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card skor-card">
                        <h2 class="section-heading text-white">Skor anda adalah:</h2>
                        <div class="row">
                            <div class="col-4">
                                <div class="sub-skor-card">
                                    <h3 class="sub-title-kategori">Depresi = <span id="score-depresi"></span></h3>
                                    <p><span id="status-mentalhealth"></span></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="sub-skor-card">
                                    <h3 class="sub-title-kategori">Cemas = <span id="score-cemas"></span></h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="sub-skor-card">
                                    <h3 class="sub-title-kategori">Stress = <span id="score-stress"></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-1"></div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <section class="footer mt-5">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-4 col-lg-3 mt-3">
                    <div class="logo-footer">
                        <a class="navbar-brand" href="#">ParentCare.</a>
                    </div>
                    <div class="info mt-lg-2">
                        <div class="row">
                            <div class="col-12">
                                <a href="" class=" infotxt">Layanan
                                    konsultasi anak terbaik untuk anda</a>
                            </div>
                        </div>
                    </div>
                    <div class="sosmed mt-lg-4">
                        <div class="row">
                            <div class="col-4">
                                <a href="https://wa.me/6282133635122" target="_blank" class="infotxt"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                            <div class="col-4">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <div class="col-4">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-1">

                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="info mt-4">
                        <h3>About ParentCare</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="#">Tentang Kami</a></li>
                            <li><a class="nav-footer" href="#">Hubungi Kami</a></li>
                            <li><a class="nav-footer" href="#">ParentCare Happy</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="info mt-4">
                        <h3>Kerja Sama</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="#">Info Kolaborasi</a></li>
                            <li><a class="nav-footer" href="#">Mahasiswa</a></li>
                            <li><a class="nav-footer" href="#">Komunitas</a></li>
                            <li><a class="nav-footer" href="#">Sekolah</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="info mt-4">
                        <h3>More</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="#">Syarat & Ketentuan</a></li>
                            <li><a class="nav-footer" href="#">Privasi</a></li>
                            <li><a class="nav-footer" href="#">Iklan</a></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    <p class="copyright">Copyright © 2022 ParentCare | All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <script src="scripts/data.js"></script>
    <script src="scripts/index.js"></script>
    <script>
        $('.element').on('click', function() {
            $(this).toggleClass("active");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>