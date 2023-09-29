<?php 
    $modo = $_GET["modo"] ?? ($_COOKIE["modo"] ?? "light");
    setcookie("modo", $modo, time() + 30 * 24 * 60 * 60);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba modos</title>
    <style>
        .dark{
            background-color: grey;
        }

        .light{
            background-color: #eee;
        }

    </style>
</head>
<body class="<?=$modo?>">
    <a href="?modo=light">Claro</a>
    <a href="?modo=dark">Oscuro</a>
</body>
</html>