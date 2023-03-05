<?php
require '../login/function.php';

$id_pengaduan = $_GET["id_pengaduan"];

if (hapus_tanggapan($id_pengaduan) > 0) {
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'home_admin.php';
    </script>";
} else {
    echo "<script>
    alert('data gagal dihapus');
    document.location.href = 'home_admin.php';
    </script>";
}
