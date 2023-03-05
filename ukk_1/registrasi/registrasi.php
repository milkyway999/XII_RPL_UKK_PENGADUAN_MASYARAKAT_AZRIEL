<?php
require '../login/function.php';

if ( isset($_POST["register"])){

  if(registrasi($_POST) > 0){
    echo"<script>
      alert('user baru berhasil ditambah!');
      document.location.href = 'log.php';
    </script>";
  } else {
    echo"<script>
    alert('user baru gagal ditambah!');
  </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="registrasi.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INI REGISTRASI</title>
</head>
<body>
    <div class="container">
        <!-- baris 1 -->
        <div class="row">
          <!-- kolom 1 -->
          <div class="col tes">
            <!-- corousel -->
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../img/welcome1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>login</h5>
                      <a href="../login/login_user.php">jika sudah memiliki akun, silahkan klik link ini untuk login</a>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="../img/welcome2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>login</h5>
                      <p>dimohon untuk login terlebih dahulu, form login tersedia disebelah kanan kamu</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="../img/welcome3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" >
                      <h5>mohon untuk</h5>
                      <p>tidak menggunakan bahasa kasar, rasis, dan hina</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>
          <!-- kolom 2 -->
          <div class="col">
            <!-- card -->
            <div class="shadow-lg p-3 mb-5 bg-body rounded" style="margin-top: 50px;">
            <div class="card shadow-lg" style="height: 500px; width: 550px; padding: 25px 50px 50px 50px; background-color: #FFB703;">
                <!-- input -->
          
            <form style="text-align: center; " action="" method="post">
            <h1 style="color: black;">Daftar dulu ya!</h1> <br> <br>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">nik</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nik">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">nama</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nama">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">username</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="username">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">no hp</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="no_hp">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">password</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password">
                  </div>
                  <!-- button -->
                 <button class="btn btn-dark" style="color: #8ECAE6;" name="register">DAFTAR</button><br>
                <a href="../login/login_user.php" style="text-align: center;">sudah punya akun? klik disini</a>
                </form>
            </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>