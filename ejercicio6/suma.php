<?php

    $numero = $_POST['numero'];
    $suma = 0;

    for ($i = 0; $i <= $numero; $i++) {
        $suma += $i;
    }

    echo "La suma de los números hasta $numero es: $suma";

?>