<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio22</title>
</head>
<body>
    <header>
        <h1>22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
recogidas.</h1>
    </header>
    <section>
        <article>
            <form action="./ejercicio22.php" ></form>
            <?php
                /**
                * Ejercicio 22
                * @author: Luis Pérez Astorga
                * @version: 1.0
                * @since 8/11/2022
                */
                if(isset($_REQUEST['enviar'])){
                    //Si se a dado a enviar se emprime los datos
                    printf("Hola %s tu peso es de %d Kg",$_REQUEST['usuario'],$_REQUEST['peso']);
                }else{
                    // Si no se a dado a enviar se muestra el formulario
                    ?>
                    <form action="ejercicio22.php" method="POST" >
                        <label>Introduce tu usuario</label>
                        <input type="text" name="usuario">
                        <br>
                        <label>Introduce cuanto pesas</label>
                        <input type="text" name="peso">
                        <br>
                        <input type="submit" name="enviar" value="Iniciar" />
                    </form>
                <?php } ?>

        </article>
    </section>
    <footer>
            <p>Creado por Luis Pérez Astorga | Licencia GPL</p>
            <a href="../index.html"><img src="../doc/logo_Casa.png" alt="Pagina creador"></a>
            <!-- Opcional -->
            <a href="../index.php"><img src="../../../doc/atras.svg" alt="Atras"/></a>
    </footer>
</body>
</html>

