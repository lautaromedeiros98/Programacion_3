<?php
class Producto{
    private $nombre;
    private $cod_barra;
    private $path_foto;

    public function __construct($nombre , $cod_barra,$path_foto){
        if($nombre != null)
            $this->nombre = $nombre;
        
        if($cod_barra != null)
            $this->cod_barra = $cod_barra;

        if($path_foto != null)
            $this->path_foto = $path_foto;
    }

    public function ToString():string{
        return $this->nombre." - ".$this->cod_barra." - ".$this->path_foto."\r\n";
    }

    public static function Guardar($obj):bool{
        $flag= false;
        $archivo = fopen("Producto.txt","a");
        if($archivo != null){
            fwrite($archivo,$obj->ToString());
            fclose($archivo);
            $flag = true;
        }
        

        return $flag;
    }

    public static function TraerTodosLosProductos():array{
        $productos = array();
        $archivo = fopen("Producto.txt","r+");
        while(!feof($archivo)){
            $arrayDatos = explode(" - ",fgets($archivo));

            if($arrayDatos[0] != ""){
                $producto = new Producto($arrayDatos[0],$arrayDatos[1],$arrayDatos[2]);
                array_push($productos,$producto);
            }
        }

        return $productos;
    }
}


?>