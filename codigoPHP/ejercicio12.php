<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <link rel="stylesheet" href="../webroot/style/tabla.css">
    <link rel="stylesheet" href="../webroot/style/ejercicios/ejercicio12.css">
    <title>Ejercicio12</title>
</head>
<body>
    <header>
        <h1>12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).</h1>
    </header>
    <section>
        <article>
            <?php
                /**
                * Ejercicio 12
                * @author: Luis Pérez Astorga
                * @version: 1.1 Cambiamos la estructura de mostrar la SuperGlobales
                * @since 10/12/2022
                * @version 1.0   
                * @since 8/11/2022
                */
                function printTable(array $dateTable, string $nameTable){
                    ?><table>
                        <tr>
                            <th colspan="2"><?php print $nameTable; ?></th>
                        </tr>
                        <tr>
                            <th>Clave </th>
                            <th>Valor</th>
                        </tr>
                        <?php 
                            foreach($dateTable as $clave=>$valor){
                                ?>  
                                <tr>
                                    <td><?php print $clave; ?></td>
                                    <td>
                                        <?php
                                            if(is_array($valor)){
                                                printTable($valor,$clave);
                                            }else{
                                                print_r($valor);
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </table> 
                    <?php
                }
                ?>
                <h2>Forma simple</h2>
                <div>
                    //$_SESSION
                    <h3>$_SESSION</h3>
                    <table>
                        <tr>
                            <th>Clave</th>
                            <th>Valor</th>
                        </tr>
                        <?php
                            if(!isset($_SESSION) || empty($_SESSION)){
                                ?> 
                                <tr>
                                    <td colspan="2">Esta vacio</td>
                                </tr>
                                <?php
                            }else{
                                foreach($_SESSION?? array() as $key=>$value){
                                    ?> 
                                    <tr>
                                        <td><?php echo $key;?></td>
                                        <td><?php echo $value;?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                    //$_SERVER
                    <h3>$_SERVER</h3>
                    <table>
                        <tr>
                            <th>Clave</th>
                            <th>Valor</th>
                        </tr>
                        <?php
                            if(!isset($_SERVER) || empty($_SERVER)){
                                ?> 
                                <tr>
                                    <td colspan="2">Esta vacio</td>
                                </tr>
                                <?php
                            }else{
                                foreach($_SERVER as $key=>$value){
                                    ?> 
                                    <tr>
                                        <td><?php echo $key;?></td>
                                        <td><?php echo $value;?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                    //$_GET
                    <h3>$_GET</h3>
                    <table>
                        <tr>
                            <th>Clave</th>
                            <th>Valor</th>
                        </tr>
                        <?php
                            if(!isset($_GET) || empty($_GET)){
                                ?> 
                                <tr>
                                    <td colspan="2">Esta vacio</td>
                                </tr>
                                <?php
                            }else{
                                foreach($_GET as $key=>$value){
                                    ?> 
                                    <tr>
                                        <td><?php echo $key;?></td>
                                        <td><?php echo $value;?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                    //$_POST
                    <h3>$_POST</h3>
                    <table>
                        <tr>
                            <th>Clave</th>
                            <th>Valor</th>
                        </tr>
                        <?php
                            if(!isset($_POST) || empty($_POST)){
                                ?> 
                                <tr>
                                    <td colspan="2">Esta vacio</td>
                                </tr>
                                <?php
                            }else{
                                foreach($_POST as $key=>$value){
                                    ?> 
                                    <tr>
                                        <td><?php echo $key;?></td>
                                        <td><?php echo $value;?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                    //$_FILES
                    <h3>$_FILES</h3>
                    <table>
                        <tr>
                            <th>Clave</th>
                            <th>Valor</th>
                        </tr>
                        <?php
                            if(!isset($_FILES) || empty($_FILES)){
                                ?> 
                                <tr>
                                    <td colspan="2">Esta vacio</td>
                                </tr>
                                <?php
                            }else{
                                foreach($_FILES as $key=>$value){
                                    ?> 
                                    <tr>
                                        <td><?php echo $key;?></td>
                                        <td><?php echo $value;?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                    //$_REQUEST
                    <h3>$_REQUEST</h3>
                    <table>
                        <tr>
                            <th>Clave</th>
                            <th>Valor</th>
                        </tr>
                        <?php
                            if(!isset($_REQUEST) || empty($_REQUEST)){
                                ?> 
                                <tr>
                                    <td colspan="2">Esta vacio</td>
                                </tr>
                                <?php
                            }else{
                                foreach($_REQUEST as $key=>$value){
                                    ?> 
                                    <tr>
                                        <td><?php echo $key;?></td>
                                        <td><?php echo $value;?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                    //$_ENV
                    <h3>$_ENV</h3>
                    <table>
                        <tr>
                            <th>Clave</th>
                            <th>Valor</th>
                        </tr>
                        <?php
                            if(!isset($_ENV) || empty($_ENV)){
                                ?> 
                                <tr>
                                    <td colspan="2">Esta vacio</td>
                                </tr>
                                <?php
                            }else{
                                foreach($_ENV as $key=>$value){
                                    ?> 
                                    <tr>
                                        <td><?php echo $key;?></td>
                                        <td><?php echo $value;?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                    //$_COOKIE
                    <h3>$_COOKIE</h3>
                    <table>
                        <tr>
                            <th>Clave</th>
                            <th>Valor</th>
                        </tr>
                        <?php
                            if(!isset($_COOKIE) || empty($_COOKIE)){
                                ?> 
                                <tr>
                                    <td colspan="2">Esta vacio</td>
                                </tr>
                                <?php
                            }else{
                                foreach($_COOKIE as $key=>$value){
                                    ?> 
                                    <tr>
                                        <td><?php echo $key;?></td>
                                        <td><?php echo $value;?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                    //$GLOBALS
                    <h3>$GLOBALS</h3>
                    <table>
                        <tr>
                            <th>Clave</th>
                            <th>Valor</th>
                        </tr>
                        <?php
                            if(!isset($GLOBALS)){
                                ?> 
                                <tr>
                                    <td colspan="2">Esta vacio</td>
                                </tr>
                                <?php
                            }else{
                                foreach($GLOBALS as $key=>$value){
                                    ?> 
                                    <tr>
                                        <td><?php echo $key;?></td>
                                        <td>
                                            <?php 
                                                if(is_array($value)){
                                                    printTable($value,$key);
                                                }else{
                                                    print($value);
                                                }
                                                
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                </div>
                <h2>Forma compleja</h2>
                <div>
                    <?php
                    //Delcaración de un array con todas las superglobales
                    $aVairablesSuper=[
                        "_SESSION"=>$_SESSION?? array(),
                        "_SERVER"=>$_SERVER,
                        "_GET"=>$_GET,
                        "_POST"=>$_POST,
                        "_FILES"=>$_FILES,
                        "_REQUEST"=>$_REQUEST,
                        "_ENV"=>$_ENV,
                        "_COOKIE"=>$_COOKIE,
                        "GLOBALS"=>$GLOBALS
                    ];
                    // Recorremos el  la array de SuperGlobales y la imprimimos como tablas;
                    foreach($aVairablesSuper as $nameGlobalVar=>$aGlobalVar ){
                        //En caso de que la SuperGlobal este vaica muesta esta tabla;
                        if(empty($aGlobalVar)){
                            ?>
                            <table>
                                <tr>
                                    <th><?php print $nameGlobalVar; ?></th>
                                </tr>
                                <tr>
                                    <td>Esta vacia</td>
                                </tr>
                            </table> 
                            <?php
                        }else{
                        // En caso de que no este vacia muestra el contenido como en una tabla
                            printTable($aGlobalVar,$nameGlobalVar);
                        }
                    }
                    ?>
                </div>
        </article>
    </section>
    <footer>
            <p>Creado por Luis Pérez Astorga | Licencia GPL</p>
            <a href="../../../index.html"><img src="../../../doc/logo_Casa.png" alt="Pagina creador"></a>
            <a href="../index.php"><img src="../../../doc/atras.svg" alt="Atras"/></a>
    </footer>
</body>
</html>


