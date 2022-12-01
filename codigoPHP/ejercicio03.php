<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio03</title>
</head>
<body>
    <header>
        <h1>3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)</h1>
    </header>
    <section>
        <article>
        <?php
        /**
            * Ejercicio 3
            * @author: Luis Pérez Astorga
            * @version: 1.0
            * Fecha Modification: 8/11/2022
            */
            // Instanciación de un objeto DateTime
            $ofecha = new DateTime(timezone:new DateTimeZone("Europe/Madrid"));
            $ofecha->setTimestamp(time());

            // Imprimir por pantalla con diferentes formatos
            print $ofecha->format("Y-m-d H:i:s")."<br>";

            print $ofecha->format("Y-F-d H:i:s")."<br>";

            print $ofecha->format("Y-m-d H:i:s e")."<br>";

            print $ofecha->format("d/m/Y H:i:s:v")."<br>";

            print $ofecha->format("d/m/Y H:i:s:v:u p")."<br>";
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