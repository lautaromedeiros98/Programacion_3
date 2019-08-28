<?php
    function ValorEnMedio($a,$b,$c)
    {
        echo("Numeros: " .$a."-".$b."-".$c."<br>");
        if($a==$b || $a==$c || $b==$c)
        {
            echo("No hay valor de en medio"."<br>");
        }
        else
        {
            if($b>$a&&$b<$c)
            {
                echo("El valor de en medio es : ".$b."<br>");        
            }
            if($a>$b&&$a<$c)
            {
                echo("El valor de en medio es : ".$a."<br>");          
            }
            if($c>$a&&$c<$b)
            {
                echo("El valor de en medio es : ".$c."<br>");
            }
        }
    }
?>