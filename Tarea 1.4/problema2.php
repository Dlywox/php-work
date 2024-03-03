<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
        <title>Problema - omegaUp</title>
    </head>
    <body>
    </body>
    <h1>OmegaUp</h1>
    <ul class="menu">
        <li><a href="Estaciones_del_año.php">Las Estaciones del Año</a></li>
        <li><a href="problema2.php">El mayor de Tres numeros</a></li>
        <li><a href="problema3.php">Cuantos valen 7</a></li>
    </ul>
    <h2>7341.El mayor de Tres numeros</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">puntos</td>
            <td colspan="2">10.13</td>
            <td colspan="2">Límite de memoria</td>
            <td colspan="2">32 MiB</td>
        </tr>
        <tr>
            <td colspan="2">Límite de tiempo(caso)</td>
            <td colspan="2">1s</td>
            <td colspan="2">Límite de tiempo (total)</td>
            <td colspan="2">1mOs</td>
        </tr>
        <tr>
            <td colspan="2">Tamaño de entrada(bytes)</td>
            <td colspan="2">10 KiB</td>
            <td></td>
        </tr>
    </table>
    <h3>Descripcion</h3>
    <p>
        Realiza un problema que imprima el mayor de tres números.
    </p>
    <h3>Entrada</h3>
    <p>Escribe tres números enteros A, B y C </p>
    <h3>Salida</h3>
    <p>
        El número entero mayor de los tres números introducidos.
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
        </tr>
        <tr>
            <td colspan="2">10 <br> 8 <br> -7</td>
            <td colspan="2">10</td>
        </tr>
        <tr>
            <td colspan="2">10 <br> 81 <br> 101</td>
            <td colspan="2">101</td>
        </tr>
        <tr>
            <td colspan="2">10 <br> 810 <br> 101</td>
            <td colspan="2">810</td>
        </tr>
    </table>  
    <?php
    $a=10;
    $b=8;
    $c=-7;
    if($a>$b && $a>$c)
    {
        echo "El mayor es... ", $a;
    }
    else if($c>$b && $c>$a)
    {
        echo "El mayor es... ", $c;
    }
    else if($b>$c && $b>$a)
    {
        echo "El mayor es... ", $b;
    }
    else if($a==$b && $a==$c)
    {
        echo "El mayor es... ", $a;
    }
    else if($a<$b && $a<$c && $b==$c)
    {
        echo "El mayor es... ", $b;
    }
    else if($b<$a && $b<$c && $a==$c)
    {  
        echo "El mayor es... ", $a;
    }
    else if($c<$a && $c<$b && $b==$a)
    {
        echo "El mayor es... ", $b;
    }
    ?>
</html>