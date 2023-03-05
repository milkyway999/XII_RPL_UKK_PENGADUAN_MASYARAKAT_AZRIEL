<?php
require '../login/function.php';

//ambil data diurl
$id_pengaduan = $_GET["id_pengaduan"];

$pengaduan = query("SELECT*FROM pengaduan WHERE id_pengaduan=$id_pengaduan")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST,$_FILES['foto']) > 0) {
        echo "<script>
        alert('data berhasil diubah');
        document.location.href = 'laporan_user.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ubah');
        document.location.href = 'laporan_user.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="user.css" rel="stylesheet">
</head>

<body>
<div class="row" style="margin-top: 100px;">
      <div class="col">
        <!-- form -->

        <h1>silahkan ubah laporanmu disamping ini ya!</h1>
      </div>
      <div class="col">
        <div class="mb-3">
          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_pengaduan" value="<?= $pengaduan["id_pengaduan"] ?>">
            <label for="exampleFormControlTextarea1" class="form-label">silahkan ubah laporanmu dibawah ini</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="isi_laporan"></textarea>
            <div class="d-grid gap-2">
              <div class="mb-3">
                <label for="formFile" class="form-label">masukan gambar/foto bukti</label>
                <input class="form-control" type="file" name="foto">
              </div>
              <button class="btn btn-dark" type="submit" name="submit">ubah</button>
          </form>
        </div>
      </div>
</body>
</html>