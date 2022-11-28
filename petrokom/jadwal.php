<?php 
include('koneksijadwal.php'); 

$sql = "SELECT * FROM dbjadwal";

$result = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <title>Welcome to my site</title>
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

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h3
          style="color: #003911; font-size: 50px; font-family: Origin Tech Demo; font-weight: bold; letter-spacing: 8px; margin-top: 40px; margin-bottom: 50px; margin-left: 50px; text-align: center;">
          JADWAL PRAKTIKUM</h3>

          <div class="container" style="width:70%;">

            <table class="table table-bordered" style="border-color: #003911; text-align: center">
            <thead>
              <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>Hari</th>
                <th>Jam</th>
              </tr>
            </thead>
            <tbody>
              <?php 
          $a = 1;
          while ($row = mysqli_fetch_assoc($result)){?>
    
              <tr>
                <td><?php echo $a?></td>
                <td><?php echo $row["matkul"];?></td>
                <td><?php echo $row["hari"];?></td>
                <td><?php echo $row["jam"];?></td>
                </td>
              </tr>
    
              <?php 
      $a = $a + 1; }
        ?>
    
            </tbody>
          </table>
          </div>
        
        </div>
        <div class="col">
          <img src="time2.png" class="background" alt="">
          
      </div>
    </div>
  </div>


  <!-- tabel aslab -->
  <div class="row">
    <div class="col-md-3">
      <div class="justify-content-center">


      </div>

    </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>