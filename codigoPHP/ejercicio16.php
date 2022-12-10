<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio16</title>
</head>
<body>
    <header>
        <h1>16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</h1>
    </header>
    <section>
        <article>
                <?php
                /**
                * Ejercicio 16
                * @author: Luis Pérez Astorga
                * @version: 1.0
                * @since 8/11/2022
                */
                // Inicializacion del array moneyWeek con clave Dia y valor salario del dia
                $amoneyWeek=[
                    'lunes'=>30.23,
                    'martes'=>44,
                    'miercoles'=>34,
                    'jueves'=>12.75,
                    'viernes'=>65,
                    'sabado'=>87,
                    'domingo'=>86.46
                ];
                //Recorrido de la array moneyWeek con un foreach
                foreach ($amoneyWeek as $key=>$value){
                    printf("El %s has ganado %f €<br>",$key,$value);
                }
                // Imprimir el salario percibido total calculado con el metodo array_sum()
                echo "Total que has ganado esta semana ".array_sum($amoneyWeek)."€";
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

