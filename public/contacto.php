<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

    <header>
        <h1>Formulario de contacto</h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>

    <div class="formulario">
        <form action="procesar.php" method="POST">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Correo:</label>
            <input type="email" name="correo" required>

            <label>Mensaje:</label>
            <textarea name="mensaje" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>

<footer>
    © 2025 - Mi sitio personal - Angel Sarango
</footer>

</html>

