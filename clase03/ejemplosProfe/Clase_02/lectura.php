<?php

    $archivo = fopen("Saludo.txt","r");
    while(!feof($archivo))
    {
        echo "<br>".fgets($archivo);
    }
    fclose($archivo);

?>