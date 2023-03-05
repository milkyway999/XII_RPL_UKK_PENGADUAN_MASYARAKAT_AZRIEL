<?php
require '../login/function.php';

$id_pengaduan = $_GET["id_pengaduan"];
$pengaduan = query("SELECT * FROM pengaduan WHERE id_pengaduan=$id_pengaduan");

if (isset($_POST["submit"])) {

  if (tambah_tanggapan($_POST) > 0) {
      echo "<script>
      alert('tanggapan berhasil ditambahkan');
      document.location.href = 'home_admin.php';
      </script>";
  } else {
      echo "<script>
      alert('tanggapan gagal ditambahkan');
      document.location.href = 'home_admin.php';
      </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="admin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIHAT LAPORAN</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
    <script src="sidebars.js"></script>
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
  </symbol>
  
</svg>
<!-- sidebars -->
<main>
  <h1 class="visually-hidden">Sidebars examples</h1>

  <div class="d-flex flex-column flex-shrink-0 p-3 text-black" style="width: 280px; background-color:#FFB703;">
   
      <span class="fs-4">HALO, PETUGAS!</span>
    
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
      <a href="home_admin.php" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Home
        </a>
      </li>
      <li>
        <a href="laporan.php" class="nav-link text-black">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          lihat laporan
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-black text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <strong style="color : black;">petugas</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
    </div>
    <div class="b-example-divider"></div>
      <!-- body -->
<div class="container">
  
<div class="row" style="margin-top: 30px;">
<h1 style="text-align: center; background-color: #FFB703;">detail laporan</h1>
      <div class="col" style="padding-top: 20px;">
       
      <table class="table bg-light">
          <thead>
          <?php foreach ($pengaduan as $row) : ?>
            <tr>
              <th scope="col">id pengaduan : </th>
              <th scope="col"><?= $row["id_pengaduan"] ?></th>
            </tr>
            <tr>
              <th scope="col">tanggal pengaduan : </th>
              <th scope="col"><?= $row["tgl_pengaduan"] ?></th>
            </tr>
            <tr>
              <th scope="col">foto/gambar : </th>
              <th scope="col"><img src="../img/<?= $row["foto"] ?>" width="300px" alt="ini foto"></th>
            </tr>
            <tr>
              <th scope="col">isi laporan : </th>
              <td style="word-wrap: break-word; max-width: 400px;"><?= $row["isi_laporan"] ?></td>
            </tr>
            <tr>
              <th scope="col">tanggapan : </th>
              <td style="word-wrap: break-word; max-width: 400px;"> <a href="tanggapan.php?id_pengaduan=<?= $row["id_pengaduan"] ?>"><button type="button" class="btn btn-outline-success">lihat tanggapan</button></a></td>
            </tr>
            <tr>
              <th scope="col">status : </th>
              <td style="word-wrap: break-word; max-width: 400px;"><?= $row["status"] ?></td>
            </tr>
          </thead>
          <tbody>
            <tr>  
                <td>
                  
                    <form action="" method="post">
                    <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="tanggapan"></textarea>
                     <label for="floatingTextarea2">tanggapan anda</label>
                     <input type="hidden" name="id_pengaduan" value="<?= $row["id_pengaduan"] ?>">
                </div><br>
            <button type="submit" class="btn btn-outline-success" name="submit">tanggapi</button>
                </td>
              
                <td>
                  ubah status :  
                  <div class="btn-group">
  <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" name="status">
  <option value="proses">proses</option>
  <option value="selesai">selesai</option>
</select>
</form>
</div>
                </td>
            </tr>
          </tbody>
        <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</body>
</html>