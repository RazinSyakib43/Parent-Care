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
            <div class="row mt-4 question-list" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
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
                    <div class="card skor-card" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                        <h2 class="section-heading text-white text-start">Skor anda adalah:</h2>
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
            <div class="row mt-2 ">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                        <h2 class="section-heading text-start">Kesehatan Mental</h2>
                        <p class="mental-article">Kesehatan mental adalah seperti kepala yang tersusun rapi dari emosi, psikologi, dan interaksi sosial yang saling terkait. Dengan kesehatan mental yang baik, kita bisa berpikir jernih, merasa sejahtera, dan bertindak dengan tepat. Kesehatan mental juga membantu kita menghadapi stres, bergaul dengan orang lain, dan membuat keputusan yang bijaksana. Kesehatan mental sangat penting untuk semua usia, mulai dari anak-anak hingga dewasa. Namun jika kesehatan mental terganggu, itu bisa berdampak pada pikiran, perasaan, dan perilaku kita.</p>
                        <p class="mental-article">Kesehatan mental merupakan kondisi yang terdiri dari beragam faktor, mulai dari faktor biologis seperti genetik dan zat biologis tubuh, hingga pengalaman hidup dan riwayat keluarga. Jangan biarkan masalah kesehatan mental menguasai hidup Anda. Segera cari bantuan jika Anda merasa mengalami masalah dalam hal ini.</p>
                        <h2 class="section-heading text-start">Tanda-tanda mungkin seseorang mengalami gangguan Kesehatan mental</h2>
                        <ol>
                            <li class="mental-article">Merasa sedih berkepanjangan, kadang tanpa sebab yang jelas.</li>
                            <li class="mental-article">Mati rasa atau tak peduli dengan lingkungan sekitar.</li>
                            <li class="mental-article">Merasa lelah yang signifikan, tidak berenergi, dan mengalami masalah tidur.</li>
                            <li class="mental-article">Sering marah berlebihan dan sangat sensitif.</li>
                            <li class="mental-article">Merasa putus asa dan tak berdaya.</li>
                            <li class="mental-article">Sering merasa bingung, khawatir, atau takut.</li>
                            <li class="mental-article">Memiliki pengalaman buruk yang tidak bisa dilupakan.</li>
                            <li class="mental-article">Mengalami delusi, paranoia, atau halusinasi.</li>
                            <li class="mental-article">Merasa sulit untuk berkonsentrasi.</li>
                            <li class="mental-article">Merasa takut atau khawatir berlebihan, atau dihantui perasaan bersalah.</li>
                            <li class="mental-article">Perubahan suasana hati yang drastis.</li>
                            <li class="mental-article">Cenderung menarik diri dari lingkungan sosial.</li>
                            <li class="mental-article">Tidak mampu mengatasi stres atau masalah sehari-hari.</li>
                            <li class="mental-article">Memiliki pikiran untuk bunuh diri.</li>
                        </ol>
                        <h2 class="section-heading text-start">Depresi</h2>
                        <p class="mental-article">Depresi adalah sebuah perasaan yang menyakitkan yang dapat mempengaruhi cara seseorang berpikir dan bertindak. Namun, jangan khawatir, karena depresi bisa diobati. Depresi dapat menyebabkan seseorang merasa sedih dan tidak tertarik pada hal-hal yang biasanya dia sukai. Ini dapat menyebabkan masalah emosional dan fisik, dan dapat mempengaruhi kemampuan seseorang untuk bekerja dan beraktivitas di rumah</p>
                        <p class="mental-article">Berikut ini adalah list dari gejala depresi yang dapat bervariasi dari ringan hingga berat dan dapat meliputi:</p>
                        <ol>
                            <li class="mental-article">Merasa sedih atau sedang depresi</li>
                            <li class="mental-article">Kehilangan minat atau kesenangan dalam aktivitas yang pernah dinikmati</li>
                            <li class="mental-article">Perubahan nafsu makan - penurunan berat badan atau penambahan berat badan yang tidak terkait dengan diet</li>
                            <li class="mental-article">Kesulitan tidur atau terlalu banyak tidur</li>
                            <li class="mental-article">Kehilangan energi atau peningkatan kelelahan</li>
                            <li class="mental-article">Peningkatan aktivitas fisik tanpa tujuan (misalnya, ketidakmampuan untuk duduk diam, mondar-mandir, melambaikan tangan) atau gerakan atau ucapan yang lambat (tindakan ini harus cukup parah agar dapat diamati oleh orang lain)</li>
                            <li class="mental-article">Merasa tidak berharga atau bersalah</li>
                            <li class="mental-article">Kesulitan berpikir, berkonsentrasi atau mengambil keputusan</li>
                            <li class="mental-article">Pikiran tentang kematian atau bunuh diri.</li>
                        </ol>
                        <h2 class="section-heading text-start">Cemas</h2>
                        <p class="mental-article">Kecemasan adalah seperti pelangi setelah hujan, menghiasi hidup kita dengan perasaan waspada dan siap sedia. Namun, gangguan kecemasan adalah awan hitam yang menyelimuti pikiran kita, membuat kita takut dan cemas berlebihan. Namun tenang saja, banyak cara yang dapat kita tempuh untuk mengatasinya, sehingga kecemasan tidak lagi menghalangi kita untuk hidup produktif dan bahagia.</p>
                        <p class="mental-article">Kecemasan adalah sebuah perasaan yang membuat otot kita tegang dan membuat kita menghindar dari masalah, sedangkan ketakutan adalah perasaan yang membuat kita bertarung atau lari untuk menghindar dari bahaya.</p>
                        <p class="mental-article">Gangguan kecemasan dapat menyebabkan orang berusaha menghindari situasi yang memicu atau memperburuk gejala mereka. Prestasi kerja, tugas sekolah dan hubungan pribadi dapat terpengaruh. Secara umum, bagi seseorang yang didiagnosis dengan gangguan kecemasan, rasa takut atau cemas harus tidak sesuai dengan situasi atau usia yang tidak sesuai, juga menghambat kemampuan seseorang untuk berfungsi normal.</p>

                        <h2 class="section-heading text-start">Stress</h2>
                        <p class="mental-article">Stress merupakan sebuah perasaan yang dapat menjadi kewalahan bagi seseorang, sehingga ia merasa tidak mampu mengatasinya akibat dari tekanan yang tidak terkendali. Pada intinya, stress adalah respon tubuh seseorang terhadap tekanan yang ditimbulkan oleh suatu situasi atau peristiwa dalam kehidupan. Penyebab stress dapat bermacam-macam, tergantung pada orang yang mengalaminya, lingkungan tempat tinggal, sosial ekonomi, dan faktor genetik yang dimilikinya.</p>
                        <p class="mental-article">Stress yang datang dari hal-hal baru atau tidak terduga, ancaman terhadap perasaan diri, atau merasa tidak memiliki kendali akan menghadirkan ciri-ciri umum yang tidak menyenangkan dalam diri kita.</p>
                        <p class="mental-article">Stress adalah musuh yang bersembunyi di balik selimut, menyerang tanpa terlihat dan menghalangi kemampuan seseorang untuk mengendalikan situasi dan peristiwa dalam hidupnya.</p>
                    </div>
                    <div class="col-1"></div>
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
                                <a href="https://wa.me/6281393015244" target="_blank" class="infotxt"><i class="bx bxl-whatsapp pe-2"></i></a>
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