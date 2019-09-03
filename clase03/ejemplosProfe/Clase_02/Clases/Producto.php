<?php
class Producto{
    private $nombre;
    private $cod_barra;

    public function __construct($nombre , $cod_barra){
        if($nombre != null)
            $this->nombre = $nombre;
        
        if($cod_barra != null)
            $this->cod_barra = $cod_barra;
    }

    public function ToString():string{
        return $this->nombre." - ".$this->cod_barra."\r\n";
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
        $archivo = fopen("Producto.txt","r");
        while(!feof($archivo)){
            $i=0;
            $i++;
            $otra = explode("\r\n",$archivo);
            $nYc = explode(" - ",$otra[$i]);
            $productos->array_push(new Producto($nYc[0],$nYc[1]));
            
        }

        return $productos;
    }
}


?>