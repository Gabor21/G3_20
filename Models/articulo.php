<?php
class Articulos extends Conectar
{
    public function Get_articulos()
    {
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * from ma_articulos Where estado=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return$resultados=$sql->fetchALL(PDO::FETCH_ASSOC);
    }

    public function Get_articulo_id($id)
    {
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * from ma_articulos where estado=1 AND ID=?";
        $sql=$conectar->prepare($sql);
        $sql->bindvalue(1,$ID);
        $sql->execute();
        return$resultados=$sql->fetchALL(PDO::FETCH_ASSOC);
    }

    Public Function Insert_articulo($ID,$Descripcion,$unidad,$costo,$Precio,$Aplica_ISV,$porcentaje_ISV)
    {
        $conectar= parent::conexion();
        parent::set_names();
        $sql="INSERT Into ma_articulos(ID,Descripcion,Unidad,Costo,Precio,Aplica_ISV,Porcentaje_ISV,Estado)
        Values  (Null,?,?,?,?,?,?,?,?'1');";
        $sql=$conectar->prepare($sql);
        $sql->blinvalues(1,$ID);
        $sql->blindvalues(2,$Descripcion);
        $sql->blindvalue(3,$unidad);
        $sql->blindvalue(4,$costo);
        $sql->blindvalue(5,$Precio);
        $sql->blindvalue(6,$Aplica_ISV);
        $sql->blindvalue(7,$porcentaje_ISV);
        $sql->blindvalue(8,$Estado);
        $sql->execute();
        return$resultados=$sql->fetchALL(PDO::FETCH_ASSOC);
    }
     
    public function Eliminar_articulo($ID)
    {
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * from ma_articulos where ID=?";
        $sql=$conectar->prepare($sql);
        $sql->bindvalue(1,$id);
        $sql->execute();
        return$resultados=$sql->fetchALL(PDO::FETCH_ASSOC);
    }
    Public Function actualizar_articulo(,$ID$Descripcion,$unidad,$costo,$Precio,$Aplica_ISV,$porcentaje_ISV)
    {
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE ma_articulos SET ID=?,Descripcion=?,Unidad=?,Costo=?,Precio=?,Aplica_ISV=?,Porcentaje_ISV=?,Estado=? WHERE ID=?";
        $sql=$conectar->prepare($sql);
        $sql-> blinvalues(1,$ID);
        $sql -> blindvalues(2,$Descripcion);
        $sql->blindvalue(3,$unidad);
        $sql->blindvalue(4,$costo);
        $sql->blindvalue(5,$Precio);
        $sql->blindvalue(6,$Aplica_ISV);
        $sql->blindvalue(7,$porcentaje_ISV);
        $sql->execute();
        return$resultados=$sql->fetchALL(PDO::FETCH_ASSOC);
    }
}













?>