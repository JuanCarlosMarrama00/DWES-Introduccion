<?php 
     require('conexion.php');
     require('usuario.php');
 
     $borrarUsuario = $pdo->exec('DELETE usuario FROM usuario where nombre_usuario="pacopacon"');
     echo "<p>Se han borrado $borrarUsuario usuarios.</p>"; 
?>