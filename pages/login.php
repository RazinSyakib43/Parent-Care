<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login ParentCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <section class="article mt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-once="true">
                    <h2 class="section-heading">Sign In</h2>
                </div>
            </div>
            <form role="form" class="text-start" action="../process/processLogin.php" method="POST">
                <div class="row mt-4 question-list">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="card">
                            <div class="col-12 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="add-topic-title" placeholder="Masukan Email" id="inputEmail"
                                    name="email">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="add-topic-title" name="password"
                                    placeholder="Masukan Password">
                            </div>
                            <div class="col-3"> <input type="submit" class="btn btn-send" value="Login" name="login">
                            </div>
                            <p class="mt-4 text-sm text-center">
                                Belum punya akun?
                                <a href="../pages/User/register.php"
                                    class="text-primary text-gradient font-weight-bold">Register</a>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-1"></div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>