<?php
require 'function.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST,$_FILES['foto']) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'laporan_user.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'laporan_user.php';
        </script>";
    }
}

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="user.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USER</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <h1 class="fw-bold fs-6"><a class="navbar-brand" href="home_user.php">Selamat datang</a></h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link text-dark" href="laporan_user.php">lihat laporan</a>
          </li>
          
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              user
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logout.php">logout</a></li>
            </ul>
          </li>
      </div>
    </div>
  </nav>
  <!-- body -->
  <div class="container-sm margin_content">
    <!-- quote -->
    <figure class="text-center" style="margin-top: 100px;">
      <blockquote class="blockquote ">
        <p> Never be afraid to raise your voice for honestly and truth and compassion against injustice and lying greed. if people all over the world... would do this, it would change the earth.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        william faulkner, <cite title="Source Title">american writer</cite>
      </figcaption>
    </figure>
    <!-- content -->
    <div class="row" style="margin-top: 100px;">
      <div class="col">
        <!-- form -->

        <h1>silahkan tulis laporanmu disamping ini ya!</h1>
      </div>
      <div class="col">
        <div class="mb-3">
          <form action="" method="post" enctype="multipart/form-data">
            <label for="exampleFormControlTextarea1" class="form-label">silahkan tulis laporanmu dibawah ini</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="isi_laporan"></textarea>
            <div class="d-grid gap-2">
              <div class="mb-3">
                <label for="formFile" class="form-label">masukan gambar/foto bukti</label>
                <input class="form-control" type="file" name="foto">
              </div>
              <button class="btn btn-dark" type="submit" name="submit">Laporkan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>