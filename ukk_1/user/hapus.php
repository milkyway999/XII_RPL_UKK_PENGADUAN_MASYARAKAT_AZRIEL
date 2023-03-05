<?php
require 'function.php';

$id_pengaduan = $_GET["id_pengaduan"];

if (hapus($id_pengaduan) > 0) {
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'laporan_user.php';
    </script>";
} else {
    echo "<script>
    alert('data gagal dihapus');
    document.location.href = 'laporan_user.php';
    </script>";
}
