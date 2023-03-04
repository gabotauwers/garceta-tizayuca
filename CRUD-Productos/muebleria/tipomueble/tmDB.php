<?php
include '../Conexion.php';

class TmDB{

    public function getTmuebles(){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = "Select * FROM tipomueble";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->execute();
            $tmu = $stmt->fetchAll();
            $dbh = null;//cierre de conexion
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
        return $tmu;
    }

    public function getTmuebleID($id){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = "Select * FROM tipomueble WHERE idTipoMueble = ?";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $tmu = $stmt->fetch();
            $dbh = null;//cierre de conexion
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
        return $tmu;
}
    public function AgregarTmueble($a,$ar){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = "INSERT INTO tipomueble (NombreTMu,DescripcionTMu) VALUE(?,?)";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->bindParam(1, $a);
            $stmt->bindParam(2, $ar);
            $stmt->execute();
            $tmu = $stmt->fetch();
            $dbh = null;//cierre de conexion
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
    }


public function ModificarTmueble($arr){
    $conexion = Conexion::getInstancia();
    $dbh = $conexion->getDbh();
    try{
        $consulta = "UPDATE tipomueble SET NombreTMu = ?, DescripcionTMu = ? WHERE idTipoMueble = ?";
        $stmt = $dbh->prepare($consulta);
        $stmt->setFetchMode(PDO::FETCH_BOTH);
        $stmt->bindParam(1, $arr['NombreTMu']);
        $stmt->bindParam(2, $arr['DescripcionTMu']);
        $stmt->bindParam(3, $arr['idTipoMueble']);
        $stmt->execute();
        $tmu = $stmt->fetch();
        $dbh = null;//cierre de conexion
    }catch(PDOException $e){
        echo $e->getMessage();    
    }
}

public function EliminarTmueble($arr){
    $conexion = Conexion::getInstancia();
    $dbh = $conexion->getDbh();
    try{
        $consulta = "DELETE FROM tipomueble WHERE idTipoMueble = ?";
        $stmt = $dbh->prepare($consulta);
        $stmt->setFetchMode(PDO::FETCH_BOTH);
        $stmt->bindParam(1, $arr['idTipoMueble']);
        $stmt->execute();
        $tm = $stmt->fetch();
        $dbh = null;//cierre de conexion
    }catch(PDOException $e){
        echo $e->getMessage();    
    }
}

}

?>