<?php
    $primerValor = 1;

    if(isset($_GET['X'])) {
        $primerValor = $_GET['X'];
    } else {
        $primerValor = 1;
    }

    $segundoValor = $_GET['Y'] ?? 1;

    echo "El resultado de la multiplicacion es " . $primerValor * $segundoValor;
?>