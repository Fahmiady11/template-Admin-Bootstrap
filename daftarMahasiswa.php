<?php
require "functionMahasiswa.php";
$mhss = query("SELECT * FROM tbl_mahasiswa ORDER BY id_mhs ASC");
//tombol cari ditekan
if(isset($_POST["cari"])){
    $mhss=cari($_POST["keyword"]);
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
            <form action="" method="post" class="d-flex">
                <input class="form-control me-2" type="search" name="keyword" placeholder="Search" aria-label="Search" size="30" autofocus autocomplete="off">
                <button class="btn btn-outline-success ms-0" type="submit" name="cari">Search</button>
            </form>
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
            <a href="tambahMahasiswa.php" class="btn btn-primary mb-2"><i class="fas fa-plus-circle me-2"></i> Tambah Data Mahasiswa</a>
            <table class="table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Nim</th>
                        <th scope="col">TTL</th>
                        <th scope="col">Alamat</th>
                        <th colspan="3" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x = 1; ?>
                    <?php foreach ($mhss as $mhs) : ?>
                        <tr>
                            <th scope="row"><?php echo $x; ?></th>
                            <td><?php echo $mhs["nama"] ?></td>
                            <td><?php echo $mhs["nim"] ?></td>
                            <td><?php echo $mhs["ttl"] ?></td>
                            <td><?php echo $mhs["alamat"] ?></td>
                            <td><a href="editMahasiswa.php?id=<?= $mhs["id_mhs"]; ?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"></i></a></td>
                            <td><a href="hapusMahasiswa.php?id=<?= $mhs["id_mhs"]; ?>"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"></i></a></td>
                        </tr>
                        <?php $x++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

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