<?php
    define("CONSTANTE_2", 'Constante 2');
    const CONSTANTE_1 = 'Esto es una constante';
    function transformar_dia($dia_num){
        switch ($dia_num) {
            case 1: $dia = "Lunes";
                break;
            case 2: $dia = "Martes";
                break;
            case 3: $dia = "Miércoles";
                break;
            case 4: $dia = "ueves";
                break;
            case 5: $dia = "Viernes";
                break;
            case 6: $dia = "Sábado";
                break;
            case 7: $dia = "Domingo";
                break;
            default:
                break;
        }
        return $dia;
    }
?>