<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistema de Gestión')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Sistema CRUD</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('producto.index') }}">Productos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('estudiante.index') }}">Estudiantes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('empleado.index') }}">Empleados</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cliente.index') }}">Clientes</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- Contenido de cada vista -->
    <div class="container py-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
