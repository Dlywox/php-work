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
    <h2>12618.Practicando formulas</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>puntos</td>
            <td>10.76</td>
            <td>Límite de memoria</td>
            <td>32 MiB</td>
        </tr>
        <tr>
            <td>Límite de tiempo(caso)</td>
            <td>1s</td>
            <td>Límite de tiempo (total)</td>
            <td>1mOs</td>
        </tr>
        <tr>
            <td>Tamaño de entrada(bytes)</td>
            <td>10 KiB</td>
            <td></td>
        </tr>
    </table>
    <h3>Descripcion</h3>
    <p>
        Dado un valor real , quieres resolver una serie de ecuaciones hasta obtener el valor de z.
    </p>
    <h3>Entrada</h3>
    <p>Un real a . Puedes suponer que 1 < a < 100.</p>
    <h3>Salida</h3>
    <p>
        Un real que sea el valor de z impreso con tres puntos decimales.
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
        </tr>
        <tr>
            <td colspan="2">33.562 </td>
            <td colspan="2">0.148</td>
        </tr>
        <tr>
            <td colspan="2">72.569</td>
            <td colspan="2">0.069</td>
        </tr>
        <tr>
            <td colspan="2">64.835</td>
            <td colspan="2">0.077</td>
        </tr>
    </table>  
    <?php
    $a=33.562;
    $m=$a/226;
    echo "el numero es:", $m;
    ?>
</html>