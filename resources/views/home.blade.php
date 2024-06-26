<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentico</title>
    <link rel="icon" href="storage/img/log2.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg header-navbar">
        <div class="container-fluid">
            <!-- Logo -->
            <div class="div-logo">
                <img src="storage/img/logo2.png" alt="Logo" class="logoPrincipal">
                <!--<h1 class="text-white font-bold">Dentico</h1>-->
            </div>
            <!-- End Logo -->
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- End Toggler -->
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                </ul>
                <!-- Login Dropdown -->
                <div class="div-login dropdown">
                    <a class="btn text-white" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown" id="userMenu">
                        @auth <!-- If user is authenticated -->
                            <li><a class="dropdown-item" href="/account">Cuenta</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item" id="logoutBtn">Cerrar Sesión</button>
                                </form>
                            </li>
                        @else
                            <!-- If user is not authenticated -->
                            <li><a class="dropdown-item" href="{{ route('login') }}">Inicio Sesión</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrarse</a></li>
                            <li><a class="dropdown-item" href="{{ route('AdminHome')}}">Administración</a></li>
                        @endauth
                    </ul>
                </div>
                <!-- End Login Dropdown -->
            </div>
            <!-- End Menu -->
        </div>
    </nav>
    <!-- Carousel de imágenes -->
    <div class="carouselsucur">
        <img src="storage/img/sonrisabrillante.jpg" alt="Imagen 1">
    </div>

    <!-- Carousel de servicios -->
    <div class="container mt-4">
        <h2 class="text-center font-bold text-2xl mb-4">Nuestros Servicios</h2>
        <div id="carouselServices" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner servicios">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        <div class="p-4 bg-white shadow rounded div-servis">
                            <h3>Ortodoncia y ortopedia maxilar</h3>
                            <p>
                                La ortopedia maxilar se enfoca en controlar y corregir el crecimiento de las estructuras
                                bucales y faciales,
                                mientras que la ortodoncia estudia, previene y trata maloclusiones dentales, corrigiendo
                                la posición de los
                                dientes y mejorando la función oral.
                            </p>
                        </div>
                        <div class="p-4 bg-white shadow rounded div-servis">
                            <h3>Cirugía e implantes</h3>
                            <p>
                                La cirugía de implantes dentales es un procedimiento que reemplaza las raíces de los
                                dientes
                                con pernos metálicos que parecen tornillos.Luego, se sustituye el diente faltante o
                                dañado
                                con una prótesis dental artificial que se ve y funciona de manera similar a los dientes
                                naturales.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <div class="p-4 bg-white shadow rounded div-servis">
                            <h3>Endodoncia (tratamiento de nervio)</h3>
                            <p>
                                La endodoncia es un procedimiento dental que implica eliminar la pulpa infectada y
                                obturar la cavidad pulpar para
                                preservar el diente. En otras palabras, se trata de tratar el nervio dental. Durante el
                                procedimiento, se elimina
                                completamente la pulpa dental (nervio) y se rellena el espacio con un material
                                biocompatible.
                            </p>
                        </div>
                        <div class="p-4 bg-white shadow rounded div-servis">
                            <h3>Rehabilitación y estética</h3>
                            <p>
                                La rehabilitación oral se enfoca en restaurar la función masticatoria, la estabilidad y
                                la apariencia de la boca.
                                Incluye tratamientos como coronas, puentes, prótesis dentales e implantes. Por otro
                                lado, la estética dental busca
                                mejorar la apariencia de los dientes y la sonrisa mediante procedimientos como
                                blanqueamiento dental, carillas de
                                porcelana y alineadores transparentes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <div class="p-4 bg-white shadow rounded div-servis">
                            <h3>Periodoncia (Tratamientos de encías)</h3>
                            <p>
                                La periodoncia es una especialidad odontológica que se centra en prevenir, diagnosticar
                                y tratar enfermedades que afectan las encías y las estructuras de soporte dental. Los
                                periodoncistas son odontólogos especializados en estas áreas, incluyendo el manejo de
                                enfermedades periodontales y la colocación de implantes dentales.
                        </div>
                        <div class="p-4 bg-white shadow rounded div-servis">
                            <h3>Odontopediatria (Niños)</h3>
                            <p>
                                La odontopediatría se dedica al cuidado dental de niños desde el nacimiento hasta la
                                adolescencia. Los odontopediatras son dentistas especializados con formación adicional
                                en las necesidades dentales de los niños. Su rol es vital para prevenir y tratar
                                problemas bucodentales durante la infancia.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div id="carousel-About" class="carousel slide" data-bs-ride="carousel">
        <div class="container shadow about-section">
            <div class="row">
                <!-- Columna de texto -->
                <div class="col-md-6 div-infoabout">
                    <h2 class="text-2x1 font-bold">Sobre Nosotros</h2>
                    <p class="mt-6">
                        La Clínica Esperanza se fundó en el año 2000 en la ciudad de San José, Costa Rica.El Dr. Carlos
                        Mendoza, un médico con una visión y un sueño,
                        fue el fundador de esta clínica.Después de trabajar durante muchos años en varios hospitales y
                        clínicas, el Dr. Mendoza se dio cuenta de la
                        necesidad de un centro de salud que pudiera proporcionar atención médica de alta calidad a las
                        personas menos privilegiadas de la sociedad.
                        Con el apoyo de su familia y amigos, el Dr. Mendoza comenzó a buscar un lugar adecuado para
                        establecer su clínica. espués de meses de búsqueda,
                        encontró un edificio antiguo en el corazón de la ciudad que era perfecto para su propósito.
                    </p>
                </div>
                <!-- Columna de imágenes -->
                <div class="col-md-6 container-about-imgs">
                    <div class="carousel-inner doc">
                        <div class="carousel-item active ">
                            <img src="/storage/img/personal1.png"alt="About Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="/storage/img/personal2.png"alt="About Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="/storage/img/persona3.png"alt="About Image 3">
                        </div>
                        <div class="carousel-item">
                            <img src="/storage/img/personal4.png"alt="About Image 4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Doctors Carousel -->
    <section class="container mt-4">
        <h2 class="text-center font-bold text-2xl mb-4">Nuestros Doctores</h2>
        <div id="carouselDoctors" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="content-doc">
                        <div class="shadow div-doc">
                            <img src="storage/img/JorgeE.png" alt="Doctor 1">
                            <div>
                                <h3 class="mt-2 font-bold">Jorge Esteban Fernández García</h3>
                                <p><strong>Especialidad:</strong> Ortodoncia y ortopedia maxilar</p>
                                <p><strong>Universidad:</strong> Universidad de Costa Rica</p>
                            </div>
                        </div>
                        <div class="shadow div-doc">
                            <img src="storage/img/Oscar.png" alt="Doctor 2">
                            <div>
                                <h3 class="mt-2 font-bold">Oscar Rodríguez Chaves</h3>
                                <p><strong>Especialidad:</strong> Cirugía, implantes y estética dental.</p>
                                <p><strong>Universidad:</strong> Universidad Latina de costa rica.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content-doc">
                        <div class="shadow div-doc">
                            <img src="storage/img/JorgeA.png" alt="Doctor 3">
                            <div>
                                <h3 class="mt-2 font-bold">Jorge Arturo Fernández Montero</h3>
                                <p><strong>Especialidad:</strong> Odontólogo General</p>
                                <p><strong>Universidad:</strong> Universidad de buenos aires, UBA.</p>
                            </div>
                        </div>
                        <div class="shadow div-doc">
                            <img src="storage/img/Oscar.png" alt="Doctor 4">
                            <div>
                                <h3 class="mt-2 font-bold">Ana Elena Matarrita</h3>
                                <p><strong>Especialidad:</strong> Periodoncia</p>
                                <p><strong>Universidad:</strong> Universidad Latina de costa rica.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDoctors"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDoctors"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Google Maps -->
    <section class="container mt-4">
        <h2 class="text-center font-bold text-2xl mb-4">Ubicación</h2>
        <div class="row justify-content-center">
            <div class="col-md-5 d-flex flex-column align-items-center contenedor-maps mb-4 me-md-4">
                <img src="storage/img/local_liberia.jpg" alt="Sucursal Liberia" class="map-img mb-4">
                <div class="text-center mb-4">
                    <h5>Sucursal Liberia</h5>
                    <p>Ubicación: Liberia, frente al hospital San Rafael Arcángel.</p>
                </div>
                <div class="icons-ubicacion d-flex">
                    <a class="bi bi-geo-alt-fill"
                        href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4896.582507411296!2d-85.43860812410992!3d10.629827061878943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f75632fe415426b%3A0xeaf2cf057c6f42c6!2sD%C3%A9ntico%20Odontolog%C3%ADa%20Top!5e1!3m2!1ses-419!2scr!4v1718513895154!5m2!1ses-419!2scr"
                        target="_blank">Google Maps</a>
                    <a class="bi bi-geo-alt-fill ms-3"
                        href="https://www.waze.com/en/live-map/directions/dentico-odontologia-top-c-3-liberia,-guanacaste?place=w.179961962.1799357479.23535850"
                        target="_blank">Waze</a>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-column align-items-center contenedor-maps mb-4">
                <img src="storage/img/local_flamingo.jpg" alt="Sucursal Flamingo" class="map-img mb-4">
                <div class="text-center mb-4">
                    <h5>Sucursal Flamingo</h5>
                    <p>Ubicación: Playa Flamingo, centro comercial La Plaza, Local B4.</p>
                </div>
                <div class="icons-ubicacion d-flex">
                    <a class="bi bi-geo-alt-fill"
                        href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1527.9788592792138!2d-85.7908774!3d10.439520799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9e2573848c031b%3A0x83debc4fd3a61cbf!2sDentico%20Flamingo!5e1!3m2!1ses-419!2scr!4v1718513819194!5m2!1ses-419!2scr"
                        target="_blank">Google Maps</a>
                    <a class="bi bi-geo-alt-fill ms-3"
                        href="https://www.waze.com/en/live-map/directions/cr/provincia-de-guanacaste/playa-flamingo/dentico-flamingo?place=ChIJGwOMhHMlno8Rvxym00-83oM"
                        target="_blank">Waze</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form -->
    <section id="contact" class="py-5 form-contac align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="h4 font-weight-bold text-center">Contáctenos</h2>
                    <p class="text-muted text-center">
                        Póngase en contacto con nosotros para programar una cita o obtener más información sobre
                        nuestros servicios.
                    </p>
                    <form class="bg-white shadow p-4 form-Contacto text-start">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name"
                                placeholder="Ingrese su nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="Ingrese su email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="tel" class="form-control" id="phone"
                                placeholder="Ingrese su teléfono">
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Ingrese su mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

     <!-- Footer -->
     <footer class="div-footer text-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled d-flex justify-content-around mb-0">
                        <li class="mb-2">
                            <a href="https://www.facebook.com/denticoodontologiatop/" class="text-white d-block">
                                <i class="bi bi-facebook"></i> Facebook
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://www.instagram.com/dentico_odontologia_top/" class="text-white d-block">
                                <i class="bi bi-instagram"></i> Instagram
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://api.whatsapp.com/send?phone=50685995010" class="text-white d-block">
                                <i class="bi bi-whatsapp"></i> Whatsapp
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('/js/main.js') }}"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- jQuery (required for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>