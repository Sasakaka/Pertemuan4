<?php
    include("koneksi.php");

    $tabel = "CREATE TABLE tb_mhs(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        nim VARCHAR(255),
        prodi VARCHAR(10),
        jeniskelamin VARCHAR(255),
        tglahir DATE,
        idmhs VARCHAR(255)
    );";

    $hsl = mysqli_query($cnn, $tabel);
    if($hsl){
        echo "Tabel tb_mhs ==> Sukses";
    }