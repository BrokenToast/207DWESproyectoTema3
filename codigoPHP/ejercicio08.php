<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio08</title>
</head>
<body>
    <header>
        <h1>8. Mostrar la dirección IP del equipo desde el que estás accediendo.</h1>
    </header>
    <section>
        <article>
        <?php
            /**
            * Ejercicio 8
            * @author: Luis Pérez Astorga
            * @version: 1.0
            * @since 8/11/2022
            */
            printf("Tu ip es %s",$_SERVER['REMOTE_ADDR']);
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
