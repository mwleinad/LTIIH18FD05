<?php
    $newName = $_POST['name'];

    if(strlen($newName) === 0) {
        $newName = "El nombre no puede ser vacio";
    }

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Ejemplo Metodo POST</title>
    </head>
    <body>
        El nuevo nombre de Daniel es: <?php echo  $newName ?>
    </body>
</html>