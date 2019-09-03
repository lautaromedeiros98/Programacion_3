<?php

    $archivo = fopen("Saludo.txt","a");

    $nombre= $_POST["nombre"];
    $apellido = $_POST["apellido"];

    fwrite($archivo,$nombre."," .$apellido."\r\n");

    fclose($archivo);

?>