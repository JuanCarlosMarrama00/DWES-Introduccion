<?php 
    require('conexion.php');
    require('usuario.php');

    $resultado = $pdo->query("SELECT nombre_usuario FROM usuario");
    while($registro = $resultado->fetch()) {
        echo "Nombre de Usuario: " . $registro['nombre_usuario'];
    }
?>