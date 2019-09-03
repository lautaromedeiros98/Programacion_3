<?php
    include "Auto.php";
    $a = new Auto("Nissan","rojo");
    $b = new Auto("Corolla","verde",99);
    $c = new Auto("Audi","amarillo",1000,"07/99/1089");
    $h = new Auto("Nissan","rojo");
    
    echo Auto::MostrarAuto($a);
    echo Auto::MostrarAuto($b);
    echo Auto::MostrarAuto($c);

    echo "<br>**** Agrego impuestos ****";
    $a->AgregarImpuestos(444);
    echo Auto::MostrarAuto($a); 

    echo "<br>**** Comparo autos ****";
    if($a->Equals($h))
    {
        echo "Son iguales<br>";
    }
    echo "<br>**** Sumo autos ****";
    echo Auto::Add($a,$h);
?>