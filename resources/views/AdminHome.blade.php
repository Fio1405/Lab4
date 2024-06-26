<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <link rel="icon" href="storage/img/log2.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
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
                            <li><a class="dropdown-item" href="{{ route('AdminHome') }}">Administración</a></li>
                        @endauth
                    </ul>
                </div>
                <!-- End Login Dropdown -->
            </div>
            <!-- End Menu -->
        </div>
    </nav>
    <div class="d-flex flex-grow-1">
        <nav class="bg-secondary text-light p-3" style="width: 220px;">
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light d-flex align-items-center"
                        onclick="showSection('pacientes')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>

                        </svg>
                        Pacientes
                    </a>
                </li>
                <!-- Rest of your nav items -->
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light d-flex align-items-center"
                        onclick="showSection('pacientes')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2">
                            <path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9
                                3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18">
                            </path>

                        </svg>
                        Citas
                    </a>
                </li>
                <!-- Rest of your nav items -->
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light d-flex align-items-center"
                        onclick="showSection('pacientes')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" x2="9.01" y1="9" y2="9"></line>
                            <line x1="15" x2="15.01" y1="9" y2="9"></line>

                        </svg>
                        Tratamientos
                    </a>
                </li>
                <!-- Rest of your nav items -->
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light d-flex align-items-center"
                        onclick="showSection('pacientes')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" x2="9.01" y1="9" y2="9"></line>
                            <line x1="15" x2="15.01" y1="9" y2="9"></line>
                        </svg>
                        Piezas Dentales
                    </a>
                </li>
                <!-- Rest of your nav items -->
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light d-flex align-items-center"
                        onclick="showSection('pacientes')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2">
                            <path d="M12 6v4"></path>
                            <path d="M14 14h-4"></path>
                            <path d="M14 18h-4"></path>
                            <path d="M14 8h-4"></path>
                            <path d="M18 12h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path>
                            <path d="M18 22V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v18"></path>

                        </svg>
                        Enfermedades
                    </a>
                </li>
                <!-- Rest of your nav items -->
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light d-flex align-items-center"
                        onclick="showSection('pacientes')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2">
                            <path d="m8 2 1.88 1.88"></path>
                            <path d="M14.12 3.88 16 2"></path>
                            <path d="M9 7.13v-1a3.003 3.003 0 1 1 6 0v1"></path>
                            <path d="M12 20c-3.3 0-6-2.7-6-6v-3a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v3c0 3.3-2.7 6-6 6"></path>
                            <path d="M12 20v-9"></path>
                            <path d="M6.53 9C4.6 8.8 3 7.1 3 5"></path>
                            <path d="M6 13H2"></path>
                            <path d="M3 21c0-2.1 1.7-3.9 3.8-4"></path>
                            <path d="M20.97 5c0 2.1-1.6 3.8-3.5 4"></path>
                            <path d="M22 13h-4"></path>
                            <path d="M17.2 17c2.1.1 3.8 1.9 3.8 4"></path>
                        </svg>
                        Alergias
                    </a>
                </li>
                <!-- Rest of your nav items -->
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light d-flex align-items-center"
                        onclick="showSection('pacientes')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2">
                            <path d="M12 6v4"></path>
                            <path d="M14 14h-4"></path>
                            <path d="M14 18h-4"></path>
                            <path d="M14 8h-4"></path>
                            <path d="M18 12h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path>
                            <path d="M18 22V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v18"></path>
                        </svg>
                        Medicamentos
                    </a>
                </li>
                <!-- Rest of your nav items -->
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light d-flex align-items-center"
                        onclick="showSection('pacientes')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2">
                            <path d="M12 6v4"></path>
                            <path d="M14 14h-4"></path>
                            <path d="M14 18h-4"></path>
                            <path d="M14 8h-4"></path>
                            <path d="M18 12h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path>
                            <path d="M18 22V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v18"></path>
                        </svg>
                        Expedientes
                    </a>
                </li>
                <!-- Rest of your nav items -->
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light d-flex align-items-center"
                        onclick="showSection('pacientes')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" x2="9.01" y1="9" y2="9"></line>
                            <line x1="15" x2="15.01" y1="9" y2="9"></line>
                        </svg>
                        Empleados
                    </a>
                </li>
                <!-- Rest of your nav items -->
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light d-flex align-items-center"
                        onclick="showSection('pacientes')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" x2="9.01" y1="9" y2="9"></line>
                            <line x1="15" x2="15.01" y1="9" y2="9"></line>
                        </svg>
                        Sucursales
                    </a>
                </li>
                <!-- Rest of your nav items -->
            </ul>
        </nav>
        <div class="flex-grow-1 p-3">
            <div class="content-area" id="content-area">
                <!-- Aquí se cargará el contenido dinámico -->
            </div>
        </div>
    </div>
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
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- jQuery (required for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Java scrip-->
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
