<?php 
    $dejameEntrar = $_GET['x'] ?? 0;

    if($dejameEntrar == 0) {
        header("Location: login.php");
        exit();
    } else if($dejameEntrar == 1) {
        echo "Bienvenido";
    }
?>