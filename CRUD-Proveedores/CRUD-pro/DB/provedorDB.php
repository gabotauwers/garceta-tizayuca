<?php
include 'Conexion.php';

class provedorBD{

    //consultas
    public function getTodosDatos (){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = "SELECT RazonSocial, RFC, DireccionProv, Telefono, Email FROM `proveedor`";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $muebleria = $stmt->fetchAll();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $muebleria;
    }


    //insertarProvedor
    public function insertaProvedor($RazonSocial, $RFC, $DireccionProv, $Telefono, $Email) {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'INSERT INTO proveedor (RazonSocial, RFC, DireccionProv, Telefono, Email) VALUES (?,?,?,?,?)';
            $stmt = $dbh->prepare($consulta);
            $stmt->bindParam(1, $RazonSocial);
            $stmt->bindParam(2, $RFC);
            $stmt->bindParam(3, $DireccionProv);
            $stmt->bindParam(4, $Telefono);
            $stmt->bindParam(5, $Email);
            $stmt->execute();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    //selecionar update
    public function getProvedor() {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = "SELECT * FROM proveedor ORDER BY RazonSocial";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->execute();
            $mascotas = $stmt->fetchAll();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $mascotas;
    }



    //actulizar parte 2
    public function getProvedorPorId($id) {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = "SELECT * FROM proveedor WHERE IdProveedor = ?";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            // $stmt->execute([$id]);
            $mascota = $stmt->fetch();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $mascota;
    }


    //actualizar parte 3
    public function updateProvedorPorId($arreglo) {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'UPDATE proveedor SET RazonSocial = ?, RFC = ?, DireccionProv = ?, Telefono = ?, Email = ?  WHERE IdProveedor= ?';
            $stmt = $dbh->prepare($consulta);
            $stmt->bindParam(1, $arreglo['RazonSocial']);
            $stmt->bindParam(2, $arreglo['RFC']);
            $stmt->bindParam(3, $arreglo['DireccionProv']);
            $stmt->bindParam(4, $arreglo['Telefono']);
            $stmt->bindParam(5, $arreglo['Email']);
            $stmt->bindParam(6, $arreglo['IdProveedor']);
            $stmt->execute();
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    //eliminar
    public function eliminaProvedorPorId($id) {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'DELETE FROM proveedor WHERE IdProveedor = ?';
            $stmt = $dbh->prepare($consulta);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            //$stmt->execute([$id]);
            $dbh = null; // cierra la conexion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


}

?>