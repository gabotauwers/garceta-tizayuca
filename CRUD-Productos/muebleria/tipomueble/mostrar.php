<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>

<body>
<a href="principal.php">"Inicio"</a>
<h1>Tipos de mueble</h1>
<?php
include 'tmDB.php';
$tmu = new TmDB();

$tmue = $tmu->getTmuebles();
foreach ($tmue as $tm): ?>
    
    <h3>Nombre: <?= $tm['NombreTMu'] ?></h3>
    <h3>Descripcion: <?= $tm['DescripcionTMu'] ?></h3>
    <br>
    
<?php endforeach ?>
</body>
</html>