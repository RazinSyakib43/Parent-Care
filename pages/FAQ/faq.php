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
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500;700&family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a class="nav-link" href="faq.php">FAQ</a>
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
    <section class="faq mt-5">
        <div class="container mt-5">
            <div class="row pt-5">
                <div class="col-12" data-aos="fade-up" data-aos-once="true">
                    <h2 class="section-heading">FAQ</h2>
                    <p class="subheading">Answer your question
                    </p>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse col-12" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-wrap">
                                        <p>Silahkan ikuti langkah berikut:</p>
                                        <ol>
                                            <li>Silahkan buka link <a href="https://parentcare237.000webhostapp.com/pages/Transaksi/konsultasi.php">https://parentcare237.000webhostapp.com/pages/Transaksi/konsultasi.php</a></li>
                                            <li>Pilih paket yang diinginkan, lalu next</li>
                                            <li>Pilih bank untuk transaksi, jangan lupa transfer ke rekening ParentCare, lalu next</li>
                                            <li>Upload bukti pembayaran, lalu finish</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class=" accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
                                <h2 class="accordion-header" id="flush-headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                                <h2 class="accordion-header" id="flush-headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                                <h2 class="accordion-header" id="flush-headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
                                <h2 class="accordion-header" id="flush-headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                                <h2 class="accordion-header" id="flush-headingEleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseEleven" class="accordion-collapse collapse" aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                                <h2 class="accordion-header" id="flush-headingTwelve">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                                        Bagaimana cara membooking dokter?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="color: black;">
                                        <p style="color: black;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu tellus
                                            ultricies, luctus ligula id, varius elit. Aenean id auctor felis. Sed ac
                                            neque
                                            convallis, tincidunt est ac, cursus justo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="info mt-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <a href="" class=" infotxt">Layanan
                                    konsultasi anak terbaik untuk anda</a>
                            </div>
                        </div>
                    </div>
                    <div class="sosmed mt-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <a href="https://wa.me/6281393015244" target="_blank" class="infotxt"><i
                                        class="bx bxl-whatsapp pe-2"></i></a>
                                <a href="#"><i class='bx bxl-instagram px-2'></i></a>
                                <a href="#"><i class='bx bxl-facebook-circle ps-2'></i></a>
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
                        <h3>More</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="#">Syarat & Ketentuan</a></li>
                            <li><a class="nav-footer" href="#">Privasi</a></li>
                            <li><a class="nav-footer" href="#">Iklan</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="info mt-4">
                        <h3>Media Sosial</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="#"><img src="../../asset/image/icon/icons8-instagram-30.png"
                                        alt="Logo Instagram">
                                    Instagram</a></li>
                            <li><a class="nav-footer" href="#"><img src="../../asset/image/icon/icons8-facebook-30.png"
                                        alt="Logo Instagram"> Facebook</a></li>
                            <li><a class="nav-footer" href="#"><img src="../../asset/image/icon/icons8-twitter-30.png"
                                        alt="Logo Instagram"> Twitter</a></li>
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
    <!-- Footer -->s
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>