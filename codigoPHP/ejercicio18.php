<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <link rel="stylesheet" href="../webroot/style/ejercicios/ejercicio17.css">
    <title>Ejercicio18</title>
</head>
<body>
    <header>
        <h1>18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</h1>
    </header>
    <section>
        <article>
            <?php
            /**
                * Ejercicio 18
                * @author: Luis Pérez Astorga
                * @version: 1.0
                * @since 8/11/2022
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
            <a href="../index.html"><img src="../doc/logo_Casa.png" alt="Pagina creador"></a>
            <!-- Opcional -->
            <a href="../index.php"><img src="../../../doc/atras.svg" alt="Atras"/></a>
    </footer>
</body>
</html>

