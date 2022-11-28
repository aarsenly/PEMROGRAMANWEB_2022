<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <title>PETROKOM - Welcome to my site</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light justify-content-center text-primary">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="welcome.php">PETROKOM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Kelompok</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="jadwal.php">Jadwal</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style= "color: #000000" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Modul
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="modulbasdat.php">Basis Data</a></li>
                  <li><a class="dropdown-item" href="modulstrukdat.php">Struktur Data</a></li>
              </ul>
          </li>
            <a class="nav-link active" aria-current="page" href="aboutme.php">Tentang Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container-fluid" >
    <img src="te.png" class="background" alt="">
    <div class="row" >
        <div class="col-sm-4 col-lg-5">
            <h2 class="display-1" style= "font-size: 40px; font-weight: bold; margin-top: 90px; margin-left: 50px; text-align: center;">Selamat Datang di</h2>
            <h3 style="color: #003911; font-size: 60px; font-family: Origin Tech Demo; font-weight: bold; letter-spacing: 8px; margin-top: 15px; margin-left: 50px; text-align: center;">PEtrokom</h3>
            <h3 style="font-size: 15px; margin-top: 15px; margin-left: 50px; text-align: center;">Website Praktikum Teknik Elektro Konsentrasi Teknik Komputer Universitas Mulawarman</h3>
            <br>
            <br>
            <a type="button" class="btn btn-outline-primary" style= "margin-left: 230px; text-align: center; color: #037425; border-color: #037425" href="home.php">Mulai Jelajahi</a>
          </div>
        </div>
    </div>
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>