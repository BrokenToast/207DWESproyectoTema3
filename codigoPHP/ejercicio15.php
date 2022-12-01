<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/style/reset.css">
    <link rel="stylesheet" href="../webroot/style/style.css">
    <title>Ejercicio15</title>
</head>
<body>
    <header>
        <h1>15. Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la
semana. (Array asociativo con los nombres de los días de la semana).</h1>
    </header>
    <section>
        <article>
                <?php
                /**
                * Ejercicio 15
                * @author: Luis Pérez Astorga
                * @version: 1.0
                * Fecha Modification: 8/11/2022
                */
                // Inicializacion del array moneyWeek con clave Dia y valor salario del dia
                $amoneyWeek=[
                    'lunes'=>30,
                    'martes'=>44,
                    'miercoles'=>34,
                    'jueves'=>12,
                    'viernes'=>65,
                    'sabado'=>87,
                    'domingo'=>86
                ];
                $suerdoPercivido=0;
                //Recorrido de la array moneyWeek con un foreach
                foreach ($amoneyWeek as $key=>$value){
                    printf("El %s has ganado %f € <br>",$key,$value);
                    // Se suma la $suerdoPercivido con el sueldo del dia.
                    $suerdoPercivido+=$value;
                }
                printf("Sueldo percibido durante la semana %d€", $suerdoPercivido);
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

