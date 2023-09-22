<?php 
    $frase = ["Seguro", "que", "apruebo", "esta", "asignatura"];

    for($i=1;$i<=count($frase) - 1; $i++) {
        $primeraParte = array_slice($frase, 0, $i);
        $segundaParte = array_slice($frase, $i);
        $primeraParteUnida = implode(" ", $primeraParte);
        $segundaParteUnida = implode(" ", $segundaParte);
        $resultado = [$primeraParteUnida, $segundaParteUnida];
        print_r($resultado);
    }

?>