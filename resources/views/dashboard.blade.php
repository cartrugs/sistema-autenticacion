<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Dashboard') }}</title>
    @vite('resources/css/app.css') <!-- Incluye el CSS de Bootstrap -->
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Barra de Navegación Lateral -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('maquinaria') }}">
                                Maquinaria
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('terrenos') }}">
                                Terrenos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('acciones') }}">
                                Acciones
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido Principal -->
            <main class="col-md-9 col-lg-10">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">{{ __('Dashboard') }}</h1>
                </div>
                <div class="py-12 content">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="mt-8 text-2xl">
                                Bienvenido a la Aplicación de Gestión
                            </div>

                            <div class="mt-6 text-gray-500">
                                Utiliza el menú de navegación para gestionar maquinaria, parcelas y acciones.
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    @vite('resources/js/app.js') <!-- Incluye el JS de Bootstrap -->
</body>
</html>
