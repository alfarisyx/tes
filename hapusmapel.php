<?php 
include 'koneksi.php';

$kodemapel = $_GET['kode_mapel'];

mysqli_query($koneksi, "delete from mapel where kode_mapel = '$kodemapel'");

header("location:viewmapel.php");
?>