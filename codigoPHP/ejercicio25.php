<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/Formulario.css">
    <title>Ejercicio25</title>
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
            padding: 5px;
            background-color: #323234;
        }
        header h1{
            text-align: center;
            font-size: 1.8em;
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
        <h1>25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.</h1>
    </header>
    <section>
        <article>
            <?php 
                if(isset($_REQUEST['enviar'])){
                    $Errores['gg']="error";
                }
            ?>
            <form id="tableForm" action="ejercicio25.php" method="post">
                <table >
                    <tr>
                        <td colspan="2"><h3>Titulo del formulario</h3></td>
                    </tr>
                    <!-- Campo alfabetico -->
                    <tr>
                        <td><label for="alfabeticoObli">Alfabetico Obligatorio</label></td>
                        <td><input type="text" name="alfabeticoObli" id="alfabeticoObli"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="alfabetioOpci">Alfebetico Opcional</label></td>
                        <td><input type="text" name="alfabeticoOpci" id="alfabeticoOpci"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="alfabetico">Alfabetico Bloqueado</label></td>
                        <td><input type="text" name="alfabetico" id="alfabetico"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo alfanuemrico -->
                    <tr>
                        <td><label for="alfanumericoObli">Alfanumerico Obligatorio</label></td>
                        <td><input type="text" name="alfanumericoObli" id="alfanumericoObli"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="alfanumericoOpci">Alfanumerico Opcional</label></td>
                        <td><input type="text" name="alfanumericoOpci" id="alfanumericoOpci"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="alfanumerico">Alfanumerico Bloqueado</label></td>
                        <td><input type="text" name="alfanumerico" id="alfanumerico"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo fecha texto-->
                    <tr>
                        <td><label for="fechaObli">Fecha Obligatoria</label></td>
                        <td><input type="text" name="fechaObli" id="fechaObli"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="fechaOpci">Fecha Opcional</label></td>
                        <td><input type="text" name="fechaOpci" id="fechaOpci"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="fecha">Fecha Bloqueada</label></td>
                        <td><input type="text" name="fecha" id="fecha"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo contraseña -->
                    <tr>
                        <td><label for="passwordObli">Constraseña Obligatoria</label></td>
                        <td><input type="passwordObli" name="passwordObli" id="passwordObli"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="passwordOpci">Constraseña Opcional</label></td>
                        <td><input type="passwordOpci" name="passwordOpci" id="passwordOpci"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="password">Constraseña Bloqueada</label></td>
                        <td><input type="password" name="password" id="password"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo email -->
                    <tr>
                        <td><label for="emailObli">Email Obligatorio</label></td>
                        <td><input type="emailobli" name="emailObli" id="emailObli"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="emailOpci">Email Opcional</label></td>
                        <td><input type="emailopci" name="emailOpci" id="emailOpci"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email Bloqueado</label></td>
                        <td><input type="email" name="email" id="email"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo Fecha -->
                    <tr>
                        <td><label for="dateObli">Fecha Obligatoria</label></td>
                        <td><input type="date" name="dateObli" id="dateObli"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="dateOpci">Fecha Opcional</label></td>
                        <td><input type="date" name="dateOpci" id="date"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="date">Fecha</label></td>
                        <td><input type="date" name="date" id="date"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo fecha y hora -->
                    <tr>
                        <td><label for="datetimeObli">Fecha y hora boligatoria</label></td>
                        <td><input type="datetime" name="datetimeObli" id="datetimeObli"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="datetimeOpcional">Fecha y hora Opcional</label></td>
                        <td><input type="datetime" name="datetimeOpciObli" id="datetimeOpciObli"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="datetime">Fecha y hora</label></td>
                        <td><input type="datetime" name="datetime" id="datetime"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo Time -->
                    <tr>
                        <td><label for="horaObli">Campo Hora Obligatorio</label></td>
                        <td><input type="tiem" name="horaObli" id="horaObli" class="obligatorio"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="horaOpci">Campo Hora Obligatorio</label></td>
                        <td><input type="tiem" name="horaOpci" id="horaOpci" class="opcional"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="hora">Campo Hora bloqueado</label></td>
                        <td><input type="tiem" name="hora" id="hora" class="bloqueado"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo Color -->
                    <tr>
                        <td><label for="colorObli">Campo Color Obligatorio</label></td>
                        <td><input type="color" name="colorObli" id="colorObli" class="obligatorio"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="colorOpci">Campo Color Obligatorio</label></td>
                        <td><input type="color" name="colorOpci" id="colorOpci" class="opcional"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <tr>
                        <td><label for="color">Campo Color bloqueado</label></td>
                        <td><input type="color" name="color" id="color" class="bloqueado"></td>
                        <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo Telefono -->
                    <tr>
                       <td><label for="telefonoObli">Campo numero de telefono Obligatorio</label></td>
                       <td><input type="tel" name="telefonoObli" id="telefonoObli" class="obligatorio"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <tr>
                       <td><label for="telefonoOpci">Campo numero de telefono Obligatorio</label></td>
                       <td><input type="tel" name="telefonoOpci" id="telefonoOpci" class="opcional"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <tr>
                       <td><label for="telefono">Campo numero de telefono bloqueado</label></td>
                        <td><input type="tel" name="telefono" id="telefono" class="bloqueado"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo Semana -->
                    <tr>
                       <td><label for="semaObli">Campo semana Obligatorio</label></td>
                       <td><input type="week" name="semaObli" id="semaObli" class="obligatorio"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <tr>
                       <td><label for="semaOpci">Campo semana Obligatorio</label></td>
                       <td><input type="week" name="semaOpci" id="semaOpci" class="opcional"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <tr>
                       <td><label for="sema">Campo semana bloqueado</label></td>
                        <td><input type="week" name="sema" id="sema" class="bloqueado"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo rango -->
                    <tr>
                       <td><label for="rangoObli">Campo rango Obligatorio</label></td>
                       <td><input type="range" name="rangoObli" id="rangoObli" class="obligatorio"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <tr>
                       <td><label for="rangoOpci">Campo rango Obligatorio</label></td>
                       <td><input type="range" name="rangoOpci" id="rangoOpci" class="opcional"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <tr>
                       <td><label for="rango">Campo rango bloqueado</label></td>
                        <td><input type="range" name="rango" id="rango" class="bloqueado"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo Url -->
                    <tr>
                       <td><label for="urlObli">Campo Url Obligatorio</label></td>
                       <td><input type="url" name="urlObli" id="urlObli" class="obligatorio"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <tr>
                       <td><label for="urlOpci">Campo Url Obligatorio</label></td>
                       <td><input type="url" name="urlOpci" id="urlOpci" class="opcional"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <tr>
                       <td><label for="url">Campo Url bloqueado</label></td>
                        <td><input type="url" name="url" id="url" class="bloqueado"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <!-- Campo Numero -->
                    <tr>
                       <td><label for="numeroObli">Campo numero Obligatorio</label></td>
                       <td><input type="number" name="numeroObli" id="numeroObli" class="obligatorio"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <tr>
                       <td><label for="numeroOpci">Campo numero Obligatorio</label></td>
                       <td><input type="number" name="numeroOpci" id="numeroOpci" class="opcional"></td>
                       <td><p class="error"></p></td>
                    </tr>
                    <tr>
                       <td><label for="numero">Campo numero bloqueado</label></td>
                        <td><input type="number" name="numero" id="numero" class="bloqueado"></td>
                       <td><p class="error"></p></td>
                    </tr>

                    <tr>
                        <td><label for="archivo">archivo</label></td>
                        <td><input type="file" name="archivo" id="archivo"></td>
                        <td><p class="error"></p></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>Tamaño de pizza</legend>
                                <p><label for="pequeño"><input type="radio" name="Tamano" id="pequeño">Pequeño</label></p>
                                <p><label for="medio"><input type="radio" name="Tamano" id="medio">Medio</label></p>
                                <p><label for="grande"><input type="radio" name="Tamano" id="grande">Grande</label></p>
                            </fieldset>
                        </td>
                        <td><p class="error"></p></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>Tipo de pizza</legend>
                                <p><label for="jamon"><input type="checkbox" name="jamon" id="jamon">Jamon</label></p>
                                <p><label for="pimiento"><input type="checkbox" name="pimiento" id="pimiento">Pimiento</label></p>
                                <p><label for="champiñon"><input type="checkbox" name="jamon" id="champiñon">Champiñon</label></p>
                                <p><label for="huevo"><input type="checkbox" name="huevo" id="huevo">Huevo</label></p>
                            </fieldset>
                        </td>
                        <td><p class="error"></p></td>
                    </tr>

                    <tr>
                        <td><p>Selecionar</p></td>
                        <td>
                            <select>
                                <option value="volvo">volvo</option>
                                <option value="scania">Scania</option>
                                <option value="renault">Renault</option>
                                <option value="mercedes">Mercedes</option>
                            </select>
                        </td>
                        <td><p class="error"></p></td>
                    </tr>

                    <tr>
                        <td colspan="3"><p>Otras cosas</p></td>
                    </tr>
                    <tr>
                        <td colspan="3" id="botones">
                            <button type="submit" name="enviar" value="enviar">Enviar</button>
                            <button type="reset">Limpiar</button>
                            <input type="image" src="../../../doc/atras.svg" name="boton" value="Boton" style="width: 30px;">
                        </td>

                    </tr>
                </table>
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

