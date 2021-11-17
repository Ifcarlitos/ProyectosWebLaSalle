<?php
require 'conexion.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Busqueda de contactos</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php';?>
            <div class="jumbotron">
                <h1 class="display-4">Agenda de contactos</h1>
                <p class="lead">Buscar un contacto por nombre o por telefono</p>
                <hr class="my-4">
            </div>
        </div>
        <br>
        <form action="" method="get">
            <div class="mb-3">
                <label class="form-label">Nombre/telefono del contacto:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="busqueda" placeholder="Buscar" >
            </div>
            <select class="form-select" aria-label="Default select example" name="select">
                    <option value="1">Nombre</option>
                    <option value="2">Telefono</option>
            </select>
            <br>
            <button type="submit" name="enviar" class="btn btn-primary">Buscar</button>
        </form>
        <br><br>
        <?php 
            if(isset($_GET['enviar'])){
                buscar(false,$_GET['busqueda'],$_GET['select']);
            }
        ?>
    </body>
</html>
