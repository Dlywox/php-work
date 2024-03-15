<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Problema - 2</title>
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
   
    <h2>4856.Autores</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">puntos</td>
            <td colspan="2">9.03</td>
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
     Los grandes descubrimientos científicos a menudo son nombrados
     por los apellidos de los científicos que los hicieron. Por ejemplo,
     el sistema de criptografía asimétrica más popular, RSA fue descubierto
     por Rivest, Shamir y Adleman. Otro ejemplo notable es el algoritmo de
     Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia
     de documentos científicos anteriores funciona mucho y es frecuente que
     un documento utilice dos convenciones de nomenclatura diferentes: la
     variación corta (por ejemplo, KMP) utilizando sólo las primeras letras
     de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt)
     Apellidos completos separados por guiones. Encontramos que la mezcla
     de dos convenciones en un papel es estéticamente desagradable y quisiera
     que usted escribiera un programa que transformara variaciones largas en cortas.
    </p>
    <h3>Entrada</h3>
    <p>
     La primera y única línea de entrada contendrá como máximo 100
     caracteres, letras mayúsculas y minúsculas del alfabeto inglés
     y guión ('-' ASCII 45). El primer carácter siempre será una
     letra mayúscula. Los guiones siempre serán seguidos por una
     letra mayúscula. Todos los demás caracteres serán letras minúsculas.
    </p>
    <h3>Salida</h3>
    <p>
        Deberás imprimir comoLa primera y única línea de salida debe contener la variación corta apropiada.
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
        </tr>
        <tr>
            <td colspan="2">Knuth-Morris-Pratt</td>
            <td colspan="2">KMP</td>
        </tr>
        <tr>
            <td colspan="2">Mirko-Slavko</td>
            <td colspan="2">MS</td>
        </tr>
        <tr>
            <td colspan="2">Pasko-Patak</td>
            <td colspan="2"> PP</td>
        </tr>
    </table>  
    <table>
        <tr>
            <td>Palabra</td> <td><input type="text" name="cadena"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Enviar">
            </td>
        </tr>
    </table>

if ($_POST) 
{
  $cadena = $_POST['cadena'];

  if (!preg_match('/^[A-Z][a-zA-Z-]{0,99}$/', $cadena)) 
  {
    echo "<p style='color: red'>Error: La cadena no cumple con el formato especificado.</p>";
    exit;
  }

  $variacionCorta = "";
  $primeraPalabra = true;
  for ($i = 0; $i < strlen($cadena); $i++) 
  {
    $caracter = $cadena[$i];
    if ($primeraPalabra || ctype_upper($caracter)) 
    {
      $variacionCorta .= $caracter;
      $primeraPalabra = false;
    }
  }

  echo "<p>Variación corta: $variacionCorta</p>";
}
?>

</html>