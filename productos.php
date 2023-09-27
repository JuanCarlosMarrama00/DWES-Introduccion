<?php 
    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
    $productoElegido = $_GET['id'] ?? '1';

    if(!array_key_exists($productoElegido, $productos)) {
        http_response_code(404);
    } else {
        echo "<p>Está bien</p>";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Productos en php</title>
</head>
<body>
    
</body>
</html>