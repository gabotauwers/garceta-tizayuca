<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h1>Selecciona area a modifiar</h1>

    <form action="modificararea2.php" method="POST">
    <label for="id">Area:</label>
    <select list="areas" name="IdArea">
        <?php
        include 'areaDB.php';
        $a = new AreaDB();
        $ar = $a->getAreas();
        foreach ($ar as $are):?>
            <option value="<?=$are['IdArea']?>"> <?= $are['NombreArea']?> </option>
        <?php endforeach ?>
    </select>

    <input type="submit" value="Elegir">
    </form>

</body>
</html>