<?php
require 'function.php';

$username = $_POST["username"];
$password = $_POST["password"];
var_dump($username, $password);

$log = mysqli_query($conn,"SELECT nik,username FROM masyarakat WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($log);
echo $cek;

if($cek > 0){
    $data = mysqli_fetch_assoc($log);
    session_start();
    $_SESSION["nik"]=$data["nik"];
    $_SESSION["username"]=$data["username"];
    header("location:../user/home_user.php");
} else{
    header('location:login_user.php?error=username/password salah');
}
    
   
?>