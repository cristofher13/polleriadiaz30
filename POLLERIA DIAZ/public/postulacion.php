<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/postulacion.css">
    <link rel="icon" type="image/png" href="img/icon.ico">
    <title>Formulario de Postulación</title>
</head>
<body>
    
<div class="form-container">

    <div class="form-wrapper">
    <div class="logomod">
    <img src="/img/POLLO LOGO.png" alt="Logo" class="logo">
</div>
        <h2>¡TRABAJA CON NOSOTROS!</h2>
        <form id="postulacionForm" action="#">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required>
            </div>
            <div class="form-group">
                <label for="curriculum">Currículum vitae:</label>
                <input type="file" id="curriculum" name="curriculum" accept=".pdf,.doc,.docx" required>
            </div>
            <button type="submit" onclick="mostrarMensaje()">Enviar Postulación</button>

<script>
function mostrarMensaje() {
    alert("¡Postulación enviada con éxito!");
    window.history.back(); // Retrocede en el historial del navegador
}
</script>
        </form>

</body>
</body>
</html>