<?php
require 'conexion.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar contactos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php';?>
        </div>
        <div class="container">
            <?php require_once 'menu.php';?>
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
            if($_GET['busqueda']<>''){
                if(isset($_GET['enviar'])){
                    $busqueda = $_GET['busqueda'];
                    $consulta = "DELETE FROM contactoagenda WHERE id='$busqueda'";
                    if(mysqli_query($conexion, $consulta)){
                        echo 'Contacto '.$busqueda.' eliminad';
                    }else{  echo 'Error';
            }
                }
            }else{echo 'Indica contacto a eliminar';}
        ?>
    </body>
</html>

