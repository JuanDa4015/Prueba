<?php
require 'crud_temas/app/config/database.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biología</title>
    <link rel="stylesheet" href="css/curioso.css">
    <!-- Otros enlaces de estilo y scripts que puedas necesitar -->
</head>
<body> 
    <div class="container">
        <div class="row">
            <div class="heading-section">
                <!-- Aquí se mostrará la imagen, el título y la descripción -->
                <?php
                $sql = "SELECT * FROM informacion WHERE id_asignaturas = 1";
                $result = $conn->query($sql);
                
                while ($row = $result->fetch_assoc()) {
                    echo '<div style="text-align: center;">';
                    // Asegúrate de que la ruta de la imagen sea correcta y esté apuntando al directorio correcto
                    echo '<img src="crud_temas/app/datos/imagen/' . $row['id'] . '.jpg" alt="Imagen de la asignatura" style="max-width: 300px; max-height: 300px;">';
                    echo '<h2 style="font-size: 24px; font-family: Arial, sans-serif;">' . $row['nombre'] . '</h2>';
                    echo '<p>' . $row['descripcion'] . '</p>';
                    echo '</div>';
                }

                // Cierra la conexión a la base de datos
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- Otros elementos HTML y scripts que puedas necesitar -->
</body>
</html>
