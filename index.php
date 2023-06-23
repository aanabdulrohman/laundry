<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css Bootstrap -->
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.css" />

    <!-- My css -->
    <link rel="stylesheet" href="asset/style.css" />

    <title>My Laundry</title>
  </head>
  <body>
    <h2 class="judul mt-5">Selamat Datang</h2>
    <p class="judul em h6">Silahkan login terlebih dahulu, untuk masuk ke menu admin</p>

    <div class="container mt-4 ">
      <div class="col-md-4 offset-md-4">

      <!-- for notif login -->
        <?php 
        if(isset($_GET['pesan'])){
          // jika login gagal
          if($_GET['pesan'] == "gagal"){
            echo "<div class='alert alert-danger'>Login gagal, pastikan username atau password benar!</div>";
          }
          // jika berhasil logout
          elseif ($_GET['pesan'] == "logout"){
              echo "<div class='alert alert-info'>Kamu berhasil logout</div>";
            }
            // jika belum login
            elseif ($_GET['pesan'] == "belum_login") {
              echo "<div class='alert alert-danger'>Kamu harus login untuk mengakses halaman login</div>";
            }
        }
        ?>

        <!-- form login -->
        <form action="koneksi/login.php" method="post">
          <!-- username -->
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control">
               </div>
               <!-- password -->
               <div class="mb-3">
              <label class="form-label mt-2">Password</label>
              <input type="password" name="password" class="form-control">
              </div>
              <!-- botton -->
              <input type="submit" class="btn btn-primary" value="Masuk">
        </form>


      </div>
    </div>
    <!-- js Boostrap -->
    <script src="asset/bootstrap/js/bootstrap.bundle.js"></script>
  </body>
</html>
