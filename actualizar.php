<?php
include_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados desde el formulario
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fecha_nac = $_POST["fecha_nac"];

    // Actualizar los datos del empleado en la base de datos
    $sentencia = $base_de_datos->prepare("UPDATE empleados SET nombre = ?, apellido = ?, fecha_nac = ? WHERE empleadoid = ?");
    $resultado = $sentencia->execute([$nombre, $apellido, $fecha_nac, $id]);

    if ($resultado === true) {
        // Redirigir a la página de listado de empleados después de la actualización
        header("Location: listar.php");
    } else {
        // Manejar el error de actualización, por ejemplo, mostrar un mensaje de error
        echo "Error al actualizar el empleado";
    }
} else {
    // Si se accede a este archivo sin enviar datos a través del formulario, puedes manejarlo como desees, por ejemplo, redireccionar o mostrar un mensaje de error.
    echo "Acceso no autorizado";
}
?>
