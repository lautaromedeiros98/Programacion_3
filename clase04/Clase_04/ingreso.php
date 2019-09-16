<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="administracion.php" method="post" enctype="multipart/form-data">
    Nombre:<input type="text" name="nombre"><br>
    codbarra:<input type="text" name="cod_barra"><br>
    <input type="file" name="archivo" id="archivo"><br>
    <input type="submit" value="Alta" name="op">
    <input type="submit" value="Mostrar" name="op">
    
    </form>
</body>
</html>

<?php


?>