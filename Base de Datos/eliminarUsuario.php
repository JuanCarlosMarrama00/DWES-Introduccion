<?php 
     require('conexion.php');
     require('usuario.php');
     
     $id = $_GET['id_usuario'];
     $borrarUsuario = $pdo->prepare('DELETE usuario FROM usuario where id_usuario=?');
     $borrarUsuario->bindParam(1, $id);
     $cuantos = $borrarUsuario->execute();
     echo "<p>Se han borrado $cuantos usuarios.</p>"; 
?>