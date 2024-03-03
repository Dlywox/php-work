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
    <h2>13433.Estaciones del Año</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">puntos</td>
            <td colspan="2">23.98</td>
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
            Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día 
        y un mes 
        según lo siguiente:

        -Winter del 21 de diciembre al 20 de marzo
        -Spring del 21 de marzo al 21 de junio
        -Summer del 22 de junio al 22 de septiembre
        -Fall del 23 de septiembre al 20 de diciembre

        Considerando la siguiente cantidad de días para cada mes:

        -Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días
        -Abril, Junio, Septiembre y Noviembre 30 días
        -Febrero 28 días
        -Cualquier fecha fuera de estos rangos debe considerarse como no existente
        -Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.


    </p>
    <h3>Entrada</h3>
    <p>Dos números enteros D y M separados por un espacio que corresponden al día y mes de una fecha determinada</p>
    <h3>Salida</h3>
    <p>
        Una cadena 
        que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
        </tr>
        <tr>
            <td colspan="2">15 10</td>
            <td colspan="2">Fall</td>
        </tr>
        <tr>
            <td colspan="2">22 3</td>
            <td colspan="2">Spring</td>
        </tr>
        <tr>
            <td colspan="2">31 4</td>
            <td colspan="2">no existe la fecha</td>
        </tr>
    </table>
    <?php
    $d=15;
    $m=10;
    if($d>=1 and $d>=31)
    {
        echo"No Existe La Fecha";
    }
    elseif($d>=20 and $m>= 4 or $m=12)
    {
        echo "The season is winter";
    }
    elseif($d>= 21 and $m>= 6 or $m=4)
    {
        echo "The season is Spring";
    }
    elseif($d>=22 and $m>= 9 or $m=6)
    {
        echo "The season is Summer";
    }
    elseif($d>=23 and $m>= 12 or $m=9)
    {
        echo "The season is Fall";
    }
    ?>  
</html>
