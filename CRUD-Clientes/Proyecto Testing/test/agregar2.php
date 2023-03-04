<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body>
<h1>Tu registro se a agregado</h1>
<?php
include '../DB/clientesDB.php';
$cliente = new ClientesDB();
$clientes = new ClientesDB();

$cliente->getAgregar($_POST['Nombre'],$_POST['Sexo'],$_POST['FechaNacimiento'],$_POST['Direccion'],$_POST['Telefono'],$_POST['Email']);

$clientess = $clientes->getClientes();
foreach ($clientess as $eq): ?>
    
        <h3>Nombre: <?= $eq['Nombre'] ?></h3>
        <h3>Sexo: <?= $eq['Sexo'] ?></h3>
        <h3>Fecha de Nacimiento: <?= $eq['FechaNacimiento'] ?></h3>
        <h3>Direccion: <?= $eq['Direccion'] ?></h3>
        <h3>Telefono: <?= $eq['Telefono'] ?></h3>
        <h3>Email: <?= $eq['Email'] ?></h3>
        <br>
    
<?php endforeach ?>
</body>
</html>