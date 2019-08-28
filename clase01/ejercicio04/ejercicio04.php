<?php
    $suma=0;
    $numerosSumados="";
    for($i=0;$i<1000;$i++)
    {
        if($suma>=1000)
        {
            $suma-=$i;
            break;
        }
        else
        {
            if($i<45)
            {
                $numerosSumados=$numerosSumados.$i."<br>";
                $suma+=$i;
            }
        }       
    }
    echo "Resultado : ".$suma;
    echo "<br>-------------------";
    echo "<br>Numeros sumados : <br>".$numerosSumados;
?>