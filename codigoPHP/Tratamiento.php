<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio21</title>
    <style>
                html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed, 
        figure, figcaption, footer, header, hgroup, 
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure, 
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
    </style>
    <style>
        /*Globales*/
        body{
            font-family: sans-serif;
        }
        /*Encabezado*/
        header{
            position: sticky;
            top:0px;
            padding: 2vw;
            background-color: #323234;
        }
        header h1{
            text-align: center;
            font-size: 1.8em;
            color:white;
        }
        /*Contenido*/
        section{
            width: 100%;
            padding-top: 30px;
            margin-bottom: 160px;
            display: flex;
            justify-content: center
        }
        /* pie de pagina*/
        footer{
            width: 100%;
            background-color: #323234;
            display: flex;
            justify-content: space-around;
            position: fixed;
            bottom: 0px;
            padding: 2vw;
        }
        footer img{
            width: 4em;
            background-color: #323234;
        }
        footer p{
            color: white;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <header>
        <h1>21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
las preguntas y las respuestas recogidas</h1>
    </header>
    <section >
        <article>
            <?php
                /**
                * Tratamiento 
                * @author: Luis Pérez Astorga
                * @version: 1.0
                * Fecha Modification:8/11/2022
                */
                printf("<p>Nombre: %s</p>",$_REQUEST['nombre']);
                printf('<p style="color:%s;">Color</p>',$_REQUEST['color']);
            ?>
        </article>
    </section>
    <footer>
            <p>Creado por Luis Pérez Astorga | Licencia GPL</p>
            <a href="../index.html"><img src="../doc/logo_Casa.png" alt="Pagina creador"></a>
            <a href="../index.php"><img src="../../../doc/atras.svg" alt="Atras"/></a>
    </footer>



