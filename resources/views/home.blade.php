<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Sistema de Gestión</title>

    <!-- Estilos simples -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1f2937;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .menu a {
            text-decoration: none;
            padding: 15px;
            background-color: #2563eb;
            color: white;
            text-align: center;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .menu a:hover {
            background-color: #1e40af;
        }
    </style>

</head>
<body>

    <header>
        <h1>Sistema de Gestión</h1>
    </header>

    <div class="container">
        <h2>Bienvenido</h2>
        <p>Selecciona uno de los módulos para comenzar:</p>

        <div class="menu">

            <a href="{{ route('producto.index') }}">
                Gestión de Productos
            </a>

            <a href="{{ route('estudiante.index') }}">
                Gestión de Estudiantes
            </a>

            <a href="{{ route('empleado.index') }}">
                Gestión de Empleados
            </a>

            <a href="{{ route('cliente.index') }}">
                Gestión de Clientes
            </a>

        </div>
    </div>

</body>
</html>
