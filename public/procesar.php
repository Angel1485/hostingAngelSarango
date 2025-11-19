<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesado</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
</html>

<?php
require "conexion.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombre = htmlspecialchars($_POST["nombre"]);
        $correo = htmlspecialchars($_POST["correo"]);
        $mensaje = htmlspecialchars($_POST["mensaje"]);

        // Insertar en Base de Datos
        $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES (:nombre, :correo, :mensaje)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':correo', $correo);
        $statement->bindParam(':mensaje', $mensaje);

        if ($statement->execute()) {
        ?>
            <div class="mensaje-exito">
                <h2>Mensaje enviado correctamente</h2>
                <a href="contacto.php" class="btn-volver">Volver</a>
            </div>
        <?php
        } else {
        ?>
            <div class="mensaje-error">
                <h2>Error al enviar mensaje</h2>
                <a href="contacto.php" class="btn-volver">Intentar de nuevo</a>
            </div>
        <?php
        }
    }
?>