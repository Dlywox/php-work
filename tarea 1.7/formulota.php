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
    <h2>2765.Formulota</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">puntos</td>
            <td colspan="2">17</td>
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
        Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).
    </p>
    <h3>Entrada</h3>
    <p>
        El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o cero, y pudieran tener decimales.
    </p>
    <h3>Salida</h3>
    <p>
        La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.
        Nota: Se puede usar la función tofixed(numero,decimales) para ajustar la salida.
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
            <td colspan="2">Descripcion</td>
        </tr>
        <tr>
            <td colspan="2"> 1 <br> 2 <br> 3 </td>
            <td colspan="2">0.235714</td>
            <td colspan="2">0.235714285714286</td>
        </tr>
        <tr>
            <td colspan="2"> 4 <br> 5 <br> 6 </td>
            <td colspan="2">0.074477</td>
            <td colspan="2">0.0744773519163764</td>
        </tr>
        <tr>
            <td colspan="2"> 7 <br> 8 <br> 9 </td>
            <td colspan="2">0.044525</td>
            <td colspan="2">0.0445247435713634</td>
        </tr>
    </table>  
    <table>
        <tr>
            <td>Valor de x</td> <td><input type="text" name="txtX"></td>
        </tr>
        <tr>
            <td>Valor de y</td> <td><input type="text" name="txtY"></td>
        </tr>
        <tr>
            <td>Valor de z</td> <td><input type="text" name="txtZ"></td>
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
        $a=4;
        $x=$_POST['txtX'];
        $y=$_POST['txtY'];
        $z=$_POST['txtZ']
        $suma=0;
        for($i=0; $i<$a; $i++)
        {
            $suma=$x[$i]+$y[$i];
            echo $suma, "<br>";
        }
    }
?>

</html>
