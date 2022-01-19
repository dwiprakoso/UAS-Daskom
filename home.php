<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Starter -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            min-height: 697px;
            background-image: url(img/hero-img.jpg);
            background-size: cover;
        }
    </style>
    <title>travelaja.com</title>
</head>
<body>
    <!-- Navbar Start -->

    <nav id="home" class="navbar navbar-expand-lg navbar-light" style="background-color:#fbfbfb;">
        <div class="container">
            <a class="navbar-brand" href="#"><b>travelaja</b>.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="color: #fff; font-weight: bold;">
                    <li class="nav-item">
                        <a class="nav-link me-4" href="destinasi.php">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="tentang.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="profil.php">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Hero Start -->

    <section id="hero">
        <div class="jumbotron position-absolute top-50 start-50 translate-middle">
        <h1 class="display-4">Haloo,
            <?php
                if(isset($_POST['fnama'])){
                    $nama = $_POST['fnama'];
                    echo $nama;
                }
            ?>
        </h1>
        <p class="lead">Mengelilingi dunia dengan liburan yang luar biasa.</p>
        <a class="btn" href="destinasi.php" role="button" style="background-color: #000; color:#fff;">Berkeliling Dunia</a>
        </div>
    </section>

    <!-- Hero End -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>