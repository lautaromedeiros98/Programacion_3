<?php
    function PrimerCifra($num)
    {
        switch($num[0])
        {
            case"2":
                echo "veinti";
                break;
            case"3":
                echo "treinta y";
                break;
            case"4":
                echo "cuarenta y";
                break;
            case"5":
                echo "cincuenta y";
                break;
            case"6":
                echo "sesenta y";
                break;
        }
    }

    function SegundaCifra($num)
    {
        switch($num[1])
        {
            case"1":
                echo " uno<br>";
                break;
            case"2":
                echo " dos<br>";
                break;
            case"3":
                echo " tres<br>";
                break;
            case"4":
                echo " cuatro<br>";
                break;
            case"5":
                echo " cinco<br>";
                break;
            case"6":
                echo " seis<br>";
                break;
            case"7":
                echo " siete<br>";
                break;
            case"8":
                echo " ocho<br>";
                break;
            case"9":
                echo " nueve<br>";
                break;
        }
    }

    function NumeroNombre($num)
    {
        switch($num)
        {
            case 20:
                echo "20: veinte<br>";
                break;
            case 30:
                echo "treita<br>";
                break;
            case 40:
                echo"cuarenta<br>";
                break;
            case 50:
                echo"cincuenta<br>";
                break;
            case 60:
                echo"sesenta<br>";
                break;
            default:
                PrimerCifra($num."<br>");
                SegundaCifra($num."<br>");
                break;
        }
    }
?>