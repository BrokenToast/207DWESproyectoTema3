<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio23</title>
</head>
<body>
    <header>
        <h1>23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente</h1>
    </header>
    <section>
        <article>
            <?php
                /**
                * Ejercicio 23
                * @author: Luis Pérez Astorga
                * @version: 1.0
                * @since 8/11/2022
                */
                require_once '../core/221024ValidacionFormularios.php';                
                // Variable centinela 
                $entradaOK=false;
                $aErrores=[];
                if(isset($_REQUEST['enviar'])){
                    //Si esta el boton enviar se a pulsado
                    //Se valida el usuario con el metodo OkAlfabetico si se produce un error el error se guarda en aErrores
                    $aErrores['usuario']=validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'],1000,0,1);
                    //Se valida el peso con el metodo comprobarEntero si se produce un error el error se guarda en aErrores
                    $aErrores['peso']=validacionFormularios::comprobarEntero($_REQUEST['peso'],1000,0,1);
                    //Se valida la fechaNacimiento con el metodo okFecha si se produce un error el error se guarda en aErrores
                    $aErrores['fechaNacimiento']=validacionFormularios::validarFecha($_REQUEST['fechaNacimiento'],date("d-m-Y",time()),"01/01/1910",1);
                    //Declaramos el centinea a true
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
                    //Instanciacion de un DateTime con la fecha de campo fechaNacimiento
                    $FechaNacimiento=new DateTime($_REQUEST['fechaNacimiento']);
                    // Almacena el campo usuario del formulario en $aRespuesta
                    $aRespuesta['usuario']=$_REQUEST['usuario'];
                    // Almacena el campo fechaNacimiento del formulario en $aRespuesta
                    $aRespuesta['fechaNacimiento']=$FechaNacimiento->format('d-m-Y');
                    // Almacena el campo peso del formulario en $aRespuesta
                    $aRespuesta['peso']=$_REQUEST['peso'];
                    // Muestra los datos por pantalla fomateado
                    printf("Hola %s nacistes el %s y pesas %d",$aRespuesta['usuario'],$aRespuesta['fechaNacimiento'],$aRespuesta['peso']);
                }else{
                    ?> 
                    <form action="ejercicio23.php" method="post">
                    <label for="usuario">Introduce el usuario</label>
                    <!--Si hay un error en aErrores del campo usuario se muestra un error en pantalla-->
                    <input type="text" name="usuario" id="usuario" <?php if(!empty($aErrores['usuario'])):?>placeholder="Solo letras" style="color: red;"<?php endif;?>>
                    <br><br>
                    <!--Si hay un error en aErrores del campo pes se muestra un error en pantalla-->
                    <label for="peso">Introduce tu peso</label>
                    <input type="text" name="peso" id="peso" <?php if(!empty($aErrores['peso'])):?>placeholder="Solo numeros" style="color: red;"<?php endif;?>>
                    <br><br>
                    <label for="fechaNac">Introduce una fecha </label>
                    <input type="date" name="fechaNacimiento" id="fechaNac">
                    <br>
                    <?php
                        //Si hay un error en aErrores del campo fechaNacimiento se muestra un error en pantalla
                        if(!empty($aErrores['fechaNacimiento'])&& isset($_REQUEST['enviar'])){
                            printf('<label for="fechaNac" style="color: red;">Error introduce un fecha menor a %s</label>',date('Y-m-d',time()));
                        }
                    ?>
                    <br><br>
                    <input type="submit" name="enviar" value="Enviar">
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

