<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h1>Selecciona el tipo de material a modifiar</h1>

    <form action="modificartipomaterial2.php" method="POST">
    <label for="id">Tipo de mueble:</label>
    <select list="materiales" name="IdTipoMaterial">
        <?php
        include 'tmaterialDB.php';
        $tma = new TmaterialDB();
        $tmat = $tma->getTmateriales();
        foreach ($tmat as $tm):?>
            <option value="<?=$tm['IdTipoMaterial']?>"> <?= $tm['NombreTMa']?> </option>
        <?php endforeach ?>
    </select>

    <input type="submit" value="Elegir">
    </form>

</body>
</html>