<?php
require("koneksi.php");   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>FORM EDIT MAPEL</title>
    </head>
    <body>
        <h2>EDIT DATA MAPEL</h2>
        </br>
        <a href="viewmapel.php">KEMBALI</a>
        </br>
        </br>
        <h3>EDIT DATA MAPEL</h3>
        
        <?php 
        include 'koneksi.php';
        $kodemapel = $_GET['kode_mapel'];
        $data = mysqli_query($koneksi, "SELECT * FROM mapel where kode_mapel = '$kodemapel'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="updatemapel.php">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="kode_mapel" value="<?php echo $d['kode_mapel'];?>">
                            <input type="text" name="nama_mapel" value="<?php echo $d['nama_mapel'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
        ?>
    </body>
</html>