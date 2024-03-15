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
   
    <h2>7093.El lado más corto</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">puntos</td>
            <td colspan="2">8.69</td>
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
        Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.
    </p>
    <h3>Entrada</h3>
    <p>
        Ocho reales x1 y1 x2 y2 x3 y3 x4 y4 . y que los
        vértices se listan ordenados en el sentido de
        las manecillas del reloj.
    </p>
    <h3>Salida</h3>
    <p>
        Un real que sea la longitud del lado más corto del cuadrilátero.
        Tu programa se considerará correcto si el valor calculado es
        razonablemente cercano a la respuesta exacta.
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
        </tr>
        <tr>
            <td colspan="2">10.1 10.2 <br> 20.2 10.3 <br> 22.3 4.1 <br> 7.5 0.9 </td>
            <td colspan="2">6.545991</td>
        </tr>
        
    </table>  
    <table>
        <tr>
            <td>Valor de x1</td> <td><input type="text" name="txtX1"></td>
        </tr>
        <tr>
            <td>Valor de y1</td> <td><input type="text" name="txtY1"></td>
        </tr>
        <tr>
            <td>Valor de x2</td> <td><input type="text" name="txtX2"></td>
        </tr>
        <tr>
            <td>Valor de y2</td> <td><input type="text" name="txtY2"></td>
        </tr>
        <tr>
            <td>Valor de x3</td> <td><input type="text" name="txtX3"></td>
        </tr>
        <tr>
            <td>Valor de y3</td> <td><input type="text" name="txtY3"></td>
        </tr>
        <tr>
            <td>Valor de x4</td> <td><input type="text" name="txtX4"></td>
        </tr>
        <tr>
            <td>Valor de y4</td> <td><input type="text" name="txtY4"></td>
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
    $x1=$_POST['txtX1'];
    $y1=$_POST['txtY1'];
    $x2=$_POST['txtX2'];
    $y2=$_POST['txtY2'];
    $x3=$_POST['txtX3'];
    $y3=$_POST['txtY3'];
    $x4=$_POST['txtX4'];
    $y4=$_POST['txtY4'];
    
    for ($i = 1; $i <= 4; $i++) {
        echo "Ingresa la coordenada x del vértice $i: ";
        $x = floatval(readline());
    
        echo "Ingresa la coordenada y del vértice $i: ";
        $y = floatval(readline());
    
        $v[] = [$x, $y];
    }
    
    $n = count($v);
    $l = PHP_INT_MAX;
    
    for ($i = 0; $i < $n; $i++) {
        $j = ($i + 1) % $n;
        $d = sqrt(pow($v[$i][0] - $v[$j][0], 2) + pow($v[$i][1] - $v[$j][1], 2));
        if ($d < $l) {
            $l = $d;
        }
    }
    
    echo "La longitud del lado más corto del cuadrilátero es: $l";
}
?>
    

</html>
