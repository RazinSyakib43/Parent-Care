<?php

include '../../koneksi.php';
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
    <title>Hubungi Kami | ParentCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500;700&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 bgcolor" data-aos="fade-down">
            <div class="container-xl">
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
                                <li><a class="dropdown-item" href="../Tes Mental Health/tes-mental-health.php">Tes Kesehatan Mental</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="../Forum Discussion/forum.php">Discuss</a>
                        <a class="nav-login btn btn-success px-4 text-white btn-login" id="login" href="../login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Tentang Kami -->
    <section class="tentang-kami">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-once="true">
                    <h2 class="section-heading">Hubungi Kami</h2>
                    <p class="subheading text-start text-justify">Terima kasih telah mengunjungi halaman Hubungi Kami di ParentCare. Kami adalah layanan psikologi anak dan parenting yang siap membantu orang tua mengatasi masalah-masalah yang dihadapi saat mengasuh anak-anak.</p>
                    <p class="subheading text-start text-justify">Jika Anda memiliki pertanyaan, keluhan, atau saran untuk layanan kami, silakan hubungi kami melalui salah satu kontak di bawah ini:</p>
                    <p class="subheading text-start text-justify">
                    <ul>
                        <li>
                            <p class="subheading text-start text-justify">Email: parentcare.capstone@gmail.com</p>
                        </li>
                        <li>
                            <p class="subheading text-start text-justify">Telepon: 0800-100-0000 (panggilan gratis)</p>
                        </li>
                        <li>
                            <p class="subheading text-start text-justify">WhatsApp: 0812-345-6789</p>
                        </li>
                        <li>
                            <p class="subheading text-start text-justify">Instagram: @parentcareid</p>
                        </li>
                    </ul>
                    </p>
                    <p class="subheading text-start text-justify">Kami akan segera menanggapi permintaan Anda dan membantu menjawab pertanyaan Anda seputar layanan kami. Kami berusaha untuk memastikan bahwa orang tua dapat dengan mudah menghubungi kami dan mendapatkan bantuan yang diperlukan.</p>
                    <p class="subheading text-start text-justify">Terima kasih telah mempercayakan layanan ParentCare untuk membantu mengatasi masalah-masalah yang dihadapi saat mengasuh anak-anak. Kami berharap dapat terus memberikan layanan terbaik bagi Anda dan keluarga Anda.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <section class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 mt-3">
                    <div class="logo-footer">
                        <a class="navbar-brand" href="#">ParentCare.</a>
                    </div>
                    <div class="info mt-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <a href="" class=" infotxt">Layanan
                                    konsultasi anak terbaik untuk anda</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1">

                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="info mt-4">
                        <h3>About ParentCare</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="../Another pages/Tentang kami.php">Tentang Kami</a></li>
                            <li><a class="nav-footer" href="../Another pages/Hubungi kami.php">Hubungi Kami</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="info mt-4">
                        <h3>More</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="../Another pages/syarat dan ketentuan.php">Syarat & Ketentuan</a></li>
                            <li><a class="nav-footer" href="../Another pages/privasi.php">Privasi</a></li>
                            <li><a class="nav-footer" href="../FAQ/faq.php">FAQ</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="info mt-4">
                        <h3>Media Sosial</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="#"><img src="../../asset/image/icon/icons8-instagram-30.png" alt="Logo Instagram">
                                    Instagram</a></li>
                            <li><a class="nav-footer" href="#"><img src="../../asset/image/icon/icons8-facebook-30.png" alt="Logo Instagram"> Facebook</a></li>
                            <li><a class="nav-footer" href="#"><img src="../../asset/image/icon/icons8-twitter-30.png" alt="Logo Instagram"> Twitter</a></li>
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
    <script src="scripts/fetch news API index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>