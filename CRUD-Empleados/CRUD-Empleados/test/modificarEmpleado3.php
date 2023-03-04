<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include '../DB/EmpleadosDB.php';

    $empleado = new EmpleadosDB();
    $empleado->modificaEmpleado($_POST);

    $empleado = $empleado->mostrarEmpleados();
    ?>
    <h1>Registro actualizado!</h1>

    <table>
        <th>Nombre</th>
        <th>ApellidoP</th>
        <th>ApellidoM</th>
        <th>Sexo</th>
        <th>FechaNac</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Acceso</th>
        <th>Login</th>
        <th>Password</th>
    
    <?php
    foreach($empleado as $emp){?>
    <tr>
        <td><?= $emp['Nombre']?></td>
        <td><?= $emp['ApellidoP']?></td>
        <td><?= $emp['ApellidoM']?></td>
        <td><?= $emp['Sexo']?></td>
        <td><?= $emp['FechaNac']?></td>
        <td><?= $emp['Direccion']?></td>
        <td><?= $emp['Telefono']?></td>
        <td><?= $emp['Email']?></td>
        <td><?= $emp['Acceso']?></td>
        <td><?= $emp['Login']?></td>
        <td><?= $emp['Password']?></td>
    </tr>

    <?php }?>
    </table>

</body>
</html>