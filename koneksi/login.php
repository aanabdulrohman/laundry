<?php 
//  session start 
session_start();

// connect to db
include '../koneksi/db.php';

// catch data from form
$username = $_POST['username'];
$password = md5($_POST['password']);


// validation data from form to db
$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location:../admin/index.php");
} else {
  header("location:../index.php?pesan=gagal");
}
?>