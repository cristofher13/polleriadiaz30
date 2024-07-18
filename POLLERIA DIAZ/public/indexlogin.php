
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Aquí puedes procesar los datos recibidos, por ejemplo, validar credenciales, etc.
    if ($email == 'usuario@example.com' && $password == 'contraseña') {
        echo "Inicio de sesion exitoso";
        // Aquí podrías redirigir a otra página, actualizar la sesión, etc.
    } else {
        echo "Credenciales incorrectas";
    }
}
?>