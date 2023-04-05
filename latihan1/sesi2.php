<?php 
    $usr ="";
    $psw ="";
    $eusr ="";
    $epsw ="";

    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        $psw = $_POST["txPASKY"];

        if($usr==""){
            $eusr ="<div style='color:red;font-size: 50px'>Tolong di Isi, Kalo Gak Tantri Punya KU ?!</div>";
        }
        if($psw==""){
            $epsw ="<div style='color:red;font-size: 50px'>Tolong di Isi, Kalo Gak Tantri Punya KU ?!</div>";
        }
    }

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Method POST</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="POST" action="sesi2.php">
            <div>
                Username
                <input type="text" name="txUSER">
                <?=$eusr;?>
            </div>

            <div>
                Password
                <input type="password" name="txPASKY">
                <?=$epsw;?>
            </div>

            <div>
                <button>login</button>
            </div>

            <div>
                isi dari form:<br>
                    1. UserName : <?=$usr?><br>
                    2. Password : <?=$psw?>                         
            </div>
        </form>
    </body>
</html>