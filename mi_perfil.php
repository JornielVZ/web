<?php
session_start();

// Verificar si hay una sesión activa
if (!isset($_SESSION['user_id'])) {
    // Redirigir al usuario a la página de inicio de sesión o a la página principal
    header("Location: mi_perfil2.php");
    exit();
}

// Aquí deberías incluir la lógica para recuperar la información del usuario de la base de datos
// Supongamos que tienes la información del usuario en variables como $nombre, $apellidos, $email, etc.
?>
