<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require('conexion.php');//conexion a base de datos 

    //--- Aplicable a Sentencias INSERT, UPDATE, DELETE ---//
    $sql = "INSERT INTO informacion_horoscopo (nombre, correo, fecha_de_nacimiento )
    VALUES ('$nombre', '$correo', '$fecha_nacimiento')";
    // Utilizar exec() dado que no se regresan resultados
    $conn->exec($sql);

    //--- Aplicable a Sentencia SELECT ---//
    $sql = "SELECT * FROM informacion_horoscopo";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

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