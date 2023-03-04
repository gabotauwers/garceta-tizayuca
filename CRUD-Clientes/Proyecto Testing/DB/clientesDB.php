<?php
include 'Conexion.php';

class ClientesDB{

    public function getClientes(){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = "Select * FROM clientes";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->execute();
            $cliente = $stmt->fetchAll();
            $dbh = null;//cierre de conexion
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
        return $cliente;
    }

    public function getModCliente($id){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = "Select * FROM clientes WHERE IdCliente = ?";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $cliente = $stmt->fetch();
            $dbh = null;//cierre de conexion
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
        return $cliente;
}

public function getModificar($arr){
    $conexion = Conexion::getInstancia();
    $dbh = $conexion->getDbh();
    try{
        $consulta = "UPDATE clientes SET Nombre = ?, Sexo = ?, FechaNacimiento = ?, Direccion = ?, Telefono = ?, Email = ? WHERE IdCliente = ?";
        $stmt = $dbh->prepare($consulta);
        $stmt->setFetchMode(PDO::FETCH_BOTH);
        $stmt->bindParam(1, $arr['Nombre']);
        $stmt->bindParam(2, $arr['Sexo']);
        $stmt->bindParam(3, $arr['FechaNacimiento']);
        $stmt->bindParam(4, $arr['Direccion']);
        $stmt->bindParam(5, $arr['Telefono']);
        $stmt->bindParam(6, $arr['Email']);
        $stmt->bindParam(7, $arr['IdCliente']);
        $stmt->execute();
        $cliente = $stmt->fetch();
        $dbh = null;//cierre de conexion
    }catch(PDOException $e){
        echo $e->getMessage();    
    }
}

public function getAgregar($a,$ar,$arr, $a3, $a4, $a5){
    $conexion = Conexion::getInstancia();
    $dbh = $conexion->getDbh();
    try{
        $consulta = "INSERT INTO clientes (Nombre,Sexo,FechaNacimiento,Direccion,Telefono,Email) VALUE(?,?,?,?,?,?)";
        $stmt = $dbh->prepare($consulta);
        $stmt->setFetchMode(PDO::FETCH_BOTH);
        $stmt->bindParam(1, $a);
        $stmt->bindParam(2, $ar);
        $stmt->bindParam(3, $arr);
        $stmt->bindParam(4, $a3);
        $stmt->bindParam(5, $a4);
        $stmt->bindParam(6, $a5);
        $stmt->execute();
        $cliente = $stmt->fetch();
        $dbh = null;//cierre de conexion
    }catch(PDOException $e){
        echo $e->getMessage();    
    }
}

public function getEliminar($arr){
    $conexion = Conexion::getInstancia();
    $dbh = $conexion->getDbh();
    try{
        $consulta = "DELETE FROM clientes WHERE IdCliente = ?";
        $stmt = $dbh->prepare($consulta);
        $stmt->setFetchMode(PDO::FETCH_BOTH);
        $stmt->bindParam(1, $arr['IdCliente']);
        $stmt->execute();
        $equipo = $stmt->fetch();
        $dbh = null;//cierre de conexion
    }catch(PDOException $e){
        echo $e->getMessage();    
    }
}

}
?>