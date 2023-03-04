<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Actualizar carro</title>
</head>
<body>

<h2>Modificar Provedor</h2>
<form action="actualizar2.php" method="POST">

    <label for="id">Provedor:</label>
    <select list="provedor" name="IdProveedor">
        <?php
        include 'DB/provedorDB.php';
        $mueble = new provedorBD();
        $prov = $mueble->getProvedor();
        foreach ($prov as $provedore):?>
            <option value="<?= $provedore['IdProveedor'] ?>"> <?= $provedore['RazonSocial'] ?></option>
        <?php endforeach ?>
    </select>

    <input class="envi" type="submit" value="Elegir">

</form>



</body>
</html>