<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Mi Perfil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-image: url('https://www.publicdomainpictures.net/pictures/140000/nahled/blue-background-14466365179vp.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 20;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            border: none;
            border-radius: 25px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0;
        }
        .form-control {
            border-radius: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 15px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-back {
            margin-top: 20px;
            background-color: #dc3545;
            border-color: #dc3545;
            border-radius: 15px;
        }
        .btn-back:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Mi Perfil</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        session_start();

                        // Verificar si existen datos de usuario en la sesión
                        if (isset($_SESSION['nombre']) && isset($_SESSION['apellidos']) && isset($_SESSION['email'])) {
                            $nombre = $_SESSION['nombre'];
                            $apellidos = $_SESSION['apellidos'];
                            $email = $_SESSION['email'];
                        } else {
                            // Manejar el caso en el que no se encuentren los datos del usuario
                            $nombre = "Nombre del usuario";
                            $apellidos = "Apellidos del usuario";
                            $email = "Email del usuario";
                        }

                        // Verificar si se enviaron los datos del formulario para actualizar los datos
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                            // Obtener los datos del formulario
                            $nombre = $_POST['nombre'];
                            $apellidos = $_POST['apellidos'];
                            $email = $_POST['email'];

                            // Actualizar los datos de la sesión
                            $_SESSION['nombre'] = $nombre;
                            $_SESSION['apellidos'] = $apellidos;
                            $_SESSION['email'] = $email;
                        }
                        ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" class="form-control" value="<?php echo $nombre; ?>" name="nombre" <?php if (!isset($_POST['submit'])) { echo "readonly"; } ?>>
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" id="apellidos" class="form-control" value="<?php echo $apellidos; ?>" name="apellidos" <?php if (!isset($_POST['submit'])) { echo "readonly"; } ?>>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" class="form-control" value="<?php echo $email; ?>" name="email" <?php if (!isset($_POST['submit'])) { echo "readonly"; } ?>>
                            </div>
                            <div class="text-center">
                                <?php if (!isset($_POST['submit'])) { ?>
                                    <button type="button" onclick="editarPerfil()" class="btn btn-primary"><i class="fas fa-user-edit"></i> Editar Perfil</button>
                                    <button type="submit" name="submit" class="btn btn-success" style="display: none;"><i class="fas fa-save"></i> Guardar Cambios</button>
                                    <button type="button" onclick="cancelarEdicion()" class="btn btn-secondary" style="display: none;"><i class="fas fa-undo"></i> Cancelar</button>
                                <?php } else { ?>
                                    <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar Cambios</button>
                                    <button type="button" onclick="cancelarEdicion()" class="btn btn-secondary"><i class="fas fa-undo"></i> Cancelar</button>
                                <?php } ?>
                                <p class="text-muted mt-3">Para guardar los cambios, presione ENTER</p>
                                <a href="index.php" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Volver a Inicio</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function editarPerfil() {
            document.getElementById("nombre").readOnly = false;
            document.getElementById("apellidos").readOnly = false;
            document.getElementById("email").readOnly = false;
            document.querySelector('button[name="submit"]').style.display = "inline-block";
            document.querySelector('button[type="button"]').style.display = "inline-block";
            document.querySelector('button[type="submit"]').style.display = "none";
        }

        function cancelarEdicion() {
            document.getElementById("nombre").readOnly = true;
            document.getElementById("apellidos").readOnly = true;
            document.getElementById("email").readOnly = true;
            document.querySelector('button[name="submit"]').style.display = "none";
            document.querySelector('button[type="button"]').style.display = "none";
            document.querySelector('button[type="submit"]').style.display = "inline-block";
        }
    </script>
</body>
</html>
