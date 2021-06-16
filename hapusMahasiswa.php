<?php
require 'functionMahasiswa.php';
$id_mhs=$_GET["id"];
if(hapus($id_mhs)>0){
    echo "<script>
    alert('data berhasil dihapus!');
    document.location.href='daftarMahasiswa.php'
    </script>";
}else{
    echo "<script>
        alert('data tidak berhasil dihapus!');
        document.location.href='daftarMahasiswa.php'
        </script>";
    }
?>