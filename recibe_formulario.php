<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibe formulario</title>
</head>
<body>
    <?php
        require('conexion.php');

        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];

            // Limpieza de datos

            // Crear registro en DB
            $sql = "INSERT INTO informacion_horoscopo (nombre, correo, fecha_de_nacimiento)
                    VALUES ('$nombre', '$correo', '$fecha_de_nacimiento')";
            $conn->exec($sql);


            // Mostrar información de tabla informacion_horoscopo
            $stmt = $conn->query("SELECT * FROM informacion_horoscopo");
            $informacion_horoscopo = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Recorre el array de informacion_horoscopo y muestra la información
            foreach ($informacion_horoscopo as $informacion_horoscopo) {
                echo "<p>Nombre: " . $informacion_horoscopo['nombre'] . ", Correo: " . $informacion_horoscopo['correo'] . ", Fecha de nacimiento: " . $informacion_horoscopo['fecha_de_nacimiento'] . "</p>";
            }
        } else {
            echo "<p>No es una petición tipo POST.</p>";
        }
    ?>    
</body>
</html>