<?php
    include 'koneksi.php';
    $no = $_GET['no'];
    $tblsiswa = mysqli_query($koneksi, "select * from tblsiswa where no='$no'");
    $row = mysqli_fetch_array($tblsiswa);

    //membuat data agama menjadi dinamis dalam bentuk array
    $sekolah = array('Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Konghucu');

    //membuat function untuk set aktif radio button
    function active_radio_button($value,$input){
        //apabila value dari radio sama dengan yang diinput
        $result = $value==$input?'checked':'';
        return $result;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
        <div class="container my-5">
        <h3>Edit Formulir Pendaftaran Siswa Baru</h3>
        <div class="card">
            <div class="card-body">
                    <form action="edit.php" method="post">
                        <input type="hidden" value="<?php echo $row['no'];?>" name="no">
                        <div class="row">                
                            <div class="form-group col-md-8">
                                <label for="nama">Nama</label><br>
                                <input type="text" value="<?php echo $row['nama'];?>" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="alamat">Alamat</label><br>
                                <textarea class="form-control" id="alamat" name="alamat" rows="5" required><?php echo $row['alamat'];?></textarea>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="jenis_kelamin">Jenis Kelamin</label><br>
                                <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']);?> required>Laki-Laki
                                <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']);?> required>Perempuan               
                            </div>
                            <div class="form-group col-md-8">
                                <label for="agama">Agama</label>
                                    <select class="form-control" name="agama" required>
                                        <?php
                                        $agama = array("Islam", "Protestan", "Katolik", "Hindu", "Budha", "Konghucu");
                                        foreach ($agama as $a) {
                                            $selected = ($row['agama'] == $a) ? 'selected="selected"' : '';
                                            echo "<option value='$a' $selected>$a</option>";
                                        }
                                        ?>
                                    </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="sekolah">Sekolah Asal</label>
                                    <input type="text" value="<?php echo $row['sekolah'];?>" class="form-control" id="sekolah" name="sekolah" required><br>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" value="Daftar">
                            </div>
                            <div class="col-md-6">
                                <a href="index.php">
                                    <input type="button" class="btn btn-secondary" value="Kembali">
                                </a>
                            </div>
                    </form>
                    <script src="app.js"></script>
        </body>
</html>
