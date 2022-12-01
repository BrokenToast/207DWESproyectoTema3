<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <link rel="stylesheet" href="../webroot/style/ejercicios/ejercicio04.css">
    <title>Ejercicio04</title>
</head>
<body>
    <header>
        <h1>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</h1>
    </header>
    <section>
        <article>
        <?php
                    /**
            * Ejercicio 4
            * @author: Luis Pérez Astorga
            * @version: 1.0
            * Fecha Modification: 8/11/2022
            */
            print"<h1>DateTime</h1>";
            // Delcracion de que el lenguaje es Portuges
            setlocale(LC_ALL,"pt_PT.UTF-8");
            // Instanciación de un objeto DateTime
            $fecha = new DateTime(timezone:new DateTimeZone("Europe/Lisbon"));
            $stringDate=$fecha->setTimestamp(time())->format("Y-F-d H:i:s");
            //imprimir la fecha con direfentes formatos y metodos
            print $stringDate."<br>";
            print"<h1>date()</h1>";
            print(date("Y-F-d H:i:s", time()));
            print"<h1>strftime()</h1>";
            print(strftime("%Y-%B-%d %H:%M:%S"));
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
