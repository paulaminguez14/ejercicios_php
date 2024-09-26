<?php

    $numero = $_POST['numero'];
    $multiplicacion = 0;

    if ($numero >= 1 && $numero <= 10) {
        echo "Tabla de multiplicar del $numero: ";
        echo "</br>";

        for ($i = 1; $i <= 10; $i++) {
            $multiplicacion = $i * $numero;
            echo $numero . " x " . $i . " = " . $multiplicacion;
            echo "</br>";
        } 
    } else {
        echo "El número debe ser entre 1 y 10.";
    }

?>

<a href="multiplicar.html">Atrás</a>