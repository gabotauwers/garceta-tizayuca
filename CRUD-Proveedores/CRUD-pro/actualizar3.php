<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inserta</title>
</head>

<body>
    <a href="index.html">inicio</a>
    <h2>Carro Actualizado</h2>
</body>
</html>

<?php
include 'DB/provedorDB.php';
$muebles = new provedorBD();
$muebles->updateProvedorPorId($_GET);