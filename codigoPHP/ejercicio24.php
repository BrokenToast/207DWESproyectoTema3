<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <link rel="stylesheet" href="../webroot/style/Formulario.css">
    <title>Ejercicio24</title>
</head>
<body>
    <header>
        <h1>24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.</h1>
    </header>
    <section>
        <article>
            <?php
                /**
                * Ejercicio 24
                * @author: Luis Pérez Astorga
                * @version: 1.1
                * @since 15/11/2022
                */
                require_once '../core/221024ValidacionFormularios.php';          
                // Variable centinela 
                $entradaOK=false;
                if(isset($_REQUEST['enviar'])){
                    //Si esta el boton enviar se a pulsado
                    $aErrores['nombre']=validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],40,2,1);
                    $aErrores['apellido']=validacionFormularios::comprobarAlfabetico($_REQUEST['apellido'],40,2,1);
                    $aErrores['fechaNacimiento']=validacionFormularios::validarFecha($_REQUEST['fechaNacimiento'],date("d/m/Y",time()),"01/01/1920",1);
                    $aErrores['dni']=validacionFormularios::validarDni($_REQUEST['dni'],1);

                    $entradaOK=true;
                    foreach($aErrores as $value){
                        if(!empty($value)){
                            //En caso de que en la aErrores haya un campo que no este vacion el ceninela se pone a false y rompe el bucle.
                            $entradaOK=false;
                            break;
                        }
                    }
                }
                if($entradaOK){
                    //Si el centinela es true para a procesar las respues.
                    $aRespuesta['nombre']=$_REQUEST['nombre'];
                    $aRespuesta['apellido']=$_REQUEST['apellido'];
                    $aFecha=preg_split("/\//",$_REQUEST['fechaNacimiento']);
                    $aRespuesta['fechaNacimiento']=$_REQUEST['fechaNacimiento'];
                    $aRespuesta['dni']=$_REQUEST['dni'];
                    $aRespuesta['peso']=$_REQUEST['peso'];
                    $aRespuesta['sexo']=$_REQUEST['sexo'];
                    $aRespuesta['descripcion']=$_REQUEST['descripcion'];
                    ?> 
                        <ul style="list-style: none;">
                            <li>Nombre:<?php print $_REQUEST['nombre']; ?></li>
                            <li>Apellido:<?php print $_REQUEST['apellido']; ?></li>
                            <li>Fecha Nacimiento:<?php print $_REQUEST['fechaNacimiento']; ?></li>
                            <li>Dni:<?php print $_REQUEST['dni']; ?></li>
                            <li>Sexo:<?php print $_REQUEST['sexo']; ?></li>
                            <li><?php
                                if(empty($aRespuesta['descripcion'])){
                                    print "Descripcion".$_REQUEST['descripcion'];
                                }
                            ?></li>
                            <li><?php
                                if(empty($aRespuesta['peso'])){
                                    print "Descripcion".$_REQUEST['peso'];
                                }
                            ?></li>
                        </ul> 
                    <?php
                }else{
                    ?> 
                    <form action="ejercicio24.php" method="post">
                        <table id="tableForm">
                            <tr>
                                <td>
                                    <label for="nombre">Nombre*</label><br>
                                    <input type="text" name="nombre" id="nombre" class="obligatorio" <?php if(isset($_REQUEST['enviar']) && empty($aErrores['nombre'])){ printf('value="%s"',$_REQUEST['nombre']); } ?>>
                                </td>
                                <td><?php if(!empty($aErrores['nombre'])){print $aErrores['nombre'];}?></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="apellido">Apellido*</label><br>
                                    <input type="text" name="apellido" id="apellido"  class="obligatorio" <?php if(isset($_REQUEST['enviar']) && empty($aErrores['apellido'])){ printf('value="%s"',$_REQUEST['apellido']); } ?>>
                                </td>
                                <td><?php if(!empty($aErrores['apellido'])){print $aErrores['apellido'];}?></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="fechaNacimiento">Fecha de Nacimiento(DD/MM/YYYY)*</label><br>
                                    <input type="text" name="fechaNacimiento" id="fechaNacimiento"  class="obligatorio" <?php if(isset($_REQUEST['enviar']) && empty($aErrores['fechaNacimiento'])){ printf('value="%s"',$_REQUEST['fechaNacimiento']); } ?>>
                                </td>
                                <td><?php if(!empty($aErrores['fechaNacimiento'])){print $aErrores['fechaNacimiento'];}?></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="dni">Introduce el DNI*</label><br>
                                    <input type="text" name="dni" id="dni"  class="obligatorio" <?php if(isset($_REQUEST['enviar']) && empty($aErrores['dni'])){ printf('value="%s"',$_REQUEST['dni']); } ?>>
                                </td>
                                <td><?php if(!empty($aErrores['dni'])){print $aErrores['dni'];}?></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="peso">Peso*</label><br>
                                    <input type="text" name="peso" id="peso" class="opcional"<?php if(isset($_REQUEST['enviar']) && empty($aErrores['peso'])){ printf('value="%s"',$_REQUEST['peso']); } ?>>
                                </td>
                                <td><?php if(!empty($aErrores['peso'])){print $aErrores['peso'];}?></td>
                            </tr>
                            <tr>
                                <td>
                                    <fieldset>
                                        <legend>Sexo*</legend>
                                        <p><label><input type="radio" name="sexo" value="hombre">Hombre</label></p>
                                        <p><label><input type="radio" name="sexo" value="mujer">Mujer</label></p>
                                        <p><label><input type="radio" name="sexo" value="otro" checked>Otro</label></p>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="descripcion">Descripción:</label><br>
                                    <textarea name="descripcion" id="" cols="30" rows="10" class="opcional"><?php
                                        if(!empty($aErrores)){
                                            print $_REQUEST['descripcion'];
                                        }
                                    ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td id="informacion">
                                    <p>* Son campos obligatorios</p>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="enviar" value="Enviar"></td>
                            </tr>
                        </table>
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
<fechaNacimiento