<?php

    $numero = $_POST['numero'];
    $multiplicacion = 0;

    // if (isset($_GET["numero"])) { para comprobar si no viene vacio }
    // if (is_numeric($_GET["numero"])) { para comprobar si es un numero }

    if ($numero >= 1 && $numero <= 10) {
        echo "Tabla de multiplicar del $numero: ";
        echo "</br>";

        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            $multiplicacion = $i * $numero;
            echo "<tr>";
            echo "<td>$numero</td>
            <td>x</td>
            <td>$i</td>
            <td>=</td>
            <td>$multiplicacion</td>";
            echo "</tr>";
        } 
        echo "</table>";
    } else {
        echo "El número debe ser entre 1 y 10.";
    }

?>

<a href="multiplicar.html">Atrás</a>