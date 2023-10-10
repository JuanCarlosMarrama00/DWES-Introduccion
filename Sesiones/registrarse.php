<?php
require("conectar.php");

$errores = [];
$nombreUsuario = $password = $correo = "";

if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = $_POST["nombreUsuario"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    if (empty($nombreUsuario)) {
        $errores[] = "Ingresa un nombre de usuario";
    }
    if (empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "No has ingresado un correo electrónico o tu email no es valido";
    }
    if (empty($password)) {
        $errores[] = "Por favor introduce una contraseña";
    }
    if (strlen($_POST["password"]) < 6) {
        $errores[] = "La contraseña debe tener más de 6 caracteres";
    }
    if ($_POST["password"] !== $_POST["repetirPassword"]) {
        $errores[] = "Las contraseñas no coinciden, intentalo de nuevo";
    }

    if (empty($errores)) {
        try {
        $pdoSt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?,?,?)');
        $pdoSt->bindValue(1, $nombreUsuario);
        $pdoSt->bindValue(2, $correo);
        $pdoSt->bindValue(3, $password);
        $pdoSt->execute();
        //$_SESSION["username"] = $nombreUsuario;
        header("location:login.php");

        } catch (PDOException $e) {
            $error = $e->getMessage();
            if(strpos($error, 'users.username') !== false) {
                $errores[] = "Este nombre de usuario ya existe";
            } elseif(strpos($error, 'users.email') !== false) {
                $errores[] = "Este email ya pertenece a un usuario";
            }
        }
        
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
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>

<body>
    <div id="pagina">
    <?php
        if (isset($errores)) {
            foreach ($errores as $error) {
                echo $error . "<br>";
            }
        }
        ?>
        <h1>Formulario de registro</h1>
        <div id="formulario">
            <form action="registrarse.php" method="post" enctype="multipart/form-data">
                <p>Nombre de usuari@:</p>
                <input type="text" name="nombreUsuario" maxlength="50" value=<?= $nombreUsuario ?>><br>
                <p>Correo electrónico:</p>
                <input type="email" name="correo" value=<?= $correo ?>><br>
                <p>Contraseña:</p>
                <input type="password" name="password"><br>
                <p>Confirma la contraseña:</p>
                <input type="password" name="repetirPassword"><br><br>
                <input type="submit" value="Registrarse" name="submit"><br>
            </form>
        </div>
        <p>¿Ya eres miembro?<a href="login.php">Acceso a usuari@s</a></p>
    </div>
</body>

</html>