<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="js/jsPlugins.js"></script>
</head>
<body>
    <header>
    <h1><img src="index.php" alt="MudanzasLuna" class="logo"></h1>
        <nav>
            <ul>
                <li><a href="../index.php" class="navMenu">Inicio</a></li>
                <li><a href="../apartados/nosotros.php" class="navMenu">Nosotros</a></li>
                <li><a href="#" class="navMenu">Contactanos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form id="contactForm" method="post" action="./backend/send_email.php">
            <label for="name">Nombre completo:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Número de teléfono:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="service">Servicio requerido:</label>
            <select id="service" name="service" required>
                <option value="local">Mudanza local</option>
                <option value="express">Servicio exprés</option>
                <option value="furniture">Montaje y desmontaje de muebles</option>
            </select>

            <label for="message">Mensaje adicional:</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="submit">Enviar</button>
        </form>

            <!-- Contenedor para mostrar mensajes -->
            <div id="responseMessage" style="margin-top: 1rem; font-size: 1rem;"></div>



    </main>
    <footer>
        <div class="mensajeFinal">todos los derechos reservados</div>
    </footer>
</body>
</html>