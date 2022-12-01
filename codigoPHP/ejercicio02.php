<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio02</title>
</head>
<body>
    <header>
        <h1>2. Inicializar y mostrar una variable heredoc.</h1>
    </header>
    <section>
        <article>
        <?php
            /**
            * Ejercicio 2
            * @author: Luis Pérez Astorga
            * @version: 1.0
            * Fecha Modification: 8/11/2022
            */
            //Declaracion de una variable Heredoc
            $varHeredoc=<<<EF
                hola lo que estoy usando\n 
                es una variable Heredoc\n
                para formatear este mensaje.
            EF;
            print $varHeredoc;;
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