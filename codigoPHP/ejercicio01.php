<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio01</title>
</head>
<body>
    <header>
        <h1>1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,
var_dump).</h1>
    </header>
    <section>
        <article>
        <?php
            /**
            * Ejercicio 0
            * @author: Luis Pérez Astorga
            * @version: 1.0
            * Fecha Modification: 8/11/2022
            */
            // Declaracion de las variables
            $texto="hola que tal";
            $numerom=134;
            $numeroDecimal=4.676;
            $boleano=true;
            // Imprimir texto con el metodo echo;
            echo "<h1>Imprimido con echo</h1> <br>";
            echo "El valor de la variable <span style=\" color:blue\">\$texto</span> es <span style=\" color:red\">$texto</span> y es de tipo<span style=\" color:green\"> ".gettype($texto)."</span>.\r <br>";
            echo "El valor de la variable <span style=\" color:blue\">\$numerom</span> es <span style=\" color:red\">$numerom</span> y es de tipo<span style=\" color:green\"> ".gettype($numerom)."</span>.\r <br>";
            echo "El valor de la variable <span style=\" color:blue\">\$numeroDecimal</span> es <span style=\" color:red\">$numeroDecimal</span> y es de tipo<span style=\" color:green\"> ".gettype($numeroDecimal)."</span>.\r <br>";
            echo "El valor de la variable <span style=\" color:blue\">\$boleano</span> es <span style=\" color:red\">$boleano</span> y es de tipo<span style=\" color:green\">".gettype($boleano)."</span>.\r <br>";
            printf ("<br>");
            // Imprimir texto con el metodo print; 
            print "<h1>Imprimido con print</h1> <br>";
            echo "El valor de la variable <span style=\" color:blue\">\$texto</span> es <span style=\" color:red\">$texto</span> y es de tipo<span style=\" color:green\"> ".gettype($texto)."</span>.\r <br>";
            echo "El valor de la variable <span style=\" color:blue\">\$numerom</span> es <span style=\" color:red\">$numerom</span> y es de tipo<span style=\" color:green\"> ".gettype($numerom)."</span>.\r <br>";
            echo "El valor de la variable <span style=\" color:blue\">\$numeroDecimal</span> es <span style=\" color:red\">$numeroDecimal</span> y es de tipo<span style=\" color:green\"> ".gettype($numeroDecimal)."</span>.\r <br>";
            echo "El valor de la variable <span style=\" color:blue\">\$boleano</span> es <span style=\" color:red\">$boleano</span> y es de tipo<span style=\" color:green\">".gettype($boleano)."</span>.\r <br>";
            printf ("<br>");
            // Imprimir texto con el metodo echo;
            printf ("<h1>Imprimido con printf</h1> <br>");
            printf ("El valor de la variable <span style=\" color:blue\">\$texto</span> es <span style=\" color:red\">%s</span> y es de tipo <span style=\" color:green\">%s</span>. <br>",$texto,gettype($texto));
            printf ("El valor de la variable <span style=\" color:blue\">\$numerom</span> es <span style=\" color:red\">%d</span> y es de tipo <span style=\" color:green\">%s</span>. <br>",$numerom,gettype($numerom));
            printf ("El valor de la variable <span style=\" color:blue\">\$numeroDecimal</span> es <span style=\" color:red\">%f</span> y es de tipo <span style=\" color:green\">%s</span>. <br>",$numeroDecimal,gettype($numeroDecimal));
            printf ("El valor de la variable <span style=\" color:blue\">\$boleano</span> es <span style=\" color:red\">%s</span> y es de tipo <span style=\" color:green\">%s</span>. <br>",$boleano,gettype($boleano));
            printf ("<br>");
            // Imprimir texto con el metodo echo;
            print_r("<h1>Imprimido con print_r</h1> <br>");
            print_r ("El valor de la variable <span style=\" color:blue\">\$texto</span> es <span style=\" color:red\">$texto</span> y es de tipo<span style=\" color:green\"> ".gettype($texto)."</span>.\r <br>");
            print_r ("El valor de la variable <span style=\" color:blue\">\$numerom</span> es <span style=\" color:red\">$numerom</span> y es de tipo<span style=\" color:green\"> ".gettype($numerom)."</span>.\r <br>");
            print_r ("El valor de la variable <span style=\" color:blue\">\$numeroDecimal</span> es <span style=\" color:red\">$numeroDecimal</span> y es de tipo<span style=\" color:green\"> ".gettype($numeroDecimal)."</span>.\r <br>");
            print_r ("El valor de la variable <span style=\" color:blue\">\$boleano</span> es <span style=\" color:red\">$boleano</span> y es de tipo<span style=\" color:green\">".gettype($boleano)."</span>.\r <br>");
            printf ("<br>");
            // Imprimir texto con el metodo echo;
            print_r("<h1>Imprimido con var_dump</h1> <br>");
            var_dump($texto);
            printf ("<br>");
            var_dump($numerom);
            printf ("<br>");
            var_dump($numeroDecimal);
            printf ("<br>");
            var_dump($boleano);
        ?>
        </article>
    </section>
    <footer>
            <p>Creado por Luis Pérez Astorga | Licencia GPL</p>
            <a href="../../../index.html"><img src="../../../doc/logo_Casa.png" alt="Pagina creador"></a>
            <a href="../index.php"><img src="../../../doc/atras.svg" alt="Atras"/></a>
    </footer>
</body>
</html>