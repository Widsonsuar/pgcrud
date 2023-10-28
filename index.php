<!DOCTYPE html>
<html>
<head>
    <title>Menu Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        nav {
            background-color: #444;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #555;
        }

        .container {
            max-width: 1297px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            text-align: center;
        }

        p {
            font-size: 16px;
            text-align: center;
        }

        .footer {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .footer img {
            width: 1000px; /* Ajusta el tamaño de la imagen según tus necesidades */
        }
    </style>
</head>
<body>
    <header>
        <h1>Menu Principal</h1>
    </header>
    <nav>
        <ul>
            <li><a href="agregar.php">Agregar un Empleado</a></li>
            <li><a href="listar.php">Empleados</a></li>
            <li><a href="proveedores.php">Proveedores</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Bienvenido al Menu Principal</h1>
        <p>Seleccione una opcion del menu.</p>
    </div>
    <ul>
    </ul>
    <div class="footer">
        <img src="empleados.png" alt="foto">
    </div>
</body>