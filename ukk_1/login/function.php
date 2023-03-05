<?php
$conn = mysqli_connect("localhost", "root", "", "pengaduan");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data, $foto)
{
    global $conn;
   
    // $id_pengaduan = htmlspecialchars($data["id_pengaduan"]);
    // $tgl_pengaduan = timezone_location_get(+1);
    $isi_laporan = htmlspecialchars($data["isi_laporan"]);
    $data_foto = htmlspecialchars($foto["name"]);
    
    // $status = htmlspecialchars($data["status"]);
session_start();
$nik = $_SESSION["nik"];
    $query = "INSERT INTO pengaduan(nik,isi_laporan,foto,status) VALUES('$nik','$isi_laporan','$data_foto','proses')";
    mysqli_query($conn, $query);

move_uploaded_file($foto["tmp_name"],"../img/$data_foto");

    return mysqli_affected_rows($conn);
}

function hapus($id_pengaduan)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pengaduan WHERE id_pengaduan = $id_pengaduan ");

    return mysqli_affected_rows($conn);
}
function registrasi($reg){
    global $conn;

    $nik = htmlspecialchars($reg["nik"]);
    $nama = htmlspecialchars($reg["nama"]);
    $username = htmlspecialchars($reg["username"]);
    $no_hp = htmlspecialchars($reg["no_hp"]);
    $password = htmlspecialchars($reg["password"]);
    
    $query = "INSERT INTO masyarakat VALUES('$nik','$nama','$username','$password','$no_hp')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function registrasi_petugas($reg){
    global $conn;

    $nama = htmlspecialchars($reg["nama_petugas"]);
    $username = htmlspecialchars($reg["username_petugas"]);
    $no_hp = htmlspecialchars($reg["telp"]);
    $password = htmlspecialchars($reg["password_petugas"]);
    
    $query = "INSERT INTO petugas(nama_petugas,username,password,telp) VALUES('$nama','$username','$password','$no_hp')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function tambah_tanggapan($data)
{
    global $conn;
    $id_pengaduan = htmlspecialchars($data["id_pengaduan"]);
    $tanggapan = htmlspecialchars($data["tanggapan"]);
    $status = htmlspecialchars($data["status"]);
 
    // $status = htmlspecialchars($data["status"]);
session_start();
$id_petugas = $_SESSION["id_petugas"];
    $query = "INSERT INTO tanggapan(id_pengaduan,id_petugas,tanggapan) VALUES('$id_pengaduan','$id_petugas','$tanggapan')";
    $query2 = "UPDATE pengaduan SET status='$status' WHERE id_pengaduan = $id_pengaduan";

    mysqli_query($conn, $query);
    mysqli_query($conn, $query2);

    return mysqli_affected_rows($conn);
}
function hapus_tanggapan($id_pengaduan)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tanggapan WHERE id_pengaduan = $id_pengaduan ");

    return mysqli_affected_rows($conn);
}
function ubah($data, $foto){
    global $conn;
   
    $id_pengaduan = $data["id_pengaduan"];
    $isi_laporan = htmlspecialchars($data["isi_laporan"]);
    $data_foto = htmlspecialchars($foto["name"]);
    
    // $status = htmlspecialchars($data["status"]);

    $query = "UPDATE pengaduan SET isi_laporan = '$isi_laporan', foto ='$data_foto'  WHERE id_pengaduan=$id_pengaduan";
    mysqli_query($conn, $query);

move_uploaded_file($foto["tmp_name"],"../img/$data_foto");

    return mysqli_affected_rows($conn);
}