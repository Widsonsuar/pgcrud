<?php
# Salir si el parámetro "id" no está presente en la URL
if (!isset($_GET["id"])) {
    exit("El parámetro 'id' no está presente en la URL");
}

# Si todo va bien, se ejecuta esta parte del código...

include_once "conexion.php";
$empleadoid = $_GET["id"];

/*
Al incluir el archivo "conexion.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código.
 */

$sentencia = $base_de_datos->prepare("DELETE FROM empleados WHERE empleadoid = ?");
$resultado = $sentencia->execute([$empleadoid]);

# execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
# Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
    header("Location: listar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
?>
