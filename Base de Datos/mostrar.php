<?php 
    require('conexion.php');
    require('usuario.php');


    $id = $_GET['id_usuario'];
    $resultado = $pdo->prepare("SELECT nombre_usuario FROM usuario where id_usuario=?");
    $resultado->bindParam(1, $id);
    $resultado->execute();
    while($registro = $resultado->fetch()) {
        echo "Nombre de Usuario: " . $registro['nombre_usuario'];
    }
?>