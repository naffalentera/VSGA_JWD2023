<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">    
    </head>
    <body>
        <div class="container my-5">
        <h3>Formulir Pendaftaran Siswa Baru</h3>
        <div class="card">
            <div class="card-body">
                    <form action="simpan.php" method="post">
                        <div class="row">                     
                            <div class="form-group col-md-8">
                                <label for="nama">Nama</label><br>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="alamat">Alamat</label><br>
                                <textarea class="form-control" id="alamat" name="alamat" rows="5" required></textarea>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="jenis_kelamin">Jenis Kelamin</label><br>
                                <input type="radio" name="jenis_kelamin" value="L" required>Laki-Laki
                                <input type="radio" name="jenis_kelamin" value="P" required>Perempuan               
                            </div>
                            <div class="form-group col-md-8">
                                <label for="agama">Agama</label>
                                    <select class="form-control" name="agama" required>
                                            <option value="islam">Islam</option>
                                            <option value="protestan">Protestan</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                            <option value="konghucu">Konghucu</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="sekolah">Sekolah Asal</label>
                                    <input type="text" class="form-control" id="sekolah" name="sekolah" required><br>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" value="Daftar">
                            </div>
                    </form>
                    <script src="app.js"></script>
    </body>
</html>
