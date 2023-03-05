<?php
require 'function.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'crud.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'crud.php';
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
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="nik">nik</label><br>
        <input type="text" id="nik" name="nik" required><br>

        <label for="nama">nama</label><br>
        <input type="text" id="nama" name="nama" ><br>

        <label for="username">username</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="password">password</label><br>
        <input type="text" id="password" name="password" required><br>

        <label for="telpon">telpon</label><br>
        <input type="text" id="telpon" name="telp"><br>

        <button type="submit" name="submit">tambah</button>
    </form>
</body>

</html>