<?php 
    $filez= "";
    $path = "upGAMBAR/";
    if(isset($_POST["upfile"])){
        $filez = $path . basename($_FILES["upGAMBAR"]["name"]);
        move_uploaded_file($_FILES["upGAMBAR"]["tmp_name"], $filez);
    }

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Upload File</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .gambar{
                margin: 50px auto;
                width: 500px;
                height: 500px;
                border: 2px solid black;
            }
            .gambar img{
                width: 100%;
                height: 100%;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="sesi4.php" enctype="multipart/form-data">

            <div>
                Upload Gambar
                <input type="file" name="upGAMBAR">
            </div>
            <div>
                <button type="submit"> Upload File </button>
            </div>
            <input type="hidden" name="upfile" value="okay">
        </form>
        <div class="gambar">
            <?="<img src='$filez' width='500'>";?>
        </div>
    </body>
</html>