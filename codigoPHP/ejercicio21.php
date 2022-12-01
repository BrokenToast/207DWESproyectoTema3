<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio21</title>
</head>
<body>
    <header>
        <h1>21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
las preguntas y las respuestas recogidas.</h1>
    </header>
    <section>
        <article>
            <!-- Ejercicio 21
            @author: Luis Pérez Astorga
            @version: 1.0
            Fecha Modification: 8/11/2022 -->
            <form action="Tratamiento.php" method="POST">
                <label>Introduce tu nombre</label>
                <input type="text" name="nombre">
                <br>
                <label>Elige el color favorito</label>
                <input type="color" name="color">
                <br>
                <input type="submit" name="enviar" value="Enviar">
            </form>
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

