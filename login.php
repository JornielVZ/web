<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Iniciar Sesión</h4>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Nombre de usuario" required>
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                        </form>
                        <a href="index.php" class="btn btn-back btn-block">Volver atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
