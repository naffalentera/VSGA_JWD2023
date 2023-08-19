<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
        <h2>Tambah Data Barang</h2>
        <form action="simpan.php" method="post"
            style="width: 30%;">
            <label for="no">No</label><br>
            <input type="text" onkeyup="isi_otomatis()" class="form-control" id="no" name="no"><br>
            <label for="nama_merek">Nama Merek</label><br>
            <input type="text" class="form-control" id="nama_merek" name="nama_merek"><br>
            <label for="warna">Warna</label><br>
            <input type="text" class="form-control" id="warna" name="warna"><br>
            <label for="jumlah">Jumlah</label><br>
            <input type="text" class="form-control" id="jumlah" name="jumlah"><br>
            
            <input type="submit" class="btn btn-primary" value="Simpan">
            <input style="margin-left: 50%;" type="reset" class="btn btn-danger" value="Ulangi"><br><br>
            <a href="index.php">
                <input style="margin-left: 70%;" type="button" class="btn btn-secondary" value="Kembali">
            </a>
        </form>                 
    </body>
</html>