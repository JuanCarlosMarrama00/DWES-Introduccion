<?php
function filtrado($datos)
{
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);

    return $datos;
}

if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) {
        $errores[] = "El nombre es requerido";
    }
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])) {
        $errores[] = "No se ha indicado email o el formato no es correcto";
    }

    if (isset($_FILES["avatar"])) {
        $directorioSubida = "uploads/";
        $max_file_size = "51200";
        $errores = array();
        $nombreArchivo = $_FILES['avatar']['name'];
        $filesize = $_FILES['avatar']['size'];
        $directorioTemp = $_FILES['avatar']['tmp_name'];
        $tipoArchivo = $_FILES['avatar']['type'];
        $arrayArchivo = pathinfo($nombreArchivo);
        if ($filesize > $max_file_size) {
            $errores[] = "La imagen debe tener un tamaño inferior a 50 kb";
        }elseif(empty($_FILES["avatar"])) {
            $errores[] = "Debes seleccionar un avatar";
        }
        $nombreArchivo = $arrayArchivo['filename'];
        $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);
        $nombreArchivo = $nombreArchivo . rand(1, 100);
        if (empty($errores)) {
            $nombreCompleto = $directorioSubida . $nombreArchivo;
            move_uploaded_file($directorioTemp, $nombreCompleto);
            print "El archivo se ha subido correctamente";
        }
    }

    if (isset($errores)) {
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li> $error </li>";
        }
        echo "</ul>";
    }
    
    if (empty($errores) ) {
        $nombre = filtrado($_POST["nombre"]);
        $email = filtrado($_POST["email"]);
        $estudios = filtrado($_POST["estudios"]);
        $avatar = filtrado($_FILES["avatar"]["name"]);
        
        foreach ($_POST as $datos) {
            if ($datos == $_POST["nombre"]) {
                echo "Se llama " . $datos . "<br>";
            }
            if ($datos == ($_POST["email"])) {
                echo "Su email es " . $datos . "<br>";
            }
            if ($datos == $_POST["estudios"]) {
                echo "Sus estudios son " . $datos . "<br>";
            }
        }
        echo "Su avatar es el archivo " . $avatar;

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Registro php</title>
</head>

<body>
    <form action="registro.php" method="post" enctype="multipart/form-data">
        Nombre:<input type="text" name="nombre" maxlength="50"><br>
        Email:<input type="email" name="email"><br>
        Estudios:<select name="estudios">
            <option value="secundaria">Secundaria</option>
            <option value="bachiller">Bachiller</option>
            <option value="fp">FP</option>
        </select><br>
        Avatar:<input type="file" name="avatar"><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>

</html>