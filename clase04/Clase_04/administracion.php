<?php
include "Clases/Producto.php";
include "Clases/Archivo.php";
$op = $_POST["op"];
$nombre = $_POST["nombre"];
$cod_barra = $_POST["cod_barra"];
$destino = "archivos/" . $_FILES["archivo"]["name"];
switch($op){
    case "Alta":
        $p = new Producto($nombre,$cod_barra,$destino);
        if(Producto::Guardar($p)){
            Archivo::Subir($destino);
            echo "Se pudo guardar";
        }
        else{
            echo "No se pudo guardar";
        }
        break;

    case "Mostrar":
        $arrayProducto = Producto::TraerTodosLosProductos();
        $path;
        foreach($arrayProducto as $item){
            $path = explode($item->ToString())
            echo $item->ToString();
            echo "<img src='"."'height='10%' width='6%'>";
            echo "<br>";
        }
        break;
}
/*hacer un sesion.nombre y clave*/

?>