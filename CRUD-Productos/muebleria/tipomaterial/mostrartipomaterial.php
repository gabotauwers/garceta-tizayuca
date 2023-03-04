<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>

<body>
<a href="principaltipomaterial.php">"Inicio"</a>
<h1>Tipos de material</h1>
<?php
include 'tmaterialDB.php';
$tma = new TmaterialDB();

$tmat = $tma->getTmateriales();
foreach ($tmat as $tm): ?>
    
    <h3>Nombre: <?= $tm['NombreTMa'] ?></h3>
    <h3>Descripcion: <?= $tm['DescripcionTMa'] ?></h3>
    <br>
    
<?php endforeach ?>
</body>
</html>