<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>DescubreRD</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Crear cuenta</small></a>
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Iniciar sesión</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> Panel de control</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> Mi perfil</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Mensajes</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notificaciones</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Configuracion de cuenta</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Cerrar sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>DescubreRD</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Inicio</a>
                        <a href="about.php" class="nav-item nav-link">Acerca de</a>
                        <a href="services.php" class="nav-item nav-link">Servicios</a>
                        <a href="packages.php" class="nav-item nav-link">Paquetes de viaje</a>
                        <a href="blog.php" class="nav-item nav-link">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Otros</a>
                            <div class="dropdown-menu m-0">
                                <a href="destination.php" class="dropdown-item">Destinos</a>
                                <a href="tour.php" class="dropdown-item">Explorar tours</a>
                                <a href="booking.php" class="dropdown-item">Reserva de viajes</a>
                                <a href="gallery.php" class="dropdown-item">Nuestra galeria</a>
                                <a href="guides.php" class="dropdown-item">Guia de viajes</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonios</a>
                                <a href="404.php" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contactos</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Haz tu reservación</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Blog</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">otros</a></li>
                    <li class="breadcrumb-item active text-white">Blog </li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Nuestro Blog</h5>
                    <h1 class="mb-4">Blog de Viajes Populares</h1>
                    <p class="mb-0">Nuestros blogs de viajes son una valiosa herramienta para ayudar a los visitantes a descubrir lo mejor de República Dominicana. Proporcionamos información detallada sobre destinos, recomendaciones de expertos y consejos prácticos para planificar una experiencia memorable en el país. ¡Explora nuestro contenido para inspirarte y planificar tu próximo viaje con nosotros!
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="https://dominicanexpert.com/wp-content/uploads/2015/09/dominican_republic_travel_006_riverrafting-1024x576.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Julio 2022</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>5.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>2.4K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Publicado Por: Jorniel R. Subi Hernandez </p>
                                <a href="#" class="h4">Rafting y Cañonismo en Jarabacoa</a>
                                <p class="my-3">El rafting y el cañonismo en Jarabacoa ofrecen emocionantes aventuras en los ríos y cañones de esta región de la República Dominicana. Estas actividades permiten explorar la naturaleza mientras se disfruta de la emoción del agua y el terreno escarpado.</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Mas informacion aqui</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="https://picoduartetours.com/wp-content/uploads/2023/09/cima-pico-duarte.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>5 Junio 2024</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>6.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>4.2</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Publicado Por: Jorniel R. Subi Hernandez </p>
                                <a href="#" class="h4">Explorando las Alturas: Conquista del Pico Duarte</a>
                                <p class="my-3">Descubre la Cumbre Más Alta del Caribe y Vive una Aventura Inolvidable en República Dominicana</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Mas informacion aqui</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="https://www.bavaroexcursions.com/wp-content/uploads/2018/02/buggies1.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>15 Mayo 2019</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>8.2K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>5.5K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Publicado Por: Jorniel R. Subi Hernandez </p>
                                <a href="#" class="h4">Aventura en Ruedas: Explorando Punta Cana en Buggies</a>
                                <p class="my-3">Experimenta la Emoción del Recorrido por Playas y Caminos Off-Road en la Exótica Punta Cana</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Mas informacion aqui</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Subscribe Start -->
        <div class="container-fluid subscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Subscribete</h5>
                    <h1 class="text-white mb-4">Nuestro Boletín de Noticias</h1>
                    <p class="text-white mb-5">Nuestro Boletín de Noticias te mantendrá al tanto de las últimas novedades, ofertas especiales y actualizaciones sobre nuestros tours y servicios. Únete para recibir información exclusiva y descuentos especiales en tus próximas aventuras de viaje.
                    </p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Correo Electronico">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contactanos</h4>
                            <a href=""><i class="fas fa-home me-2"></i> Calle Las Mercedes #23, Santo Domingo Este</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> DescubreRD@gmail.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> 809-532-2563</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> 809-532-2563</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Empresa</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Acerca de</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Empleos</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Prensa</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Targetas de regalos</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Revista</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Soporte</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contactos</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Aviso Legal</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Política de Privacidad</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terminos y condiciones</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Mapa del Sitio</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Política de Cookies</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <div class="row gy-3 gx-2 mb-4">
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">Arabe</option>
                                                <option value="2">Hispano</option>
                                                <option value="3">Aleman</option>
                                                <option value="3">Estado Unidense</option>
                                            </select>
                                            <label for="select1">Español</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">USD</option>
                                                <option value="2">EUR</option>
                                                <option value="3">RD</option>
                                                <option value="3">GBP</option>
                                            </select>
                                            <label for="select1">$</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class="text-white mb-3">Metodos de pago</h4>
                            <div class="footer-bank-card">
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fas fa-credit-card fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-cc-discover fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>