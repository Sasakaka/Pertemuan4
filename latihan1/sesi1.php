<?php 
    $usr ="";
    $psw ="";

    if(isset($_GET["txUSER"])){
        $usr = $_GET["txUSER"];
        $psw = $_GET["txPASKY"];
    }

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Method GET</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="GET" action="sesi1.php">
            <div>
                Username
                <input type="text" name="txUSER" required>
            </div>

            <div>
                Password
                <input type="password" name="txPASKY" required>
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