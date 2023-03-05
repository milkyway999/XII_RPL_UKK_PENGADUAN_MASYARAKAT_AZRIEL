<?php
require '../login/function.php';
$pengaduan = query("SELECT * FROM pengaduan");


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
  
  <div class="row" style="margin-top: 30px;">
  <h1 style="text-align: center; background-color: #FFB703;">laporan masyarakat</h1>
        <div class="col" style="padding-top: 20px;">
         <button class="kolom_aksi" id="button_print">print</button>
        <table class="table bg-light">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">id_pengaduan</th>
                <th scope="col">tgl_pengaduan</th>
                <th scope="col">isi_laporan</th>
                <th scope="col">foto</th>
                <th scope="col">status</th>
            
              </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
          <?php foreach ($pengaduan as $row) : ?>
              <tr>
                  <td class="bg-secondary"><?= $i; ?></td>
                  <td><?= $row["id_pengaduan"] ?></td>
                  <td><?= $row["tgl_pengaduan"] ?></td>
                
                  <td style="word-wrap: break-word; max-width: 200px;"><?= $row["isi_laporan"] ?></td>
                  <td><img src="../img/<?= $row["foto"] ?>" width="300px" alt="ini foto"></td>
                  <td><?= $row["status"] ?></td>
              </tr>
              <?php $i++; ?>
          <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

<script>
var button_print=document.getElementById('button_print')
button_print.addEventListener('click',function(){
  window.print()
})
</script>
</body>

</html>