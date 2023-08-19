<?php
    include 'koneksi.php';
    //menyimpan data ke dalam variabel
    $no = $_POST['no'];
    $nama_merek = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    //query sql untuk insert data
    $query = "INSERT INTO tbldata SET no='$no', nama_merek='$nama_merek', warna='$warna', jumlah='$jumlah'";
    mysqli_query($koneksi, $query);

    //mengalihkan ke halaman index.php
    header("location:index.php");
?>