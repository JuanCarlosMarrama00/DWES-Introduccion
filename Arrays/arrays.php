<?php 
    $nombres = array('Pepe', 'Juan', 'Antonio', 'Alex', 'Paco', 'Adrián');
    echo count($nombres);
    echo "<br>";
    echo implode(" ", $nombres);
    echo "<br>";
    asort($nombres);
    foreach($nombres as $nombre) {
        echo $nombre . " ";
    }

    echo "<br>";
    
    print_r(array_reverse($nombres));

    echo "<br>";
    echo "El nombre Antonio se encuentra en la posicion " . array_search('Antonio', $nombres);

    echo "<br>";
    $alumnos = [
        [
            'id' => 1,
            'nombre' => 'Alex',
            'edad' => 19
        ],
        [
            'id' => 2,
            'nombre' => 'Pedro',
            'edad' => 18 
        ],
        [
            'id' => 3,
            'nombre' => 'Maria',
            'edad' => 21
        ],
    ];
    print_r($alumnos);

    $tabla = "<table border='1'>";
    foreach($alumnos as $linea) {
        $tabla .= '<tr>';
        foreach($linea as $columna) {
            $tabla .= '<td>'.$columna.'</td>';
        }
        $tabla .= '</tr>';

    }

    $tabla .= '</table>';

    echo $tabla;

    echo "<br>";
    print_r(array_column($alumnos, 'nombre'));

    echo "<br>";
    $numeros = [15, 27, 39, 20, 45, 75, 102, 54, 69, 32];
    echo array_sum($numeros);
?>
