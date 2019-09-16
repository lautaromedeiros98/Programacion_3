<?php
class Archivo{

    public static function Subir(){
        $origen = $_FILES["archivo"]["tmp_name"];
        $destino ="archivos/" . $_FILES["archivo"]["name"];

        if (file_exists($destino)) {
            
            $uploadOk = false;
        }
        else
        {   
            move_uploaded_file($origen,$destino);
            $uploadOk = true;
        }

        return $uploadOk;
    }
}


?>