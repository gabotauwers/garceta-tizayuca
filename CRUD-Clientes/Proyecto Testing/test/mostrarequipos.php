<?php
include '../DB/clientesDB.php';
$clientesDB = new ClientesDB();

$cliente = $clientesDB->getClientes();
?>
<h1>Equipos de futbol</h1>
<?php
foreach ($cliente as $eq): ?>
    
    <h3>Nombre: <?= $eq['Nombre'] ?></h3>
    <h3>Sexo: <?= $eq['Sexo'] ?></h3>
    <h3>Fecha de Nacimiento: <?= $eq['FechaNacimiento'] ?></h3>
    <h3>Direccion: <?= $eq['Direccion'] ?></h3>
    <h3>Telefono: <?= $eq['Telefono'] ?></h3>
    <h3>Email: <?= $eq['Email'] ?></h3>
    <br>

<?php endforeach ?>
