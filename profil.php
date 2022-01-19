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
            background-color:#F5F5F5;
        }
        footer{
            height:50px;
            padding:13px;
            margin-top:337px;
        }
    </style>
    <title>travelaja.com</title>
</head>
<body>
     <!-- Navbar Start -->

     <nav id="home" class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="home.php"><b>travelaja</b>.com</a>
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
                        <a class="nav-link me-4" href="#">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Content Start -->

    <section>
    <div class="card mt-3 mb-3 " style="max-width: 90%; margin:0 auto;">
        <div class="row g-0 ">
            <div class="col-md-4">
                <img src="img/profil.jpg" class="img-thumbnail rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">Nama</h2>
                    <p class="card-text">Bio</p>
                    <p class="card-text"><small class="text-muted">Setting</small></p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Content End -->
    
    <!-- Footer Start -->

    <footer class="shadow-lg text-center">
        <p><b>Copyright &copy;2022 by Dwi Prakoso</b></p>
    </footer>

    <!-- Footer End -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>