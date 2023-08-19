<?php
    include 'koneksi.php';

    //menyimpan data no ke dalam variabel
    $no = $_GET['no'];

    //query SQL untuk delete data
    $query = "DELETE from tblsiswa where no='$no'";
    $sql = mysqli_query($koneksi, $query);

    //mengalihkan ke halaman index.php
    if($sql){
        header("location:index.php");
    } else{
        echo $query;
    }   
?>
