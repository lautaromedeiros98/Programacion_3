<?php
    function Operar($operador,$op1,$op2)
    {
        switch($operador)
        {
            case("+"):
                echo "El resultado de la operacion: ".$op1."+".$op2." Es: ".($op1+$op2)."<br>";
                break;
            case("/"):
                echo "El resultado de la operacion: ".$op1."/".$op2." Es: ".($op1/$op2)."<br>";
                break;
            case("*"):
                echo "El resultado de la operacion: ".$op1."*".$op2." Es: ".($op1*$op2)."<br>";
                break;
            case("-"):
                echo "El resultado de la operacion: ".$op1."-".$op2." Es: ".($op1-$op2)."<br>";    
                break;
        }
    }
?>