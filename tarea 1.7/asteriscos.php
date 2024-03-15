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
   
    <h2>2765.Escalera de asteriscos</h2>
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
        Inés quiere llegar a su casa, pero accidentalmente,
        los arquitectos construyeron la puerta demasiado alta.
        Tu misión es ayudar a Inés a subir a su casa construyendo
        una escalera de longitud y altura N hecha de asteriscos.
    </p>
    <h3>Entrada</h3>
    <p>
        Se te darán como valor de entrada un numero
        entero N el cuál representa la longitud y
        altura de la escalera.
    </p>
    <h3>Salida</h3>
    <p>
        Deberás imprimir como salida una escalera de dimensiones N de largo y N de alto
    </p>
    <h3>Ejemplo</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">Entrada</td>
            <td colspan="2">Salida</td>
        </tr>
        <tr>
            <td colspan="2">2</td>
            <td colspan="2"> # <br> ##</td>
        </tr>
        <tr>
            <td colspan="2">5</td>
            <td colspan="2"> # <br> ## <br> ### <br> #### <br> #####</td>
        </tr>
        <tr>
            <td colspan="2">1</td>
            <td colspan="2"> # </td>
        </tr>
        <tr>
            <td colspan="2">3</td>
            <td colspan="2"> # <br> ## <br> ###</td>
        </tr>
    </table>  
    <table>
        <tr>
            <td>Tamaño de la escalera</td> <td><input type="text" name="txtA"></td>
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
            $n=$_POST['txtA'];

            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= ($n - $i); $j++) 
                {
                    echo " ";
                }
                for ($k = 1; $k <= $i; $k++) 
                {
                    echo "#";
                }
                echo PHP_EOL;
            }
        }
    ?>
</html>
