<?php
        if($_POST)
        {
            $conexion = mysqli_connect('localhost','root','','sistema','3306');
            $hhm1 = $_POST["Usuario"];
            $hhm2 = $_POST["Contraseña"];
            
            $consulta = "select * from usuarios where login = '$hhm1' and password= sha1('$hhm2');";
            $resultado = mysqli_query($conexion, $consulta);

            if($mostrar = mysqli_fetch_array($resultado))
            {
                echo "<h3> Contraseña correcta</h3>";
            }
            else
            {
                echo "<h3> Contraseña incorrecta</h3>";
            }
            mysqli_close($conexion);
        }
        ?>