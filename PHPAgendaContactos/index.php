<!DOCTYPE html>
<?php 
    include 'conexion.php';
?>
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
            <?php 
            buscar(true,'',0);
            ?>
    </body>
</html>