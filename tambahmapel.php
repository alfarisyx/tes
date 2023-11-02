<?php 
include 'koneksi.php';

$kode_mapel = $_POST['kode_mapel'];
$nama_mapel = $_POST['nama_mapel'];

mysqli_query($koneksi, "insert into mapel values('$kode_mapel', '$nama_mapel')");

header("location:viewmapel.php");
?>