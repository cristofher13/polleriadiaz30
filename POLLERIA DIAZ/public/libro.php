<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamaciones - Pollería Díaz</title>
    <link rel="stylesheet" href="libro.css"> 
    <link rel="icon" type="image/png" href="img/icon.ico">
</head>
<body>
    <div class="form-container">
        <form action="procesar_reclamacion.php" method="POST">

            <div class="logomod">
                <img src="/img/libronegro.png" alt="Libro de Reclamaciones" class="logo">
            </div>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="nombre">Apellidos:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="reclamo">Descripción del Reclamo:</label><br>
            <textarea id="reclamo" name="reclamo" rows="4" cols="50" required></textarea><br><br>

            <button type="submit">Enviar Reclamo</button>
        </form>
    </div>
    <footer>
        <link rel="stylesheet" href="style.css">
        <div class="footer-container">
            <div class="footer-section">

                <h3>SERVICIOS</h3> 
                <p><strong>Dirección:</strong></p>
                     📍Av. Velasco Sector 2 GP 23 MZ "F" LT  22 Villa el Salvador<BR>
                     📍AV. MICAELA VASTIDAS 1666 - RUTA B  Villa el Salvador</p>
                <p><strong>DELIVERY & TAKE OUT</strong></p>
                <p>Lunes a Domingos 11:30 a.m. a 10:00 p.m.</p>
                <p><strong>PIDE LLAMANDO AL: <BR>901505855 - 921004541
                     </strong></p>
            </div>
               
            <div class="footer-section">

            <h3>NOSOTROS</h3>       
            <p><a href="postulacion.php">¡Postula aquí!</a></p>
            <p><a href="historia.html">Nuestra Historia</a></p>
            <p><a href="https://www.google.com/maps/place/Poller%C3%ADa+D%C3%ADaz/@-12.0422013,-77.2584482,10z/data=!4m10!1m2!2m1!1spolleria+diaz!3m6!1s0x9105b9eb264aea4d:0x9fb384fcb06465d9!8m2!3d-12.211055!4d-76.9451992!15sCg1wb2xsZXJpYSBkaWF6Wg8iDXBvbGxlcmlhIGRpYXqSARJjaGlja2VuX3Jlc3RhdXJhbnTgAQA!16s%2Fg%2F11rylgd692?entry=ttu">Locales</a></p>
            </div>
            <div class="footer-section">

                <h3>MÉTODO DE PAGO</h3>
                <img src="img/bcp.png" alt="bcp" class="bcp">
                <img src="img/yape.png" alt="yape">
                <p>Tarjetas de crédito,débito y Yape online</p>
            </div>
            <div class="footer-section">

            <h3>MAS</h3>
                <p>CHMM S.A.C. - 20606663227</p>
                <p>Política de Privacidad</p>
                <p>Protocolo Pet Friendly</p>
                <p>Libro de Reclamaciones</p>
                <p>Atención al Cliente</p>
                <p>Tel. 921-004-541</p>
                <a href="public/libro.php">
        <img src="/img/libronegro.png" alt="Libro de Reclamaciones" class="libro">
    </a>
                </div>
       
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
            <p class="derechos">@POLLERIA DIAZ'S 2024 todos los derechos reservados</p>
        </div>
</body>
</html>
