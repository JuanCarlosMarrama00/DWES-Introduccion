<?php 
    header("Content-Type: image/png");
    $dejameEntrar = $_GET['letMeIn'] ?? 0;
    $imagen = $_GET["Imagen"] ?? "imagen";

    if($dejameEntrar == 1 && file_exists("/home/alumno/img/".$imagen)) {
        imagepng(imagecreatefrompng("/home/alumno/img/".$imagen));
    } else if($dejameEntrar == 0) {
        http_response_code(401);
        imagepng(imagecreatefrompng("/home/alumno/img/prohibido.png"));    
    } else if($dejameEntrar == 1 && !file_exists("/home/alumno/img/".$imagen)) {
        http_response_code(404);
        imagepng(imagecreatefrompng("/home/alumno/img/prohibido.png"));
    }
?>