<?php 
    session_start();
    require("conectar.php");

    $errores = [];

    if(isset($_POST["submit"]) && $_SERVER["REQUEST-METHOD"] = "POST") {
        if(empty($_POST["nombreUsuario"])) {
            $errores[] = "El campo del usuario no puede estar vacío";
        }
        if(empty($_POST["password"])) {
            $errores[] = "El campo de la contraseña no puede estar vacío";
        }
        if(empty($errores)) {
            $pdoSt = $pdo->prepare("SELECT username FROM users where username=? AND password=?");
            $nombreUsuario = $_POST["nombreUsuario"];
            $password = $_POST["password"];
            $pdoSt->bindParam(1, $nombreUsuario);
            $pdoSt->bindParam(2, $password);
            $pdoSt->execute();
            $usuario = $pdoSt->fetch();

            if(isset($usuario)) {
                $_SESSION["username"] = $usuario["username"];
                header("location: privada.php");
            } else {
                echo "El nombre de usuario o contraseña no coincide";
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
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
</head>
<body>
    <div id="pagina">
    <h1>Formulario de login</h1>
    <div id="formulario">
    <form action="login.php" method="post" enctype="multipart/form-data">
        <?php 
            if(isset($errores)) {
                foreach($errores as $error) {
                    echo $error . "<br>";
                }
            }
        ?>
        <p>Nombre de usuari@:</p>
        <input type="text" name="nombreUsuario" maxlength="50"><br>
        <p>Contraseña:</p>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Acceder"><br>
        <p>¿Todavía no eres miembro?<a href="registrarse.php">Registrarse</a></p>
        </div>
    </form>
    </div>
</body>
</html>