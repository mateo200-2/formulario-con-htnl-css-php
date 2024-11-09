<?php

$no=$_POST["n1"];
$no2=$_POST["n2"];


$resta = $no - $no2;

    if($no<$no2){
        echo" <h1> no se pueden restar </h1>";
    }
    else{
echo" <h1> la la resta de  $no , y  $no2  es  $resta </h1> <br>";


    }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="menu.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="menu.php"> volver al inicio</a></button>
</body>
</html>