<?php
require 'functionMahasiswa.php';
$jumlahMahasiswa = query("SELECT * FROM tbl_mahasiswa");
  $hitungMahasiswa=0;
  foreach($jumlahMahasiswa as $jumlah){
    $hitungMahasiswa+=1;
        }
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="fontawesome-free\fontawesome-free-5.15.1-web\css\all.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <title>Sistem Informasi</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand pe-5 ps-4" href="#">SELAMAT DATANG ADMIN | <b>UNIVERISTAS TRUNOJOYO MADURA</b></a>
      <div class="icon me-4">
        <h5>
          <i class="far fa-envelope me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Surat Masuk"></i>
          <i class="far fa-bell me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifikasi"></i>
          <i class="fas fa-sign-out-alt me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sign Out"></i>
        </h5>
      </div>
    </div>
    </div>
  </nav>
  <!--- kiri(s) kanan(e) --->
  <div class="row no gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pe-2 ps-1 pt-4">
      <ul class="nav flex-column ms-3 mb-5 ">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="Dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="daftarMahasiswa.php"><i class="fas fa-graduation-cap me-2"></i>Daftar Mahasiswa</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="daftardosen.php"><i class="fas fa-chalkboard-teacher me-2"></i>Daftar dosen</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="DaftarPegawai.php"><i class="fas fa-user-edit me-2"></i>Daftar Pegawai</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="jadwalKuliah.php"><i class="fas fa-calendar-alt me-2"></i>Jadwal Kuliah</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="nilaiMahasiswa.php"><i class="fas fa-paper-plane me-2"></i>Nilai Mahasiswa</a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-5 pt-5">
      <h3><i class="fas fa-tachometer-alt me-2"></i>DASHBOARD</h3>
      <div class="row text-white">
        <div class="card bg-info ms-3" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon"><i class="fas fa-graduation-cap me-2"></i></div>
            <h5 class="card-title">Jumlah Mahasiswa</h5>
            <div class="display-4"><?php echo $hitungMahasiswa?></div>
            <a href="daftarMahasiswa.php" style="text-decoration:none">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right m-2"></i></p>
            </a>
          </div>
        </div>
        <div class="card bg-danger ms-5" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon"><i class="fas fa-chalkboard-teacher me-2"></i></div>
            <h5 class="card-title">Jumlah Dosen</h5>
            <div class="display-4">58</div>
            <a href="" style="text-decoration:none">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right m-2"></i></p>
            </a>
          </div>
        </div>
        <div class="card bg-success ms-5" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon"><i class="fas fa-user-edit me-2"></i></i></div>
            <h5 class="card-title">Jumlah Pegawai</h5>
            <div class="display-4">20</div>
            <a href="" style="text-decoration:none">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right m-2"></i></p>
            </a>
          </div>
        </div>
      </div>
      <div class="row mt-4 ">
        <div class="card ms-1 text-center text-white" style="width: 19.5rem; border:none;">
          <div class="card-header bg-danger display-4  pt-4 pb-4">
            <i class="fab fa-instagram"></i>
          </div>
          <div class="card-body bg-secondary rounded-bottom">
            <h5 class="card-title ">Instagram</h5>
            <a href="#" class="btn btn-primary btn-warning">Follow</a>
          </div>
        </div>
        <div class="card ms-4 text-center text-white" style="width: 19.5rem; border:none;">
          <div class="card-header bg-info display-4  pt-4 pb-4">
            <i class="fab fa-twitter"></i>
          </div>
          <div class="card-body bg-secondary rounded-bottom">
            <h5 class="card-title ">Twitter</h5>
            <a href="#" class="btn btn-primary btn-warning">Follow</a>
          </div>
        </div>
        <div class="card ms-4 text-center text-white" style="width: 19.5rem; border:none;">
          <div class="card-header bg-primary display-4  pt-4 pb-4">
            <i class="fab fa-facebook-square"></i>
          </div>
          <div class="card-body bg-secondary rounded-bottom">
            <h5 class="card-title ">Facebook</h5>
            <a href="#" class="btn btn-primary btn-warning">Like</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
  </script>
  <script src="admin.js"></script>

</body>

</html>