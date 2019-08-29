<?php
    include "funciones08.php";
    for($i=20;$i<61;$i++)
    {
        if($i==60)
        {
            NumeroNombre($i);
            break;
        }
        echo ($i+1).": ".NumeroNombre($i);
    }
?>