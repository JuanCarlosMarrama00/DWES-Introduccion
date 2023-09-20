<?php 
    $frase = ["Seguro", "que", "apruebo", "esta", "asignatura"];

    for($i=1;$i<=count($frase); $i++) {
        $salida = array_slice($frase, $i);
    }

    print_r($salidaString);
?>