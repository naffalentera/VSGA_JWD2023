<?php
    include 'koneksi.php';

    //menyimpan data ke dalam variabel
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah'];

    //query sql untuk insert data
    $query = "INSERT INTO tblsiswa SET no='$no', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin',
              agama='$agama', sekolah='$sekolah'";
    mysqli_query($koneksi, $query);

    //mengalihkan ke halaman index.php
    header("location:index.php");

    //mengirimkan respons berupa pesan "success" 
    $response = array('status' => 'success');
    echo json_encode($response);

?>