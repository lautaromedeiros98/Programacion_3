<?php
include "Clases/Producto.php";
$op = $_GET["op"];
$nombre = $_GET["nombre"];
$cod_barra = $_GET["cod_barra"];
switch($op){
    case "Alta":
        $p = new Producto($nombre,$cod_barra);
        if(Producto::Guardar($p)){
            echo "Se pudo guardar";
        }
        else{
            echo "No se pudo guardar";
        }
        break;

    case "Mostrar":
        $arrayProducto = Producto::TraerTodosLosProductos();
        foreach($arrayProducto as $item){
            echo $item->ToString();
        }
        break;
}


?>