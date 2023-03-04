<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserta</title>
</head>

<body>
    <a href="index.html">inicio</a>
    <h2>Provedor añadida</h2>
<?php include 'DB/provedorDB.php';
$provedor = new provedorBD();
$provedor->insertaProvedor($_POST['RazonSocial'], $_POST['RFC'], $_POST['DireccionProv'], $_POST['Telefono'], $_POST['Email']); ?>

</body>
</html>