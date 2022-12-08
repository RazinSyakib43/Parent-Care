<?php

include '../../koneksi.php';
session_start();

if (!isset($_SESSION['id'])) {

    //Penggunaan javascript
    echo "<script>var elm = document.getElementById('login');
elm.style.display = 'none';</script>";

    //Penggunaan tag style pada head
    echo '<style>button {display:none;}</style>';
}

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
    <title>Articles | ParentCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light py-4 bgcolor" data-aos="fade-down">
            <div class="container">
                <a class="navbar-brand" href="#">Parent<span>Care</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="pages/Article/article.php">Artikel</a>
                        <a class="nav-link" href="#">FAQ</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Konsultasi</a></li>
                                <li><a class="dropdown-item" href="#">Tes Minat Bakat</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="#">Discuss</a>
                        <a class="nav-login btn btn-success px-4 text-white btn-login" href="../login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Article -->
    <section class="article">
        <div class="container">

            <div class="row mt-5">
                <div class="col-12" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
                    <h2 class="section-heading">ARTICLE</h2>
                    <p class="subheading">Baca artikel kesehatan unggulan kami
                    </p>
                </div>
            </div>

            <form action="">
                <div class="row mt-4">
                    <div class="col-10"><input type="text" class="search" placeholder="Search for article" data-aos="fade-right" data-aos-once="true" data-aos-delay="200"></div>
                    <div class="col-2"><button type="submit" class="btn btn-send" data-aos="fade-left" data-aos-once="true" data-aos-delay="200">Search</button></div>
                </div>
            </form>

            <main>
                <div id="news-container" class="row" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                </div>
            </main>
        </div>
    </section>
    <!-- Article -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        let DATA = null;
        const form = document.querySelector('form');
        const newsContainer = document.querySelector('#news-container');

        async function getData() {
            const fetchData = await fetch(
                'https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=fab180adfd804228917c512c4599d0d4'
            );
            const response = await fetchData.json();

            for (const article of response.articles) {
                newsContainer.innerHTML += templateNews(article);
            }

            DATA = response;
        }

        function templateNews(data) {
            return `
            <div class="col-12 col-md-6 col-lg-3 mt-4" id="news-item">
                <div class="card">
                    <img src="${data.urlToImage}" alt="">
                    <a href="${data.url}" class="mt-5">
                        <h6>${data.title}</h6>
                    </a>
                    <p class="article-categories">${data.description}</p>
                    <p class="article-time">${data.publishedAt} by ${data.author}</p>
                </div>
            </div>
            `;
        }

        getData();
    </script>
</body>

</html>