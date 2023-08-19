<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
        <h2>Siswa yang sudah mendaftar</h2>
        <a href="form-daftar.php">
                <input type="button" class="btn btn-primary" value="Tambah Baru">
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Sekolah Asal</th>
                </tr>
            </thead>

            <?php
            include 'koneksi.php';
            $tblsiswa = mysqli_query($koneksi, "SELECT * from tblsiswa");
            $no=1;
            
            foreach ($tblsiswa as $row){
                
                echo "<tr>
                    <td>$no</td>
                    <td>".$row['nama']."</td>
                    <td>".$row['alamat']."</td>
                    <td>".$row['jenis_kelamin']."</td>
                    <td>".$row['agama']."</td>
                    <td>".$row['sekolah']."</td>
                    </tr>";
                $no++;
            }

            echo "Total : " . $no-1;
            ?>
        </table>
    </body>


    