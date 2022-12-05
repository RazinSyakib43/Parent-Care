<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 bgcolor" data-aos="fade-down">
            <div class="container">
                <a class="navbar-brand" href="#">Parent<span>Care</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Artikel</a>
                        <a class="nav-link" href="#">FAQ</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Konsultasi</a></li>
                                <li><a class="dropdown-item" href="#">Tes Minat Bakat</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="#">Discuss</a>
                        <a class="nav-login btn btn-success px-4 text-white btn-login" href="#">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="article mt-5">
        <div class="container mt-5">
            <div class="row"></div>

            <div class="row mt-4 question-list">
                <div class="col-3">
                    <div class="profile">
                        <a class="navbar-brand mb-3 titleProfile text-center" href="#">Dolly Ranu</a>
                        <div class="col-12 fotoProfile">
                        <img src="asset/image/profile.jpeg" class="rounded-circle">
                        </div>
                        <div class="col-12 profile-description mt-2">
                        <p>dollyranu@gmail.com</p>
                        <p>male</p>
                        <p>20 years old</p>
                        <p>08564587952</p>
                        <p>Jogja</p>
                        </div>
                        <div class="col-3 mt-3"> <button type="submit" class="btn btnEdit">Edit Profile</button></div>
                        <div class="col-3 mt-3"> <button type="submit" class="btn btnHistory">History Purchase</button></div>
                    </div>

                    
                </div>
                
                <div class="col-9">
                    <div class="card">
                        <a class="navbar-brand mb-3 titleEdit" href="#">History Purchase</a>
                        <div class="history-card">
                            <div class="row col-12 mb-3">

                                <div class="col-sm-3 d-flex align-items-center">
                                    <h1 class="namaPaket">Paket Super</h1>
                                </div>

                                <div class="col-sm-1"><div class="vl"></div></div>
                                
                                <div class="col-sm-4">
                                    <p><b>Tanggal</b>: 9 November 2022</p>
                                    <p><b>Kode Order</b>: 209198854689</p>
                                    <p><b>Harga</b>: Rp 150.000</p>
                                </div>

                                <div class="col-sm-1"><div class="vl"></div></div>

                                <div class="col-sm-3 d-flex align-items-center">
                                    <h1 class="statusPending">Pending</h1>
                                </div>
                            </div>
                        </div>

                        <div class="history-card mt-4">
                            <div class="row col-12 mb-3">

                                <div class="col-sm-3 d-flex align-items-center">
                                    <h1 class="namaPaket">Paket Super</h1>
                                </div>

                                <div class="col-sm-1"><div class="vl"></div></div>
                                
                                <div class="col-sm-4">
                                    <p><b>Tanggal</b>: 9 November 2022</p>
                                    <p><b>Kode Order</b>: 209198854689</p>
                                    <p><b>Harga</b>: Rp 150.000</p>
                                </div>

                                <div class="col-sm-1"><div class="vl"></div></div>

                                <div class="col-sm-3 d-flex align-items-center">
                                    <h1 class="statusSuccess">Success</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-1"></div>
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
                        <h3>Lebih dekat</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="info mt-4">
                        <h3>Lebih dekat</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="info mt-4">
                        <h3>Lebih dekat</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="info mt-4">
                        <h3>Lebih dekat</h3>
                        <div class="footer-list mt-lg-3">
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
                            <li><a class="nav-footer" href="#">Lorem Ipsum</a></li>
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

    
    
</body>

</html>