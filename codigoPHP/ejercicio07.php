<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio07</title>
</head>
<body>
    <header>
        <h1>7. Mostrar el nombre del fichero que se está ejecutando.</h1>
    </header>
    <section>
        <article>
        <?php
            /**
            * Ejercicio 7
            * @author: Luis Pérez Astorga
            * @version: 1.0
            * @since 8/11/2022
            */
            print "Se esta ejecutando".basename($_SERVER['SCRIPT_NAME']);
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

