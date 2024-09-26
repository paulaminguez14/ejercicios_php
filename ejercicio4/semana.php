<?php

    $dia = $_POST['dia'];

    if ($dia > 0 && $dia <= 7) {
        switch ($dia) {
            case 1: echo "El número introducido ($dia) corresponde a: Lunes";
                break;
            case 2: echo "El número introducido ($dia) corresponde a: Martes";
                break;
            case 3: echo "El número introducido ($dia) corresponde a: Miércoles";
                break;
            case 4: echo "El número introducido ($dia) corresponde a: Jueves";
                break;
            case 5: echo "El número introducido ($dia) corresponde a: Viernes";
                break;
            case 6: echo "El número introducido ($dia) corresponde a: Sábado";
                break;
            case 7: echo "El número introducido ($dia) corresponde a: Domingo";
                break;
        }
    } else {
        echo "El número introducido debe estar entre 1 y 7.";
    }
?>

<a href= "semana.html">Atrás</a>