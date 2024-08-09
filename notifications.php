<?php
$notificaciones_activas = array(
    'nueva_oferta' => true,
    'nuevo_tour' => false,
    'recordatorio_evento' => true,
    'nuevos_comentarios'=> true,
    'seguimiento de reservas'=> true,
    'de reseñas y calificaciones'=> true
);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    foreach ($notificaciones_activas as $key => $value) {
        if (isset($_POST[$key])) {
            $notificaciones_activas[$key] = isset($_POST[$key]);
        }
    }

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Configuración de Notificaciones</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Configuración de Notificaciones</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <?php foreach ($notificaciones_activas as $key => $value) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="<?php echo $key; ?>" name="<?php echo $key; ?>" <?php echo $value ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="<?php echo $key; ?>">
                                        Notificación: <?php echo ucfirst(str_replace('_', ' ', $key)); ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <button type="submit" name="submit" class="btn btn-primary btn-block mt-3">Guardar cambios</button>
                        </form>
                        <a href="index.php" class="btn btn-back btn-block mt-2">Ir al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
