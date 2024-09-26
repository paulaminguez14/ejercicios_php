<?php

    $edad = $_POST['edad'];

    if ($edad > 0 && $edad < 12) {
        echo "Infante";
    } else if ($edad >= 12 && $edad <= 17) {
        echo "Adolescente";
    } else if ($edad >= 18 && $edad < 60) {
        echo "Adulto";
    } else if ($edad >= 60) {
        echo "Anciano";
    } else {
        echo "El número introducido debe ser mayor de 0";
    }
?>

<a href= "edades.html">Atrás</a>