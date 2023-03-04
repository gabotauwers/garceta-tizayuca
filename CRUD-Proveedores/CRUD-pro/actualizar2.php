<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Update b</title>
</head>

<body>
<h2>Modificar datos del Provedor</h2>

<?php include 'DB/provedorDB.php';
$mueble = new provedorBD();
$muebles = $mueble->getProvedorPorId($_POST['IdProveedor']);
?>

<form action="actualizar3.php" method="GET">
    <label for="RazonSocial">Razon Social:</label>
    <input type="text" name="RazonSocial" value="<?= $muebles['RazonSocial'] ?>">
    <br>
    <label for="RFC">RFC:</label>
    <input type="text" name="RFC" value="<?= $muebles['RFC'] ?>">
    <br>
    <label for="DireccionProv">DireccionProv:</label>
    <input type="text" name="DireccionProv" value=" <?= $muebles['DireccionProv'] ?> ">
    <br>
    <label for="Telefono">Telefono:</label>
    <input type="text" name="Telefono" value="<?= $muebles['Telefono'] ?>">
    <br>
    <label for="Email">Email:</label>
    <input type="text" name="Email" value="<?= $muebles['Email'] ?>">
    <br>
    <input type="hidden" name="IdProveedor" value="<?= $muebles['IdProveedor'] ?> ">
    <br>
    <input type="submit" value="Modificar">
</form>
</body>
</html>