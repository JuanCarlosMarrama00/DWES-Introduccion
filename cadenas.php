<?php 
    $nombre = $_GET['x'] ?? 'Juan Carlos';
    $nombre = trim($nombre, '/');
    echo $nombre;
    
    echo "<br>";
    $caracteres = strlen($nombre);
    echo "El nombre tiene " . $caracteres . " caracteres";
    
    echo "<br>";
    $nombreMayuscula = strtoupper($nombre);
    echo $nombreMayuscula;

    echo "<br>";
    $nombreMinuscula = strtolower($nombre);
    echo $nombreMinuscula;

    echo "<br>";
    $palabra = $_GET['y']; 
    echo $nombre . " " . $palabra;
    $prefijo = strpos($nombre, $palabra);
    echo "<br>" . $prefijo;
    if($prefijo === false) {
        echo "NO Empieza por el prefijo";
    } else {
        echo "SÌ empieza por el prefijo";
    }

    echo "<br>";
    $cuantasAMinusculas = substr_count($nombre, 'a');
    $cuantasAMayusculas = substr_count($nombre, strtoupper('a'));
    echo "El nombre tiene " . $cuantasAMinusculas + $cuantasAMayusculas . " a";

    echo "<br>";

    $primeraA = stripos($nombre, 'a');

    if($primeraA === false) {
        echo "No tiene ninguna a";
    } else {
        echo $primeraA;
    }
    
    echo "<br>";
    $nombreSinO = str_ireplace('o', '0', $nombre);
    echo $nombreSinO;

    echo "<br>";
    $url = 'http://username:password@hostname:9090/path?arg=value';
    echo $protocolo = parse_url($url, PHP_URL_SCHEME);
    echo "<br>";
    echo $usuario = parse_url($url, PHP_URL_USER);
    echo "<br>";
    echo $path = parse_url($url, PHP_URL_PATH);
    echo "<br>";
    echo $queryString = parse_url($url, PHP_URL_QUERY);
?>
