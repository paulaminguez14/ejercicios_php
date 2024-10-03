<?php
    $dia_semana = $_GET['dia'];
    //var_dump($_GET);
    if ($dia_semana > 0 && $dia_semana <= 7) {
        $dia = transformar_dia($dia_semana);
        echo "<h2> Hola" . $dia . "</h2>";
    } else {
        echo "El número introducido debe estar entre 1 y 7.";
    }
    echo "C1 -> ";
?>

<a href= "semana.html">Atrás</a>