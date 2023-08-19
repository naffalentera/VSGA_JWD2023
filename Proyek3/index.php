<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
        <h2>Data Barang</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Merek</th>
                <th scope="col">Warna</th>
                <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $tbldata = mysqli_query($koneksi, "SELECT * from tbldata");
            $no=1;
            
            foreach ($tbldata as $row){
                
                echo "<tr>
                    <td>$no</td>
                    <td>".$row['nama_merek']."</td>
                    <td>".$row['warna']."</td>
                    <td>".$row['jumlah']."</td>
                    </tr>";
                $no++;
            }
            ?>
        </table>
        <a href="tambah.php">
                <input type="button" class="btn btn-primary" value="Tambah Data">
        </a>
    </body>
</html>
