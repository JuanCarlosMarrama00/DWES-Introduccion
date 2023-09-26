<?php 
    $idioma = [
        'es' => 'La pagina esta en español',
        'en' => 'This page is in English'
    ];

    $idiomaPorDefecto = 'es';

    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
       $idiomaActual = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); 
       print($idioma[$idiomaActual]);
    } else {
        print($idioma[$idiomaPorDefecto]);
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio idioma con headers</title>
</head>
<body>
    <p>Esto es un ejemplo de texto</p>
</body>
</html>