<?php 
    require('conexion.php');
    require('usuario.php');

    $id = $_GET['id_usuario'];
    $actualizarUsuario = $pdo->prepare('UPDATE usuario
                             SET nombre_usuario="manololama" where id_usuario=?');
    $actualizarUsuario->bindParam(1, $id);
    $cuantos = $actualizarUsuario->execute();                         
    echo "<p>Se han actualizado $cuantos usuarios.</p>"; 
?>