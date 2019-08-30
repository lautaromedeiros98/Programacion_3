<?php
    $arraysito;
    $mayores=0;
    $iguales=0;
    $menores=0;
    for($i=0;$i<5;$i++)
    {
        $arraysito[$i]=rand(0,10);
        if($arraysito[$i]==6)
        {
            $iguales++;
        }else
        {
            if($arraysito[$i]>6)
            {
                $mayores++;
            }
            if($arraysito[$i]<6)
            {
                $menores++;
            }
        }
    }
    var_dump($arraysito);
    echo "<br>";
        if($mayores>$menores && $mayores>$iguales)
        {
            echo "El promedio de numeros ingresados es que son mayores a 6";
        }
        else
        {
            if($menores>$iguales && $menores>$iguales)
            {
                echo "El promedio de numeros ingresados es que son menores a 6";
            }
            if($iguales>$menores && $iguales>$iguales) 
            {
                echo "El promedio de numeros ingresados es que son iguales a 6";
            }
        }

?>