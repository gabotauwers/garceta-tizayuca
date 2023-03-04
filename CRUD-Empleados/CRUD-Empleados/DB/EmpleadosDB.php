<?php
include 'Conexion.php';

class EmpleadosDB{

    public function mostrarEmpleados(){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = 'Select * from Empleados';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $empleados = $stmt->fetchAll();
            $dbh = null;
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
        return $empleados;
    }

    public function agregaEmpleado($objeto){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = 'insert into Empleados (Nombre, ApellidoP, ApellidoM, Sexo, FechaNac, Direccion, Telefono, Email, Acceso, Login, Password) values (?,?,?,?,?,?,?,?,?,?,?)';
            $stmt = $dbh->prepare($consulta);
            $stmt->bindParam(1,$objeto['Nombre']);
            $stmt->bindParam(2,$objeto['ApellidoP']);
            $stmt->bindParam(3,$objeto['ApellidoM']);
            $stmt->bindParam(4,$objeto['Sexo']);
            $stmt->bindParam(5,$objeto['FechaNac']);
            $stmt->bindParam(6,$objeto['Direccion']);
            $stmt->bindParam(7,$objeto['Telefono']);
            $stmt->bindParam(8,$objeto['Email']);
            $stmt->bindParam(9,$objeto['Acceso']);
            $stmt->bindParam(10,$objeto['Login']);
            $stmt->bindParam(11,$objeto['Password']);
            $stmt->execute();
            $dbh = null;
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
    }

    public function getEmpleado($id){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = 'select * from Empleados where idEmpleado = ?';
            $stmt = $dbh->prepare($consulta);
            $stmt->bindParam(1,$id);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $empleado = $stmt->fetch();
            $dbh = null;
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
        return $empleado;
    }

    public function modificaEmpleado($objeto){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = 'update Empleados set Nombre = ?, ApellidoP = ?, ApellidoM = ?, Sexo = ?, FechaNac = ?, Direccion = ?, Telefono = ?, 
            Email = ?, Acceso = ?, Login = ?, Password = ? where idEmpleado = ?';
            $stmt = $dbh->prepare($consulta);
            $stmt->bindParam(1,$objeto['Nombre']);
            $stmt->bindParam(2,$objeto['ApellidoP']);
            $stmt->bindParam(3,$objeto['ApellidoM']);
            $stmt->bindParam(4,$objeto['Sexo']);
            $stmt->bindParam(5,$objeto['FechaNac']);
            $stmt->bindParam(6,$objeto['Direccion']);
            $stmt->bindParam(7,$objeto['Telefono']);
            $stmt->bindParam(8,$objeto['Email']);
            $stmt->bindParam(9,$objeto['Acceso']);
            $stmt->bindParam(10,$objeto['Login']);
            $stmt->bindParam(11,$objeto['Password']);
            $stmt->bindParam(12,$objeto['idEmpleado']);
            $stmt->execute();
            $dbh = null;
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
    }

    public function borrarEmpleado($objeto){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = 'delete from Empleados where idEmpleado = ?';
            $stmt = $dbh->prepare($consulta);
            $stmt->bindParam(1,$objeto['idEmpleado']);
            $stmt->execute();
            $dbh = null;
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
    }
}
?>