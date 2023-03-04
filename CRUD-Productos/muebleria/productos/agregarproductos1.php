<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de material</title>
</head>
<body>
    <h1>Tipo de material: </h1>
<?php

?>
<form action="agregartipomaterial2.php" method="POST">

<h3>Codigo de producto: </h3> <input name= "CodigoProd" type="text" value=""></input>
<h3>Nombre de producto: </h3> <input name="NombreProd" type="text" value=""></input>

<h3>Descripcion: </h3> <input name= "DescripcionProd" type="text" value=""></input>
<h3>Cantidad: </h3> <input name="Cantidad" type="text" value=""></input>

<h3>Precio: </h3> <input name= "Precio" type="text" value=""></input>
<h3>Imagen: </h3> <input name="ImagenProd" type="text" value=""></input>

<label for="dwarfs">Muebles:
<select list="muebles" name="idTipoMueble">
        <?php
        include '../tipomueble/tmDB.php';
        $tmu = new TmDB();
        $tmue = $tmu->getTmuebles();
        foreach ($tmue as $tm):?>
            <option value="<?=$tm['idTipoMueble']?>"> <?= $tm['NombreTMu']?> </option>
        <?php endforeach ?>
        
    </select>
    <label for="dwarfs">Materiales:</label>
    <select list="materiales" name="IdTipoMaterial">
        <?php
        include '../tipomaterial/tmaterialDB.php';
        $tma = new TmaterialDB();
        $tmat = $tma->getTmateriales();
        foreach ($tmat as $tm):?>
            <option value="<?=$tm['IdTipoMaterial']?>"> <?= $tm['NombreTMa']?> </option>
        <?php endforeach ?>
    </select>

    <label for="dwarfs">Areas:</label>
    <select list="areas" name="IdArea">
        <?php
        include '../area/areaDB.php';
        $a = new AreaDB();
        $ar = $a->getAreas();
        foreach ($ar as $are):?>
            <option value="<?=$are['IdArea']?>"> <?= $are['NombreArea']?> </option>
        <?php endforeach ?>
    </select>
    </label>
    <input type="submit" value="Elegir">

    </form>


</body>
</html>