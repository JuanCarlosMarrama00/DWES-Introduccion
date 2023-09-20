<?php 
    $paises = ['España', 'Argentina', 'Francia', 'Alemania', 'Luxemburgo'];

    $longitudes = array_map('strlen', $paises);

    echo "La longitud minima es " . min($longitudes);
    echo "<br>";
    echo "La longitud maxima es " . max($longitudes);
?>