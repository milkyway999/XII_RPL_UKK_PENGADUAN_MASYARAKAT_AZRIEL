<?php
require 'function.php';

$username = $_POST["username_petugas"];
$password = $_POST["password_petugas"];
var_dump($username, $password);

$log = mysqli_query($conn,"SELECT id_petugas,username,level FROM petugas WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($log);
echo $cek;

if($cek > 0){
    $data = mysqli_fetch_assoc($log);
    if($data['level']=="admin"){
        session_start();
    $_SESSION["id_petugas"]=$data["id_petugas"];
    $_SESSION["username"]=$data["username"];
    $_SESSION["level"]="admin";
    header("location:../admin/home_admin.php");
    } else if($data['level']== "petugas"){
        session_start();
    $_SESSION["id_petugas"]=$data["id_petugas"];
    $_SESSION["username"]=$data["username"];
    $_SESSION["level"]="petugas";
    header("location:../petugas/home_petugas.php");
    }
} else{
    header('location:login_petugas.php?error=username/password salah');
}
    
   
?>