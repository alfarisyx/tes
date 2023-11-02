<!DOCTYPE html>
<html>
    <head>
        <title>VIEW MAPEL</title>
    </head>
    <body>
        <h2>DATA MATA PELAJARAN</h2>
        </br>
        <a href="formmapel.php">+ TAMBAH MAPEL</a>
        </br>
        </br>
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Kode Mapel</th>
                <th>Nama Mata Pelajaran</th>
                <th>OPSI</th>
            </tr>
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from mapel");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['kode_mapel']; ?></td>
                    <td><?php echo $d['nama_mapel']; ?></td>
                    <td>
                        <a href="edit.php?kode_mapel=<?php echo $d['kode_mapel'];?>">EDIT</a>
                        <a href="hapusmapel.php?kode_mapel=<?php echo $d['kode_mapel'];?>">HAPUS</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>