<?php
    function Potencias()
    {
        echo "Primeras 4 potencias:<br>";
        for($i=1;$i<6;$i++)
        {
            echo "Numero: " .$i. " --- " . pow($i,1) . ("|") . pow($i,2) . ("|") . pow($i,3) . ("|") . pow($i,4) ."<br>";
        }
    }
?>