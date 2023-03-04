<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Todos los datos</title>
</head>
<body>
<a href="index.html">inicio</a>

<h2>Mostrar Datos</h2>
<center>
<table border="2">
    <tr>
        <th> RazonSocial</th>
        <th> RFC</th>
        <th> DireccionProv</th>
        <th> Telefono</th>
        <th> e-mail</th>
    </tr>

    <?php include 'DB/provedorDB.php';
    $prov = new provedorBD();
    $prove = $prov->getTodosDatos();
    foreach ($prove as $provedor): ?>
        <tr>
            <td><?= $provedor['RazonSocial'] ?></td>
            <td><?= $provedor['RFC'] ?></td>
            <td><?= $provedor['DireccionProv'] ?></td>
            <td><?= $provedor['Telefono'] ?></td>
            <td><?= $provedor['Email'] ?></td>
        </tr>
    <?php endforeach ?>
</table>
</center>



</body>
</html>