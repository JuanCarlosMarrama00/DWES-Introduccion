<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $color = array('blanco' => 'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');

        $lista = "<ul>";
                foreach($color as $elemento => $link) {
                    $lista .= "<li><a href='" . $link . "'>" . $elemento . "</a></li>"; 
                }
        $lista .= "</ul>";
    
        echo $lista;
    ?>
</body>
</html>