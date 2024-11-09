<?php
$no = $_POST["n1"];
$no2 = $_POST["n2"];
$pro = $no * $no2;


echo "<h1> El producto de $no y $no2 es $pro</h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Producto</title>
</head>
<body>
    <button><a href="menu.php">Volver al inicio</a></button>
</body>
</html>
