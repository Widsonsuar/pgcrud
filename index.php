<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Empleados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        /* Estilos para el contenedor principal */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilos para el contenedor de botones */
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Estilos para los botones */
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
            margin: 10px;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-success {
            background-color: #28a745;
        }
    </style>
</head>
<body>
    <h1>Gestión de Empleados</h1>

    <!-- Contenedor principal -->
    <div class="container">
        <!-- Columna izquierda para el botón "Insertar Empleado" -->
        <div class="button-container">
            <!-- Botón para redireccionar a la página de inserción -->
            <form action="agregar.php" method="GET">
                <button type="submit" class="btn btn-primary">Insertar Empleado</button>
            </form>
        </div>

        <!-- Columna derecha para el botón "Listar Empleados" -->
        <div class="button-container">
            <!-- Botón para redireccionar a la página de listado -->
            <form action="listar.php" method="GET">
                <button type="submit" class="btn btn-success">Listar Empleados</button>
            </form>
        </div>
    </div>
</body>
</html>
