<?php
    $animales[]="Gato";
    $numeros[]="1986";
    $lenguajes[]="php";

    array_push($animales ,"Raton");
    array_push($animales ,"Araña");
    array_push($animales ,"Mosca");
    array_push($numeros,"1996");
    array_push($numeros,"2015");
    array_push($numeros,"78");
    array_push($numeros,"86");
    array_push($lenguajes,"mysql");
    array_push($lenguajes,"html5");
    array_push($lenguajes,"typescript");
    array_push($lenguajes,"ajax");

    $todos[0]=$animales;
    $todos[1]=$numeros;
    $todos[2]=$lenguajes;

    var_dump($todos);
?>