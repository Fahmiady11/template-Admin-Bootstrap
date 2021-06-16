<?php
require "functionMahasiswa.php";

$id = $_GET["id"];

$mhs = query("SELECT * FROM  tbl_mahasiswa WHERE id_mhs='$id'")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('data berhasil diubah!');
        document.location.href='daftarMahasiswa.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah ok!');
         document.location.href='daftarMahasiswa.php';
        </script>";
    }
}

?>
<!DOCTYPE html>
<html>

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
            <a class="navbar-brand pe-5 ps-4" href="#">SELAMAT DATANG ADMIN | <b>SISTEM PENDATAAN KOS MAHARDIKA</b></a>
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
                    <a class="nav-link text-white" href="DaftarPegawai.php"><i class="fas fa-user-edit me-2"></i>Daftar
                        Pegawai</a>
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
            <h3><i class="fas fa-graduation-cap me-2"></i>Daftar Mahasiswa</h3>
            <form action="" method="post">
                <input type="hidden" name="id_mhs" id="id_mhs" value="<?= $mhs["id_mhs"]; ?>">
                <div class="mb-3 pt-4">
                    <label for="nama" class="form-label">NAMA</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Mahasiswa" required value="<?= $mhs["nama"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM Mahasiswa" required value="<?= $mhs["nim"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="ttl" class="form-label">TTL</label>
                    <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat Tanggal Lahir" required value="<?= $mhs["ttl"]; ?>">
                </div>      
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Mahasiswa" required value="<?= $mhs["alamat"]; ?>">
                </div>
                <div class="mt-5">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

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