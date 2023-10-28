<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Empleado</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlaza un archivo CSS externo -->
</head>
<body>
    <div class="container">
        <h1 class="page-title">AGREGAR</h1>
        <div class="row">
            <div class="col-12">
                <form action="insertar.php" method="POST">
                    <div class="form-group">
                        <label for="nombre" class="form-label">NOMBRE</label>
                        <input required name="nombre" type="text" id="nombre" placeholder="Nombre" class="form-control small-input">
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="form-label">APELLIDO</label>
                        <input required name="apellido" type="text" id="apellido" placeholder="Apellido" class="form-control small-input">
                    </div>
                    <div class="form-group">
                        <label for="fecha" class="form-label">Fecha de Nacimiento</label>
                        <input required name="fecha" type="date" id="fecha" placeholder="Fecha nacimiento" class="form-control small-input">
                    </div>
                    <button type="submit" class="btn btn-success">GUARDAR</button>
                    <a href="index.php" class="btn btn-cancel">CANCELAR</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
