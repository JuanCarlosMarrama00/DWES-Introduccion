<?php 
    require('conexion.php');
    require('usuario.php');

    $actualizarUsuario = $pdo->exec('UPDATE usuario
                             SET nombre_usuario="pacopacon" where nombre_usuario="pacopaquete"');
    echo "<p>Se han actualizado $actualizarUsuario usuarios.</p>"; 
?>