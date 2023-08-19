<?php
    include 'koneksi.php';
    //menyimpan data ke dalam variabel
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah'];

    //query SQL untuk edit data
    $query = "UPDATE tblsiswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin',
    agama='$agama', sekolah='$sekolah' where no='$no'";
    $sql = mysqli_query($koneksi, $query);

    //mengalihkan ke halaman index.php
    if($sql){
        header("location:index.php");
    } else{
        echo $query;
    }   
?>