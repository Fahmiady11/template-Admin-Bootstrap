<?php
$conn = mysqli_connect("localhost", "root", "", "db_kampus");
function query($query)

{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $ttl = htmlspecialchars($data["ttl"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $query = "INSERT INTO tbl_mahasiswa VALUES
    ('','$nama','$nim','$ttl','$alamat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function hapus($data)
{
    global $conn;
    mysqli_query($conn,"DELETE FROM tbl_mahasiswa WHERE id_mhs='$data'");
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    global $conn;
    $id = $data["id_mhs"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $ttl = htmlspecialchars($data["ttl"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $query = "UPDATE tbl_mahasiswa SET 
        nama='$nama',
        nim='$nim',
        ttl='$ttl',
        alamat='$alamat'
        WHERE id_mhs='$id'
        ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function cari($data){
    $query="SELECT * FROM  tbl_mahasiswa 
                WHERE 
                nama LIKE '%$data%' OR
                nim LIKE '%$data%' OR
                ttl LIKE '%$data%' OR
                alamat LIKE '%$data%'
            ";
    return query($query);
}