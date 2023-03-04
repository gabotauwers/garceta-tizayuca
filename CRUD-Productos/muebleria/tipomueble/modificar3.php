<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>

<body>
<a href="principal.php">"Inicio"</a>
<h1>Tu registro se a modificado</h1>
<?php
include 'tmDB.php';
$tmu = new TmDB();
$tmu->ModificarTmueble($_POST);

?>

</body>
</html>