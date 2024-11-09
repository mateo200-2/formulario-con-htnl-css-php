<?php

$no=$_POST["n1"];
$no2=$_POST["n2"];


$divi = $no / $no2;

    
if($divi < $no2) {

    echo" <h1> no se puede dividir</h1>";

} else {

    echo" <h1> la division  de   $no , y  $no2  es  $divi </h1> <br>";
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