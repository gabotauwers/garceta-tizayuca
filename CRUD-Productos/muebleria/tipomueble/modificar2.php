<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h1>Tipo de mueble: </h1>
<?php
include 'tmDB.php';
$tmu = new TmDB();

$tmue = $tmu->getTmuebleID($_POST['idTipoMueble']);

?>
<form action="modificar3.php" method="POST">

<h3>Nombre: </h3> <input name= "NombreTMu" type="text" value="<?=$tmue['NombreTMu']?>"></input>
<h3>Descripcion: </h3> <input name="DescripcionTMu" type="text" value="<?=$tmue['DescripcionTMu']?>"></input>

<input type="hidden" name="idTipoMueble" value="<?=$tmue['idTipoMueble']?> ">

<input type="submit" value="Guardar">
</form>
</body>
</html>