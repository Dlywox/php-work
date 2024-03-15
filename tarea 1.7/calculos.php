<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Problema - 1</title>
        <link rel="stylesheet" href="styles.css">
       
    </head>
    <body>
    </body>
    <h1>AlfaDown</h1>
    <div class="comtainer-navbar">
        <nav class="navbar container">
            <ul class="menu">
                <li><a href="Index.html">Inicio</a></li>
                <li><a href="calculos.html">Cálculos Condicionales</a></li>
                <li><a href="formulota.html">Formulota</a></li>
                <li><a href="lado.html">El lado más corto</a></li>
                <li><a href="asteriscos.html">Escalera de asteriscos</a></li>
            </ul>
        </nav>
    </div>
   
    <h2>7050.Cálculos Condicionales</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">puntos</td>
            <td colspan="2">8.49</td>
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
    <p class="desc">
        Eres muy bueno evaluando fórmulas y realizando cálculos directos,
        pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones
        Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial N
        ,realizar las siguientes operaciones en el orden indicado y con aritmética entera:

        Si el valor actual de N
        es par, divídelo entre 2. En caso contrario, súmale 1.
        Si el valor actual de N
        tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.
        Si el valor actual de N
        es un múltiplo de tres, réstale uno.

        Escribe un programa que te ayude a calcular el valor final de N
        y el número de veces que N fue modificado.
    </p>
    <h3>Entrada</h3>
    <p>Un entero N . Puedes suponer que 1 n 1000. </p>
    <h3>Salida</h3>
    <p>
        Dos enteros que correspondan con el valor final de 
        y el número de veces que fue modificado respectivamente.
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
        </tr>
        <tr>
            <td colspan="2">7</td>
            <td colspan="2">8 1</td>
        </tr>
        
    </table>  
    <table>
        <tr>
            <td>Numero: </td> <td><input type="text" name="txtN"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Enviar">
            </td>
        </tr>
    </table>
<?php
    if($_POST)
    {
        $n=$_POST['txtN']
        $cont = 0;

    echo "Ingrese un número: ";
    
    $cont++;

    if ($n % 2 == 0) 
    {
        $res = $n / 2;
    } 
    elseif ($n % 2 != 0) 
    {
        $res = $n + 1;
    } 
    elseif ($n >= 100) 
    {
        $res = $n / 100;
    } 
    elseif ($n >= 10) 
    {
        $res = $n / 10;
    } 
    elseif ($n % 3 == 0) 
    {
        $res = $n- 1;
    }

    echo $res, " ", $cont;
    }
?>

</html>
