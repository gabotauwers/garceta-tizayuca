<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cliente seleccionado: </h1>
<?php
include '../DB/clientesDB.php';
$clienteDB = new ClientesDB();

$cliente = $clienteDB->getModCliente($_POST['IdCliente']);

?>
<form action="modificar3.php" method="POST">

<h3>Nombre: </h3> <input name= "Nombre" type="text" value="<?=$cliente['Nombre']?>"></input>
<h3>Sexo: </h3> <input name="Sexo" type="text" value="<?=$cliente['Sexo']?>"></input>
<h3>Fecha de Nacimiento: </h3> <input name="FechaNacimiento" type="text" value="<?=$cliente['FechaNacimiento']?>"></input>
<h3>Direccion: </h3> <input name="Direccion" type="text" value="<?=$cliente['Direccion']?>"></input>
<h3>Telefono: </h3> <input name="Telefono" type="text" value="<?=$cliente['Telefono']?>"></input>
<h3>Email: </h3> <input name="Email" type="text" value="<?=$cliente['Email']?>"></input>
<input type="hidden" name="IdCliente" value="<?=$cliente['IdCliente']?> ">

<input type="submit" value="Guardar">
</form>
</body>
</html>