<?php
session_start();

// Verificar si el formulario se envió correctamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si todos los campos están presentes
    if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
        // Obtener los valores del formulario
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Verificar si las contraseñas coinciden
        if ($password !== $confirm_password) {
            // Las contraseñas no coinciden, redirigir de vuelta al formulario de registro con un mensaje de error
            header("Location: register.php?error=password_mismatch");
            exit;
        }

        // Guardar los datos del usuario en la base de datos
        // Aquí debes usar consultas SQL para insertar los datos en tu base de datos
        
        // Después de guardar los datos en la base de datos, almacenar los datos del usuario en variables de sesión
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellidos'] = $apellidos;
        $_SESSION['email'] = $email;

        // Redirigir al usuario a la página de perfil
        header("Location: index.php");
        exit;
    } else {
        // Faltan campos en el formulario, redirigir de vuelta al formulario de registro con un mensaje de error
        header("Location: register.php?error=missing_fields");
        exit;
    }
} else {
    // El formulario no se envió correctamente, redirigir de vuelta al formulario de registro con un mensaje de error
    header("Location: register.php?error=form_not_submitted");
    exit;
}
?>
