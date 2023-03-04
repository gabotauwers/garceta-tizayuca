<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h1>Area: </h1>
<?php
include 'areaDB.php';
$a = new AreaDB();
$ar = $a->getAreaID($_POST['IdArea']);

?>
<form action="modificararea3.php" method="POST">

<h3>Nombre: </h3> <input name= "NombreArea" type="text" value="<?=$ar['NombreArea']?>"></input>
<h3>Descripcion: </h3> <input name="DescripcionArea" type="text" value="<?=$ar['DescripcionArea']?>"></input>

<input type="hidden" name="IdArea" value="<?=$ar['IdArea']?> ">

<input type="submit" value="Guardar">
</form>
</body>
</html>