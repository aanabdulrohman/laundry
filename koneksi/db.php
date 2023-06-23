<?php 
// connect to mysqli
$koneksi = mysqli_connect("localhost", "root","","laundry");

// check connection mysqli
if(mysqli_connect_errno()){
  echo "Koneksi database gagal, segera hubungi admin aplikasi.". mysqli_connect_error();
}
?>