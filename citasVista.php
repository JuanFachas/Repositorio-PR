<?php
require_once "Controlador/controladorCitas.php";
$controlador = new ControladorCitas();
$citas = $controlador->listarCitas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Citas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Gestión de Citas</h1>
        <form action="controladorCitas.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="accion" value="crear">
            <div class="form-group">
                <label for="cliente">Cliente</label>
                <input type="text" name="cliente" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen/Video</label>
                <input type="file" name="imagen" class="form-control">
            </div>
            <div class="form-group">
                <label for="contacto">Contacto</label>
                <input type="text" name="contacto" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fecha_hora">Hora/Fecha</label>
                <input type="datetime-local" name="fecha_hora" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tipo">Revisión/Mantenimiento/Ambos</label>
                <input type="text" name="tipo" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Cita</button>
        </form>

        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Descripción</th>
                    <th>Imagen/Video</th>
                    <th>Contacto</th>
                    <th>Hora/Fecha</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($citas as $cita): ?>
                    <tr>
                        <td><?php echo $cita['id']; ?></td>
                        <td><?php echo $cita['cliente']; ?></td>
                        <td><?php echo $cita['descripcion']; ?></td>
                        <td><?php echo $cita['imagen']; ?></td>
                        <td><?php echo $cita['contacto']; ?></td>
                        <td><?php echo $cita['fecha_hora']; ?></td>
                        <td><?php echo $cita['tipo']; ?></td>
                        <td>
                            <form action="controladorCitas.php" method="POST" style="display:inline-block;">
                                <input type="hidden" name="accion" value="eliminar">
                                <input type="hidden" name="id" value="<?php echo $cita['id']; ?>">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
