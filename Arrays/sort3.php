<?php 
    $pais_capital = ['España' => 'Madrid', 'Francia' => 'París', 'Alemania' => 'Berlín', 'Argentina' => 'Buenos Aires'];

    function comparar($a, $b) {
        if(strlen($a) == strlen($b)) {
            return 0;
        }

        return strlen($a) > strlen($b) ? -1 : 1;
    }

    uasort($pais_capital, 'comparar');
    print_r($pais_capital);
?>