<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio06</title>
</head>
<body>
    <header>
        <h1>6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</h1>
    </header>
    <section>
        <article>
        <?php
            /**
            * Ejercicio 6
            * @author: Luis Pérez Astorga
            * @version: 1.0
            * Fecha Modification: 8/11/2022
            */
            // Instanciación de un objeto DateTime
            $oDate=new DateTime();
            $oDate->setTimestamp(time()+((60*60*24)*60));
            print "Dentro de 60 dias sera".$oDate->format('Y-m-d H:i:s');
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