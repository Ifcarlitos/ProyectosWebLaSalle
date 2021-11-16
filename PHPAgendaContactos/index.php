<!DOCTYPE html>
<?php include 'conexion.php'?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda de contactos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php';?>
            <div class="jumbotron">
                <h1 class="display-4">Agenda de contactos</h1>
                <p class="lead">Agenda realizada para la actividad 6 de proyectos web, creada por Jaume, Josep y Carlos</p>
                <hr class="my-4">
            </div>
        </div>
        <br>
        <table class="table">
            <tr>
                <td scope="col">id</td>
                <td scope="col">nombre</td>
                <td scope="col">apellidos</td>
                <td scope="col">telefono</td>
                <td scope="col">email</td>
                <td scope="col">comentario</td>
            </tr>
            <?php 
               $sql='SELECT * FROM contactoagenda';
               $datos = mysqli_query($conexion, $sql);
               while($mostrar = mysqli_fetch_array($datos)){
            ?>
            <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellidos'] ?></td>
                <td><?php echo $mostrar['telefono'] ?></td>
                <td><?php echo $mostrar['email'] ?></td>
                <td><?php echo $mostrar['comentario'] ?></td>
            </tr>
            <?php 
               }
            ?>
        </table>
    </body>
</html>