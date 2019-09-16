<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $base = "mercado";

    $queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : NULL;
    $clave= isset($_POST['clave']) ? $_POST['clave'] : NULL;
    $perfil = isset($_POST['peril']) ? $_POST['peril'] : NULL;
    $estado = isset($_POST['estado']) ? $_POST['estado'] : NULL;

    $con = @mysqli_connect($host, $user, $pass ,$base);

    if(!$con)
        {
            echo "<pre>Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error: " . mysqli_connect_error() . PHP_EOL . "</pre>";
        }

    switch($queHago)
    {
        case "TraerTodos_usuarios":
        $sql = "SELECT * FROM `usuarios`";
        $rs = $con->query($sql);
        while ($row = $rs->fetch_object())
        {
            $user_arr[] = $row;
        }
        var_dump($user_arr);                         
            break;
            ///////////////////////////////////////////////////
        case "TraerPorId_usuarios":      
        $sql = "SELECT * FROM usuarios WHERE id=2";
        $rs = $con->query($sql);
        echo "Filas obtenidas " .  mysqli_num_rows($rs) ."<br>";
        while ($row = $rs->fetch_object())
        { 
            $user_arr[] = $row;
        }
        var_dump($user_arr); 
            break;
            ///////////////////////////////////////////////////
        case "TraerPorEstado_usuarios":
        $sql = "SELECT * FROM usuarios WHERE estado=1";
        $rs = $con->query($sql);
        echo "Filas obtenidas " .  mysqli_num_rows($rs) ."<br>";
        while ($row = $rs->fetch_object())
        { 
            $user_arr[] = $row;
        }
        var_dump($user_arr); 
            break;
            ///////////////////////////////////////////////////
            case "AgregarUsuario":
            $rs = $con->query("INSERT INTO `usuarios`(`nombre`,`apellido`,`clave`, `perfil`, `estado`) VALUES ('".$nombre."','".$apellido."','".$clave."',".$perfil.",".$estado.")");
            var_dump($con);
            break;
    }
    mysqli_close($con);  
?>