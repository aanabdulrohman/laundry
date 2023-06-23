<?php 
session_start();

// delete session
session_destroy();

// back to login
header("location:../index.php?pesan=logout");
?>