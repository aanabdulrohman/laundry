<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.css">
  <!-- my css -->
  <link rel="stylesheet" href="../asset/style.css">
  <title>My Laundry</title>
</head>
<body>
  
  <!-- cek login -->
  <?php 
  session_start();
  if($_SESSION['status'] != "login"){
    header("location:../index.php?pesan=belum_login");
  }
  ?>

  <!-- nav -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">My Laundry</a>
    <!-- toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- end toggle -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pelanggan.php">Pelanggan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan.php">Laporan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pengaturan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="harga.php">Harga</a></li>
            <li><a class="dropdown-item" href="#">Password</a></li>
          </ul>
        </li>
      </ul>
      <!-- search -->
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
  </div>
</nav>
<!-- end nav -->

  <!-- say hi -->
  <h3 class="mt-4 text-center">Selamat datang <?php echo $_SESSION['username']; ?>!</h3>
<!-- break a leg -->
<p class="em text-center">Semangat yak kerjanya, fokus!</p>


<a href="../koneksi/logout.php" class="m-md-3">Logout</a>

  <!-- js bootstrap -->
  <script src="../asset/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>