<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Problema - omegaUp</title>
    </head>
    <body>
    </body>
    <h1>OmegaUp</h1>
    <h2>2765.Sumando dos conjuntos</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">puntos</td>
            <td colspan="2">9.95</td>
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
    Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea N=4:

    2 3 4 5

    6 7 1 3

    El resultado de sumarlos es:

    8 10 5 8
    </p>
    <h3>Entrada</h3>
    <p>En la primera línea el entero N. En la segunda línea,
        separados por un espacio, los números del primer conjunto.
        En la tercera línea también separados por un espacio,
        los números del segundo conjunto.</p>
    <h3>Salida</h3>
    <p>
       Los números resultantes de sumar ambos conjuntos, separados por un espacio.
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
            <td colspan="2">Descripcion</td>
        </tr>
        <tr>
            <td colspan="2">4 <br> 2 3 4 5 <br> 6 7 1 3</td>
            <td colspan="2">8 10 5 8</td>
            <td colspan="2">2+6, 3+7, 1+4, 5+3.</td>
        </tr>
        
    </table>  

    <?php
    $a=4;
    $x=array(4,3,5,6);
    $y=array(1,3,8,4);
    $suma=0;
    for($i=0; $i<$a; $i++)
    {
        $suma=$x[$i]+$y[$i];
        echo $suma, "<br>";
    }
?>

</html>
