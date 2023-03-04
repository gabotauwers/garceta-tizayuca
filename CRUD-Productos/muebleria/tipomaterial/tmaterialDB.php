<?php
include '../Conexion.php';

class TmaterialDB{

    public function getTmateriales(){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = "Select * FROM tipomaterial";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->execute();
            $tma = $stmt->fetchAll();
            $dbh = null;//cierre de conexion
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
        return $tma;
    }

    public function getTmaterialID($id){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = "Select * FROM tipomaterial WHERE IdTipoMaterial = ?";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $tma = $stmt->fetch();
            $dbh = null;//cierre de conexion
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
        return $tma;
}
    public function AgregarTmaterial($a,$ar){
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try{
            $consulta = "INSERT INTO tipomaterial (NombreTMa,DescripcionTMa) VALUE(?,?)";
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            $stmt->bindParam(1, $a);
            $stmt->bindParam(2, $ar);
            $stmt->execute();
            $tma = $stmt->fetch();
            $dbh = null;//cierre de conexion
        }catch(PDOException $e){
            echo $e->getMessage();    
        }
    }


public function ModificarTmaterial($arr){
    $conexion = Conexion::getInstancia();
    $dbh = $conexion->getDbh();
    try{
        $consulta = "UPDATE tipomaterial SET NombreTMa = ?, DescripcionTMa = ? WHERE IdTipoMaterial = ?";
        $stmt = $dbh->prepare($consulta);
        $stmt->setFetchMode(PDO::FETCH_BOTH);
        $stmt->bindParam(1, $arr['NombreTMa']);
        $stmt->bindParam(2, $arr['DescripcionTMa']);
        $stmt->bindParam(3, $arr['IdTipoMaterial']);
        $stmt->execute();
        $tma = $stmt->fetch();
        $dbh = null;//cierre de conexion
    }catch(PDOException $e){
        echo $e->getMessage();    
    }
}

public function EliminarTmaterial($arr){
    $conexion = Conexion::getInstancia();
    $dbh = $conexion->getDbh();
    try{
        $consulta = "DELETE FROM tipomaterial WHERE IdTipoMaterial = ?";
        $stmt = $dbh->prepare($consulta);
        $stmt->setFetchMode(PDO::FETCH_BOTH);
        $stmt->bindParam(1, $arr['IdTipoMaterial']);
        $stmt->execute();
        $tma = $stmt->fetch();
        $dbh = null;//cierre de conexion
    }catch(PDOException $e){
        echo $e->getMessage();    
    }
}

}

?>