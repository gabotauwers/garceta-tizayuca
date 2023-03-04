<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h1>Selecciona el tipo de mueble a eliminar</h1>

    <form action="eliminar2.php" method="POST">
    <label for="id">Tipo de mueble:</label>
    <select list="muebles" name="idTipoMueble">
        <?php
        include 'tmDB.php';
        $tmu = new TmDB();
        $tmue = $tmu->getTmuebles();
        foreach ($tmue as $tm):?>
            <option value="<?=$tm['idTipoMueble']?>"> <?= $tm['NombreTMu']?> </option>
        <?php endforeach ?>
    </select>

    <input type="submit" value="Elegir">
    </form>

</body>
</html>