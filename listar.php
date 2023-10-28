<?php
include_once "conexion.php";
$buscar = isset($_GET['buscar']) ? $_GET['buscar'] : '';
$sentencia = $base_de_datos->prepare("SELECT empleadoid, nombre, apellido, fecha_nac FROM empleados WHERE nombre LIKE :buscar OR apellido LIKE :buscar ORDER BY empleadoid");
$sentencia->bindParam(':buscar', $buscar, PDO::PARAM_STR);
$sentencia->execute();
$empleado = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listar Empleados</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlaza un archivo CSS externo -->
</head>

<body>
    <div class="container">
        <h1>Listar con arreglo</h1>
        <br>
        <div class="table-responsive">
            <table border="1" align="center" class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha Nacimiento</th>
                        <th style="width: 14%;">Editar</th>
                        <th style="width: 14%;">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($empleado as $emp){ ?>
                    <tr>
                        <td><?php echo $emp->empleadoid ?></td>
                        <td><?php echo $emp->nombre ?></td>
                        <td><?php echo $emp->apellido ?></td>
                        <td><?php echo $emp->fecha_nac ?></td>
                        <td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $emp->empleadoid ?>">Editar
                                📝</a></td>
                        <td><a class="btn btn-danger"
                                href="<?php echo "eliminar.php?id=" . $emp->empleadoid ?>">Eliminar 🗑️</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <!-- Botón para regresar a la página de inicio -->
        <div class="button-container">
            <form action="index.php" method="GET">
                <button type="submit" class="btn btn-primary">Regresar</button>
            </form>
        </div>
    </div>
</body>

</html>
