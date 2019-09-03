<?php
    include "Rectangulo.php";
    include "Triangulo.php";

    $r= new Rectangulo(4,8);
    $t= new Triangulo(4,8);

    $r->Dibujar();
    $t->Dibujar();
?>