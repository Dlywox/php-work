<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    </body>
    <h1>12662.C16</h1>
    <h2>Descripcion</h2>
    <p>
        OMIJal se ha encontrado con una variante en el Concurso ACM, 
        pues el numero de programadores que conforman un equipo puede
        variar, entonces modifica tu programa anterior pues ahora deberás
        preguntar el numero de 3 integrantes por equipo, al final indica
        cuantos equipos puedenformarse y cuantos programadores quedan fuera.
    </p>
    <h2>Entrada</h2>
    <p>
        Dos números que representen el número de programadores
        y el número de programadores por equipo.
    </p>
    <h2>Salida</h2>
    <p>
        Salida con el número de equipos formados y los estudiantes
        sin equipo, escrito exactamente como en el ejemplo.
    </p>
    <h2>Ejemplo</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
        </tr>
        <tr>
            <td colspan="2">5 <br> 4 </td>
            <td colspan="2">equipos formados: 1 <br> estudiantes sin equipos: 1</td>
        </tr>
        <tr>
            <td colspan="2">18 <br> 3 </td>
            <td colspan="2">equipos formados: 6 <br> estudiantes sin equipos: 0</td>
        </tr>
    </table>  
    <?php
        $a=5;
        $b=4;
        $d=$a/$b;
        $c=$d/$b;
        echo "Equipos formados: ", $d;
        echo "Estudiantes sin equipo", $c;
    ?>
</html>