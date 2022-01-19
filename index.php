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
    <!-- Logo Start -->

    <nav id="home" class="navbar navbar-expand-lg navbar-light" style="background-color:#fbfbfb;">
        <div class="container">
            <a class="navbar-brand" href="#"><b>travelaja</b>.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>

    <!-- Logo End -->
    
    <!-- Form Start -->
    <form class="position-absolute top-50 start-50 translate-middle" method="POST" action="home.php">
        <h2 class="text-center mb-4" style="font-size: 42px;">Registrasi</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="fnama" name="fnama">        
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" style="width:350px;" id="femail">        
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="fpass">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="fingat">
            <label class="form-check-label" for="fingat"><b><u>Ingat saya.</u></b></label>
        </div>
        <button type="submit" class="btn btn-dark">Kirim</button>
    </form>
    <!-- Form End -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>