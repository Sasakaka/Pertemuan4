<?php
    include("database/koneksi.php");
    
    function createuser($nama, $email, $username, $password){

        $stt = false;
        $iduser = md5($username);
        $sql = "INSERT INTO tb_user(nama, email, username, passkey, iduser)
        VALUES(
            '$nama',
            '$email',
            '$username',
            '$password',
            '$iduser'
        )";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal");
        $stt = mysqli_query($cnn, $sql);
        return $stt;

    }

    function ceklogin($user, $pwd){
        global $cnn;
        $hsl["STATUS"] = false;
        $sql = "SELECT nama, email, username, passkey, iduser FROM tb_user WHERE username='$user';";
        $hs = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_rows($hs);
        if($jdata > 0){
            $h = mysqli_fetch_assoc($hs);
            if($h["passkey"] == $pwd){
                $hsl["STATUS"] = true;
                $hsl["NAMA"] = $h["nama"];
                $hsl["EMAIL"] = $h["email"];
                $hsl["IDUSER"] = $h["iduser"];
            }
        }
        return $hsl;

    }
?>