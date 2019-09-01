<?php
    $animales[]="Gato";
    $numeros[]="1986";
    $lenguajes[]="php";
    $todos[]="<br>";
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
    $todos=array_merge($animales,$numeros,$lenguajes);
    var_dump($todos);
?>