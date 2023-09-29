<?php 
    require('conexion.php');
    require('usuario.php');

    $pdoSt = $pdo->prepare('INSERT INTO usuario (nombre, apellido, nombre_usuario, contraseña) VALUES (?,?,?,?)');

    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $nombre_usuario = $_GET['nombreUsuario'];
    $password = $_GET['contraseña'];
    $pdoSt->bindParam(1, $nombre);
    $pdoSt->bindParam(2, $apellido);
    $pdoSt->bindParam(3, $nombre_usuario);
    $pdoSt->bindParam(4, $password);

    $pdoSt->execute();
?>