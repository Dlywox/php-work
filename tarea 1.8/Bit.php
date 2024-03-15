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
                <li><a href="Bit.html">Bit de paridad</a></li>
                <li><a href="Autores.html">Autores</a></li>
                <li><a href="Letras.html">Adquisicion de letras</a></li>
            </ul>
        </nav>
    </div>

    <h2>4352.Bit de paridad</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">puntos</td>
            <td colspan="2">12.69</td>
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
               Un bit de paridad es un dígito binario que indica si el número de bits con un
               valor de 1 en un conjunto de bits es par o impar. Los bits de paridad conforman
               el método de detección de errores más simple. Existen dos variantes de este método:

               Bit de paridad par
               Bit de paridad impar.

               En el caso de la paridad par, se cuentan el número de unos. Si el total es impar,
               el bit de paridad se establece en uno y por tanto la suma del total anterior con
               este bit de paridad, daría par. Si el conteo de bits uno es par, entonces el bit
               de paridad se deja en 0, pues ya es par.

               Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.
          </p>
    <h3>Entrada</h3>
    <p>
     La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.
    </p>
    <h3>Salida</h3>
    <p>
     La salida es la misma secuencia de siete bits de la entrada más el bit de paridad
     par. Dicho bit de paridad se agrega al lado derecho.
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
            <td colspan="2">Descripcion</td>
        </tr>
        <tr>
            <td colspan="2">1010001</td>
            <td colspan="2">10100011</td>
            <td colspan="2">El número de bits con valor de 1
               en la entrada es 3. La salida son los mismos
               siete bits de la entrada y se añade un bit 1
               para que en total el número de bits con valor 1 sea par.</td>
        </tr>
        <tr>
            <td colspan="2">1101001</td>
            <td colspan="2">11010010</td>
            <td colspan="2">El número de bits con valor de 1
               en la entrada es 4. La salida son los mismos
               siete bits de la entrada y se añade un bit 0
               para que en total el número de bits con valor 1 se mantenga par.</td>
        </tr>
        <tr>
            <td colspan="2">0000000</td>
            <td colspan="2">00000000</td>
            <td colspan="2">El número de bits con valor de 1
               en la entrada es 0. La salida son los mismos
               siete bits de la entrada y se añade un bit 0
               para que en total el número de bits con valor 1
               se mantenga par (cero es un número par).</td>
        </tr>
        <tr>
            <td colspan="2">1111111</td>
            <td colspan="2">11111111</td>
            <td colspan="2">El número de bits con valor de 1
               en la entrada es 7. La salida son los mismos
               siete bits de la entrada y se añade un bit 1
               para que en total el número de bits con valor 1 sea par.</td>
        </tr>
    </table>  
    <table>
        <tr>
            <td>Numero de bits: </td> <td><input type="text" name="bits"></td>
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
          $bits=0;
          $bits = $_POST['bits'];
     if (strlen($bits) != 7) 
     {
          echo "<p style='color: red'>Error: La secuencia de bits debe tener 7 bits.</p>";
          exit;
     }
     $countBits = 0;
     for ($i = 0; $i < strlen($bits); $i++) 
     {
          if ($bits[$i] === '1')
          {
               $countBits++;
          }
     }
     $parityBit = ($countBits % 2 === 0) ? '0' : '1';
     echo "<p>Secuencia de bits con bit de paridad par: $bits$parityBit</p>";
     }
?>


</html>