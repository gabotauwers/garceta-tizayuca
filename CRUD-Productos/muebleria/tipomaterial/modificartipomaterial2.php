<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h1>Tipo de material: </h1>
<?php
include 'tmaterialDB.php';
$tma = new TmaterialDB();
$tmat = $tma->getTmaterialID($_POST['IdTipoMaterial']);

?>
<form action="modificartipomaterial3.php" method="POST">

<h3>Nombre: </h3> <input name= "NombreTMa" type="text" value="<?=$tmat['NombreTMa']?>"></input>
<h3>Descripcion: </h3> <input name="DescripcionTMa" type="text" value="<?=$tmat['DescripcionTMa']?>"></input>

<input type="hidden" name="IdTipoMaterial" value="<?=$tmat['IdTipoMaterial']?> ">

<input type="submit" value="Guardar">
</form>
</body>
</html>