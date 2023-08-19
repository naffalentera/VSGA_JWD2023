<?php
    $nama = $_POST['fullName'];

    if($nama != ""){
        echo "Nama Anda adalah ", $nama;
    }else{
        echo "Nama harus terisi";
    }
?>