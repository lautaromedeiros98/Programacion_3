<?php
    function Validar($palabra,$max)
    {
        $z=strlen($palabra);
        if($z<=$max)
        {
            if(!strcmp($palabra,"Programacion")||!strcmp($palabra,"Parcial")||!strcmp($palabra,"Recuperatorio"))
            {
                return 1;
            }
        }
        return 0;
    }
?>