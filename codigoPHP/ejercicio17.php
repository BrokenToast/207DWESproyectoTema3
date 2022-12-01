<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <link rel="stylesheet" href="../webroot/style/ejercicios/ejercicio17.css">
    <title>Ejercicio17</title>
</head>
<body>
    <header>
        <h1>17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el
asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con
distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.</h1>
    </header>
    <section>
        <article>
               <?php
                /**
                * Ejercicio 17
                * @author: Luis Pérez Astorga
                * @version: 1.0
                * Fecha Modification: 8/11/2022
                */
                // Iniciaclizacion de array butacas a un espacio en blanco.
                for ($pasillo=0;$pasillo<20;$pasillo++){
                    for ($butaca=0;$butaca<15;$butaca++){
                       $abutacas[$pasillo][$butaca]=" "; 
                    }
                }
                // Sentar a personas en butacas
                $abutacas[2][1]="Iris";
                $abutacas[1][3]="Luis";
                $abutacas[19][5]="Manuel";
                $abutacas[7][3]="David";
                $abutacas[4][8]="Ricardo";
                $abutacas[5][8]="Josue";
                $abutacas[5][3]="Alejandro";
                $abutacas[10][6]="Amor";
                $abutacas[4][1]="Alberto";
                $abutacas[6][3]="Meli";
                $abutacas[7][5]="Ambrosio";
                $abutacas[4][5]="Heraclio";
                ?> 
            <h1>Array recorrida con un bucle for</h1>
            <table>
                <?php
                // Impresion de la tabla de butacas
                ?>
                <?php for ($pasillo=0;$pasillo<=count($abutacas);$pasillo++):?>
                    <tr>
                    <?php
                        
                        if ($pasillo==0) {
                            // Si pasillo es igual a 0 se va a imprimir Butaca n
                            print("<th></th>");
                            for ($butaca=0;$butaca<count($abutacas[0]);$butaca++){
                                //Recorro abutacas y e imprimi Butaca n
                                printf("<th>butaca %d</th>",$butaca+1);
                            }
                        }else{
                            // Imprime el numero de pasillo
                            printf("<th>Pasillo %d</th>",$pasillo);
                            for ($butaca=0;$butaca<count($abutacas[0]);$butaca++){
                                //Imprime el valor de la buta en el pasillo
                                printf("<td>%s</td>",$abutacas[$pasillo-1][$butaca]);
                            }
                        }
                    ?>        
                    </tr>
                <?php endfor;?>
            </table>
            <br><br><br>
            <h1>Array recorrida con un bucle foreach</h1>
            <table>
                <?php
                    print("<tr>");
                    print"<th></th>";
                    // Imprimimos la fina con el numero de butacas
                    foreach($abutacas[0] as $numeroPasillo=>$pasilloButacas){
                        printf("<th>Butaca %d</th>",$numeroPasillo+1);
                    }
                    print("</tr>");
                    foreach($abutacas as $numeroPasillo=>$pasilloButacas){
                        //Extraemos de a butas un pasillo y lo guardamos en 
                        print("<tr>");
                        //Imprimimos el numero de pasillo 
                        printf("<th>Pasillo %d</th>",++$numeroPasillo);
                        foreach($pasilloButacas as $personaSentada){
                            //Se inseta dentro de $personaSentada la persona que esta sentada en la butaca
                            print("<td>$personaSentada</td>");
                        }
                         print("</tr>");
                    }
                ?>
            </table>
            <br><br><br>
            <h1>Array recorrida con un bucle while</h1>
            <table>  
                <?php
                    // Inicializamos $pasillo con el pasillo extraido de la primera posición de $abutacas
                    $pasillo=current($abutacas);
                    // Inicializamos $butaca con la butaca de la primera posicion de $pasillo
                    $butaca=current($pasillo);
                    print "<th></th>";
                    // Este bucle nos imprime  la fila de el numero de la butaca
                    // El bucle se ejecuta mientras butaca no este vacio
                    while(!empty($butaca)){
                        printf("<th>Butaca %d</th>",key($pasillo));
                        // El punterio de $pasillo avanza
                        next($pasillo);
                        // Se almacena el nuevo valor de $pasillo en $abutacas
                        $butaca=current($pasillo);
                    }
                    print "</tr>";
                    // Se resetea el puntero de $abutacas
                    reset($abutacas);
                    // El bucle se ejecuta mientras butaca no este vacio
                    while(!empty($pasillo)){
                        print "<tr>";
                        // Imprime le numero del pasillo
                        printf("<th>Pasillo %d</th>",key($abutacas));
                        // Se extrae la primera butaca del pasillo
                        $butaca=current($pasillo);
                        // El bucle contienua mientras $butaca no este vacio
                        while(!empty($butaca)){
                            // Imprime la parsona que esta sentada en el butaca
                            printf("<td>%s</td>",$butaca);
                            // Mueve el puntero a la siguiente posición y lo alamcena en $butaca
                            $butaca=next($pasillo);
                        }
                        // Mueve el puntero de $abutacas y almacena el siguiente pasullo en $pasillo
                        $pasillo=next($abutacas);
                        print "</tr>";
                    }               
                ?>
            </table>
        </article>
    </section>
    <footer>
            <p>Creado por Luis Pérez Astorga | Licencia GPL</p>
            <a href="../../../index.html"><img src="../../../doc/logo_Casa.png" alt="Pagina creador"></a>
            <a href="../index.php"><img src="../../../doc/atras.svg" alt="Atras"/></a>
    </footer>
</body>
</html>


