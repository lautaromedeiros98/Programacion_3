<?php
    $arraysito;
    {
        $cont=0;
        echo "Primeros numeros impares:<br>";
        for($i=0;$cont<=4;$i++)
        {
            if(($i%2)==1)
            {
                $arraysito[$cont]=$i;
                echo $i."<br>";
                $cont++;
            }
        }
    }
?>