<?php 
include 'koneksi.php';

$kodemapel = $_POST['kode_mapel'];
$namamapel = $_POST['nama_mapel'];

mysqli_query($koneksi, "update mapel set nama_mapel='$namamapel' where kode_mapel='$kodemapel'");

header("location:viewmapel.php");

?>