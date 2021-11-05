<?php

    header('content-type: application/json');

    require_once("../Config/Conexion.php");
    require_once("../Models/articulo.php");
    $Articulos=new Articulos();

    $body=json_decode(file_get_contents("php://input"),true);
    

    switch ($_GET["op"]) 
    {
        case "GetArt":
            $datos=$Articulos->Get_Articulos();
            echo json_encode($datos);
            break;        
        case "Getunart":
            $datos=$Articulos->Get_articulo_id($body["ID"]);
            echo json_encode($datos);
            break;
        case "InsertarArt":
            $datos=$Articulos->Insert_articulo($body["ID_socio"],$body["Descripcion"],$body["Unidad"],$body["Costo"],$body["Precio"],$body["Aplica_ISV"],$body["Porcentaje_ISV"]);
            echo json_encode("ARTICULO AGREGADO");
            break;

        case "ActualizarArt":
            $datos=$Articulos->actualizar_articulo($body["ID_socio"],$body["Descripcion"],$body["Unidad"],$body["Costo"],$body["Precio"],$body["Aplica_ISV"],$body["Porcentaje_ISV"]);
            echo json_encode("ARTICULO ACTUALIZADO");
            break;    
        case "EliminarArt":
            $datos=$Articulos->Eliminar_articulo($body["ID"]);
            echo json_encode("ARTICULO ELIMINADO");
            break;


    }

?>