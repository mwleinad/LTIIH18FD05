<?php 
    $name = $_GET['name'];
    if($name === 'Daniel') {
        $lastName = 'Lopez';
    } else if($name === 'Maria') {
        $lastName = 'Perez';
    } else if($name === 'Jesus') {
        $lastName = 'Rosales';
    } else {
        $lastName = 'No encontramos el apellido';
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Ejemplo Metodo GET</title>
    </head>
    <body>
        El apellido de <?php echo $name?> es: <?php echo $lastName ?>
    </body>
</html>