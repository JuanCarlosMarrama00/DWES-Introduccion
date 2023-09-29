<?php 
    $navegador = $_SERVER['HTTP_USER_AGENT'];
    if(!strpos($navegador, 'Firefox')) {
        echo "Aviso, no estás en Mozilla";
    } else {
        echo "Estas usando Firefox";
    }
?>