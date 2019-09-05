<?php
    $arch=fopen("archivo.txt","a");
    if($arch!=NULL)
    {
        if(fwrite($arch,"Lautaro Medeiros")>0)
        {
            if(fclose($arch))
            {
                echo "Se escribio el archivo<br>";
                return 1;
            }
            echo "ERROR<br>";           
        }
    }
    return 0;  
?>