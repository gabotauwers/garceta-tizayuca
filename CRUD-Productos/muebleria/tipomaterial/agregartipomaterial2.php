<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>

<body>

<a href="principaltipomaterial.php">"Inicio"</a>
<h1>Tu registro se a agregado</h1>
<?php
include 'tmaterialDB.php';
$tma = new TmaterialDB();

$tma->AgregarTmaterial($_POST['NombreTMa'],$_POST['DescripcionTMa']);
    ?>

</body>
</html>