<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $fecha_nacimiento = $_POST['fecha_de_nacimiento'];

    echo "<h2>Informacion capturada</h2>";
    echo "Nombre: " .$nombre. "<br>";
    echo "Correo: " .$correo. "<br>";
    echo "Fecha de nacimiento" .$fecha_nacimiento. "<br>";}
    else {
        echo "<p>No es una peticion tipo POST</p>";
    }
    ?>    
</body>
</html>