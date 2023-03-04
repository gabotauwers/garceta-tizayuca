<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modificar Empleado</h1>

    <?php 
    include '../DB/EmpleadosDB.php';

    $emplead = new EmpleadosDB();
    $emplead= $emplead->getEmpleado($_POST['idEmpleado']);
    ?>
    <form action="modificarEmpleado3.php" method="post">
    <h2>Nombre</h2> <input name="Nombre" type="text" value="<?=$emplead['Nombre']?>">
        <h2>Apellido Paterno</h2> <input name="ApellidoP" type="text" value="<?=$emplead['ApellidoP']?>">
        <h2>Apellido Materno</h2> <input name="ApellidoM" type="text" value="<?=$emplead['ApellidoM']?>">
        <h2>Sexo</h2> <input name="Sexo" type="text" value="<?=$emplead['Sexo']?>">
        <h2>Fecha de nacimiento</h2> <input name="FechaNac" type="date" value="<?=$emplead['FechaNac']?>">
        <h2>Direccion</h2> <input name="Direccion" type="text" value="<?=$emplead['Direccion']?>">
        <h2>Telefono</h2> <input name="Telefono" type="number" value="<?=$emplead['Telefono']?>">
        <h2>Email</h2> <input name="Email" type="email" value="<?=$emplead['Email']?>">
        <h2>Acceso</h2> <input name="Acceso" type="text" value="<?=$emplead['Acceso']?>">
        <h2>Login</h2> <input name="Login" type="text" value="<?=$emplead['Login']?>">
        <h2>Password</h2> <input name="Password" type="password" value="<?=$emplead['Password']?>">
        <input type="hidden" name="idEmpleado" value="<?=$emplead['idEmpleado']?>">
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>