<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    
    echo "¡Hola " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido) . "!";
?>