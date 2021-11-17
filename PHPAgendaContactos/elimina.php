<?php
include 'conexion.php';
$conexion = conexion();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar contactos</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php'; ?>
        </div>
        <div class="jumbotron">
            <h1 class="display-4">Agenda de contactos</h1>
            <p class="lead">Eliminar un contacto por su id</p>
            <hr class="my-4">
        </div>
    </div>
    <br>
    <form action="" method="get">
        <div class="mb-3">
            <label class="form-label">ID del contacto a eliminar:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="busqueda" placeholder="Buscar" >
        </div>
        <button type="submit" name="enviar" class="btn btn-primary">Buscar</button>
    </form>
    <br><br>

    <?php
    if ($_GET['busqueda'] <> '') {
        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];
            eliminarUsuario($busqueda);
        }
    } else {
        echo 'Indica contacto a eliminar';
    }
    ?>
</body>
</html>

