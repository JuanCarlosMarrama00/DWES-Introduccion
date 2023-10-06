<?php
require("conectar.php");

$errores = [];

if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombreUsuario"])) {
        $errores[] = "Ingresa un nombre de usuario";
    }
    if (empty($_POST["correo"]) || !filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
        $errores[] = "No has ingresado un correo electrónico o tu email no es valido";
    }
    if (empty($_POST["password"])) {
        $errores[] = "Por favor introduce una contraseña";
    }
    if(strlen($_POST["password"])< 6) {
        $errores[] = "La contraseña debe tener más de 6 caracteres";
    }
    if ($_POST["password"] !== $_POST["repetirPassword"]) {
        $errores[] = "Las contraseñas no coinciden, intentalo de nuevo";
    }

    if (empty($errores)) {
        $pdoSt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?,?,?)');
        $nombreUsuario = $_POST["nombreUsuario"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];

        $pdoSt->bindValue(1, $nombreUsuario);
        $pdoSt->bindValue(2, $correo);
        $pdoSt->bindValue(3, $password);
        $pdoSt->execute();
        echo "Se ha registrado correctamente";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Pagina Registrarse php</title>
</head>

<body>
    <h1>Formulario de registro</h1>
    <?php
    if(isset($errores)) {
        foreach($errores as $error) {
            echo $error . "<br>";
        }
    }
    ?>
    <div id="formulario">
    <form action="registrarse.php" method="post" enctype="multipart/form-data">
        <p>Nombre de usuari@:</p>
        <input type="text" name="nombreUsuario" maxlength="50"><br>
        <p>Correo electrónico:</p>
        <input type="email" name="correo"><br>
        <p>Contraseña:</p>
        <input type="password" name="password"><br>
        <p>Confirma la contraseña:</p>
        <input type="password" name="repetirPassword"><br><br>
        <input type="submit" value="Registrarse" name="submit"><br>
    </form>
    </div>
    <p>¿Ya eres miembro?<a href="login.php">Acceso a usuari@s</a></p>
</body>

</html>