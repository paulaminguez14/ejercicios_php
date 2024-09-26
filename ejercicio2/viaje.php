<?php

    $distancia = $_POST['distancia'];
    $velocidad = $_POST['velocidad'];

    if(isset($distancia) && isset($velocidad)) {
        
        if(is_numeric($distancia) && is_numeric($velocidad)) { 
            $tiempo = $distancia / $velocidad;
            echo "El tiempo que va a tardar en hacer el viaje es de $tiempo horas.";
        } else {
            echo "No es un número...";
        }
    }
?>

<a href="viaje.html">Atrás</a>