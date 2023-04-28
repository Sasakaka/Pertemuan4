<?php
    include("koneksi.php");

    $tabel = "CREATE TABLE tb_user(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        email VARCHAR(255),
        username VARCHAR(10),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";

    $hsl = mysqli_query($cnn, $tabel);
    if($hsl){
        echo "Tabel tb_user ==> Sukses";
    }