<?php
include_once "conexion.php";

// Verificar si se proporcionó un ID en la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Consultar la base de datos para obtener los datos del empleado con el ID proporcionado
    $sentencia = $base_de_datos->prepare("SELECT nombre, apellido, fecha_nac FROM empleados WHERE empleadoid = ?");
    $sentencia->execute([$id]);
    $empleado = $sentencia->fetch(PDO::FETCH_ASSOC);
    
    if (!$empleado) {
        // Si no se encontró el empleado, puedes manejar esto como desees, por ejemplo, redireccionar o mostrar un mensaje de error.
        echo "Empleado no encontrado";
    }
} else {
    // Si no se proporcionó un ID en la URL, puedes manejar esto como desees, por ejemplo, redireccionar o mostrar un mensaje de error.
    echo "ID de empleado no proporcionado";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Empleado</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlaza un archivo CSS externo -->
</head>

<body>
    <div class="container">
        <h1 class="page-title">EDITAR EMPLEADO</h1>
        <div class="row">
            <div class="col-12">
                <form action="actualizar.php" method="POST" class="edit-form">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Envia el ID como un campo oculto -->
                    <h2 class="page-title">Editar Empleado</h2>
                    <div class="form-group">
                        <label for="nombre" class="form-label">NOMBRE</label>
                        <input required name="nombre" type="text" id="nombre" value="<?php echo $empleado['nombre']; ?>"
                            class="form-control" style="width: 250px;">
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="form-label">APELLIDO</label>
                        <input required name="apellido" type="text" id="apellido"
                            value="<?php echo $empleado['apellido']; ?>" class="form-control" style="width: 250px;">
                    </div>
                    <div class="form-group">
                        <label for="fecha_nac" class="form-label">FECHA DE NACIMIENTO</label>
                        <input required name="fecha_nac" type="date" id="fecha_nac"
                            value="<?php echo $empleado['fecha_nac']; ?>" class="form-control" style="width: 250px;">
                    </div>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">ACTUALIZAR</button>
                        <a href="listar.php" class="btn btn-cancel">CANCELAR</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>