<?php 
    $usr ="";
    $psw ="";

    if(isset($_REQUEST["txUSER"])){
        $usr = $_REQUEST["txUSER"];
        $psw = $_REQUEST["txPASKY"];
    }

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form dengan Request Handle</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="POST" action="sesi3.php">
            <div>
                Username
                <input type="text" name="txUSER">
            </div>

            <div>
                Password
                <input type="password" name="txPASKY">
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