<?php 
    $sumaTemperaturas = 0;
    $temperaturas = "30, 32, 28, 30, 33, 29, 34, 31, 35, 30, 32, 36, 29, 33, 31, 34, 30, 35, 32, 37, 33, 31, 29, 36, 30, 34, 31, 33, 35, 32";

    $temperaturasSeparadas = explode(" ", $temperaturas);

    $temperaturaTotal = array_sum($temperaturasSeparadas);

    $temperaturaMedia = $temperaturaTotal/count($temperaturasSeparadas);
    echo "La temperatura media es " . $temperaturaMedia;

    echo "<br>";
    arsort($temperaturasSeparadas);
    $maximos = array_slice($temperaturasSeparadas, 0, 5);
    echo "Las temperaturas maximas: ";
    print_r($maximos);

    echo "<br>";
    asort($temperaturasSeparadas);
    $minimos = array_slice($temperaturasSeparadas, 0, 5);
    echo "Las temperaturas minimas: ";
    print_r($minimos);
?>