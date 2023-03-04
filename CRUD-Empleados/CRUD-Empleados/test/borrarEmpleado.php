<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eliminar Empleado</h1>
    <form action="borrarEmpleado2.php" method="post">
        <label for="">Selecciona un empleado:</label>
        <select name="idEmpleado" id="">
            <?php
            include '../DB/EmpleadosDB.php';

            $emplead = new EmpleadosDB();
            $empleados = $emplead->mostrarEmpleados();

            foreach($empleados as $empleado){?>
            <option value="<?=$empleado['idEmpleado']?>"><?=$empleado['Nombre']?> <?=$empleado['ApellidoP']?></option>
            <?php }?>
        </select>
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>